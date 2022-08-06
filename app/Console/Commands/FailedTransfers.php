<?php

namespace App\Console\Commands;

use App\Models\Transfer;
use Carbon\Carbon;
use Illuminate\Console\Command;

class FailedTransfers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'failed:transfers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Marked pending transfers as failed';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $pendingTransfers = Transfer::where('created_at', '<', Carbon::now()->subDay())->where('status', Transfer::STATUS_PENDING)->get();

        if(isset($pendingTransfers) && $pendingTransfers->isNotEmpty()) {
            foreach($pendingTransfers as $pt) {
                $transfer = Transfer::find($pt->id);
                $transfer->status = Transfer::STATUS_FAILED;
                $transfer->save();
            }
        }

        return true;
    }
}
