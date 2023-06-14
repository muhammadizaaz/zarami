<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'quantity', 'status_id'];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
