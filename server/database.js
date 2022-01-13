const mongoose = require('mongoose')

const URI = 'mongodb://localhost/shoplist' //TODO
//const URI = 'mongodb://127.0.0.1/shoplist' //TODO

mongoose.connect(URI)
.then(db => console.log('DB connected'))
.catch(err => console.error(err))
module.exports = mongoose