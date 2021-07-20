<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

    public function getCommentsNumber()
    {
        return $this->comments()->count();
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('illustrations')
            ->useFallbackUrl('/images/no-training-cover.png')
            ->useFallbackPath(public_path('/images/no-training-cover.png'))
            ->singleFile();
    }
}
