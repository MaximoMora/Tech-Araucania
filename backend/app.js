import { defineConfig } from 'vite';
import react from '@vitejs/plugin-react';
import mysql from 'mysql2';
import session from 'express-session';
import express from 'express'; 
import dotenv from 'dotenv';

const Router = express.Router();
const app = express();

app.use(Router);
app.use(express.json())
dotenv.config()


app.use((req, res, next) => {
  res.header('Access-Control-Allow-Origin', 'http://localhost:3000');
  res.header('Access-Control-Allow-Headers', 'Origin, X-Requested-With, Content-Type, Accept');
  res.header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE');
  next();
});

const db = mysql.createConnection({
  host: process.env.DB_HOST,
  user: process.env.DB_USER,
  password: process.env.DB_PASS,
  database: process.env.DB_NAME
});

db.connect((err) => {
  if(err){
      throw err;
  }
  console.log('Conectado a la base de datos MySQL')
});
const port = 5500;



app.get('/server', (req, res) => {
  db.query('SELECT * FROM usuario', (err, results) => {
      if(err) throw err;
      res.send(results);
  });
});

app.post('/api/register', (req, res) => {
  let email2 = req.body.email2;
  let password2 = req.body.password2
  console.log("Datos recibidos:", email2, password2);

  const insercion = 'INSERT INTO u (Correo, Contraseña) VALUES (?, ?)';
  db.query(insercion, [email2, password2], (err, result) => {
      if (err) {
          res.status(500).json({ error: err.message });
      } else {
          console.log("Usuario Registrado");
          req.session.userId = result.insertId; 
      }
  });
});


app.post('/api/login', async (req, res) => {
  let email = req.body.email;
	let password = req.body.password;

	if (email && password) {
		db.query('SELECT * FROM u WHERE Correo = ? AND Contraseña = ?', [email, password], function(error, results, fields) {
			if (error) throw error;

			if (results.length > 0) {

				req.session.loggedin = true;
				req.session.email = email;
	
				res.redirect('/home/index');
			} else {
				response.send('Incorrect Username and/or Password!');
			}			
			res.end();
		});
	} else {
		res.send('Please enter Username and Password!');
		res.end();
	}
})
    

app.listen(port, () => {
  console.log(`Aplicacion escuchando en http://localhost:${port}`);
});

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [react()],
})
