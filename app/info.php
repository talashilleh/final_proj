<?php

$conn = new mysqli("db", "root", "root", "techdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$word = $_GET['word'];

$sql = "SELECT definition FROM terms WHERE word='$word'";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tech Info</title>
</head>
<body>

<?php

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

        echo "<h2>" . $word . "</h2>";
        echo "<p>" . $row["definition"] . "</p>";

    }

} else {

    echo "No result found";

}

$conn->close();
?>
</body>
</html>