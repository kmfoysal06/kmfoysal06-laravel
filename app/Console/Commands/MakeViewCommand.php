<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use File;

class MakeViewCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {view}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Blade Template.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $view = $this->argument('view');
        $path = $this->viewPath($view);
        $this->createDir($path);
        if(File::exists($path)) {
            $this->error("file {$path} already there!");
            return;
        }
        File::put($path, $path);
        $this->info("File {$path} created successfully.");
    }
    public function viewPath($view) {
        $view = str_replace('.', '/', $view) . '.blade.php';
        return resource_path('views/' . $view);
    }
    public function createDir($path) {
        $dir = dirname($path);
        if(!File::exists($dir)) {
            File::makeDirectory($dir, 0755, true, true);
        }
    }
}
