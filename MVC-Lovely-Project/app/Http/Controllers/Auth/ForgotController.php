<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\ForgotRequest;
use App\Http\Services\MailService;
use App\User;
use System\Session\Session;

class ForgotController
{

    private $redirectTo = '/home';

    public function view()
    {
        return view('auth.forgot');
    }

    public function forgot()
    {
        if (Session::get('forgot.time') != false && Session::get('forgot.time') > time()) {
            error('forgot', 'please wait 2 min and try again');
            return back();
        } else {
            Session::set('forgot.time', time() + 120);

            $request = new ForgotRequest();
            $inputs = $request->all();
            $user = User::where('email', $inputs['email'])->get();
            if (empty($user)) {
                error('forgot', 'المستخدم لا يوجد');
                return back();
            }
            $user = $user[0];
            $user->remember_token = generateToken();
            $user->remember_token_expire = date("Y-m-d H:i:s", strtotime(' + 10 min'));
            $user->save();
            $message = '
            <h2> بريد إلكتروني لاستعادة كلمة مرور</h2>
            <p>مستخدم الغالي، اضغط على الرابط أدناه لاستعادة كلمة المرور الخاصة بك</p>
            <p style="text-align: center">
                <a href="' . route('auth.reset-password.view', [$user->remember_token]) . '">تغيير كلمة المرور</a>
            </p> 
            ';
            $mailService = new MailService();
            $mailService->send($inputs['email'], 'بريد إلكتروني لاستعادة كلمة مرور', $message);
            flash('forgot', 'تم إرسال البريد الإلكتروني المخصص للطوارئ');
            return redirect($this->redirectTo);
        }
    }
}