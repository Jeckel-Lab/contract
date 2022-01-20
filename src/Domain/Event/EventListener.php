<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 20/01/2022
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Domain\Event;

interface EventListener
{
    /**
     * @return array<class-string<Event>>
     * @psalm-mutation-free
     */
    public static function getSubscribedEvents(): array;
}
