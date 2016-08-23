<?php

namespace core\defaults;


interface ICharSequence
{

    public function length(): int;

    public function charAt(int $index);

    public function subSequence(int $start, int $end): ICharSequence;

    public function __toString();

}