<?php

$isLoggedIn = true;
$isAdmin = false;
$isAuthor = true;

if($isAuthor || $isAdmin) && $isLoggedIn) {
	echo "click here to edit this post";
}

if($isLoggedIn && ($isAuthor || $isAdmin)) {
	echo "click here to edit this post";
}
?>