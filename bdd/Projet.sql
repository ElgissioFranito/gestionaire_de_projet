
# -----------------------------------------------------------------------------
#       TABLE : PROJET
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PROJET
 (
   ID_PROJET INTEGER NOT NULL AUTO_INCREMENT ,
   NOM_PROJET CHAR(100) NOT NULL  ,
   CHEF_DE_PROJET CHAR(50) NOT NULL  ,
   OBJECTIF_DU_PROJET CHAR(32) NULL  ,
   DATE_DE_COMMENCEMENT DATE NULL  ,
   DATE_DE_FIN DATE NULL  ,
   STATUS CHAR(32) NULL  
   , PRIMARY KEY (ID_PROJET) 
 ) 
 comment = "";


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------

