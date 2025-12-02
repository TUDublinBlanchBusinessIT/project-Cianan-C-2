CREATE DATABASE assignment_tracker;

USE assignment_tracker;

CREATE TABLE assignments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    module_name VARCHAR(100) NOT NULL,
    title VARCHAR(255) NOT NULL,
    due_date DATE NOT NULL
);
