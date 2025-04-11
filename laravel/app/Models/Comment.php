<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'task_id',
        'user_id',
        'text'
    ];

    const UPDATED_AT = null;

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s', 
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
