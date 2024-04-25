<?php 
// Include the database config file 
include_once 'connection.php'; 

 
if(!empty($_POST["region_id"])){ 
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM district WHERE region_id = ".$_POST['region_id']." AND status = 1 ORDER BY district ASC"; 
    $result = $conn->query($query); 
     
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 
        echo '<option value="">Select district</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['district'].'">'.$row['district'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">district not available</option>'; 
    } 
}elseif(!empty($_POST["d_id"])){ 
    // Fetch city data based on the specific state 
    $query = "SELECT * FROM cities WHERE state_id = ".$_POST['state_id']." AND status = 1 ORDER BY city_name ASC"; 
    $result = $conn->query($query); 
     
    // Generate HTML of city options list 
    if($result->num_rows > 0){ 
        echo '<option value="">Select city</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">City not available</option>'; 
    } 
} 
?>
<script src="plugins/jquery/jquery.min.js"></script>