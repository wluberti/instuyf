USE instuyf;

CREATE TABLE IF NOT EXISTS instuyf_users
(
    id          int(11)     NOT NULL auto_increment,
    email       varchar(50) NOT NULL,
    displayname varchar(50),
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS instuyf_events
(
    id          int(11)     NOT NULL auto_increment,
    date datetime NOT NULL ,
    user_id int(11),
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES instuyf_users(id)
);

insert into instuyf_users
    (email, displayname) VALUES ('test@email.com', 'tester');
