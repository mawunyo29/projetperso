<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public function organisation(){

        return $this->belongsTo(Organisation::class);
    }

    public function getNameAttribute(){

        return $this->name.' '.$this->last_name;
    }
}
