#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Users
#------------------------------------------------------------

CREATE TABLE Users(
        id         int (11) Auto_increment  NOT NULL ,
        lastname   Varchar (50) ,
        firstname  Varchar (50) ,
        birthdate  Date ,
        email      Varchar (100) ,
        password   Varchar (60) ,
        desciption Text ,
        adressname Varchar (50) ,
        pc         Varchar (25) ,
        city       Varchar (50) ,
        department Varchar (25) ,
        region     Varchar (50) ,
        PRIMARY KEY (id )
)ENGINE=InnoDB;

