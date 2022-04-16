<?php

namespace Src;;

class Controller implements ControllerInterface
{
    public function __construct(private string $executeAction)
    {
    }

    public function __invoke()
    {
        $this->runAction($this->executeAction);
    }

    public function hasAction(string $action): bool
    {
        return method_exists($this, $action);
    }

    public function runAction(string $action)
    {
        if (!$this->hasAction($action)) {
            return;
        }

        $ref = new \ReflectionClass($this);

        $refMethod = $ref->getMethod($action);
        $params = $refMethod->getParameters();

        $arr = [];
        foreach($params as $value) {
            $arg = $value->getType()->getName();
            $arr[] = new $arg;
        }
        $refMethod->invokeArgs($this, $arr);
    }
}
