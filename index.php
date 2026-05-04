<?php

$logs = [
    "INFO:User U1001 logged in",
    "ERROR:User U1002 failed login",
    "INFO:User U1001 viewed page",
    "WARNING:User U1003 password attempt",
    "ERROR:User U1002 failed login",
    "INFO:User U1004 logged in",
    "ERROR:User U1003 failed login",
    "INVALID LOG DATA",
];

$User1001Info1 = substr($logs[0], 0, 4);
$User1001Info2 = substr($logs[2], 0, 4);

$User1002Error1 = substr($logs[1], 0, 5);
$User1002Error2 = substr($logs[4], 0, 5);

$User1003Warning = substr($logs[3], 0, 7);
$User1003Error = substr($logs[6], 0, 5);

$User1004Info = substr($logs[5], 0, 4);


$User1001 = 0;
$User1002 = 0;
$User1003Warning1 = 0;
$User1003Error1 = 0;
$User1004 = 0;

//hisoblash
if ($User1001Info1 == "INFO") {
    $User1001 += 1;
}
;
if ($User1001Info2 == "INFO") {
    $User1001 += 1;
}
;

if ($User1002Error1 == "ERROR") {
    $User1002 += 1;
}
;
if ($User1002Error2 == "ERROR") {
    $User1002 += 1;
}
;

if ($User1003Warning == "WARNING") {
    $User1003Warning1 += 1;
}
;
if ($User1003Error == "ERROR") {
    $User1003Error1 += 1;
}
;

if ($User1004Info == "INFO") {
    $User1004 += 1;
}
;

//natija
if ($User1001 == 2) {
    echo "User 1001 da " . $User1001 . " ta info bor.<br>";
}
;

if ($User1002 == 2) {
    echo "User 1002 da " . $User1002 . " ta error bor. User bloklangan.<br>";
}
;

if ($User1003Error1 == 1) {
    if ($User1003Warning1 == 1) {
        echo "User 1003 da " . $User1003Error1 . " ta error bor. User shubxali.<br>";
    }
}
;

if ($User1004 == 1) {
    echo "User 1004 da " . $User1004 . " ta info bor.<br>";
}
;