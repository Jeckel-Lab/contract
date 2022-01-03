[![Latest Stable Version](https://poser.pugx.org/jeckel-lab/contract/v/stable)](https://packagist.org/packages/jeckel-lab/contract)
[![Total Downloads](https://poser.pugx.org/jeckel-lab/contract/downloads)](https://packagist.org/packages/jeckel-lab/contract)
[![Build Status](https://travis-ci.org/Jeckel-Lab/contract.svg?branch=master)](https://travis-ci.org/Jeckel-Lab/contract)
[![codecov](https://codecov.io/gh/Jeckel-Lab/contract/branch/main/graph/badge.svg?token=88XDTqqdar)](https://codecov.io/gh/Jeckel-Lab/contract)
[![Mutation testing badge](https://img.shields.io/endpoint?style=flat&url=https%3A%2F%2Fbadge-api.stryker-mutator.io%2Fgithub.com%2FJeckel-Lab%2Fcontract%2Fmain)](https://dashboard.stryker-mutator.io/reports/github.com/Jeckel-Lab/contract/main)

# Jeckel-Lab Contract

List of interfaces use as contract in other packages or DD projects

This contract includes some strong typings, object relation and psalm validation.

Require **`php >= 7.2.*`** and **`php >= 8.0`**

| Release name | Branch name | Php Version             |
|--------------|-------------|-------------------------|
| 1.x          | release/1.X | php >= 7.2 & php <= 8.0 |
| 2.x          | master      | php >= 8.0              |

# Documentation for version 2.x (php >= 8.0)

## Domain

Domain contract are part of DDD implementation suggestion, it's not required and is not linked to any frameworks.

### Identity

[Identity](src/Domain/Identity/Identity.php) are used to define a unique identifier for an Entity or a RootAggregate.

Identity must be:
- immutable
- final
- constructor should be private, use a factory method:
  - `new` ==> Generate (if possible) a new Identity object with a random value (like UUIDs)
  - `from` ==> Instantiate Identity from an existing value

> See detailed implementation proposal: [jeckel-lab/identity-contract](https://github.com/Jeckel-Lab/identity-contract)

### Entity

**[Entity](src/Domain/Entity/Entity.php)**: main **Entity** contract

Entity **must** have an Id implementing the `Identity` interface.

Don't forget to use `@psalm templates`
```php
/**
 * DiverId is using an `int` as unique identifier
 * @implements Identity<int>
 */
final class DriverId implements Identity
{
}

/**
 * Now Driver can use a DriverId as an identifier
 * @implements Entity<DriverId>
 */
class Driver implements Entity
{
    public function __construct(private DriverId $id)
    {
    }
    
    /**
     * @return DriverId
     */
    public function getId(): Identity
    {
        return $id;
    }
}
```

### Event

[Event](src/Domain/Event/Event.php) are notification about what happened during a use case.

Event **must** be:
- immutable

### DomainEventAware

**Entities** and **root aggregates** handle domain events.
To facilitate this behaviour, you can use this **interface** and **trait**:
- **[DomainEventAwareInterface](src/Domain/Entity/DomainEventAwareInterface.php)**
- **[DomainEventAwareTrait](src/Domain/Entity/DomainEventAwareTrait.php)**

This interface defines two methods:
```php
    /**
     * @param Event ...$events
     * @return static
     */
    public function addDomainEvent(Event ...$events): static;

    /**
     * @return list<Event>
     */
    public function popEvents(): array;

```
- `addDomainEvent` allow you to register new event occurred during a Use Case.
- `popEvent` will empty the entity's event list at the end of a use case to dispatch them into an Event Dispatcher.

Just use the interface and trait into your entity:
```Php
class MyEntity implement DomainEventAwareInterface
{
    use DomainEventAwareTrait;
    
    /**
     * Example of a use case that add an event to the queue
     * @return self
     */
    public function activateEntity(): self
    {
        $this->activated = true;
        $this->addDomainEvent(new EntityActivated($this->id));
        return $this;
    }
    
    //...
}
```

And if you use the CommandBus pattern, then you can add events to the response easily:
```php
new CommandResponse(events: $entity->popEvents());
```

### ValueObject

Using `ValueObject` to embed a value (or group of value for complex types) as an object allow you:
- to use strong typing in the application (a `Speed` can not be mixed with any random float)
- to embed data validation (be sure that the `Speed` is always a positive value, is lower than a reasonable value, etc.)

Value object must be defined as:
- immutable (one's instantiated, they should not be modified unless a new instance is created).
- final
- constructor should be private, use the static `from` method as a factory
- when requesting to ValueObject with same value, `from` should return the same instance

Think about implementing it like this:
```Php
final class Speed implements ValueObject, ValueObjectFactory
{
    private static $instances = [];

    private function __constructor(private float $speed)
    {
    }
    
    /**
     * @param mixed $value
     * @return static
     * @throws InvalidArgumentException
     */
    public static function from(mixed $speedValue): static
    {
        if (! self::$instances[$speedValue]) {
            if ($speedValue < 0) {
                throw new InvalidArgumentException('Speed needs to be positive');
            }
            self::$instances[$speedValue] = new self($speedValue);
        }
        self::$instances[$speedValue]
    }
    
    // implements other methods
}

// And now
$speed1 = Speed::from(85.2);
$speed2 = Speed::from(85.2);
$speed1 === $speed2; // is true
```

## Core

> To be completed

### Command Dispatcher

> To be completed

> See detailed implementation proposal: [jeckel-lab/command-dispatcher](https://github.com/Jeckel-Lab/command-dispatcher)

### Query Dispatcher

> To be completed

> See detailed implementation proposal: [jeckel-lab/query-dispatcher](https://github.com/Jeckel-Lab/query-dispatcher)

## Exceptions

Each layer has it's own Exception interface that extends `Throwable`:

- Core: [CoreException](src/Core/Exception/CoreException.php)
- Domain: [DomainException](src/Domain/Exception/DomainException.php)
- Infrastructure: [InfrastructureException](src/Infrastructure/Exception/InfrastructureException.php)
- Presentation: [PresentationException](src/Presentation/Exception/PresentationException.php)

In each layer, when we need to throw an Exception, we create a new class corresponding to the type of Exception. This class must:

- extends one of the [SPL exception](https://www.php.net/manual/en/spl.exceptions.php) or another (more generic) exception from the same namespace.
- implements the exception interface of the current layer.


## Old Documentation

### Core

- **[CommandDispatcher](src/Core/CommandDispatcher/)**: Define all contract for the **command bus** implementation with 
    - **[Command](src/Core/CommandDispatcher/Command/Command.php)**
    - **[CommandHandler](src/Core/CommandDispatcher/CommandHandler/CommandHandler.php)**
    - **[CommandResponse](src/Core/CommandDispatcher/CommandResponse/CommandResponse.php)**

### Domain



- **[Dto](src/Domain/Dto/Dto.php)**: main **Dto** contract (empty for now, used to define typings)
- **[Entity](src/Domain/Entity/Entity.php)**: main **Entity** contract (empty for now, used to define typings)
    - **[DomainEventAwareInterface](src/Domain/Entity/DomainEventAwareInterface.php)**: Define how entities handle Events, and for `Event` type ([Trait](src/Domain/Entity/DomainEventAwareTrait.php) also available)
- **[Event](src/Domain/Event/Event.php)**: **Event** contract, force immutability, used by `CommandResponse`, `Entity` (EventAware) and `CommandBus`
- **[Exception](src/Domain/Exception/)**: Define a collection of Domain exceptions, all immutable
- **[Identity](src/Domain/Identity/Identity.php)**: Main contract for entity's **Identities** with exceptions, forced immutability and `Equality` interface
- **[ValueObject](src/Domain/ValueObject/ValueObject.php)**: force immutability on ValueObject, implements `toScalar` and `__toString` methods. See [psalm templating](https://psalm.dev/docs/annotating_code/templated_annotations/) documentation for more info.
- **[Equality](src/Domain/Equality.php)**: define `equal` method, required for Identity, but can be also use for entities and value objects.

### Infrastructure
- **[Exception](src/Infrastructure/Exception/)**: Define basics Infrastructure exceptions (with forced immutability)
- **[Clock](src/Infrastructure/System/Clock.php)**: Define clock contract to return the current time as a mockable service

### Presentation
- **[Exception](src/Presentation/Exception/)**: Define basics Presentation exceptions (with forced immutability)

## Resources

Please also read some Psalm documentation:
 - [psalm template](https://psalm.dev/docs/annotating_code/templated_annotations/)
 - [psalm immutable](https://psalm.dev/articles/immutability-and-beyond)
