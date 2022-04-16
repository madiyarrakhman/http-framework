<?php

namespace Src;;

interface RouteInterface
{
    public function execute(string $className, string $method);

    public function hasRoute(string $route): bool;

    public function getRoute(string $route): array;
}
