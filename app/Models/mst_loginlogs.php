<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mst_loginlogs extends Model
{
    use HasFactory;
    protected $table = 'mst_loginlogs';
    protected $fillable = ['role', 'email', 'ipaddress', 'Idate', 'attempt', 'duration'];

}
