<?php

namespace Pattern\Factory;

class CubaLibreFactory implements DrinkFactory
{
    public function makeADrink(): Drink
    {
        return new CubaLibre();
    }
}
