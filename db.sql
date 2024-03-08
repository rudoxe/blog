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
id INT PRIMARY KEY AUTO_INCREMENT
name VARCHAR(255) NOT NULL,
description TEXT
);

INSERT INTO categories (NAME) VALUES ('sport'), ('music'), ('food');

ALTER TABLE posts ADD COLUMN category_id INT;

UPDATE posts SET category_id = (SELECT id FROM categories WHERE name = 'sport') WHERE id = 1;
UPDATE posts SET category_id = (SELECT id FROM categories WHERE name = 'food') WHERE id = 2;