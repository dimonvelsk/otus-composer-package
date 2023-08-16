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
        $diff = $timeFact->diff($this->timer);

        return $diff->format('%S seconds');
    }
}