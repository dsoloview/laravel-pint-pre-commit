<?php

namespace dsoloview\LaravelPintPreCommit\Commands;

use dsoloview\LaravelPintPreCommit\HookInstaller;
use Illuminate\Console\Command;

class GitHookRemoveCommand extends Command
{

    protected $signature = 'pint-githook:remove';

    protected $description = 'Remove Laravel Pint pre-commit githook';

    public function handle()
    {
        try {
            $hookInstaller = new HookInstaller();
            $hookInstaller->removeHook();

            $this->info('Laravel Pint githook removed');
        }
        catch (\Throwable $exception) {
            $this->error('Laravel Pint githook deletion error');
        }
    }

}