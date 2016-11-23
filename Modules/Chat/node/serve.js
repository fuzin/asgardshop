var http = require('http')
var url = require('url')
var fs = require('fs')

http.createServer(function (request, response) {
    var requestUrl = url.parse(request.url)

    console.log("Request handler random was called.");
    response.writeHead(200, {"Content-Type": "application/json"});
    var otherArray = ["item1", "item2"];
    var otherObject = { item1: "item1val", item2: "item2val" };
    var json = JSON.stringify({
        anObject: otherObject,
        anArray: otherArray,
        another: "item"
    });
    
    response.end(json);


    // fs.createReadStream(requestUrl.pathname).pipe(response)  // do NOT use fs's sync methods ANYWHERE on production (e.g readFileSync)
}).listen(9615)


