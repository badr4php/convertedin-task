<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\TaskCreated;
use App\Models\Statistic;

class UpdateTaskStatistics implements ShouldQueue
{

    /**
     * Handle the event.
     *
     * @param  \App\Events\TaskCreated  $event
     * @return void
     */
    public function handle(TaskCreated $event)
    {
        $statistic = Statistic::firstOrNew([
            'user_id' => $event->task->assigned_to_id
        ]);
        ++$statistic->tasks;
        $statistic->save();
    }
}
