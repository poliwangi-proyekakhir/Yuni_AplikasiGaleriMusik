//import the express module
var express = require('express');

//store the express in a variable 
var app = express();

//allow express to access our html (index.html) file
app.get('/index.html', function (req, res) {
    res.sendFile(__dirname + "/" + "index.html");
});

//route the GET request to the specified path, "/user". 
//This sends the user information to the path  
app.get('/user', function (req, res) {
    response = {
        first_name: req.query.first_name,
        last_name: req.query.last_name,
        gender: req.query.gender
    };

    //this line is optional and will print the response on the command prompt
    //It's useful so that we know what infomration is being transferred 
    //using the server
    console.log(response);

    //convert the response in JSON format
    res.end(JSON.stringify(response));
});

app.get('/api', function (req, res) {
    isi = req.query.isi;
    var exec = require('child_process').exec,
        child;

    child = exec('node run-impulse.js '+isi,
        function (error, stdout, stderr) {
            console.log('stdout: ' + stdout);
            console.log('stderr: ' + stderr);
            if (error !== null) {
                console.log('exec error: ' + error);
            }
        });
    // console.log("node run-impulse.js " + isi);
});



//This piece of code creates the server  
//and listens to the request at port 8888
//we are also generating a message once the 
//server is created
var server = app.listen(3000, function () {
    var host = "127.1.1.1";
    var port = server.address().port;
    // console.log("Example app listening at http://%s:%s", host, port);
    console.log("Example app listening at http://%s:%s/", host, port);

});