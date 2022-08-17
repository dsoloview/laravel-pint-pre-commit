<?php

namespace dsoloview\LaravelPintPreCommit;

class HookInstaller
{
    private string $link = 'https://gist.githubusercontent.com/dsoloview/a13ec81e6ecaa0f10754ec12ac3102b1/raw/3f95063b70b6de289e733d3b3f07f1f6c5fdb3e8/pre-commit';

    public function addHook(): void
    {
        if ($this->checkGitDirectory()) {
            copy($this->link, $this->getHookSavePath());
        }
    }

    public function removeHook(): void
    {
        if ($this->checkGitDirectory()) {
            unlink($this->getHookSavePath());
        }
    }

    private function getGitDirectory(): string
    {
        return base_path() . DIRECTORY_SEPARATOR . '.git' . DIRECTORY_SEPARATOR . 'hooks';
    }

    private function checkGitDirectory(): bool
    {
        return is_dir($this->getGitDirectory());
    }

    private function getHookSavePath(): string
    {
        return $this->getGitDirectory() . DIRECTORY_SEPARATOR . 'pre-commit';
    }

}