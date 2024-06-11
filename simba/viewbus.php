<?php
require_once '(includes/connection.php)';

$route_name = $_GET['route_name'];

$sql = "SELECT b.bus_number, b.bus_name, b.class, b.capacity, b.cost, r.route_name, r.from, r.destination, r.time, r.stopping_points, r.agent 
        FROM bus b 
        INNER JOIN routes r ON b.route_name = r.route_name 
        WHERE r.route_name = '$route_name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Bus Details</h1>";
    echo "<table border='1'>
            <tr>
                <th>Bus Number</th>
                <th>Bus Name</th>
                <th>Class</th>
                <th>Capacity</th>
                <th>Cost</th>
                <th>Route Name</th>
                <th>From</th>
                <th>Destination</th>
                <th>Time</th>
                <th>Stopping Points</th>
                <th>Agent</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['bus_number'] . "</td>
                <td>" . $row['bus_name'] . "</td>
                <td>" . $row['class'] . "</td>
                <td>" . $row['capacity'] . "</td>
                <td>" . $row['cost'] . "</td>
                <td>" . $row['route_name'] . "</td>
                <td>" . $row['from'] . "</td>
                <td>" . $row['destination'] . "</td>
                <td>" . $row['time'] . "</td>
                <td>" . $row['stopping_points'] . "</td>
                <td>" . $row['agent'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No bus details found for the selected route.";
}

$conn->close();
?>
