const express = require('express');
const mysql = require('mysql');
const cors = require('cors');  // Importuj cors

const app = express();
const port = 3000;

app.use((req, res, next) => {
  res.header("Access-Control-Allow-Origin", "*");  // Pozwól na dostęp z dowolnej domeny
  res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
  next();
});

// Tworzenie połączenia z bazą danych
const con = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'monwiz'
});

con.connect((err) => {
  if(err){
    console.log('Error connecting to Db:', err);
    return;
  }
  console.log('Connection established');
  
  // Połączenie z bazą danych jest otwarte, więc teraz nasłuchuj na żądania HTTP
  app.listen(port, () => {
    console.log(`Server is running on port ${port}`);
  });
});

app.get('/get-all-player-data', (req, res) => {
  con.query('SELECT * FROM player', (err, rows) => {
    if (err) {
      console.log('Error querying database:', err);
      res.status(500).json({ error: 'Error querying database' });
      return;
    }
    res.json(rows);
  });
});


