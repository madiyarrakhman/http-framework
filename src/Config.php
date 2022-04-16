<?php

namespace Src;;

class Config implements ConfigInterface
{
    public function __construct(private array $configs)
    {
    }

    public function getConfigs(): array
    {
        $arr = [];
        foreach ($this->configs as $key => $value) {
            $arr[pathinfo($value, PATHINFO_FILENAME)] = require $value;
        }
        return $arr;
    }
}
