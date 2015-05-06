<?php

$link = mysqli_connect("localhost", "yoda","12345","d_book");
echo (!$link?die("Connection Failed"):"Connection Successful");

?>