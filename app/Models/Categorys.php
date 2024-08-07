<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [ 'id', 'username', 'lastname', 'age', 'created_at', 'updated_at' ];
}
