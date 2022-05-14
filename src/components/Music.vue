<template>
	<h2 class= "flex justify-center text-blue-800 uppercase">Hello there</h2>
</template>

<script>
import axios from "axios"
import { Buffer } from "buffer"

var client_id = ' 4da5c38fdc664d3ca01cbd7b3b512e26'
var client_secret = '0515d167d68a4cc58cc173549d9acb01' 

var authOptions = {
  url: 'https://accounts.spotify.com/api/token',
  headers: {
    'Authorization': 'Basic ' + (new Buffer(client_id + ':' + client_secret).toString('base64'))
  },
  form: {
    grant_type: 'client_credentials'
  },
  json: true
};

axios.post(authOptions, function(error, response, body) {
  if (!error && response.statusCode === 200) {

   var token = body.access_token;
    var options = {
      url: 'https://api.spotify.com/v1/users/jmperezperez',
      headers: {
        'Authorization': 'Bearer ' + token
      },
      json: true
    };
    axios.get(options, function(error, response, body) {
      console.log(body);
    });
  }
});
</script>

<style scope>


</style>