const mongoose = require('mongoose')

const URI = 'mongodb://localhost/shoplist' //TODO

mongoose.connect(URI)
.then(db => console.log('DB connected'))
.catch(err => console.error(err))
module.exports = mongoose