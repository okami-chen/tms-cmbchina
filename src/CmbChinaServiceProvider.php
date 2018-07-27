<?php

namespace OkamiChen\TmsCmbChina;

use Illuminate\Support\ServiceProvider;

class CmbChinaServiceProvider extends ServiceProvider
{
    
    /**
     * @var array
     */
    protected $commands = [
        //__NAMESPACE__.'\Console\Command\YamlCommand',
    ];
    
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //$this->commands($this->commands);
    }
}
