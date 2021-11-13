
CREATE TABLE IF NOT EXISTS users(
    id INT(11) AUTO_INCREMENT NOT NULL,
    CONSTRAINT pk_id PRIMARY KEY(id),
    firstname VARCHAR(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    lastname VARCHAR(80) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
    email VARCHAR(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    password VARCHAR(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    created DATETIME ,
    modified TIMESTAMP 
)CHARACTER SET utf8 COLLATE utf8_general_ci;