<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = 'employees';
  protected $primaryKey = 'id';
  protected $fillable = [
      'id', 'user_image', 'name','email','mobile','password','state','dob','gender'
  ];
}
