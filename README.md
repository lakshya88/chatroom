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

#DB Schema:
Messages(Table):
	- _id: String
	- channel_id: String
	- sender_id: String
	- timestamp: Datetime
	- message: String
Channel(Table):
	-  _id: String
	- org_id: String
	- channel_id: String
	- last_seen: Datetime
Receipts(Table):
	- _id: String
	- org_id: String
	- channel_id: String
	- user_id: String
	- timestamp: Datetime


