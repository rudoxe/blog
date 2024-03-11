CREATE DATABASE blog_rudis;
USE blog_rudis;


CREATE TABLE posts (
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
title VARCHAR(255) NOT NULL
);

INSERT INTO posts
(title)
VALUES
("My First Blog post"),
("My Second Blog post");

SELECT * FROM posts;


CREATE TABLE categories (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(255) NOT NULL,
	description TEXT
);
INSERT INTO categories
(name)
VALUES
("sport"),
("music"),
("food");


ALTER TABLE posts 
ADD category_id INT NOT NULL DEFAULT 1;


ALTER TABLE posts
ADD FOREIGN KEY (category_id) REFERENCES categories(id);

UPDATE posts
SET category_id = 3
WHERE id = 2;


SELECT * FROM posts;
