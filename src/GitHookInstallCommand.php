<?php

namespace dsoloview\LaravelPintPreCommit;

use Illuminate\Console\Command;

class GitHookInstallCommand extends Command
{

    protected $signature = 'install:pint-githook';

    protected $description = 'Add Laravel Pint pre-commit githook';

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