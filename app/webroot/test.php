<?php
 
 
/*
for($i=0; $i<10; $i++){

echo 'test'."<br>";
echo 100 ."<br>";

}

*/

/*
$test1 ='str';
echo $test1 ."<br>";
echo "$test1<br>";

$test2 =1;
echo $test2 . "<br>";

$test3 =0.1;
echo $test3 . "<br>";
*/

//配列
//$a=array(5,6,7,8);

/*
$a[]=5;
$a[]=6;
$a[]=7;
$a[]=8;
$a[]=4;
$a[]=4;

for($j=0; $j<6; $j++){
echo "$a[$j]<br>";

}

$b = array('str',1,0,0.1);
var_dump($b);
*/

$userdata = array(

'id' => 1,
'user_name' => 'sakura',
'title' => 'title1',
'content' => 'content1',


	);

foreach($userdata as $key => $value){

	//$keyも$valueも配列ではない

	//$keyはid,user_name,title,contentであり$value配列ではないだからechoもできる

//	echo "$key<br>";
//	echo "$value<br>";

	//var_dump($key);
	//echo "<br>";

	echo $value;

	//var_dump($value);
	echo "<br>";

}

//var_dump($value['title']);


?>