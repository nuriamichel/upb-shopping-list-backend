const express = require('express')
const router = express.Router()

const users_ctrl = require('../controllers/users.controllers')

router.get('/', users_ctrl.getUser)

module.exports = router