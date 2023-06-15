<?php
function db_check()
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $conn = new mysqli($servername, $username, $password);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "CREATE DATABASE IF NOT EXISTS user";
  $dbname = "user";
  if (mysqli_query($conn, $sql)) {
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "CREATE TABLE IF NOT EXISTS user_account (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) NOT NULL,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(32) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    if (mysqli_query($conn, $sql)) {
      if (($handle = fopen($_SERVER["DOCUMENT_ROOT"] . "/HW3/src/csv/user_account.csv", "r")) !== FALSE) {
        $i = 0;
        while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
          if ($i == 0) {  // 跳過第一列
            $i++;
            continue;
          }
          $email = $data[1];
          $username = $data[2];
          $password = $data[3];
          $reg_date = $data[4];
          // echo $email. '  '. $username. '  '. $password. '  '. $reg_date. '<br>';
          $query = "INSERT INTO user_account (email, username, password, reg_date) VALUES 
            ('$email', '$username', '$password', '$reg_date')";
          $result = mysqli_query($conn, $query);
          if ($result == false) {
            echo 'Error description <br/>' . mysqli_error($conn);
          }
        }
        fclose($handle);
      }
    } else {
      echo "Error creating table: " . $conn->error;
    }
  }
  return  $conn = new mysqli($servername, $username, $password, $dbname);
}
