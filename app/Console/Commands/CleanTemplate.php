<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CleanTemplate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clean-template';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Resets Admin Template to a blank state and cleans routes and controllers respectively.';

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
     * @return mixed
     */
    public function handle()
    {
        $stubs_path = base_path('stubs/');
        $admin_views_path = base_path('resources/views/admin/');

        $this->recurseCopy($admin_views_path, $stubs_path . 'sb-admin-backups');
        $this->info('Backed up old views for reference');

        $this->delTree($admin_views_path);

        $this->recurseCopy($stubs_path . 'clean/admin', $admin_views_path);
        $this->info('Nav files cleaned');

        $this->recurseCopy($stubs_path . 'clean/Http', app_path('Http'));
        $this->info('App files replaced');

        $this->delTree(base_path('storage/framework/views'));
        mkdir(base_path('storage/framework/views'));
        $this->info('Cleaned view cache');



    }

    private function recurseCopy($src, $dst)
    {
        $dir = opendir($src);
        @mkdir($dst);
        while(false !== ( $file = readdir($dir)) ) {
            if (( $file != '.' ) && ( $file != '..' )) {
                if ( is_dir($src . '/' . $file) ) {
                    $this->recurseCopy($src . '/' . $file,$dst . '/' . $file);
                }
                else {
                    copy($src . '/' . $file,$dst . '/' . $file);
                }
            }
        }
        closedir($dir);
    }

    private function delTree($dir) {
        $files = array_diff(scandir($dir), array('.','..'));
        foreach ($files as $file) {
            (is_dir("$dir/$file")) ? $this->delTree("$dir/$file") : unlink("$dir/$file");
        }
        return rmdir($dir);
    }
}
