<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    // Set nama table
    protected $table = 'jabatan';
    protected $primaryKey = 'id_jabatan';
    protected $fillable = ['nama_jabatan', 'keterangan'];

    public function pegawai()
    {
        return $this->hasMany('App\Pegawai', 'id_jabatan');
    }
}
