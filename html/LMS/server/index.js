const express = require('express')
const mysql = require('mysql');
const bodyParser = require('body-parser');
const cors = require('cors');


const app = express();

app.listen(3001, () => {
    console.log('listening on port 3001')
});


const db = mysql.createPool({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'library'
});

app.use(cors());
app.use(express.json());
app.use(bodyParser.urlencoded({ extended: true }));


app.post('/api/login', (req, res) => {
    const sqllogin = "SELECT * FROM users WHERE email = ? AND password = ?";
    db.query(sqllogin, [req.body.LoginEmail, req.body.LoginPassword], (err, result) => {
        if (err) {
            console.error('Database error:', err);
            return res.status(500).json({ error: 'Internal server error' });
        }
        if (result.length > 0) {
            console.log('Welcome');
            res.redirect('/Home');
            return (res.status(200).json({ message: 'Login successful' }));
        } else {
            console.log('Invalid credentials');
            return res.status(401).json({ error: 'Invalid credentials' });
        }
    });
});

app.post('/api/adduser', (req, res) => {
    const firstname = req.body.Firstname;
    const lastname = req.body.Lastname;
    const username = req.body.Username;
    const email = req.body.Email;
    const password = req.body.Password;

    const sqladduser = "INSERT INTO users (firstname, lastname, username, email, password) VALUES (?, ?, ?, ?, ?)";
    db.query(sqladduser, [firstname, lastname, username, email, password], (err, result) => {
        if (err) {
            console.error("Error adding user:", err);
            return res.status(500).json({ error: "Internal Server Error" });
        } else {
            console.log(result);
            return res.status(200).json({ message: "User added successfully" });
        }
    })
})



app.get('/api/getusers', (req, res) => {
    const sqlgetusers = "SELECT * FROM users";
    db.query(sqlgetusers, (err, result) => {
        if (err) {
            console.log("Error getting users:", err);
        } else {
            res.send(result);
        }
    })
})

app.delete('/api/deleteuser/:id', (req, res) => {
    const Id = req.params.id;
    const sqldeleteuser = "DELETE FROM users WHERE id= ?";
    db.query(sqldeleteuser, Id, (err, result) => {
        if (err) {
            console.log("Error deleting user:", err);
        } else {
            console.log("User deleted:", result);
        }
    })
})



app.post('/api/addbook', (req, res) => {
    const sqladdbook = "INSERT INTO books (booktitle,bookisbn,bookgenre,booknumber,publisheddate,bookauthor,bookdescription) VALUES (?,?,?,?,?,?,?)";
    db.query(sqladdbook, [req.body.title, req.body.isbn, req.body.genre, req.body.bookNumber, req.body.publishedDate, req.body.author, req.body.description], (err, result) => {
        if (err) {
            console.error("Error adding book:", err);
            return res.status(500).json({ error: "Internal Server Error" });
        } else {
            console.log(result);
            return res.status(200).json({ message: "Book added successfully", redirect: '../' });
        }
    })
})

app.get('/api/getbooks', (req, res) => {
    const sqlgetbooks = "SELECT * FROM books";
    db.query(sqlgetbooks, (err, result) => {
        if (err) {
            console.log("Error getting books:", err);
        } else {
            res.send(result);
        }
    });
})
app.get('/api/getbook/:id', (req, res) => {
    db.query("SELECT * FROM books WHERE id = ?", req.params.id, (err, result) => {
        if (err) {
            console.log("Error getting books:", err);
        } else {
            res.send(result)
        }
    })
});
app.put('/api/updatebook/:id', (req, res) => {
    db.query("UPDATE books SET booktitle = ?, bookisbn = ?, bookgenre = ?, booknumber = ?,publisheddate = ?, bookauthor = ?, bookdescription = ? WHERE id = ?",
     [req.body.BookTitle, req.body.BookIsbn, req.body.BookGenre, req.body.BookNumber, req.body.PublishedBook, req.body.BookAuthor, req.body.BookDescription, req.params.id], (err, result) => {
        if (err) {
            console.log(err);
        } else {
            console.log(result)
        }
    })
});
app.delete('/api/deletebook/:id', (req, res) => {
    db.query("DELETE FROM books WHERE id = ?", req.params.id, (err, result) => {
        if (err) {
            console.log("Book not deleted:", err);
        } else {
            console.log("Book deleted:", result);
        }
    });
})