<?php

//echo "Redirect to other page";

//header("Location: /other-page.php");

// $a = 1;;
// $A = 2;

// echo $a;
// echo $A;

//define('a', 1);
//define('A', 1);

//const  a = 1;
// const  A = 1;

// echo a;
// echo A;

$a_ = 5;
class A {
    function a() {
        echo "Method a in class A";
    }
}
class B {
    function a() {
        echo "Method a in class B";
    }
}

new A()->A();
new B()->A();
?>