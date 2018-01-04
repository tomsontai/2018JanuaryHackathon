<?php
if(isset($_POST) && isset($_POST['rem'])) {
    $toRemove = $_POST['rem'];
    $dir = "rooms.txt";
    
    $contents = file_get_contents($dir);
    
    $dataSet = explode(",", $contents);
    $dataSet[$toRemove] = '';
    $toAdd = '';
    foreach ($dataSet as $data){
        $toAdd .= $data;
        $toAdd .= ',';
    }
    file_put_contents($dir, $toAdd);
    exit;
}
?>