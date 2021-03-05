<?php
class CircleAreaLib
{
    public function getCircleArea(float $diagonal) : float
    {
        $area = (M_PI * ($diagonal ** 2)) / 4;
        return $area;
        
    }
}
