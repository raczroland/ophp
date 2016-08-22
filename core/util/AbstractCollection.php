<?php

namespace core\util;


use core\defaults\Object;
use core\exceptions\UnsupportedOperationException;
use IteratorAggregate;
use Traversable;

class AbstractCollection implements Collection, IteratorAggregate
{

    protected function __construct()
    {
    }

    public abstract function size(): int;

    public function isEmpty(): bool
    {
        return $this->size() == 0;
    }

    public function contains(Object $o): bool
    {
        $it = $this->getIterator();
        if (is_null($o)) {
            return false;
            //TODO
        } else {
            while ($it->valid()) {
                if ($o->equals($it->current())) {
                    return true;
                }
                $it->next();
            }
            return false;
        }
    }

    public function toArray(): array
    {
        $r = [];
        $it = $this->getIterator();
        for ($i = 0; $this->size(); $i++) {
            $r[] = $it->current()->clone();
            $it->next();
        }
        return $r;
    }

    public function add(Object $o): bool
    {
        throw new UnsupportedOperationException();
    }

    public function remove(Object $o): bool
    {
        // TODO: Implement remove() method.
    }

    public function containsAll(Collection $c): bool
    {
        // TODO: Implement containsAll() method.
    }

    public function addAll(Collection $c): bool
    {
        // TODO: Implement addAll() method.
    }

    public function removeAll(Collection $c): bool
    {
        // TODO: Implement removeAll() method.
    }

    public function retainAll(Collection $c): bool
    {
        // TODO: Implement retainAll() method.
    }

    public function clear()
    {
        // TODO: Implement clear() method.
    }

    public function equals(Object $o): bool
    {
        // TODO: Implement equals() method.
    }

    /**
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator(): Traversable
    {
        // TODO: Implement getIterator() method.
    }
}