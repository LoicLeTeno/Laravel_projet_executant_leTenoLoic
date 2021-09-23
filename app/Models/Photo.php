<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'src',
        'category_id'
    ];

    public function categories() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
