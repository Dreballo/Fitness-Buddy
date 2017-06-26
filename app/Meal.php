<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable = ['name'];

    public function user() {
        return $this->belongsTo(User::class);

    }

    public function foods(){
        return $this->hasMany(Food::class);
    }
}
