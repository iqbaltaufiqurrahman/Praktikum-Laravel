<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function courts() 
    {
        return $this->belongsTo(Courts::class, 'court_id');
    }
}
