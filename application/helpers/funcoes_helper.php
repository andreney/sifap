<?php
function tempo($inicio , $fim , $saidaFormatada = '%a' ){
	$data1 = date_create($inicio);
	$data2 = date_create($fim);
	$interval = date_diff($data1, $data2);
	return $interval->format($saidaFormatada);
}
?>