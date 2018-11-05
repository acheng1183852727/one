<?php
	// $abc = 'asdsdd张三';
	// $length = strlen($abc);
	// var_dump($length);
	// echo "------------------------------";
	// $zifu = 'aaasdsdsaasd';
	// echo substr_count($zifu,'a');
	// $chongfu = substr_count($zifu,'a');
	// var_dump($chongfu);

$people = array("Bill", "Steve", "Mark", "David");

 var_dump(in_array("Mar", $people));

if (in_array("Mark", $people))

  {

  echo "匹配已找到";

  }

else

  {

  echo "匹配未找到";

  }
?>