<?php

namespace core\util;

use core\lang\Object;


interface IList extends ICollection
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

    public function addAllAt(int $index, ICollection $c): bool;

    public function removeAll(ICollection $c): bool;

    public function retainAll(ICollection $c): bool;

    //public function replaceAll(UnaryOperator $operator);

    //public function sort(Comparator $c);

    public function clear();

    public function equals(Object $o): bool;

    //public function hashCode(): int;

    public function get(int $index): Object;

    public function set(int $index, Object $element): Object;

    public function addAt(int $index, Object $element);
    //TODO ?

    public function removeAt(int $index): Object;

    public function indexOf(Object $o): int;

    public function lastIndexOf(Object $o): int;

    //public function listIterator(int $index): ListIterator;

    public function subList(int $fromIndex, int $toIndex): IList;

    //spliterator

}