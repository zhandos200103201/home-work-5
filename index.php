<?php
function printDate(){
    echo date("d:m:Y H:i:s", time());
}

//printDate();
function printDateWithOneParameter($_format_of_date){
    echo date($_format_of_date, time());
}

//printDateWithOneParameter("m.d.Y H:i");

function isOdd($_integer){
    if($_integer%2 == 1)
        return "true";
    else
        return "false";
}
function isEven($_integer){
    if($_integer%2 == 0)
        return "true";
    else
        return "false";
}

//$_result = isOdd(3);
//echo $_result;

function  isAdult($_age){
    if($_age >= 18)
        echo "Вы взрослый, можете голосовать";
    else{
        $_age = 18 - $_age;
        echo "чтобы можно было голосовать осталось $_age года (лет)";
    }
}

//isAdult(5);

function determineMaxValue(...$intValues){
    $_max = 0;
    foreach ($intValues as $value){
        if($_max < $value)
            $_max = $value;
    }
    return $_max;
}

//echo determineMaxValue(3,2,45,4,5,7,2,5,90,5,5);
