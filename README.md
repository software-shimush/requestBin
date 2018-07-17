# requestBin
Provides a bin to store the client's api requests
This is a joint project developed by Nachman Rosen and Moshe Levitz.
Stores each users HTTP requests in a bin. The requests can be viewed in a table at /getRequests.

Uses laravel and pusher to broadcast requests on a public channel and if you are logged in on a private channel. The public channel can be viewed at binname.user/requestbin.local/listen. The private channel can be viewed at binname.user/requestbin.local/private. 
In assets/js/ app.js the private channel username is currently hardcoded to nachmanrosen. The logged in username needs to be passed in. 






