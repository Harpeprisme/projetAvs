#------------------------------------------------------------
#        Script MySQL. Créer la BDD bddavs avant de mettre le script
#------------------------------------------------------------


#------------------------------------------------------------
# Table: AVS
#------------------------------------------------------------

CREATE TABLE AVS(
        id_avs         int (11) Auto_increment  NOT NULL ,
        nom            Varchar (25) ,
        prenom         Varchar (25) ,
        date_naissance Date ,
        mail           Varchar (25) ,
        Annee          Varchar (25) ,
        PRIMARY KEY (id_avs )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ETABLISSEMENT
#------------------------------------------------------------

CREATE TABLE ETABLISSEMENT(
        id_etablissement          int (11) Auto_increment  NOT NULL ,
        nom                       Varchar (25) ,
        type_etablissement        Varchar (25) ,
        responsable_etablissement Varchar (25) ,
        PRIMARY KEY (id_etablissement )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ELEVE
#------------------------------------------------------------

CREATE TABLE ELEVE(
        id_eleve       int (11) Auto_increment  NOT NULL ,
        nom            Varchar (25) ,
        prenom         Varchar (25) ,
        date_naissance Date ,
        id_avs         Int ,
        PRIMARY KEY (id_eleve )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: CLASSE
#------------------------------------------------------------

CREATE TABLE CLASSE(
        id_classe int (11) Auto_increment  NOT NULL ,
        nom       Varchar (25) ,
        PRIMARY KEY (id_classe )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: gére
#------------------------------------------------------------

CREATE TABLE gere(
        id_avs           Int NOT NULL ,
        id_etablissement Int NOT NULL ,
        PRIMARY KEY (id_avs ,id_etablissement )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: appartient
#------------------------------------------------------------

CREATE TABLE appartient(
        id_etablissement Int NOT NULL ,
        id_eleve         Int NOT NULL ,
        id_classe        Int NOT NULL ,
        PRIMARY KEY (id_etablissement ,id_eleve ,id_classe )
)ENGINE=InnoDB;

ALTER TABLE ELEVE ADD CONSTRAINT FK_ELEVE_id_avs FOREIGN KEY (id_avs) REFERENCES AVS(id_avs);
ALTER TABLE gere ADD CONSTRAINT FK_gere_id_avs FOREIGN KEY (id_avs) REFERENCES AVS(id_avs);
ALTER TABLE gere ADD CONSTRAINT FK_gere_id_etablissement FOREIGN KEY (id_etablissement) REFERENCES ETABLISSEMENT(id_etablissement);
ALTER TABLE appartient ADD CONSTRAINT FK_appartient_id_etablissement FOREIGN KEY (id_etablissement) REFERENCES ETABLISSEMENT(id_etablissement);
ALTER TABLE appartient ADD CONSTRAINT FK_appartient_id_eleve FOREIGN KEY (id_eleve) REFERENCES ELEVE(id_eleve);
ALTER TABLE appartient ADD CONSTRAINT FK_appartient_id_classe FOREIGN KEY (id_classe) REFERENCES CLASSE(id_classe);
