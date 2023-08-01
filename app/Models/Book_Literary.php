<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_Literary extends Model
{
    use HasFactory;
    
    public $timestamps = true;
    protected $fillable =['literary_genres_id', 'book_id'];

    public function literary_genres()
    {
        return $this->belongsTo(Literary_Genre::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}

