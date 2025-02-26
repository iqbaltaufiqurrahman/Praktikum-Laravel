<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courts extends Model
{
    public function type()
    {
        return $this->belongsTo(CourtType::class, 'court_type_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transactions::class);
    }
}
