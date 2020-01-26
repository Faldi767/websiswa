<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;
    protected $table = "role";
    protected $dates = ['deleted_at'];

    public function siswa() {
        return $this->hasMany('App\Siswa');
    }
}
