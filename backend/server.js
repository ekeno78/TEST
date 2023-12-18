// se servir de la librairie express et écouter au port 5000
const express = require("express");
// appeler le ficher de connexion à la bdd
const dbConnexion = require('./config/db').connexionDb;
const port = 2000;


// se connecter à la base  en appelant la fonction dans le fichier db.js
dbConnexion();

const app = express();

//middleware qui traite les données du req (de la requete) permet de mieux lire le json et url
app.use(express.json());
app.use(express.urlencoded({extended : false}));

// aller chercher toutes les routes de spot dans routes
app.use("/spot", require("./routes/spot.routes"));

// lancer le serveur
app.listen(port, ()=> console.log ("Le serveur a démarré au port " + port));
