<?php
if(isset($_POST) && isset($_POST['txt1'])) {
    $text = $_POST['txt1'];
    $dir = "rooms.txt";
    $contents = file_get_contents($dir);
    $contents .= $text . ",";
    file_put_contents($dir, $contents);
    exit;
}

function select() {
    $dir = "rooms.txt";
    $contents = file_get_contents($dir);
    $contents .= "123,";
    file_put_contents($dir, $contents);
    exit;
}

function insert() {
    $dir = "rooms.txt";
    $contents = file_get_contents($dir);
    $contents = str_replace("123,", '', $contents);
    file_put_contents($dir, $contents);
    exit;
}
?>