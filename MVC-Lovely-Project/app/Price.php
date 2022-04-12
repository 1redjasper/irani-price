<?php

namespace App;

use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class Price extends Model
{
    use HasSoftDelete;
    protected $table = 'price';
    protected $fillable = ['title', 'description', 'amount', 'dollar_amount', 'image', 'tag', 'status', 'user_id', 'cat_id', 'sell_status', 'type', 'view'];
    protected $deletedAt = 'deleted_at';


    public function pictures()
    {
        return $this->hasMany('\App\Picture', 'object_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('\App\User', 'user_id', 'id');
    }

    // public function category()
    // {
    //     return $this->belongsTo('\App\Category', 'cat_id', 'id');
    // }

    public function sellStatus()
    {
        return ($this->sell_status === 0) ? 'غير موجود' : 'موجود';
    }

    public function type()
    {
        switch ($this->type) {
            case 0:
                return 'الاكل والشرب';
            case 1:
                return 'الأزياء والملابس';
            case 2:
                return 'الأغراض المنزلية';
            case 3:
                return 'الجمال والصحة';
        }
    }
}