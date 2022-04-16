<?php

namespace Src;;

interface ControllerInterface
{
    public function hasAction(string $action): bool;

    public function runAction(string $action);
}
