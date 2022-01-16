const express = require('express');
const req = require('express/lib/request');
const morgan = require('morgan');
const  app = express()
const cors = require('cors');

const {mongoose} = require('./database')

const path = __dirname + '/app/views/';


// Settings
app.set('port', process.env.PORT)

//Middlewares


app.use(morgan('dev'))
app.use(express.json())
app.use(cors())//TODO
app.use(cors({origin: 'https://skynet.lp.upb.edu/'}))//TODO
//app.use(cors({origin: 'http://localhost:4500/'}))//TODO

//Routes
app.use('/~shoplist/db',require('./routes/users.routes'))// '/otra ruta'

//Starting Server+
app.listen(app.get('port'),'0.0.0.0', () => {
 console.log("server OK " + app.get('port'));   
})
