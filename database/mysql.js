import mysql from 'mysql';
import { DB_HOST, DB_USER, DB_PASSWORD, DB_NAME } from '../config/env.js';
import process from 'node:process';

const connection = mysql.createConnection({
  host: DB_HOST,
  user: DB_USER,
  password: DB_PASSWORD,
  database: DB_NAME,
});

const connectToDatabase = () => {
  connection.connect((err) => {
    if (err) {
      console.error('Error connecting to MySQL:', err.message);
      process.exit(1);
    }
    console.log(`Connected to MySQL database on ${DB_HOST}`);
  });
};

export default connectToDatabase;
