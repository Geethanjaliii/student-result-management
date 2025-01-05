CREATE DATABASE student_results;

USE student_results;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    name VARCHAR(100) NOT NULL,
    dob DATE NOT NULL,
    result VARCHAR(20) NOT NULL
);

INSERT INTO students (username, name, dob, result)
VALUES 
('john123', 'John Doe', '2000-05-15', 'Pass'),
('jane456', 'Jane Smith', '2001-08-20', 'Fail');