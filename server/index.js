const express = require('express');
const req = require('express/lib/request');
const morgan = require('morgan');
const  app = express()
const cors = require('cors');

const {mongoose} = require('./database')



// Settings
app.set('port', process.env.PORT || 4500)

//Middlewares
app.use(function (req, res, next) {

    // Website you wish to allow to connect
    res.setHeader('Access-Control-Allow-Origin', 'https://skynet.lp.upb.edu');

    // Request methods you wish to allow
    res.setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, PATCH, DELETE');

    // Request headers you wish to allow
    res.setHeader('Access-Control-Allow-Headers', 'X-Requested-With,content-type');

    // Set to true if you need the website to include cookies in the requests sent
    // to the API (e.g. in case you use sessions)
    res.setHeader('Access-Control-Allow-Credentials', true);

    // Pass to next layer of middleware
    next();
});


app.use(morgan('dev'))
app.use(express.json())
//app.use(cors({origin: 'http://localhost:4200'}))//TODO
//app.use(cors({origin: 'https://skynet.lp.upb.edu'}))//TODO

//Routes
app.use('/',require('./routes/users.routes'))// '/otra ruta'

//Starting Server+
app.listen(app.get('port'), () => {
 console.log("server OK " + app.get('port'));   
})
