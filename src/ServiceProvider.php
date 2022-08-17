<?php

namespace dsoloview\LaravelPintPreCommit;

use Illuminate\Support\ServiceProvider as Base;

class ServiceProvider extends Base
{

    public function register()
    {
        $this->commands([
            GitHookInstallCommand::class,
        ]);
    }

}