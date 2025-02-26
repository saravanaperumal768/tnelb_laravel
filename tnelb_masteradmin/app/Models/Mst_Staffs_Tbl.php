<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Mst_Staffs_Tbl extends Authenticatable
{
    use HasFactory;
    protected $table = 'mst__staffs__tbls';
    protected $fillable = ['name', 'email', 'password', 'roles_id'];

    protected $hidden = [
        'password',
    ];

    public function role() {
        return $this->belongsTo(Mst_Roles::class);
    }
}
