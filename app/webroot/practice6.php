<?php

$new = array(
0 => array(
'id' => 1,
'user_name' => 'sakura',
'title' => 'title1',
'content' => 'content1',
	),

1=> array(
'id' => 2,
'user_name' => 'kurumi',
'title' => 'title2',
'content' => 'content2',
	),

2 => array(
'id' => 3,
'user_name' => 'sakura',
'title' => 'title3',
'content' => 'content3',
	),

3 => array(
'id' => 4,
'user_name' => 'michel',
'title' => 'title4',
'content' => 'content4',
	),


	);

foreach($new as $key => $value){

	//keyは0,1,2,3であり配列ではない

	//echo "$key<br>";

/*
var_dump($key);
	echo "<br>";
*/

/*
	if($key == 'title'){
	var_dump($value);
	echo "<br>";
}
	*/

	var_dump($value['title']);
	echo "<br>";



	//var_dump($value['title']);
	//echo "<br>";

}



?>