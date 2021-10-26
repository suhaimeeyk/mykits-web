CREATE DATABASE IF NOT EXISTS expmykits CHARACTER SET utf8 COLLATE utf8_general_ci;
/*---------dbprefix-----------*/
CREATE TABLE IF NOT EXISTS dbprefix(

 	idprefix INT(4) AUTO_INCREMENT NOT NULL,
    CONSTRAINT pk_idprefix PRIMARY KEY (idprefix),
    nameprefix char(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
    
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*--------dbsex-----------*/
CREATE TABLE IF NOT EXISTS dbsex(
 	idsex INT(4) AUTO_INCREMENT NOT NULL,
    CONSTRAINT pk_idsex PRIMARY KEY (idsex),
    namesex char(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*----------dbpossition----------*/
CREATE TABLE IF NOT EXISTS dbposition(
 	idposition INT(4) NOT NULL,
    CONSTRAINT pk_idposition PRIMARY KEY (idposition),
    namepossition char(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*-------------dbuser-----------*/
CREATE TABLE IF NOT EXISTS dbuser(
    iduser INT(4) AUTO_INCREMENT NOT NULL,
    CONSTRAINT pk_iduser PRIMARY KEY(iduser),
    nameuser CHAR(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    addressuser VARCHAR(80) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
    phoneuser CHAR(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    idprefix INT(4) NOT NULL,
    CONSTRAINT fk_idprefix_dbuser FOREIGN KEY (idprefix) REFERENCES dbprefix(idprefix) ON UPDATE CASCADE,
    idsex INT(4) NOT NULL,
    CONSTRAINT fk_idsex_dbuser FOREIGN KEY (idsex) REFERENCES dbsex(idsex) ON UPDATE CASCADE,
    idposition INT(4) NOT NULL,
    CONSTRAINT fk_idposition_dbuser FOREIGN KEY (idposition) REFERENCES dbposition(idposition) ON UPDATE CASCADE
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*-------------librarian-----------*/
CREATE TABLE IF NOT EXISTS dbaddmin(
    idaddmin INT(4) NOT NULL,
    CONSTRAINT pk_idaddmin PRIMARY KEY(idaddmin),
    nameaddmin CHAR(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    addressaddmin VARCHAR(80) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
    phoneaddmin CHAR(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    idprefix INT(4) NOT NULL,
    CONSTRAINT fk_idprefix_dbaddmin FOREIGN KEY (idprefix) REFERENCES dbprefix(idprefix) ON UPDATE CASCADE,
    idsex INT(4) NOT NULL,
    CONSTRAINT fk_idsex_dbaddmin FOREIGN KEY (idsex) REFERENCES dbsex(idsex) ON UPDATE CASCADE,
    idposition INT(4) NOT NULL,
    CONSTRAINT fk_idposition_dbaddmin FOREIGN KEY (idposition) REFERENCES dbposition(idposition) ON UPDATE CASCADE
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*-------------dbsentaddmin-----------*/
CREATE TABLE IF NOT EXISTS dbsentaddmin(
 	idsentaddmin INT(4) AUTO_INCREMENT NOT NULL,
    CONSTRAINT pk_idsentaddmin PRIMARY KEY (idsentaddmin),
    namesentaddmin char(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*-------------dbcategory-----------*/
CREATE TABLE IF NOT EXISTS dbcategory(
 	idcategory INT(4) NOT NULL,
    CONSTRAINT pk_idcategory PRIMARY KEY (idcategory),
    namecategory VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*-------------dbstriped-----------*/
CREATE TABLE IF NOT EXISTS dbstriped(
 	idstriped INT(4) NOT NULL,
    CONSTRAINT pk_idstriped PRIMARY KEY (idstriped),
    namestriped VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    idcategory INT(4) NOT NULL,
    CONSTRAINT fk_idcategory_dbstriped FOREIGN KEY (idcategory) REFERENCES dbcategory(idcategory) ON UPDATE CASCADE
)CHARACTER SET utf8 COLLATE utf8_general_ci;

/*-------------dbproduct-----------*/
CREATE TABLE IF NOT EXISTS dbproduct(
 	idproduct INT(4) NOT NULL,
    CONSTRAINT pk_idproduct PRIMARY KEY (idproduct),
    nameproduct VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    idstriped INT(4) NOT NULL,
    CONSTRAINT fk_idstriped_dbproduct FOREIGN KEY (idstriped) REFERENCES dbstriped(idstriped) ON UPDATE CASCADE,
    idcategory INT(4) NOT NULL,
    CONSTRAINT fk_idcategory_dbproduct FOREIGN KEY (idcategory) REFERENCES dbcategory(idcategory) ON UPDATE CASCADE
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*-------------dbbodyshirt-----------*/
CREATE TABLE IF NOT EXISTS dbbodyshirt(
 	idbodyshirt INT(4) NOT NULL,
    CONSTRAINT pk_idbodyshirt PRIMARY KEY (idbodyshirt),
    fronbody VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    behindbody VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*-------------dbcovershirt-----------*/
CREATE TABLE IF NOT EXISTS dbcovershirt(
 	idcovershirt INT(4) NOT NULL,
    CONSTRAINT pk_idcovershirt PRIMARY KEY (idcovershirt),
    namecovershirt VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*-------------dbcolorshirt-----------*/
CREATE TABLE IF NOT EXISTS dbcolorshirt(
 	idcolorshirt INT(4) NOT NULL,
    CONSTRAINT pk_idcolorshirt PRIMARY KEY (idcolorshirt),
    namecolorshirt VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*-------------dbfloorshirt-----------*/
CREATE TABLE IF NOT EXISTS dbfloorshirt(
 	idfloorshirt INT(4) NOT NULL,
    CONSTRAINT pk_idfloorshirt PRIMARY KEY (idfloorshirt),
    namefloorshirt VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*-------------dbdesign-----------*/
CREATE TABLE IF NOT EXISTS dbdesign(
 	iddesign INT(4) AUTO_INCREMENT NOT NULL,
    CONSTRAINT pk_iddesign PRIMARY KEY (iddesign),
    namedesign VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    idcategory INT(4) NOT NULL,
    CONSTRAINT fk_idcategorydbdetailbuy FOREIGN KEY (idcategory) REFERENCES dbcategory(idcategory) ON UPDATE CASCADE,
    idbodyshirt INT(4) NOT NULL,
    CONSTRAINT fk_idbodyshirt_dbdesign FOREIGN KEY (idbodyshirt) REFERENCES dbbodyshirt(idbodyshirt) ON UPDATE CASCADE,
    idcovershirt INT(4) NOT NULL,
    CONSTRAINT fk_idcovershirt_dbdesign FOREIGN KEY (idcovershirt) REFERENCES dbcovershirt(idcovershirt) ON UPDATE CASCADE,
    idfloorshirt INT(4) NOT NULL,
    CONSTRAINT fk_idfloorshirt_dbdesign FOREIGN KEY (idfloorshirt) REFERENCES dbfloorshirt(idfloorshirt) ON UPDATE CASCADE,
    idproduct INT(4) NOT NULL,
    CONSTRAINT fk_idproduct_dbdesign FOREIGN KEY (idproduct) REFERENCES dbproduct(idproduct) ON UPDATE CASCADE,
    iduser INT(4) NOT NULL,
    CONSTRAINT fk_iduser_dbdesign FOREIGN KEY (iduser) REFERENCES dbuser(iduser) ON UPDATE CASCADE,
    idcolorshirt INT(4) NOT NULL,
    CONSTRAINT fk_idcolorshirt_dbdesign FOREIGN KEY (idcolorshirt) REFERENCES dbcolorshirt(idcolorshirt) ON UPDATE CASCADE
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*-------------dbdetailbuy-----------*/
CREATE TABLE IF NOT EXISTS dbdetailbuy(
 	iddetailbuy INT(4) NOT NULL,
    CONSTRAINT pk_iddetailbuy PRIMARY KEY (iddetailbuy),
    idaddmin INT(4) NOT NULL,
    CONSTRAINT fk_idaddmin_dbdetailbuy FOREIGN KEY (idaddmin) REFERENCES dbaddmin(idaddmin) ON UPDATE CASCADE,
    iduser INT(4) NOT NULL,
    CONSTRAINT fk_iduser_dbdetailbuy FOREIGN KEY (iduser) REFERENCES dbuser(iduser) ON UPDATE CASCADE,
    iddesign INT(4) NOT NULL,
    CONSTRAINT fk_iddesign_dbdetailbuy FOREIGN KEY (iddesign) REFERENCES dbdesign(iddesign) ON UPDATE CASCADE
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*-------------dbdetailbuy-----------*/