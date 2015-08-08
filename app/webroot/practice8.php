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

function name($id){

if($id<5){

var_dump($value['user_name']);
	echo "<br>";

}else{

	echo "not exit";
}


}

foreach($new as $key => $value){


/*
	var_dump($value['title']);
	echo "<br>";

*/


}



?>