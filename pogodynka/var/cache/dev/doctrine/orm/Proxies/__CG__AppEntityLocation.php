<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Location extends \App\Entity\Location implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'city' => [parent::class, 'city', null],
        "\0".parent::class."\0".'country' => [parent::class, 'country', null],
        "\0".parent::class."\0".'forecasts' => [parent::class, 'forecasts', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'latitude' => [parent::class, 'latitude', null],
        "\0".parent::class."\0".'longitude' => [parent::class, 'longitude', null],
        'city' => [parent::class, 'city', null],
        'country' => [parent::class, 'country', null],
        'forecasts' => [parent::class, 'forecasts', null],
        'id' => [parent::class, 'id', null],
        'latitude' => [parent::class, 'latitude', null],
        'longitude' => [parent::class, 'longitude', null],
    ];

    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {
        if ($cloner !== null) {
            return;
        }

        self::createLazyGhost($initializer, [
            "\0".parent::class."\0".'id' => true,
        ], $this);
    }

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"], $properties['__isCloning']);

        return $properties;
    }
}
