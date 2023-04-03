# docker_prj

This is a docker project for a school assignement. 
This docker compose creates an environment with python, nodejs, php, adminer, mysql, mongodb and redis containers.

Version 1.0 - This version has enough content to be delivered.

Version 1.1 - This version is unfinished. The connection between mysql and php web page is being established.

Version 1.2 - Connection between mysql database and php web page established succesfully. The web page contains a form that sends the info to a database.


CREATE TABLE messages (
    id INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    gender VARCHAR(50) NOT NULL,
    address VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

SELECT * FROM messages;

<!-- To do:

Dependencies

Mongo - Python connection

Redis - Nodejs Connection

Nodejs basic webpage

Databases - save only the databases