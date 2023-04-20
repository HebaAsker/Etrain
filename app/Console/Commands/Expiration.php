<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class Expiration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:expiration';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'expire user every month';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $users= User::where('expire','active')->get();
        foreach($users as $user)
        {
            $user->updated(['expire'=>'expired']);
        }
    }
}
