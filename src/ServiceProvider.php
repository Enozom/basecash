<?php namespace Enozom\Basecash;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider {


    public function boot() {
 
        $this->handleConfigs();
        $this->handleMigrations();
        
    }

    
    private function handleConfigs() {

        $configPath = __DIR__ . '/../config/basecash.php';

        $this->publishes([$configPath => config_path('basecash.php')]);

        $this->mergeConfigFrom($configPath, 'basecash');
    }


    private function handleMigrations() {

        $this->publishes([__DIR__ . '/../migrations' => base_path('database/migrations')]);
    }
}
