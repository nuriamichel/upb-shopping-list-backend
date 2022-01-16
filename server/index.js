const express = require('express');
const req = require('express/lib/request');
const morgan = require('morgan');
const  app = express()
const cors = require('cors');

const {mongoose} = require('./database')



// Settings
app.set('port', process.env.PORT || 4500)

//Middlewares


app.use(morgan('dev'))
app.use(express.json())
app.use(cors({origin: 'http://localhost:4500'}))//TODO
//app.use(cors({origin: 'https://skynet.lp.upb.edu/~shoplist/'}))//TODO

//Routes
app.use('/',require('./routes/users.routes'))// '/otra ruta'

//Starting Server+
app.listen(app.get('port'), () => {
 console.log("server OK " + app.get('port'));   
})
