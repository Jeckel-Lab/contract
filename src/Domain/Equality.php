<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 30/05/2020
 */

namespace JeckelLab\Contract\Domain;

/**
 * Interface Equality
 * @package JeckelLab\Contract\Domain
 */
interface Equality
{
    /**
     * Whether this object equals to the other.
     *
     * - It is _reflexive_: `$x->equals($x)` should return **TRUE**.
     * - It is _symmetric_: `$x->equals($y)` should return **TRUE** if, and only
     *   if, `$y->equals($x)` returns **TRUE**.
     * - It is _transitive_: if `$x->equals($y)` returns **TRUE** and
     *   `$y->equals($z)` returns **TRUE**, then `$x->equals($z)` should return
     *   **TRUE**.
     * - It is _consistent_: multiple invocations of `$x->equals($y)`
     *   consistently return **TRUE** or consistently return **FALSE**, provided
     *   both `$x` and `$y` are not being mutated in-between invocations.
     * - Any **NULL** invocation `$x->equals(null)` should return **FALSE**.
     *
     * Implementations **MUST NOT** throw exceptions; they always have to
     * return a value.
     *
     * @param mixed $other
     * @return bool
     * @psalm-mutation-free
     */
    public function equals(mixed $other): bool;
}
