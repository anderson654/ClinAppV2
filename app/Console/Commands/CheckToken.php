<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CheckToken extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:Token';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
        // hash_hmac('sha256', $user->password, $user->created_at);
        dd(hash_hmac('sha256', '$2y$10$kUPvcqKLzXoKp5/ZEC9Tk.wqph8hN6TJkHM8zS6PJzDZEdG1wzjti', '2023-03-10 10:10:09'));
        return Command::SUCCESS;
    }
}
