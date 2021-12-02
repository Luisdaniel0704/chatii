const http = require('http');
const path = require('path');

const express = require('express');
const socketio = require('socket.io');

const app = express();
const server = http.createServer(app);
const io = socketio(server);

//settings
app.set('port', process.env.PORT || 3001);

require('./sockets')(io);

//static files 
app.use(express.static(path.join(__dirname, 'public')));

//empezando el servidor//
server.listen(app.get('port'), () => {
    console.log('server on port', app.get('port'));
}); 