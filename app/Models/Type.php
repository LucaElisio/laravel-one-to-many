<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    
    // Projects è scritto al plurale perchè il type può appartenere a più progetti
    public function projects() {
        return $this->hasMany(Project::class);
    }
}
