# Pet Adoption System - Lab Assignment 🐾

A web-based pet adoption management system that demonstrates the integration of HTML, CSS, PHP, and MySQL. This project is designed as a learning exercise for web development students.

## Learning Objectives 📚

By completing this project, students will learn to:
- Design responsive web interfaces using HTML and CSS
- Implement database operations with PHP and MySQL
- Handle file uploads and form validation
- Create an interactive web application
- Apply modern UI/UX principles

## Project Requirements 📋

### Step 1: Database Setup
- Create MySQL database for pet data
- Design table structure with appropriate fields
- Set up proper data types and constraints

### Step 2: Web Interface
- Create user-friendly pet submission form
- Implement responsive design
- Style elements using CSS
- Add form validation

### Step 3: Backend Development
- Handle form submissions with PHP
- Manage file uploads
- Implement database operations
- Display pet listings

## Prerequisites 🛠️

- XAMPP (Apache and MySQL)
- Text editor (VS Code recommended)
- Web browser
- Basic knowledge of:
  - HTML/CSS
  - PHP
  - MySQL
  - Form handling

## Installation Steps 🚀

1. Set up XAMPP:
```bash
# Start Apache and MySQL services
```

2. Create project directory:
```bash
# Navigate to htdocs folder
cd /xampp/htdocs
# Create project folder
mkdir pet-adoption
```

3. Set up database:
```sql
# Import database structure
mysql -u root -p < pet_adoption.sql
```

4. Configure permissions:
```bash
# Create and set permissions for uploads folder
mkdir uploads
chmod 777 uploads
```

## Project Files 📁

```
pet-adoption/
├── index.html          # Pet submission form
├── style.css          # CSS styles
├── insert_pet.php     # Form processing
├── view_pets.php      # Pet listing page
├── pet_adoption.sql   # Database structure
└── uploads/           # Image storage
```

## Implementation Guide 📝

### 1. Database Creation
```sql
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
```

### 2. Form Development
- Create pet submission form
- Add input validation
- Style with CSS
- Implement file upload

### 3. PHP Processing
- Validate form inputs
- Handle image uploads
- Insert data into database
- Display success/error messages

## Testing Checklist ✅

1. Database Connection
- [ ] Database creates successfully
- [ ] Table structure is correct
- [ ] Connections work properly

2. Form Functionality
- [ ] All inputs work correctly
- [ ] File upload functions
- [ ] Validation works
- [ ] Error messages display

3. Display Features
- [ ] Pets list shows correctly
- [ ] Images display properly
- [ ] Layout is responsive

## Common Issues & Solutions 🔧

1. Database Connection
```php
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
```

2. File Upload Issues
```php
// Verify upload directory permissions
if (!is_writable('uploads/')) {
    die("Upload directory is not writable");
}
```

## Submission Guidelines 📤

1. Zip your project files:
```
pet-adoption.zip
├── index.html
├── style.css
├── insert_pet.php
├── view_pets.php
└── pet_adoption.sql
```

2. Submit Requirements:
- Working source code
- Database export
- Brief documentation
- Testing results

## Grading Criteria 📊

- Database Design (20%)
- User Interface (25%)
- Functionality (30%)
- Code Quality (15%)
- Documentation (10%)

## Resources 📚

- [PHP Manual](https://www.php.net/manual/en/)
- [MySQL Documentation](https://dev.mysql.com/doc/)
- [W3Schools PHP Tutorial](https://www.w3schools.com/php/)
- [MDN Web Docs](https://developer.mozilla.org/)

---
Created for Web Development Lab Assignment

