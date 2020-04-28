<?php 
    $title = 'FUNCTIONS';
    include 'includes/header.php' 
?>
 
<h2>FUNCTIONS</h2>

<?php
    //Defining a function
    function writeMessage(){
        echo "You are really a nice person, Have a nice time!<br>";
    }

    //Calling a function
    writeMessage();

    writeMessage();

    echo '<hr>';

    //Functions with parameters
    function addFunction($num1, $num2){
        $sum = $num1 + $num2;
        echo "The sum of $num1 and $num2 is $sum. <br>";
    }

    function addFunction1($num1, $num2){
        $sum = $num1 + $num2;
        $num2 = $num2 + 2;
        echo "The sum of $num1 and $num2 is $sum. <br>";
    }

    //Pass by reference - use ampersand in parameter
    function changeNum($num){
        $num = $num + 10; //$num += 10;
        echo $num;
    }

    function changeNum1(&$num){
        $num = $num + 10;
    }

    function returnProduct($num1, $num2){
        $prod = $num1 * $num2;
        return $prod;
    }

    addFunction(4, 8);

    echo 'addFunction with $num = 100<br>';
    $num = 100;
    addFunction(10, $num);

    echo '<br>';

    echo 'addFunction - numbers with single-quotes and double-quotes<br>';
    addFunction('10', "50");

    echo '<br>';

    echo 'addFunction1 - check whether the $num2 is changed<br>';
    addFunction1(12, 56);
    echo '$num2 is not changed.<br>';

    echo '<br>';

    echo '$num = 100<br>';
    addFunction1(12, $num);

    echo '<br>';

    echo 'changeNum funcion<br>';
    changeNum(6);

    echo '<br>';

    echo 'changeNum1 function<br>';
    changeNum1($num);
    echo $num . '<br>';

    echo '<br>';

    echo 'returnProduct function<br>';
    $return_value = returnProduct(10, 200);
    echo $return_value . '<br>';
    
    require 'includes/footer.php' 
?>