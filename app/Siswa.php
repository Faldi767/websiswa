<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siswa extends Model
{
    use SoftDeletes;
    protected $table = "siswa";
    protected $dates = ['deleted_at'];

    protected $fillable = ['nama', 'alamat'];

    public function role() {
        return $this->belongsToMany('App\Role');
    }
}
