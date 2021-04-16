var express = require('express');
var router = express.Router();
const shell = require('shelljs');
const {exec} = require('child_process');

/* GET home page. */
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
