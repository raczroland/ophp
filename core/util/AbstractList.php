<?php

namespace core\util;

use core\defaults\Object;
use core\exceptions\IndexOutOfBoundsException;
use core\exceptions\UnsupportedOperationException;


abstract class AbstractList extends AbstractCollection implements IList
{

    protected function __construct()
    {
    }

    public function add(Object $o): bool
    {
        $this->addAt($this->size(), $o);
        return true;
    }

    abstract public function get(int $index): Object;

    public function set(int $index, Object $element): Object
    {
        throw new UnsupportedOperationException();
    }

    public function addAt(int $index, Object $element)
    {
        throw new UnsupportedOperationException();
    }

    public function remove(Object $o): bool
    {
        throw new UnsupportedOperationException();
    }

    public function indexOf(Object $o): int
    {
        $index = 0;
        $it = $this->getIterator();
        while ($it->valid()) {
            if ($o->equals($it->current())) {
                return $index;
            }
            $it->next();
            $index++;
        }
        return -1;
    }

    public function lastIndexOf(Object $o): int
    {
        // TODO: Implement lastIndexOf() method.
    }

    public function clear()
    {
        $this->removeRange(0, $this->size());
    }

    public function addAllAt(int $index, ICollection $c): bool
    {
        $this->rangeCheckForAdd($index);
        $modified = false;
        foreach ($c as $e) {
            $this->addAt($index++, $e);
            $modified = true;
        }
        return $modified;
    }

    public function getIterator(): Traversable
    {
        // TODO: Implement getIterator() method.
    }

    /*public function getListIterator(): Traversable
    {
        // TODO: Implement getIterator() method.
    }*/





    public function removeRange(int $from, int $to)
    {

    }

    private function rangeCheckForAdd(int $index)
    {
        if ($index < 0 || $index > $this->size()) {
            throw new IndexOutOfBoundsException($this->outOfBoundMsg($index));
        }
    }

    private function outOfBoundMsg(int $index): string
    {
        return "Index: " . $index . ", Size: " . $this->size();
    }

}