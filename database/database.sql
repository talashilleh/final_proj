CREATE TABLE terms (
    id INT AUTO_INCREMENT PRIMARY KEY,
    word VARCHAR(255),
    definition TEXT
);

INSERT INTO terms (word, definition) VALUES
('git', 'Git is a version control system'),
('docker', 'Docker is a container platform'),
('linux', 'Linux is an operating system');