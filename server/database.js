const mongoose = require('mongoose')

const user = 'shoplist'
const password = 'dti2022'

//const URI = 'mongodb://localhost/shoplist' //TODO
//const URI = 'mongodb://127.0.0.1:27017/?authSource=shoplist&gssapiServiceName=mongodb' //TODO
//const URI = 'mongodb://localhost:27017/shoplist?authSource=shoplist --username shoplist --password dti2022'
const URI ='mongodb://shoplist:dti2022@localhost:27017/shoplist'
mongoose.connect(URI)
.then(db => console.log('DB connected'))
.catch(err => console.error(err))
module.exports = mongoose