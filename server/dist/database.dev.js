"use strict";

var mongoose = require('mongoose');

var URI = 'mongodb://localhost/shoplist'; //TODO

mongoose.connect(URI).then(function (db) {
  return console.log('DB connected');
})["catch"](function (err) {
  return console.error(err);
});
module.exports = mongoose;