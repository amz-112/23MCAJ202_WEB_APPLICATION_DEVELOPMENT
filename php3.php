<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Cricket Players</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 10px;
            border: 1px solid black;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

    <h2>List of Indian Cricket Players</h2>

    <?php
    // Array of Indian Cricket Players
    $players = array(
        "Virat Kohli","K L Rahul", "Rohit Sharma", "MS Dhoni","Yuzvendra Chahal","Sanju Samson", "Sachin Tendulkar",
        "Rahul Dravid", "Sourav Ganguly", "Yuvraj Singh", "Kapil Dev",
        "Anil Kumble", "Jasprit Bumrah"
    );

    echo "<table>";
    echo "<tr><th>Player Name</th></tr>";

    // Loop through array and display in table
    foreach ($players as $player) {
        echo "<tr><td>$player</td></tr>";
    }

    echo "</table>";
    ?>

</body>
</html>
