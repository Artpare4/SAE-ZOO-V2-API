<?php

namespace App\Factory;

use App\Entity\AssoEventAnimal;
use App\Repository\AssoEventAnimalRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<AssoEventAnimal>
 *
 * @method        AssoEventAnimal|Proxy create(array|callable $attributes = [])
 * @method static AssoEventAnimal|Proxy createOne(array $attributes = [])
 * @method static AssoEventAnimal|Proxy find(object|array|mixed $criteria)
 * @method static AssoEventAnimal|Proxy findOrCreate(array $attributes)
 * @method static AssoEventAnimal|Proxy first(string $sortedField = 'id')
 * @method static AssoEventAnimal|Proxy last(string $sortedField = 'id')
 * @method static AssoEventAnimal|Proxy random(array $attributes = [])
 * @method static AssoEventAnimal|Proxy randomOrCreate(array $attributes = [])
 * @method static AssoEventAnimalRepository|RepositoryProxy repository()
 * @method static AssoEventAnimal[]|Proxy[] all()
 * @method static AssoEventAnimal[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static AssoEventAnimal[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static AssoEventAnimal[]|Proxy[] findBy(array $attributes)
 * @method static AssoEventAnimal[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static AssoEventAnimal[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class AssoEventAnimalFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'animal' => AnimalFactory::new(),
            'event' => EventFactory::new(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(AssoEventAnimal $assoEventAnimal): void {})
        ;
    }

    protected static function getClass(): string
    {
        return AssoEventAnimal::class;
    }
}
