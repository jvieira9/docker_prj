<?php
// The MySQL service named in the docker-compose.yml.
$host = 'mysql';

// Database use name
$user = 'xpto';

//database user password
$pass = 'xpto';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}

?>