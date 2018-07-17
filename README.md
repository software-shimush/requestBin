# requestBin
Provides a bin to store the client's api requests
This is a joint project developed by Nachman Rosen and Moshe Levitz.
Stores each users HTTP requests in a bin. The requests can be viewed in a table at /getRequests.

Uses laravel and pusher to broadcast requests on a public channel and if you are logged in on a private channel. The public channel can be viewed at binname.user/requestbin.local/listen. The private channel should be viewed at binname.user/requestbin.local/private. 
Currently, the private view is throwing a 403 not authorized error. The authorization is in routes/channels.php, although its set at return true.
Also, in resources/app.js the private channel username is currently hardcoded. The logged in username needs to be passed in. 






