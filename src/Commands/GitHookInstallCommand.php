<?php

namespace dsoloview\LaravelPintPreCommit\Commands;

use dsoloview\LaravelPintPreCommit\HookInstaller;
use Illuminate\Console\Command;

class GitHookInstallCommand extends Command
{

    protected $signature = 'pint-githook:install';

    protected $description = 'Install Laravel Pint pre-commit githook';

    public function handle()
    {
        try {
            $hookInstaller = new HookInstaller();
            $hookInstaller->addHook();

            $this->info('Laravel Pint githook installed');
        }
        catch (\Throwable $exception) {
            $this->error('Laravel Pint githook installation error');
        }
    }

}