<?php

namespace dsoloview\LaravelPintPreCommit;

use Illuminate\Console\Command;

class GitHookRemoveCommand extends Command
{

    protected $signature = 'remove:pint-githook';

    protected $description = 'Add Laravel Pint pre-commit githook';

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