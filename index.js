/*var express = require('express');
var router = express.Router();
const shell = require('shelljs');
const {exec} = require('child_process');

/* GET home page. *//*
router.get('/', function (req, res, next) {
    res.render('index', {title: 'Express'});
});

router.get('/gatsby', function (req, res, next) {
    res.render('index', {title: 'Julen'});

    exec('cd ~/Escritorio/incremental/sitio_incremental;  gatsby build;', (err, stdout, stderr) => {
        if (err) {
            //some err occurred

            res.status(500).send({
                message:
                    err.message || 'Some error ocurred'
            });

        } else {
            // the *entire* stdout and stderr (buffered)
            res.send(`stdout: ${stdout} stderr: ${stderr}`);
            // res.send();
        }
    });

});

module.exports = router;
*/

const express = require('express');
const app = express();
const PORT = 3000;

const {exec} = require('child_process');


app.get('/', function(req, res) {
  res.json({"Francisco-puto amo": "express with drupal"});
});
app.get('/gatsby', function(req, res,next) {
  //res.render('index', {title: 'Fran'});
  exec('cd sitio_incremental ; gatsby develop ;', (err, stdout, stderr) => {
    if (err) {
      //some err occurred

      res.status(500).send({
        message:
          err.message || 'Some error ocurred'
      });

    } else {
      // the *entire* stdout and stderr (buffered)
      res.send(`stdout: ${stdout} stderr: ${stderr}`);
      // res.send();
    }
  });

});
app.get('/empezar', function(req, res,next) {
  //res.render('index', {title: 'Fran'});
  exec('172.22.0.7:8000;', (err, stdout, stderr) => {
    if (err) {
      //some err occurred

      res.status(500).send({
        message:
          err.message || 'Some error ocurred'
      });

    } else {
      // the *entire* stdout and stderr (buffered)
      res.send(`stdout: ${stdout} stderr: ${stderr}`);
      // res.send();
    }
  });

});
app.listen(PORT, function(){
  console.log('Your node js server is rKunning on PORT:',PORT);
});

/*var express = require('express');
var router = express.Router();

router.get('/', function (req, res, next) {
  res.render('index', {title: 'Express'});
});


module.exports = router;
*/
