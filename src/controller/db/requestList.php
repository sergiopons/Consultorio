<?php
require('dbSession.php');

$database = new App/Database();
$requests = $database->mysql->query('select * FROM citas');

foreach($requests as $request) {
    echo "<tr>
    <td>{$request['Coder/Team']}</td>
    <td>{$request['Topic']}</td>
    <td>{$request['Date/Time']}</td>
    </tr>";
}
?>