<?php

class MyArray
{
    public $elements = [];

    public function __construct($array)
    {
        $this->elements = $array;
    }

    public function sum()
    {
        return array_sum($this->elements);
    }

    public function merge($array)
    {
        return array_merge($this->elements, $array);
    }
}