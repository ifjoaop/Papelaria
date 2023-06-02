<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = [
        'nome',
        'slug',
        'descricao',
        'status',
        'popular',
        'meta_title',
        'meta_descrip',
        'meta_keywords',
    ];
}
