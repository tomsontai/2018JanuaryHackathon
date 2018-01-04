<?php
if(isset($_POST) && isset($_POST['txt1'])) {
    $text = $_POST['txt1'];
    $dir = "rooms.txt";
    $contents = file_get_contents($dir);
    $contents .= $text . ",";
    file_put_contents($dir, $contents);
    exit;
}
?>