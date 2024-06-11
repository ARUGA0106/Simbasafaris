<?php
require_once '(includes/connection.php)';

$from = $_GET['from'];
$destination = $_GET['destination'];
$date = $_GET['date'];

$sql = "SELECT * FROM routes WHERE `from`='$from' AND destination='$destination'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Available Buses</h1>";
    echo "<table border='1'>
            <tr>
                <th>Route Name</th>
                <th>From</th>
                <th>Destination</th>
                <th>Time</th>
                <th>Cost</th>
                <th>Agent</th>
                <th>View Bus</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['route_name'] . "</td>
                <td>" . $row['from'] . "</td>
                <td>" . $row['destination'] . "</td>
                <td>" . $row['time'] . "</td>
                <td>" . $row['cost'] . "</td>
                <td>" . $row['agent'] . "</td>
                <td><form action='viewbus.php' method='GET'>
                    <input type='hidden' name='route_name' value='" . $row['route_name'] . "'>
                    <input type='submit' value='View Bus'>
                </form></td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No buses found for the specified route and date.";
}

$conn->close();
?>
