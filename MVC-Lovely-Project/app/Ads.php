<?php

namespace App;

use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class Ads extends Model
{
    use HasSoftDelete;
    protected $table = 'ads';
    protected $fillable = ['title', 'description', 'address', 'amount', 'image', 'parking', 'tag', 'status', 'user_id', 'cat_id', 'sell_status', 'type', 'view'];
    protected $deletedAt = 'deleted_at';


    public function galleries()
    {
        return $this->hasMany('\App\Gallery', 'advertise_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('\App\User', 'user_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo('\App\Category', 'cat_id', 'id');
    }

    public function sellStatus()
    {
        return ($this->sell_status === 0) ? 'free' : 'cash';
    }

    public function type()
    {
        switch ($this->type) {
            case 0:
                return 'بناء';
            case 1:
                return 'متحف';
            case 2:
                return 'منتزه';
            case 3:
                return 'عيادة';
        }
    }
}