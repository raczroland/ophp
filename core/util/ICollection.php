<?php

namespace core\util;

use core\defaults\Object;

interface ICollection //extends \IteratorAggregate
{

    public function size(): int;

    public function isEmpty(): bool;

    public function contains(Object $o): bool;

    public function getIterator(): Iterator;

    public function toArray(): array;

    public function add(Object $o): bool;

    public function remove(Object $o): bool;

    public function containsAll(ICollection $c): bool;

    public function addAll(ICollection $c): bool;

    public function removeAll(ICollection $c): bool;

    //public function removeIf(Predicate $filter): bool;

    public function retainAll(ICollection $c): bool;

    public function clear();

    public function equals(Object $o): bool;

    //public function hashCode(): int;

}