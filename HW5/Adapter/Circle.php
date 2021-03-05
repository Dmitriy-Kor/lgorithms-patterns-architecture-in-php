<?php

class Circle implements ICircle
{
    
    public function circleArea(float $circumference)
    {
        $area = ($circumference ** 2) / (4 * M_PI);
        echo $area;
    }

}