[![Build Status](https://travis-ci.org/Jeckel-Lab/contract.svg?branch=master)](https://travis-ci.org/Jeckel-Lab/contract)
[![Latest Stable Version](https://poser.pugx.org/jeckel-lab/contract/v/stable)](https://packagist.org/packages/jeckel-lab/contract) [![Total Downloads](https://poser.pugx.org/jeckel-lab/contract/downloads)](https://packagist.org/packages/jeckel-lab/contract)
# Jeckel-Lab Contract

List of interfaces use as contract in other packages or DD projects

This contract includes some strong typings, object relation and psalm validation.

Require **`php >= 7.2.*`** and **`php >= 8.0`**

| Release name | Branch name | Php Version             |
|--------------|-------------|-------------------------|
| 1.x          | release/1.X | php >= 7.2 & php >= 8.0 |
| 2.x          | master      | php >= 8.0              |

## Main contracts

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
