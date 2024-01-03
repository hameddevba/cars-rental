-- Table Voiture

CREATE TABLE
    voiture (
        id INT AUTO_INCREMENT PRIMARY KEY,
        immatriculation VARCHAR(20) NOT NULL,
        marque VARCHAR(20) NOT NULL,
        modele VARCHAR(20) NOT NULL,
        annee INT NOT NULL,
        couleur VARCHAR(20) NOT NULL,
        carburant VARCHAR(20) NOT NULL,
        puissance INT NOT NULL,
        FOREIGN KEY (marque) REFERENCES marque_de_voiture (id),
        FOREIGN KEY (modele) REFERENCES modele_de_voiture (id)
    );

-- Table Modèle de voiture

CREATE TABLE
    modele_de_voiture (
        id INT AUTO_INCREMENT PRIMARY KEY,
        marque VARCHAR(20) NOT NULL,
        modele VARCHAR(20) NOT NULL,
        description VARCHAR(255) NOT NULL,
        photo VARCHAR(255) NOT NULL
    );

-- Table Marque de voiture

CREATE TABLE
    marque_de_voiture (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nom VARCHAR(20) NOT NULL,
        pays VARCHAR(20) NOT NULL
    );