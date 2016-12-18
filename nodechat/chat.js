var http = require('http');
// var trim = require('trim');
// var rethink = require('rethink');
var rethinkdb = require('rethinkdb');


http.createServer(function(request, response) {
    var headers = request.headers;
    var method = request.method;
    var url = request.url;
    var body = [];

    request.on('error', function(err) {
        console.error(err);
    }).on('data', function(chunk) {
        body.push(chunk);
    }).on('end', function() {

        body = Buffer.concat(body).toString();
        // BEGINNING OF NEW STUFF

        response.on('error', function(err) {
            console.error(err);
        });


        rethinkdb.connect( {host: 'localhost', port: 28015}, function(err, conn) {

            if (err) throw err;
            var connection = conn;

            rethinkdb.table('message').insert({
                message: 'test',
                room: 'test'
            });

        });


        response.statusCode = 200;
        response.setHeader('Content-Type', 'application/json');
        // response.setHeader('Access-Control-Allow-Origin', '*');
        // Note: the 2 lines above could be replaced with this next one:
        // response.writeHead(200, {'Content-Type': 'application/json'})

        var responseBody = {
            headers: headers,
            method: method,
            url: url,
            body: body
        };

        // TODO: vue recognizes this as OPTIONS not POST and cant decode JSON
        // response.end(JSON.stringify({message:'test'}));
        response.end(JSON.stringify({message:'test'}));
        console.log('message saved');

        // END OF NEW STUFF

    });

}).listen(8282);

