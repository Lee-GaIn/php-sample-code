/*Delete table if exists*/
DROP TABLE IF EXISTS myplaylist1;
DROP TABLE IF EXISTS myplaylist2;

/*Create table*/
CREATE TABLE myplaylist1 (
    name varchar(256) NOT NULL,
    singer varchar(256) DEFAULT NULL,
    PRIMARY KEY (name)
);

CREATE TABLE myplaylist2 (
    name varchar(256) NOT NULL,
    singer varchar(256) DEFAULT NULL,
    PRIMARY KEY (name)
);

/*Insert data*/
INSERT INTO myplaylist1
VALUES ("Ditto", "NewJeans"),
("Witch", "Lee Young-Ji"),
("Good Parts", "LE SSERAFIM");

INSERT INTO myplaylist2
VALUES ("Nxde", "G-IDLE"),
("Girls", "Aespa"),
("Cheer Up", "SNSD");