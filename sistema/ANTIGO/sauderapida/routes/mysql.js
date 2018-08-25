var mysql = require('mysql');
var router = express.Router();

var mysql = require('mysql');

var connection = mysql.createConnection({
  host: 'planetsweb.com.br',
  user: 'plane132_inovazl',
  password: 'inovazl123',
  database: 'plane132_inovazl'
});

connection.connect(function(err) {
  if (err) throw err
  console.log('MYSQL: ligado.')
});
