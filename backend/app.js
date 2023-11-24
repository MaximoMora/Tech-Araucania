import { defineConfig } from 'vite';
import react from '@vitejs/plugin-react';
import mysql from 'mysql2';
import session from 'express-session';
import express from 'express'; 
import dotenv from 'dotenv';


const Router = express.Router();
const app = express();
app.use(Router);
dotenv.config()

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
const port = 5173;



app.get('/server', (req, res) => {
  db.query('SELECT * FROM usuario', (err, results) => {
      if(err) throw err;
      res.send(results);
  });
});
    

app.listen(port, () => {
  console.log('Aplicacion escuchando en http://localhost:${port}');
});

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [react()],
})
