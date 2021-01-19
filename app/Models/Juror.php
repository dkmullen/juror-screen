<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juror extends Model
{
    use HasFactory;
    // protected $fillable = ['ID', 'LAST_NAME'];
  
    public function path() {
      return route('jurors');
    }
  
}
