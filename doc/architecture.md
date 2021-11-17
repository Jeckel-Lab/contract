# Architecture representation

Ref:
- https://herbertograca.com/2017/11/16/explicit-architecture-01-ddd-hexagonal-onion-clean-cqrs-how-i-put-it-all-together/

## Domain layer

Domain has no dependencies with other layers:

- Entities
- Aggregates
- Port (Interfaces)
- Services
- ValueObject --> Can be shared between Components
- Identities --> Shared between Components
- Dto --> Exported through Ports
- Event

## Application layer

Encapsulate the Domain layer

- Command
- CommandHandler
- Query
- QueryHandler
- EventHandler
- Services (Possible, to extract some logic from the EventHandler or CommandHandler)
- Ports

## Infrastructure layer

Interaction (Read and Write) with the system or other system.
Infrastructure layer is a lower layer and should not depend on other layers, except adapters

- Adapter (that implements Domain's port)
- Orm
- API Clients
- etc.

# Presentation layer

Incoming request and command:

- Controllers
- Console/CLI

With outputs:

- ViewModel



## Reminder

- Port is: **Interfaces** AND **DTOs**
- Use Case !!
- Use psalm-templates in CommandHandler and QueryHandler



