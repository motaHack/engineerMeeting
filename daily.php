<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>エンジニア定例</title>
</head>

<?php
$section = simplexml_load_file('./daily.rdf');
$title=array();
$desc=array();
$link=array();
foreach($section as $item){
    $title[$i]=$item->title;
		$desc[$i]=$item->description;
		$link[$i]=$item->link;
    $i++;
}

echo("<br />");
var_dump($section);

?>

</html>
