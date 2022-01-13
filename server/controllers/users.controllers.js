const User = require('../models/user')

const users_ctrl = {}

users_ctrl.getPrueba = async (req, res) => {
    res.json({
        email : 'deformaditto'
    })
}

users_ctrl.getUser = async (req, res) => {
    const user = await User.find()
    res.json(user)
}

module.exports = users_ctrl