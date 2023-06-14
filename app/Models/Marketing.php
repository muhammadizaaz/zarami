<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketing extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'total_item', 'status_id'];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
