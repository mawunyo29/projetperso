<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basketitem extends Model
{
    use HasFactory;

    public function account(){

        return $this->belongsTo(Account::class);
    }

    public function article(){

        return $this->belongsTo(Article::class);
    }
    
}
