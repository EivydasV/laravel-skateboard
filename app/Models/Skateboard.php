<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skateboard extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'color',
        'width',
        'length',
        'img',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(Skateboard::class, 'foreign_key', 'owner_key');
    }
}
