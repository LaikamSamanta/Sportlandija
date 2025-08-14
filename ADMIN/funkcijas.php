<?php
include 'config.php';

function closedb() {
    global $conn;
    $conn->close();	
    }
    
// pārbaudīt paroli un lietotājvārdu
function checklogin($username, $pass) {
global $conn;
$sql = "SELECT * FROM users WHERE username = '".$username."' AND pass = '".$pass."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	return true;	
} else { return false; }
}
?>