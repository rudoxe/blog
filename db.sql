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