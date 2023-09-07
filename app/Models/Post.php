<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;
    // protected $fillable = ['title', 'excerpt', 'article'];
    protected $guarded = ['id'];

    protected $with = ['category', 'user'];

    public function scopeSearch($query, $search)
    {
        $query->when($search ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                         ->orWhere('article', 'like', '%' . $search . '%');
        });
    }

    public function scopeCategory($query, $category)
    {
        $query->when($category ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                   $query->where('slug', $category);
            });
        });
    }

    public function scopeAuthor($query, $author)
    {
        $query->when($author ?? false, fn($query, $author) =>
            $query->whereHas('user', fn($query) => 
            $query->where('user_name', $author))
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}