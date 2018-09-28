<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/13
 * Time: 16:17
 */

class ArbitraryPolygon extends Polygon
{
    private $points;

    public function __construct($center,$points)
    {
        $this->center = $center;
        $this->points=$points;
    }

    public function getPoints()
    {
        return $this->points;
    }


    public function setPoints($points)
    {
        $this->points = $points;
    }



}