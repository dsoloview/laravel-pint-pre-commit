<?php

namespace dsoloview\LaravelPintPreCommit;

use dsoloview\LaravelPintPreCommit\Commands\GitHookInstallCommand;
use dsoloview\LaravelPintPreCommit\Commands\GitHookRemoveCommand;
use Illuminate\Support\ServiceProvider as Base;

class ServiceProvider extends Base
{

    public function register()
    {
        $this->commands([
            GitHookRemoveCommand::class,
            GitHookInstallCommand::class,
        ]);
    }

}