"use strict";

var express = require('express');

var router = express.Router();

var users_ctrl = require('../controllers/users.controllers');

router.get('/', users_ctrl.getUser);
module.exports = router;