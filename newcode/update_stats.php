<?php

$health = protect($_POST['health']);
$updatehp = $health + 1;
if ($updatehp > 100) {
	$updatehp = 100;
}



$num1 = min($weapon['sword'],$unit['warrior']);

if($num1 == $weapon['sword']){
    $attack = (10 * $weapon['sword']) + ($unit['warrior'] - $weapon['sword']);
}else{
    $attack = (10 * $unit['warrior']);
}

$num2 = min($weapon['shield'],$unit['defender']);

if($num2 == $weapon['shield']){
    $defense = (10 * $weapon['shield']) + ($unit['defender'] - $weapon['shield']);
}else{
    $defense = (10 * $unit['defender']);
}

$num3 = min($weapon['tome'],$unit['wizard']);

if($num3 == $weapon['tome']){
	$manapow = (50 * $weapon['tome']) + (10 *($unit['wizard'] - $weapon['tome']));
}else{
	$manapow = (10 * $unit['wizard']);
}
$update_stats = mysql_query("UPDATE `stats` SET 
                            `health`='".$updatehp."', `income`='".$income."', `farming`='".$farming."',
                            `attack`='".$attack."',`defense`='".$defense."',
                            `manapow`='".$manapow."'
                            WHERE `id`='".$_SESSION['uid']."'") or die(mysql_error());

?>