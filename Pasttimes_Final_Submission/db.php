<?php
$conn = new mysqli('localhost', 'root', '', 'clothingstoredb');

if ($conn->connect_error) {
    echo "Error!: {$conn->connect_error}";
}
?>