<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tests1 extends Model
{
    use HasFactory;
    protected $table = 'test1';
    protected $fillable = array('name', 'description');
}
