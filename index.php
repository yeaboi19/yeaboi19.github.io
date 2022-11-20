<!DOCTYPE html>
<html>

<head style="background-color: cadetblue;">
    <h1 style="color: blue;">Welcome to the mega gay zone!!!111111</h1>
</head>

<body style="background-color: darkseagreen;">
    <input type="button" onclick="location.href='/200MB/Main/200MB.html'" value="Bacho moment" />
    <br>
    <br>
    <input type="button" onclick="location.href='Me_When_The/MainMenu/Index.html'" value="Nika moment" />
    <?php
$servername = "sql7.freesqldatabase.com";
$username = "sql7578856";
$password = "rxcTUlH4Kt";
$dbname = "sql7578856";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM reportedUrls";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo ",{\"id\":\"" . $row["id"]. "\",\"url\":\"" . $row["url"]. "\",\"reason\":\"" . $row["reason"]. "\",\"count\":\"" . $row["reportCount"] . "\"}";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</body>

</html>
