<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    protected $primaryKey = 'id_client';

    protected $fillable = [
        'nik',
        'nama',
        'no_hp',
        'email',
        'va',
        'nama_ibu_kandung',
        'alamat',
        'faskes_pertama',
        'kelas',
    ];
}
