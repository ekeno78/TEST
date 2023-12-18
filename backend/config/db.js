// db.js

const mysql = require('mysql');

function connexionDb() {
    const connection = mysql.createConnection({
        host: 'localhost',
        user: 'gotit',
        password: 'didou',
        database: 'gotit'
    });

    connection.connect((err) => {
        if (err) {
            console.error("Impossible de se connecter car : " + err.stack);
            return;
        }
        console.log("Connexion réussie à la BDD ! ");
    });

    // le faire connaitre de tous les autres fichiers
    return connection;
}

module.exports = {
    connexionDb: connexionDb
};
