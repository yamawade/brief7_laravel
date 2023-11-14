<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function Laravel\Prompts\note;

class Eleve extends Model
{
    use HasFactory;
    public function notes(){
        return $this->hasMany(Note::class) ;
    }
    
}
