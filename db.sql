CREATE DATABASE blog_IPa22;
USE blog_IPa22;

SELECT * FROM posts;

CREATE TABLE posts (
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
title VARCHAR(255) NOT NULL
);

INSERT INTO posts
(title)
VALUES
("My First Blog post"),
("My Second Blog post");