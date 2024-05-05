const express = require('express');
const mysql = require('mysql');

const app = express();

app.listen(3001, () => {
    console.log('listening on port 3001');
});