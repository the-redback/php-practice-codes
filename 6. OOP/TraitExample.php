<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/29/17
 * Time: 4:33 PM
 */

trait First
{
    public function doFirst()
    {
        echo "first\n";
    }
}

trait Second
{
    public function doSecond()
    {
        echo "second\n";
    }
}

trait Third
{
    use First, Second;

    public function doAll()
    {
        $this->doFirst();
        $this->doSecond();
    }
}

class Combined
{
    use Third;
}

$object = new Combined;
$object->doAll();