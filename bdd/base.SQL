DROP DATABASE IF EXISTS RAP_SIMPLE;

CREATE DATABASE IF NOT EXISTS RAP_SIMPLE;
USE RAP_SIMPLE;
# -----------------------------------------------------------------------------
#       TABLE : RAP_APPARTENIR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS RAP_APPARTENIR
 (
   SON_NUM BIGINT(4) NOT NULL  ,
   PRO_ID INT NOT NULL  ,
   APP_TRACKNUM INT NULL  
      DEFAULT NULL
   , PRIMARY KEY (SON_NUM,PRO_ID) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : RAP_ARTISTE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS RAP_ARTISTE
 (
   ART_ID BIGINT(4) NOT NULL AUTO_INCREMENT ,
   ART_DENOMINATION CHAR(32) NOT NULL  ,
   ART_NOM CHAR(32) NULL  
      DEFAULT "NULL",
   ART_PRENOM CHAR(32) NULL  
      DEFAULT "NULL",
   ART_DATE_NAISSANCE DATE NULL  
      DEFAULT NULL,
   ART_DATE_MORT DATE NULL  
      DEFAULT NULL,
   ART_NATIONALITE CHAR(32) NULL  
      DEFAULT "NULL",
   ART_VILLE_ORIGINE CHAR(32) NULL  
      DEFAULT "NULL",
   ART_BIOGRAPHIE CHAR(255) NULL  
      DEFAULT "NULL"
   , PRIMARY KEY (ART_ID) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : RAP_COMPOSER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS RAP_COMPOSER
 (
   ART_ID BIGINT(4) NOT NULL  ,
   SON_NUM BIGINT(4) NOT NULL  ,
   COM_FEATURING TINYINT(1) NULL  
      DEFAULT NULL
   , PRIMARY KEY (ART_ID,SON_NUM) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : RAP_INTERPRETER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS RAP_INTERPRETER
 (
   ART_ID BIGINT(4) NOT NULL  ,
   SON_NUM BIGINT(4) NOT NULL  ,
   INT_FEATURING TINYINT(1) NULL  
      DEFAULT NULL
   , PRIMARY KEY (ART_ID,SON_NUM) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : RAP_PROJET_MUSICAL
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS RAP_PROJET_MUSICAL
 (
   PRO_ID INT NOT NULL AUTO_INCREMENT ,
   TP_CODE BIGINT(4) NOT NULL  ,
   ART_ID BIGINT(4) NOT NULL  ,
   PRO_TITRE CHAR(255) NOT NULL  ,
   PRO_DISTRIBUTEUR CHAR(255) NULL  
      DEFAULT "NULL",
   PRO_DATE_SORTIE DATE NULL  
      DEFAULT NULL
   , PRIMARY KEY (PRO_ID) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE RAP_PROJET_MUSICAL
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_RAP_PROJET_MUSICAL_RAP_ARTISTE
     ON RAP_PROJET_MUSICAL (ART_ID ASC);

# -----------------------------------------------------------------------------
#       TABLE : RAP_SON
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS RAP_SON
 (
   SON_NUM BIGINT(4) NOT NULL AUTO_INCREMENT ,
   SON_TITRE CHAR(32) NOT NULL  ,
   SON_DUREE BIGINT(4) NULL  
      DEFAULT NULL,
   SON_LIEN_CLIP CHAR(128) NULL  
   , PRIMARY KEY (SON_NUM) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : RAP_TYPE_PROJET
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS RAP_TYPE_PROJET
 (
   TP_CODE BIGINT(4) NOT NULL AUTO_INCREMENT ,
   TP_INTITULE CHAR(32) NOT NULL  
   , PRIMARY KEY (TP_CODE) 
 ) 
 comment = "";


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE RAP_APPARTENIR 
  ADD FOREIGN KEY RAP_APPARTENIR_IBFK_1 (SON_NUM)
      REFERENCES RAP_SON (SON_NUM) ;


ALTER TABLE RAP_APPARTENIR 
  ADD FOREIGN KEY RAP_APPARTENIR_IBFK_2 (PRO_ID)
      REFERENCES RAP_PROJET_MUSICAL (PRO_ID) ;


ALTER TABLE RAP_COMPOSER 
  ADD FOREIGN KEY RAP_COMPOSER_IBFK_1 (ART_ID)
      REFERENCES RAP_ARTISTE (ART_ID) ;


ALTER TABLE RAP_COMPOSER 
  ADD FOREIGN KEY RAP_COMPOSER_IBFK_2 (SON_NUM)
      REFERENCES RAP_SON (SON_NUM) ;


ALTER TABLE RAP_INTERPRETER 
  ADD FOREIGN KEY RAP_INTERPRETER_IBFK_1 (ART_ID)
      REFERENCES RAP_ARTISTE (ART_ID) ;


ALTER TABLE RAP_INTERPRETER 
  ADD FOREIGN KEY RAP_INTERPRETER_IBFK_2 (SON_NUM)
      REFERENCES RAP_SON (SON_NUM) ;


ALTER TABLE RAP_PROJET_MUSICAL 
  ADD FOREIGN KEY RAP_PROJET_MUSICAL_IBFK_1 (TP_CODE)
      REFERENCES RAP_TYPE_PROJET (TP_CODE) ;


ALTER TABLE RAP_PROJET_MUSICAL 
  ADD FOREIGN KEY FK_RAP_PROJET_MUSICAL_RAP_ARTISTE (ART_ID)
      REFERENCES RAP_ARTISTE (ART_ID) ;

