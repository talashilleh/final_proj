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
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tech Info</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #0f172a, #1e293b, #2563eb);
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            padding:20px;
        }

        .card{
            background:white;
            width:500px;
            padding:40px;
            border-radius:20px;
            text-align:center;
            box-shadow:0 10px 40px rgba(0,0,0,0.3);
            animation:fadeIn 0.8s ease;
        }

        @keyframes fadeIn{
            from{
                opacity:0;
                transform:translateY(20px);
            }

            to{
                opacity:1;
                transform:translateY(0);
            }
        }

        h1{
            color:#2563eb;
            margin-bottom:20px;
            font-size:40px;
        }

        p{
            color:#444;
            font-size:20px;
            line-height:1.7;
        }

        .back{
            display:inline-block;
            margin-top:30px;
            text-decoration:none;
            background:#2563eb;
            color:white;
            padding:12px 22px;
            border-radius:10px;
            transition:0.3s;
            font-weight:bold;
        }

        .back:hover{
            background:#1d4ed8;
        }

        .emoji{
            font-size:60px;
            margin-bottom:20px;
        }

    </style>

</head>

<body>

<div class="card">

    <div class="emoji">💡</div>

<?php

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

        echo "<h1>" . $word . "</h1>";
        echo "<p>" . $row["definition"] . "</p>";

    }

} else {

    echo "<h1>Not Found</h1>";
    echo "<p>No result found for this term.</p>";

}

$conn->close();

?>

    <a href="index.html" class="back">
        Back
    </a>

</div>

</body>
</html>