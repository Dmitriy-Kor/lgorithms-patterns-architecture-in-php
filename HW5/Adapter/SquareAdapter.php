<?php

class SquareAdapter implements ISquare
{
    public $squareObj;

    public function __construct(SquareAreaLib $squareObj)
    {
        $this->squareObj = $squareObj;
    }

    public function squareArea(float $sideSquare)
    {
        $dioganal = $sideSquare * sqrt(2);
        $area = $this->squareObj->getSquareArea($dioganal);
        return $area;
    }
}