<?php

namespace Src;

use Exception;

class Route implements RouteInterface
{
    /**
     * @throws Exception
     */
    public function __construct(public array $routes = [])
    {
        if (!$this->hasRoute($this->getPath())) {
            throw new Exception(sprintf('Page %s not found.', $this->getPath()));
        }
        $route = $this->getRoute($this->getPath());
        $this->execute($route['class'], $route['action']);
    }

    /**
     * @throws Exception
     */
    public function execute(string $className, string $method)
    {
        $obj = (new $className($method));

        if (!is_callable($obj)) {
            throw new Exception();
        }

        return $obj();
    }

    public function hasRoute(string $route): bool
    {
        return isset($this->routes[$route]);
    }

    public function getRoute(string $route): array
    {
        return $this->routes[$route];
    }

    public function getPath(): string
    {
        return isset($_SERVER['PATH_INFO']) ? rtrim($_SERVER['PATH_INFO'], '/') : '/';
    }
}
