<?php

namespace dsoloview\LaravelPintPreCommit;

class ComposerScript
{
    public static function install(): void
    {
        $hookInstaller = new HookInstaller();
        $hookInstaller->addHook();
    }
}