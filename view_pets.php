<!DOCTYPE html>
<html lang="en">
<head>
    <title>Available Pets</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Available Pets</h1>
    <?php
    $conn = new mysqli('localhost', 'root', '', 'pet_adoption');

    if ($conn->connect_error) {
        die('Sorry, could not connect to database.');
    }

    $result = $conn->query('SELECT * FROM pets ORDER BY type');

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr>
                <th>Photo</th>
                <th>Name</th>
                <th>Type</th>
                <th>Age</th>
                <th>Description</th>
              </tr>";

        while ($pet = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><img src='{$pet['image_path']}' width='100' height='100' alt='Pet photo'></td>";
            echo "<td>{$pet['name']}</td>";
            echo "<td>{$pet['type']}</td>";
            echo "<td>{$pet['age']} years</td>";
            echo "<td>{$pet['description']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p style='text-align: center'>No pets available for adoption yet.</p>";
    }

    $conn->close();
    ?>
    <a href="index.html" class="view-pets-button">Add New Pet</a>
</body>
</html>
