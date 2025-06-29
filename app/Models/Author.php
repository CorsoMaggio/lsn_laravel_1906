<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{

  protected $fillable = ['name', 'dob'];
  protected $casts = [
    'dob' => 'datetime'
  ];
  public function books()
  {
    return $this->hasMany(book::class);
  }
}
