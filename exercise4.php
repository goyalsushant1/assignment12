<?php
ini_set('display_errors',1);
trait firstTrait {
    public function firstFunction()
    {
        # code...
        echo "First Trait";
    }
}
trait secondTrait {
    public function secondFunction()
    {
        # code...
        echo "Second Trait";
    }
}
trait thirdTrait {
    public function thirdFunction()
    {
        # code...
        echo "Third Trait";
    }
}
class childClass{
    use firstTrait,secondTrait,thirdTrait;
    public function firstFunction()
    {
        # code...
        echo "First Trait function override<br>";
    }
    public function secondFunction()
    {
        # code...
        echo "Second Trait function override<br>";
    }
    public function thirdFunction()
    {
        # code...
        echo "Third Trait function override<br>";
    }
}

$obj = new childClass();
$obj->firstFunction();
$obj->secondFunction();
$obj->thirdFunction();