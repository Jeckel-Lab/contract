[![Build Status](https://travis-ci.org/Jeckel-Lab/contract.svg?branch=master)](https://travis-ci.org/Jeckel-Lab/contract)
[![Latest Stable Version](https://poser.pugx.org/jeckel-lab/contract/v/stable)](https://packagist.org/packages/jeckel-lab/contract) [![Total Downloads](https://poser.pugx.org/jeckel-lab/contract/downloads)](https://packagist.org/packages/jeckel-lab/contract)
# Jeckel-Lab Contract

List of interfaces use as contract in other packages or DD projects

This contract include some strong typings, and psalm validation.

## Main contracts

### Core

- `CommandDispatcher`: Define all contract for the **command bus** implementation with `Command`, `CommandHandler` and `CommandResponse`.

### Domain

- `Dto`: main **Dto** contract (empty for now, used to define typings)
- `Entity`: main **Entity** contract (empty for now, used to define typings)
    - `DomainEventAwareInterface`: Define how entities handle Events, and for `Event` type
- `Event`: **Event** contract, force immutability, used by `CommandResponse`, `Entity` (EventAware) and `CommandBus`
- `Exception`: Define a collection of Domain exceptions, all immutable
- `Identity`: Main contract for entity's **Identities** with exceptions, forced immutability and `Equality` interface
- `ValueObject`: force immutability on ValueObject, implements `toScalar` and `__toString` methods. See[psalm template](https://psalm.dev/docs/annotating_code/templated_annotations/) documentation for more info.
- `Equality`: define `equal`, required for Identity, but can be also use for entities and value objects.

### Infrastructure
- `Exception`: Define basics Infrastructure exceptions (with forced immutability)
- `System`:
    - `Clock`: Define clock contract to return the current time as a mockable service

### Presentation
- `Exception`: Define basics Presentation exceptions (with forced immutability)

## Resources

Please also read some Psalm documentation:
 - [psalm template](https://psalm.dev/docs/annotating_code/templated_annotations/)
 - [psalm immutable](https://psalm.dev/articles/immutability-and-beyond)
