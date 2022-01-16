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
app.use(cors())//TODO
//app.use(cors({origin: 'https://skynet.lp.upb.edu/~shoplist/'}))//TODO

//Routes
app.use('/~shoplist',require('./routes/users.routes'))// '/otra ruta'

//Starting Server+
app.listen(app.get('port'),'186.121.251.3', () => {
 console.log("server OK " + app.get('port'));   
})
