<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;


class Article extends Model
{
    use HasFactory;
    use Searchable;
    

    protected $fillable = [
        'title',
        'description',
        'body',
        'img',
        'user_id',
        'category_id'
    ];


    public function user(){

        return $this->belongsTo(User::class);
    }

    public function category(){

        return $this->belongsTo(Category::class);
    }

    public function toSearchbleArray()
    {
        $category = $this->category;
        $array = 
        [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'category' => $category,
        ];
        return $array;
    }
}
