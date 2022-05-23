<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prop extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'hormone',
        'soil_type'
    ];

    protected $hidden = [];

    protected $casts = [];

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
}
