
CREATE table genre(
    id_genre INTEGER PRIMARY KEY auto_increment,
    nom_Genre VARCHAR(20)
);
CREATE table categorie_objectif(
    id_Objectif INTEGER PRIMARY KEY auto_increment,
    nomCategories VARCHAR(200),
    duree INTEGER,
    poidsVisee INTEGER
);
create table userProfil(
    id_profil INTEGER PRIMARY key auto_increment,
    id_user INTEGER REFERENCES user(id_user),
    age INTEGER,
    taille FLOAT,
    id_genre INTEGER REFERENCES genre(id_genre),
    poids FLOAT,
    idObjectif INTEGER REFERENCES categorie_objectif(id_objectif)
);


create table activiter(
    id_A INT PRIMARY KEY auto_increment,
    categorieID INT REFERENCES categorie_objectif(id_Objectif),
    jour int,
    activite VARCHAR(100)
);

CREATE TABLE CategorieRegime (
  id_c INT PRIMARY KEY,
  Nom VARCHAR(50),
  DureeSemaines INT
);
create table Aliment(
    id INTEGER PRIMARY KEY auto_increment,
    nom VARCHAR(100),
    prix FLOAT
);
CREATE TABLE RegimeJournalier (
  id_r INT PRIMARY KEY AUTO_INCREMENT,
  categorieID INT REFERENCES categorie_objectif(id_Objectif),
  Jour INT,
  matin INT REFERENCES Aliment(id),
  midi INT REFERENCES Aliment(id),
  soir INT REFERENCES Aliment(id),
  RegimeID INT REFERENCES CategorieRegime(id_c),
  pourcetage_poisson int ,
  pourcentage_viande int,
  pourcentage_volaille int
);


insert into genre values
    (default,'Femme'),
    (default, 'Homme');
INSERT INTO Aliment (ID, Nom, Prix)
VALUES
  (1, 'Salade verte', 5.99),
  (2, 'Blanc de poulet grillé', 8.99),
  (3, 'Brocoli cuit à la vapeur', 3.99),
  (4, 'Steak de bœuf', 10.99),
  (5, 'Patates douces', 4.99),
  (6, 'Avocat', 2.99),
  (7, 'Saumon grillé', 9.99),
  (8, 'Quinoa', 6.99),
  (9, 'Asperges grillées', 4.99);

INSERT INTO CategorieRegime (id_c, Nom, DureeSemaines)
VALUES
  (1, 'Régime standard', 12),
  (2, 'Régime intensif', 8),
  (3, 'Régime prolongé', 16);

INSERT INTO categorie_Objectif VALUES
  (1, 'Perte de poids', 12, 70.0),
  (2, 'Gain de poids', 16, 60.0),
  (3, 'Maintien du poids', NULL, NULL);


-- Régimes journaliers pour la catégorie "Perte de poids" sur 5 jours
INSERT INTO RegimeJournalier (id_r, CategorieID, Jour, matin, midi, soir, RegimeID, pourcetage_poisson, pourcentage_viande, pourcentage_volaille)
VALUES
  -- Jour 1
  (1, 1, 1, 1, 2, 3, 1, 0, 0, 50),
  -- Jour 2
  (2, 1, 2, 4, 5, 6, 1, 10, 55, 0),
  -- Jour 3
  (3, 1, 3, 7, 8, 9, 1, 65, 0, 0),
  -- Jour 4
  (4, 1, 4, 1, 5, 2, 1, 0, 0, 45),
  -- Jour 5
  (5, 1, 5, 3, 6, 4, 1, 0, 40, 0),

  (6, 2, 1, 1, 5, 2, 2, 0, 0, 35),
  -- Jour 2
  (7, 2, 2, 3, 6, 4, 2, 0, 15, 0),
  -- Jour 3
  (8, 2, 3, 2, 1, 4, 2, 35, 0, 20),
  -- Jour 4
  (9, 2, 4, 5, 3, 6, 2, 0, 0, 0),
  -- Jour 5
  (10, 2, 5, 4, 7, 1, 2, 30, 20, 0),
  -- Jour 1
  (11, 3, 1, 1, 4, 3, 3, 0, 15, 0),
  -- Jour 2
  (12, 3, 2, 6, 5, 9, 3, 0, 0, 0),
  -- Jour 3
  (13, 3, 3, 2, 3, 1, 3, 0, 0, 88),
  -- Jour 4
  (14, 3, 4, 6, 5, 8, 3, 15, 0, 0),
  -- Jour 5
  (15, 3, 5, 7, 3, 1, 3, 39, 0, 0);



INSERT INTO activiter (id_A, categorieID, jour, activite) VALUES
  (1, 1, 1, 'Course à pied'),
  (2, 1, 2, 'Yoga'),
  (3, 1, 3, 'Entraînement en circuit'),
  (4, 1, 4, 'Randonnée'),
  (5, 1, 5, 'Zumba'),
  (6, 2, 1, 'Entraînement en force avec des poids'),
  (7, 2, 2, 'Natation'),
  (8, 2, 3, 'Entraînement en force avec des bandes de résistance'),
  (9, 2, 4, 'Escalade'),
  (10, 2, 5, 'Marche rapide'),
  (11, 3, 1, 'Marche rapide'),
  (12, 3, 2, 'Entraînement en circuit'),
  (13, 3, 3, 'Yoga'),
  (14, 3, 4, 'Natation'),
  (15, 3, 5, 'Pilates');
SELECT
    o.id_r,
    c.nomCategories as objectif,
    o.jour,
    a.nom as Repas_matin,
    b.nom as repas_midi,
    d.nom as repas_soir,
    r.nom as regime,
    (a.prix + b.prix + d.prix) as prix_total,
    pourcetage_poisson,
    pourcentage_viande,
    pourcentage_volaille
FROM
    regimejournalier as o
    LEFT JOIN categorie_objectif as c ON o.categorieid = c.id_objectif
    LEFT JOIN aliment as a ON o.matin = a.id 
    LEFT JOIN aliment as b ON o.midi = b.id
    LEFT JOIN aliment as d ON o.soir = d.id
    LEFT JOIN CategorieRegime as r ON o.RegimeID = r.id_c;


select id_A, c.nomCategories as objectif, jour, activite from activiter as o
    left join categorie_objectif as c on o.categorieid = c.id_objectif;