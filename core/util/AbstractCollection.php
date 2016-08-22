<?php

namespace core\util;


use core\defaults\Object;
use core\exceptions\UnsupportedOperationException;
use IteratorAggregate;
use Traversable;

abstract class AbstractCollection implements ICollection, IteratorAggregate
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
            //TODO ?
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
        $it = $this->getIterator();
        if (is_null($o)) {
            return false;
            //TODO ?
        } else {
            while ($it->valid()) {
                if ($o->equals($it->current())) {
                    $it->remove();
                    return true;
                }
            }
        }
        return false;
    }

    public function containsAll(ICollection $c): bool
    {
        foreach ($c as $e) {
            if (!$this->contains($e)) {
                return false;
            }
        }
        return true;
    }

    public function addAll(ICollection $c): bool
    {
        $modified = false;
        foreach ($c as $e) {
            if ($this->add($e)) {
                $modified = true;
            }
        }
        return $modified;
    }

    public function removeAll(ICollection $c): bool
    {
        $modified = false;
        $it = $this->getIterator();
        while ($it->valid()) {
            if ($c->contains($it->current())) {
                $it->remove();
                $modified = true;
            }
            $it->next();
        }
        return $modified;
    }

    public function retainAll(ICollection $c): bool
    {
        $modified = false;
        $it = $this->getIterator();
        while ($it->valid()) {
            if (!$c->contains($it->current())) {
                $it->remove();
                $modified = true;
            }
            $it->next();
        }
        return $modified;
    }

    public function clear()
    {
        $it = $this->getIterator();
        while ($it->valid()) {
            $it->remove();
            $it->next();
        }
    }

    /**
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public abstract function getIterator(): Traversable;

    public function __toString()
    {
        $it = $this->getIterator();
        if (!$it->valid()) {
            return "[]";
        }
        $str = "[";
        for (;;) {
            $e = $it->current();
            $str .= ($e == $this ? "(this ICollection)" : $e);
            $it->next();
            if (!$it->valid()) {
                return $str . ']';
            }
            $str .= ', ';
        }
    }

}