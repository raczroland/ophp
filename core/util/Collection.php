<?php

namespace core\util;

use core\defaults\Object;

interface Collection //extends \IteratorAggregate
{

    public function size(): int;

    public function isEmpty(): bool;

    public function contains(Object $o): bool;

    public function getIterator(): Iterator;

    public function toArray(): array;

    public function add(Object $o): bool;

    public function remove(Object $o): bool;

    public function containsAll(Collection $c): bool;

    public function addAll(Collection $c): bool;

    public function removeAll(Collection $c): bool;

    //public function removeIf(Predicate $filter): bool;

    public function retainAll(Collection $c): bool;

    public function clear();

    public function equals(Object $o): bool;

    //public function hashCode(): int;

}