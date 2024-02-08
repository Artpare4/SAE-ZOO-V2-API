<?php

namespace App\Factory;

use App\Entity\AssoEventZoneParc;
use App\Repository\AssoEventZoneParcRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<AssoEventZoneParc>
 *
 * @method        AssoEventZoneParc|Proxy create(array|callable $attributes = [])
 * @method static AssoEventZoneParc|Proxy createOne(array $attributes = [])
 * @method static AssoEventZoneParc|Proxy find(object|array|mixed $criteria)
 * @method static AssoEventZoneParc|Proxy findOrCreate(array $attributes)
 * @method static AssoEventZoneParc|Proxy first(string $sortedField = 'id')
 * @method static AssoEventZoneParc|Proxy last(string $sortedField = 'id')
 * @method static AssoEventZoneParc|Proxy random(array $attributes = [])
 * @method static AssoEventZoneParc|Proxy randomOrCreate(array $attributes = [])
 * @method static AssoEventZoneParcRepository|RepositoryProxy repository()
 * @method static AssoEventZoneParc[]|Proxy[] all()
 * @method static AssoEventZoneParc[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static AssoEventZoneParc[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static AssoEventZoneParc[]|Proxy[] findBy(array $attributes)
 * @method static AssoEventZoneParc[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static AssoEventZoneParc[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class AssoEventZoneParcFactory extends ModelFactory
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
            'event' => EventFactory::new(),
            'zoneParc' => ZoneParcFactory::new(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(AssoEventZoneParc $assoEventZoneParc): void {})
        ;
    }

    protected static function getClass(): string
    {
        return AssoEventZoneParc::class;
    }
}
