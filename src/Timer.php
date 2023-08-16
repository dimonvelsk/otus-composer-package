<?php

declare(strict_types=1);

namespace Dimonvelsk\OtusComposerPackage;

class Timer
{
    private \DateTimeImmutable $timer;

    public function __construct()
    {
        $this->timer = new \DateTimeImmutable('now');
    }

    public function getResult(): string
    {
        $timeFact = new \DateTimeImmutable('now');
        return $timeFact->diff($this->timer)->format('%S seconds');
    }
}