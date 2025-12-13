CREATE DATABASE wild_west;

USE wild_west;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100),
    email VARCHAR(150) UNIQUE,
    password VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    author VARCHAR(255),
    image VARCHAR(255),
    rating INT,
    rating_value DECIMAL(3,2),
    description TEXT,
    genre VARCHAR(255),
    slug VARCHAR(100)
);

INSERT INTO products
(title, author, image, rating, rating_value, description, genre, slug)
VALUES
(
 'Jonah Hex: Two-Gun Mojo',
 'Joe R. Lansdale',
 'buku1.png',
 4,
 3.99,
 'Now avaible as a soft cover trade paperback: A gorgeous original graphic novel from the bestselling creators of KILL OR BE KILLED, MY HEROES HAVE ALWAYS BEEN JUNKIES, and CRIMINAL.',
 'Comics, Graphic Novel Westerns, Horror, Weird West, Fiction',
 'jonah-hex'
);

INSERT INTO products
(title, author, image, rating, rating_value, description, genre, slug)
VALUES
(
 'The Sixth Gun Omnibus Vol. 1',
 'Cullen Bunn',
 'buku2.png',
 4,
 4.12,
 'Now avaible as a soft cover trade paperback: A gorgeous original graphic novel from the bestselling creators of KILL OR BE KILLED, MY HEROES HAVE ALWAYS BEEN JUNKIES, and CRIMINAL.',
 'Comics, Graphic Novel, Westerns, Horror, Fantasy',
 'sixth-gun'
);

INSERT INTO products
(title, author, image, rating, rating_value, description, genre, slug)
VALUES
(
 'All-Star Western, Volume 1: Guns and Gotham',
 'Ed Brubaker',
 'buku3.png',
 4,
 4.51,
 'Now avaible as a soft cover trade paperback: A gorgeous original graphic novel from the bestselling creators of KILL OR BE KILLED, MY HEROES HAVE ALWAYS BEEN JUNKIES, and CRIMINAL.',
 'Comics, Graphic Novel, Westerns, Horror, Fantasy',
 'all-star'
);

INSERT INTO products
(title, author, image, rating, rating_value, description, genre, slug)
VALUES
(
 'Pulp',
 'Sean Philips',
 'buku4.png',
 4,
 4.51,
 'Now avaible as a soft cover trade paperback: A gorgeous original graphic novel from the bestselling creators of KILL OR BE KILLED, MY HEROES HAVE ALWAYS BEEN JUNKIES, and CRIMINAL.',
 'Comics, Graphic Novel, Westerns, Horror, Fantasy',
 'pulp'
);





