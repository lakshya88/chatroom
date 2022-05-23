# chatroom
Creating a chatroom using Laravel and MySQL.


#assumptions
- Type of messages shared in chat: text only 
- Number of users communicating simultaneously: 1000
- Number of users each channel can support: 1000
- Cross device sync present
- Database will be sharded to increase performance - this would enable the client to query only that part of DB which is needed. 
#DB Design:
Types of information we need to handle:
- Messages
- Information about channels
- Read/delivered receipts
- In case of images, store metadata in DB which points to the file in a distributed file system like S3.
#Model to use:
Push model: Users can keep a connection open with the server and can depend upon the server to notify them whenever there are new messages.
#DB Used: 
MySQL

#Installation:
1. Install laravel via composer. Follow the link to set up laravel on your machine: https://laravel.com/docs/9.x/installation#getting-started-on-linux
