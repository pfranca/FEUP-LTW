CREATE TABLE user(
   user_id INTEGER PRIMARY KEY,
   user_username VARCHAR NOT NULL,
   user_fullName VARCHAR,
   user_birthDate VARCHAR,
   user_photoId VARCHAR,
   user_gender VARCHAR,
   user_password VARCHAR NOT NULL
);



CREATE TABLE task(
  task_id INTEGER PRIMARY KEY ,
  task_content VARCHAR NOT NULL,
  task_checkdone INTEGER NOT NULL
);

CREATE TABLE  list(
  list_id INTEGER PRIMARY KEY,
  list_name VARCHAR NOT NULL,
  task_id INTEGER REFERENCES task NOT NULL
);
