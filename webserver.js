const port = 2500;
const express = require("express");
const app = express();

app.listen(port, function(){
    console.log("Listening on port " + port);
});

app.use(express.static("public"));
