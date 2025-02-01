
CREATE DATABASE pet_adoption;

USE pet_adoption;

CREATE TABLE pets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    type VARCHAR(50),
    age INT,
    description TEXT,
    image_path VARCHAR(255)
);
