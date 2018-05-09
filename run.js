var request = require('request');
var localtunnel = require('localtunnel');
var token = 'Uopw0gXYz7wfoi0IcbY9NQiSCuzZs3y9xiCTf0zf8lC';
var port = 80;

var tunnel = localtunnel(port, function(err, tunnel) {
console.log(1);

    request({
        method: 'POST',
        uri: 'https://notify-api.line.me/api/notify',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        auth: {
            'bearer': token
        },
        form: {
            message: tunnel.url
        }
    }, (err, httpResponse, body) => {
        if (err) {
            console.log(err);
        }
    });
});

tunnel.on('close', function() {
    tunnel();
});
