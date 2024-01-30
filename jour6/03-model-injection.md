# créer une nouvelle table 

user
id clé primaire
email text maximum de 200 lettres
password text maximum de 200 lettres
role text de 20 lettres
dt_creation date et heure par défaut maintenant 

// http://192.168.15.22/phpmyadmin

```sql
CREATE TABLE IF NOT EXISTS `user` (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT ,
    email VARCHAR(200) NOT NULL ,
    password VARCHAR(200) NOT NULL ,
    role VARCHAR(20) ,
    dt_creation DATETIME DEFAULT CURRENT_TIMESTAMP
);
```


# créer dans le dossier jour6 la class qui vient s'associer à la table user 

- propriétés
- getter et setter
- 
