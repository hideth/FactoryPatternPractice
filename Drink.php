<?php

namespace Pattern\Factory;

interface Drink
{
    public function getGlass(): string;
    public function getAlcohol(): array;
    public function getMixing(): string;
    public function getWayOfPresenting(): string;
}
