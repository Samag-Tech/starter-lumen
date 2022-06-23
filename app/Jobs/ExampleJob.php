<?php

namespace App\Jobs;

use Illuminate\Support\Facades\Log;

class ExampleJob extends Job
{

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->onQueue('test-queue-2');
        $this->onQueue('test-queue');
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Log::alert('ciao');
    }
}
