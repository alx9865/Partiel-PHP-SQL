# ITEI ALEXANDRE


### QUESTION 2B

##### INSERT INTO `personnages` VALUES("", "nom", "prénom", age);


### QUESTION 3B

##### SELECT prenom AS prenom FROM personnages
##### INNER JOIN voiture id ON id.id_personnage = personnages.id


### QUESTION 3C

##### SELECT prenom AS prenom FROM personnages
##### INNER JOIN sport_personnage id ON id.id_personnage = personnages.id


### QUESTION 4

##### SELECT prenom AS prenom FROM personnages
##### INNER JOIN sport_personnage id ON id.id_personnage = personnages.id
##### INNER JOIN voiture id ON id.id_personnage = personnage.id
##### WHERE id = 1
