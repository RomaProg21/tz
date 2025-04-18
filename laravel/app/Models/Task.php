<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use Carbon\Carbon;
use App\Constants\StatusConstants;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'creator_id',
        'executor_id',
        'area',
        'status',
        'in_work_start_time',
        'end_work_date'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
        'in_work_start_time' => 'datetime',
        'end_work_date' => 'datetime'

    ];

    public function creator_id(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }
    public function executor_id(): BelongsTo
    {
        return $this->belongsTo(User::class, 'executor_id');
    }
    public function setInWork()
    {
        if ($this->status !== StatusConstants::IN_WORK) {
            $this->status = StatusConstants::IN_WORK;
            $this->in_work_start_time = now();
            $this->save();
        }
    }
    public function getTimeInWork(): ?string
    {
        if ($this->in_work_start_time) {
            if ($this->status === StatusConstants::IN_WORK) {
                return $this->in_work_start_time->diff(now())->format('%d дней, %h часов, %i минут, %s секунд');
            } elseif ($this->end_work_date) {
                return $this->in_work_start_time->diff($this->end_work_date)->format('%d дней, %h часов, %i минут, %s секунд');
            }
        }
        return null;
    }
}
