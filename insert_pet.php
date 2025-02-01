<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $age = $_POST['age'];
    $description = $_POST['description'];
    $image = $_FILES['image'];

    if ($image['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        $imagePath = $uploadDir . basename($image['name']);
        
        if (move_uploaded_file($image['tmp_name'], $imagePath)) {
            $conn = new mysqli('localhost', 'root', '', 'pet_adoption');

            if ($conn->connect_error) {
                die('Connection failed: ' . $conn->connect_error);
            }

            $stmt = $conn->prepare('INSERT INTO pets (name, type, age, description, image_path) VALUES (?, ?, ?, ?, ?)');
            $stmt->bind_param('ssiss', $name, $type, $age, $description, $imagePath);

            if ($stmt->execute()) {
                echo "Pet added successfully! <a href='view_pets.php'>View Pets</a>";
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
            $conn->close();
        } else {
            echo "Failed to upload image.";
        }
    } else {
        echo "Error uploading file.";
    }
}
?>
