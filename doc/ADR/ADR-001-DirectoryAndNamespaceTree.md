# Directory / Namespace tree

- Architecture
- Component / Application
    - [ComponentName]
        - ApplicationEvent (Event propagated to other components, or high layers)
        - Command
        - CommandHandler
        - Domain
            - Entity
            - DomainEvent
            - DomainServices (cross entity / multiple entities)
            - ValueObject
        - EventHandler
        - Ports
            - RepositoryPort
            - RepositoryDto
        - Query
        - QueryHandler
        - QueryResponseDto
        - ApplicationServices (Used by CommandHandler, EventHandler or other Services)
    - SharedKernel
        - Identities
        - ValueObject
        - ApplicationEvent
- Presentation
    - Controller
    - ViewModel