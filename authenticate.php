<?php

$status = false;

if(!empty($_COOKIE['user']) && !empty($_COOKIE['userId']) && !empty($_COOKIE['time']) && !empty($_COOKIE['hash'])) {
	$status = true;
}
?>