<?php
	$bday = strtotime($_POST['birthday']);
	$birth_day_month = date('d M', $bday);
	$bts = strtotime($birth_day_month." ".date("y"));
	$ts = time();

	if ($bts < $ts) {$bts = strtotime($birth_day_month." ".date("y",strtotime("+1 year")));}

	echo 'Only ' . round(($bts - $ts) / 86400) . ' more days \'till your birthday!';
 ?>