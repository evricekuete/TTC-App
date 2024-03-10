CREATE TABLE inscription (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    cni VARCHAR(20) NOT NULL,
    niveau INT NOT NULL,
    specialite VARCHAR(100) NOT NULL,
    telephone INT NOT NULL,
    mode_paiement VARCHAR(50) NOT NULL
);
