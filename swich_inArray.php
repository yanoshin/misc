<?php
//Which is faster? switch or inarray()？ by yanoshin

function useSwitch($number)
{
    switch ($number) {
        case 1:
        case 2:
        case 3:
            return true;
            break;
        default:
            return false;
            break;
    }
}

function useInArray($number)
{
    return in_array($number, array(1, 2, 3));
}


//switch使うパターン
$time_start = microtime(true);
for ($i = 0; $i < 10000000; $i++) {
    $ret = useSwitch($i);
}
$timelimit = microtime(true) - $time_start;
echo 'switch  ' . $timelimit . " seconds\n";

//in_array()を使うパターン
$time_start = microtime(true);
for ($i = 0; $i < 10000000; $i++) {
    $ret = useInArray($i);
}
$timelimit = microtime(true) - $time_start;
echo 'in_array()  ' . $timelimit . " seconds\n";

/*
---result
$ php swich_inArray.php
switch  1.6991789340973 seconds
in_array()  4.3948550224304 seconds

switch is faster than in_array().
*/