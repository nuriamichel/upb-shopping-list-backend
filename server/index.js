const express = require('express');
const req = require('express/lib/request');
const morgan = require('morgan');
const  app = express()
const cors = require('cors');

const {mongoose} = require('./database')



// Settings
app.set('port', process.env.PORT || 4500)

//Middlewares
app.use((req, res, next) => {
    res.header('Access-Control-Allow-Origin', '*');
    res.header('Access-Control-Allow-Headers', 'Authorization, X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Allow-Request-Method');
    res.header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, DELETE');
    res.header('Allow', 'GET, POST, OPTIONS, PUT, DELETE');
    next();
});


app.use(morgan('dev'))
app.use(express.json())
//app.use(cors({origin: 'http://localhost:4200'}))//TODO
app.use(cors({origin: 'https://skynet.lp.upb.edu'}))//TODO

//Routes
app.use('/',require('./routes/users.routes'))// '/otra ruta'

//Starting Server+
app.listen(app.get('port'), () => {
 console.log("server OK " + app.get('port'));   
})
