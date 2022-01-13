"use strict";

var User = require('../models/user');

var users_ctrl = {};

users_ctrl.getPrueba = function _callee(req, res) {
  return regeneratorRuntime.async(function _callee$(_context) {
    while (1) {
      switch (_context.prev = _context.next) {
        case 0:
          res.json({
            email: 'deformaditto'
          });

        case 1:
        case "end":
          return _context.stop();
      }
    }
  });
};

users_ctrl.getUser = function _callee2(req, res) {
  var user;
  return regeneratorRuntime.async(function _callee2$(_context2) {
    while (1) {
      switch (_context2.prev = _context2.next) {
        case 0:
          _context2.next = 2;
          return regeneratorRuntime.awrap(User.find());

        case 2:
          user = _context2.sent;
          res.json(user);

        case 4:
        case "end":
          return _context2.stop();
      }
    }
  });
};

module.exports = users_ctrl;