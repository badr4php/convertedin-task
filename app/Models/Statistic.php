<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'tasks',
    ];

    /**
     * Get the user of this task.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
