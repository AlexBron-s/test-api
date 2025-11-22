<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'descriptions',
        'text',
        'user_id',
    ];

    protected $hidden = [
        'text',
        'user_id',
        'created_at',
        'updated_at',
    ];

    /**
     * Получить пользователя, создавшего пост.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
