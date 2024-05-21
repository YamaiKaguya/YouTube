// const express = require('express');
// const mysql = require('mysql');
// const cors = require('cors');

// const app = express();
// const port = 4500;

// app.use(cors());

// app.get('/', (req, res) => {
//     res.send("!HATDOG PO AKO SA REF  :O");
// });

// const connection = mysql.createConnection({
//     host: 'localhost',
//     user: 'Winter',
//     password: '082133',
//     database: 'youtubedatabase'
// });

// connection.connect((err) => {
//     if (err) {
//         console.error('Error connecting to MySQL: ', err);
//     } else {
//         console.log('Connected to MySQL'); //  Error
//     }
// });

// app.get('/api/videos', (req, res) => {
//     const query = 'SELECT imgSrc, videoTitle, videoDescription FROM videos';
//     connection.query(query, (err, results) => {
//         if (err) {
//             console.error('Error fetching data: ', err);
//             res.status(500).send('Error fetching data');
//         } else {
//             res.json(results);
//             console.log('Fetched data:', results);
//         }
//     });
// });

// app.listen(port, () => {
//     console.log(`Server running at http://localhost:${port}`);
// });
