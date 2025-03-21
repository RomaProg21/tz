<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
class Task extends Model
{
    use HasFactory;
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s', 
        'updated_at' => 'datetime:Y-m-d H:i:s'
    ];

    public function creator_id(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }
    public function executor_id(): BelongsTo
    {
        return $this->belongsTo(User::class, 'executor_id');
    }
}
