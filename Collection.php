<?php

class Collection
{

    public $items = [];


    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function all()
    {
        return $this->items;
    }

    public function soa()
    {
        return 'soa';
    }

    public function concat($items)
    {
        $result = new static($this->items);

        array_push($result->items, $items);

        return $result;
    }

    public function oneIsa1()
    {
        return 'one';
    }

}