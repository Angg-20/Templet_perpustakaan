<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    protected $primaryKey = 'kode_kelas';

    protected $guarded = [];

    public $incrementing = false;
}
