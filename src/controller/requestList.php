<?php
require('dbSession.php');

$database = new App/Database();
$requests = $database->mysql->query('select * FROM citas');

foreach($requests as $request) {
    echo "<tr>";
    echo "<td>"$request['Coder/Team']"</td>";
    echo "<td>"$request['Topic']"</td>";
    echo "<td>"$request['Date/Time']"</td>";
    echo "</tr>";
}
?>