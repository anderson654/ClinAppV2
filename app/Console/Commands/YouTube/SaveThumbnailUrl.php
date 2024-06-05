<?php

namespace App\Console\Commands\YouTube;

use App\Models\Training;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class SaveThumbnailUrl extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'saveTumb:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $trainings = Training::get();
        foreach ($trainings as $key => $obj) {
            # code...
            if(isset($obj->video_id)){
                $obj->thumbnail_url = Http::get('https://www.youtube.com/oembed?url=https://www.youtube.com/watch?v='.$obj->video_id.'&format=json')['thumbnail_url'] ?? null;
                $obj->save();
            }
        }
       dd("finalizado");
    }
}
