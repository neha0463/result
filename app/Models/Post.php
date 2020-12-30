<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model

{

    use HasFactory;                                                           
    protected $fillable = ["name","contact","math","sst","sci","eng","hindi"];

}
