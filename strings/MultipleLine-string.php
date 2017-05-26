<?php
/**
 * Created by PhpStorm.
 * User: maruf
 * Date: 5/26/17
 * Time: 1:20 PM
 */

$clerihew = <<< EndOfQuote
               Sir Humphrey Davy
               Abominated gravy.
               He lived in the odium
               Of having discovered sodium.
EndOfQuote;
//echo $clerihew;

$multipleLine= "Sir Humphrey Davy
                Abominated gravy.
                He lived in the odium
                Of having discovered sodium.";



echo $clerihew,"\n\n",$multipleLine,"\n\n";

if (print("test")) {
    print("It worked!");
}