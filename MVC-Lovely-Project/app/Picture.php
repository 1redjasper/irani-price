<?php

namespace App;

use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class Picture extends Model
{
    use HasSoftDelete;
    protected $table = "pictures";
    protected $fillable = ['image', 'object_id'];
    protected $deletedAt = 'deleted_at';
}