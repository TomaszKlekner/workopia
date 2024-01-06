SHOW DATABASES;

CREATE DATABASE blog

USE blog;

SHOW TABLES;

CREATE TABLE posts(
  `id` INT AUTO_INCREMENT NOT NULL, 
  `title` VARCHAR(255) NOT NULL,
  `body` TEXT NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY(`id`)
);

INSERT INTO posts(title, body) VALUES ('Post Two','This is Post Two');

 SELECT * FROM posts;

 SELECT * FROM posts WHERE id = 2;

 UPDATE posts SET body = 'This is an updated post.' WHERE id = 2;

 DELETE FROM posts WHERE id = 2;

 INSERT INTO posts(title, body) VALUES ('Post Four','This is Post Four'), ('Post Five','This is Post Five'), ('Post Six','This is Post Six');

 DROP DATABASE blog;