<?php

namespace App\Factory;

use App\Entity\Billet;
use App\Repository\BilletRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Billet>
 *
 * @method        Billet|Proxy create(array|callable $attributes = [])
 * @method static Billet|Proxy createOne(array $attributes = [])
 * @method static Billet|Proxy find(object|array|mixed $criteria)
 * @method static Billet|Proxy findOrCreate(array $attributes)
 * @method static Billet|Proxy first(string $sortedField = 'id')
 * @method static Billet|Proxy last(string $sortedField = 'id')
 * @method static Billet|Proxy random(array $attributes = [])
 * @method static Billet|Proxy randomOrCreate(array $attributes = [])
 * @method static BilletRepository|RepositoryProxy repository()
 * @method static Billet[]|Proxy[] all()
 * @method static Billet[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Billet[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Billet[]|Proxy[] findBy(array $attributes)
 * @method static Billet[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Billet[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class BilletFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     */
    protected function getDefaults(): array
    {
        return [
            'nbJours' => self::faker()->numberBetween(1, 2),
            'tarifAdult' => self::faker()->randomFloat(2, 10, 15),
            'tarifChild' => self::faker()->randomFloat(2, 5, 10),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Billet $billet): void {})
            ;
    }

    protected static function getClass(): string
    {
        return Billet::class;
    }
}
