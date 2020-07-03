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

    public function concat($items)
    {
        $result = new static($this->items);

        array_push($result->items, $items);

        return $result;
    }

    public function name()
    {
        $nme = 'Daniel Ponce';
    }

    public function master()
    {
        return 'master';
    }
    public function testing()
    {
        return 'testing';
    }

    public function graph()
    {
        return 'graph';
    }

}