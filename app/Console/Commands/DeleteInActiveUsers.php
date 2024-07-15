<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class DeleteInActiveUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'DeleteInActiveUsers:deleteusers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete inactive users';

    /**
     * Execute the console command.
     */
    
     public function construct()
     {
         parent::construct();
     } 
     
     public function handle()
     {
         DB::table('users')->delete(4);
     }
}
