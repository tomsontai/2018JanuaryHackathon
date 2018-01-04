<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=studybuddy", "root", "password");
    echo "Connected Successfully.";
} 
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Building</th><th>Room #</th><th>Program</th><th>Capacity</th><th>Key</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 


//$sql = "INSERT INTO rooms room_number VALUES ('SW07', '211', 'BUSA', 20, NULL)";

$stmt = $conn->prepare("SELECT * FROM rooms");
$stmt->execute();

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }

$conn = NULL;
echo "</table>";

?>
<html>
   <head>
       <title>Test Database</title>
   </head>
   <body>
       
   </body>
</html>