<?php

echo "Assignment 1 <br>---------------------<br>";
echo  "Ex1<br>";
//Ex1
$arrE = array("satrday",
              "sunday",
              "monday",
              "tusday",
              "wednesday",
              "thrusday",
              "friday");
$arrA = array("سبت",
              "احد",
              "اثنين",
              "ثلاثاء",
              "اربع",
              "خميس",
              "جمعة");
$day = "جمعة";
for($i=0;$i<=count($arrE)-1;$i++){
    for($j=0;$j<=count($arrA)-1;$j++){
   if($day == $arrA[$j]){
      echo $day." in English is : ".$arrE[$j];
            }   
        }
     break;
    }    
echo "<hr>";
//Ex2
echo  "Ex2<br>";

$userName = "ahmed";
$password = "123";

if(empty($userName) && empty($password) ){
    echo "No Data"; }
else if(gettype($userName) === "string" &&
        gettype($password) === "string"){
    echo "Right data type is string <br>";
    if( $userName === "ahmed" &&
         $password === "123" ){
    echo "data correct"; }  
}else{
    echo "Miss Data type Must be String";
}

echo "<hr>";
//Ex3
echo  "Ex3<br>";  

$test = true;
$type = gettype($test);
echo "Data type :".$type."<br>";

if($type == "string"){
    echo $test."<br>";
}
elseif($type === "boolean" && $test === true) {
    echo "true<br>";} 
elseif($type === "boolean" && $test === false){
            echo "false<br>";}
elseif($type == "integer"){
    $test+=5;
    echo $test."<br>";
}
elseif($type == "double"){
    $test*=7;
    echo $test."<br>";
}
else{
    echo "Error <br>";
}

echo "<hr>";

// Assignment 2
echo "Assignment 2 <br>---------------------<br>";
echo "Ex1 <br>";

//ex1

$films=array("Fast","predestination","persuit","prestige");
$keyword = "avatar";


for($i=0;$i<=count($films)-1;$i++){
    if($films[$i] == $keyword){
        echo 'yes';break;
    }else{
        echo 'No';break;
    }
}

echo "<hr>";
//ex2
echo "Ex2 <br>";

$films2=array("avatar","Prestige","avatar","Prestige");
$keyword2="avatar";

$rpeatNum = 0;
for($i=0;$i<=count($films2)-1;$i++){
 if($films2[$i] == $keyword2) {
     $rpeatNum++;
 }   
}
echo $rpeatNum;
echo "<hr>";
//ex3
echo "Ex3 <br>";
$films3=array("avatar","Prestige","avatar","Prestige");
for($i=count($films3)-1;$i>=0;$i--){
 echo $films3[$i]."&nbsp;";
}
 
echo "<hr>";
//ex4
echo "Ex4 <br>";

echo "using for <br>";
//using for
$tests=array(1,"tariq",1.5,true,7,'s',false);
for($i=0;$i<=count($tests)-1;$i++){
    if(gettype($tests[$i])!= "boolean"){
        echo $tests[$i]."<br>";
    }
}
echo "----------------------------- <br>";
echo "using while <br>";
// using while
$i=0;
while($i < count($tests)-1) {
   if(gettype($tests[$i])!= "boolean"){
        echo $tests[$i]."<br>";
    } 
    
    
$i++;}


echo "<hr>";
//ex5
echo "Ex5 <br>";

$tests=array(5,4,9,3,1,7,5,8,6);
$number=0 ;
$i = 0;
while($i <= count($tests)-1){
  if($tests[$i] > $number){
      $number = $tests[$i];
  }  
$i++;}
echo $number;

echo "<hr>";
//ex6
echo "Ex6 <br>";

$tests=array(5,4,9,3,1,7,5,8,6);
$number=0 ;
$i = 0;
while($i <= count($tests)-1){  
      $number += $tests[$i]; 
$i++;}
echo $number;

echo "<hr>";
//ex7
echo "Ex7 <br>";

$tests=array(6,4,9,3,12,8,7);
$sum=0;
$i = 0;
$avg = 0;
while($i <= count($tests)-1){  
      $sum += $tests[$i]; 
$i++;}
echo  $sum / (count($tests)) ;

echo "<hr>";
//Ex8
echo "Ex8 <br>";


$tests=array(6,4,9,3,12,8,7);
$c = count($tests);
for($i=0;$i<$c;$i++){
    for($j=1;$j<$c;$j++){
        if($tests[$j-1] > $tests[$j]){
           $x = $tests[$j-1];
           $tests[$j-1] = $tests[$j];
           $tests[$j] = $x;
        }
    }
}
// output sorted array with Bubble sort Algorithm
for($i=0;$i<=$c-1;$i++){
    echo $tests[$i];
}


echo "<hr>";
//ex9
echo "Ex9 <br>";

$arr1=array('a','b','c','d');
$arr2=array('c','d','e','f');

$rptChr;
$n1 = count($arr1);
$n2 = count($arr2);
for($i=0;$i<$n1;$i++){
    for($j=0;$j<$n2;$j++){
    if($arr1[$i] == $arr2[$j]){
      $rptChr = $arr1[$i] ;
      echo $rptChr;
    }
   }
  }   























?>