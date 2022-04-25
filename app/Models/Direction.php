<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
  use HasFactory;

  protected $guarded = [];

  public function drugs()
  {
    return $this->hasMany(Drug::class, 'direction_id');
  }
}
