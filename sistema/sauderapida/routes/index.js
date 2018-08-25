var express = require('express');
var router = express.Router();

connection.query("SELECT * FROM usuarios", function (err, result, fields) {
  if (err) throw err;
  console.log(result);
});

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express' });
});

module.exports = router;