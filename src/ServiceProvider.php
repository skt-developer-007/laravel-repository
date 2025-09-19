<?php

namespace Sketterz\RepositoryGenerator;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Sketterz\RepositoryGenerator\Commands\MakeRepositoryCommand;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        $this->commands([
            MakeRepositoryCommand::class,
        ]);
    }
}
