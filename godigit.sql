DROP TABLE IF EXISTS users, hunts, puzzles;

CREATE TABLE users (
  id INTEGER AUTO_INCREMENT,
  username VARCHAR(30),
  email VARCHAR(100),
  password VARCHAR(50),
  CONSTRAINT pk_users PRIMARY KEY (id)
);

CREATE TABLE puzzles (
  id INTEGER AUTO_INCREMENT,
  name VARCHAR(50),
  description TEXT,
  qrcode VARCHAR(100),
  latitude VARCHAR(10),
  longitude VARCHAR(10),
  CONSTRAINT pk_puzzles PRIMARY KEY (id)
);

CREATE TABLE hunts (
  id INTEGER AUTO_INCREMENT,
  name VARCHAR(50),
  qrcode VARCHAR(100),
  clue1 VARCHAR(200),
  clue2 VARCHAR(200),
  clue3 VARCHAR(200),
  comments VARCHAR(500),
  puzzle_id INTEGER,
  CONSTRAINT pk_hunts PRIMARY KEY (id),
  CONSTRAINT fk_puzzle FOREIGN KEY (puzzle_id) REFERENCES puzzles(id)
    ON UPDATE CASCADE ON DELETE SET NULL
);

CREATE TABLE missions (
  id INTEGER AUTO_INCREMENT,
  hunt_id INTEGER,

);