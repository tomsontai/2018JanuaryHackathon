<?php
if(isset($_POST) && isset($_POST['rem'])) {
    $toRemove = $_POST['rem'];
    $dir = "rooms.txt";
    
    $contents = file_get_contents($dir);
    
    $dataSet = explode(",", $contents);
    $indexToRemove = $toRemove;
    $toAdd = '';
    
    for ($i = 0; $i < sizeof($dataSet); $i++) {
        if ($i != $indexToRemove) {
            if ($i != sizeof($dataSet) - 1){
                $toAdd .= $dataSet[$i] . ",";    
            } else {
                $toAdd .= $dataSet[$i];
            }
        } 
    }
    file_put_contents($dir, $toAdd);
    exit;
}
?>