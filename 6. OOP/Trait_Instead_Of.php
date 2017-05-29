<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/29/17
 * Time: 4:38 PM
 */

trait Command
{
    function run()
    {
        echo "Executing a command\n";
    }
}
trait Marathon
{
    function run()
    {
        echo "Running a marathon\n";
    }
}
class Person
{
    use Command, Marathon {
        Command::run as runCommand;
        Marathon::run insteadof Command;
    }
}

$person = new Person;
$person->run();

$person->runCommand();