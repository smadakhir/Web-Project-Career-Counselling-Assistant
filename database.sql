CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100) UNIQUE,
  password VARCHAR(255)
);

CREATE TABLE questions (
  id INT AUTO_INCREMENT PRIMARY KEY,
  question_text TEXT
);

CREATE TABLE answers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  question_id INT,
  answer_text TEXT
);

CREATE TABLE careers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(100),
  description TEXT,
  tags TEXT
);

INSERT INTO careers (title, description, tags) VALUES
('Software Engineer', 'Develops applications and systems using programming languages.', 'problem-solving,technology'),
('Human Resource Manager', 'Manages employee relations and organizational structure.', 'people,organization'),
('Data Analyst', 'Analyzes and visualizes data for business decisions.', 'data,logic');