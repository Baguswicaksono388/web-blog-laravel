<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'slug', 'excerpt', 'body']; //fields mana saja yang boleh diisi
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('title', 'like', '%' . $filters['search']  . '%')
        //         ->orWhere('body', 'like', '%' . $filters['search']  . '%');
        // }

        $query->when($filters['search'] ?? false, function ($query, $search) { //null coalescing untuk mempersingkat ternery
            return $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search  . '%')
                    ->orWhere('body', 'like', '%' . $search  . '%');
            });
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });
    }

    public function  category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id'); //ini alias dari author
    }

    // merubah pencarian dari defaultnya id, diubah menjadi slug
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
