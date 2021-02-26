<?php

class Square implements ISquare
{
    function squareArea(float $sideSquare)
    {
        $area = $sideSquare ** 2;
        return $area;
    }
}