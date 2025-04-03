<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Carbon\Carbon;

class NotificationsLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_id',
        'creator_id',
        'executor_id',
        'area',
        'text',
        'trigger_type',
        'recipients',
        'checked',
        'recipient'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s', 
    ];
    const UPDATED_AT = null;


    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function executor()
    {
        return $this->belongsTo(User::class, 'executor_id');
    }
    public function getTimeSinceCreationAttribute()
    {
        $now = Carbon::now();
        $diff = $now->diffInSeconds($this->created_at);

        if ($diff < 60) {
            return 'меньше минуты';
        } elseif ($diff < 3600) {
            $minutes = floor($diff / 60);
            return $minutes . ' мин. назад';
        } elseif ($diff < 86400) {
            $hours = floor($diff / 3600);
            return $hours . ' ч. назад';
        } else {
            $days = floor($diff / 86400);
            return $days . ' д. назад';
        }
    }
}
