<?php 

$comments = array(array('name'=>'richard','url'=>'http://guthnur.net/','comment'=>'this is a test comment'));
$comment = array('name' => 'moose','url'=>'sympicity.com','comment'=>'this is another comment');

$count = count($comments);
if ($count == 1){
	$comments[$count] = $comment;
}else{
	$comments[$count+1] = $comment;
}
var_dump($comments);

?>
