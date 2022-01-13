"use strict";

var express = require('express');

var req = require('express/lib/request');

var morgan = require('morgan');

var app = express();

var cors = require('cors');

var _require = require('./database'),
    mongoose = _require.mongoose; // Settings


app.set('port', process.env.PORT || 3000); //Middlewares

app.use(morgan('dev'));
app.use(express.json());
app.use(cors({
  origin: 'http://localhost:4200/'
})); //TODO
//app.use(cors({origin: 'http://skynet.lp.upb.edu/~shoplist/'}))//TODO
//Routes

app.use('/', require('./routes/users.routes')); // '/otra ruta'
//Starting Server+

app.listen(app.get('port'), function () {
  console.log("server OK " + app.get('port'));
});