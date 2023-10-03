<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'willmiso_hw3user', '!P4n-w_Fhdpy', 'willmiso_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
