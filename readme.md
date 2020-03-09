# Przykład zastosowania wzorca projektowego FactoryMethod

## Wymagania dla metody "System do robienia drinków"

- Wybór szklanki
- Wybór alkoholu
- Wybór dodatków
- Sposób mieszania
- Sposób podania

## Interfejs drink

```php
interface Drink
{
    public function getGlass(): string;
    public function getAlcohol(): array;
    public function getMixing(): string;
    public function getWayOfPresenting(): string;
}
```

## Interfejs DrinkFactory

```php
interface DrinkFactory
{
    public function makeADrink();
}
```

## Klasa CubaLibre

```php
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
```

## Klasa CubaLibreFactory

```php
class CubaLibreFactory implements DrinkFactory
{
    public function makeADrink(): Drink
    {
        return new CubaLibre();
    }
}
```

## Użycie

```php
$factory = new CubaLibreFactory();
$drink = $factory->makeADrink();

echo ('Alkohol:</br>');
foreach ($drink->getAlcohol() as $alcohol) {
    echo ($alcohol . '<br>');
}
echo ('</br>Szklanka:</br>');
echo ($drink->getGlass() . '<br>');
echo ('</br>Sposób mieszania:</br>');
echo ($drink->getMixing() . '<br>');
echo ('</br>Sposób podania:</br>');
echo ($drink->getWayOfPresenting() . '<br>');
```

## Ouptut

```html
Alkohol:
biały rum
coca-cola
sok z limonki

Szklanka:
szklanica

Sposób mieszania:
hard

Sposób podania:
z rurką i lodem
```
