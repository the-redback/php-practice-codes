<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/29/17
 * Time: 4:47 PM
 */

class Person
{
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

$person=new Person("maruf",123);

echo $person->name,"\n",$person->age;