<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    protected $visible = ['title', 'author_id', 'amount', 'cover'];
    protected $fillable = ['title', 'author_id', 'amount', 'cover'];
    public $timestamps = true;

    public function author()
    {
        //data dari model "Book" bisa dimiliki oleh model "Author"
        //melalui fk "author_id"
        return $this->belongsTo('App\Models\Author', 'author_id');
    }
    public function cover()
    {
        if ($this->cover && file_exists(public_path('images/larapus/' . $this->cover))) {
            return asset('images/larapus/' . $this->cover);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteCover()
    {
        if ($this->cover && file_exists(public_path('images/larapus/' . $this->cover))) {
            return unlink(public_path('images/larapus/' . $this->cover));
        }

    }
}