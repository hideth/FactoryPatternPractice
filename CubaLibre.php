<?php

namespace Pattern\Factory;

class CubaLibre implements Drink
{
    public function getGlass(): string {
        return 'szklanica';
    }
    public function getAlcohol(): array {
        return [
            'biały rum',
            'coca-cola',
            'sok z limonki',
        ];
    }

    public function getMixing(): string
    {
        return 'hard';
    }
    public function getWayOfPresenting(): string
    {
        return 'z rurką i lodem';
    }
}
