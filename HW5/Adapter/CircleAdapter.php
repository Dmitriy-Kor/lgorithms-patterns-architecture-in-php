<?php

class CircleAdapter implements ICircle
{
    public $circleObj;

    public function __construct(CircleAreaLib $circle)
    {
        $this->circleObj = $circle;
    }

    public function circleArea(float $circumference)
    {
        $dioganal = $circumference / M_PI;
        return $area = $this->circleObj->getCircleArea($dioganal);
        return $area;
    }
}