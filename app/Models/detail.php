<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $fillable = ['name','qty','asal','dest','duration','transport','hotel'];
}
