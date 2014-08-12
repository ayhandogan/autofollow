[AutoFollow Tool For Twitter v2.0](https://github.com/PupkinZade/autofollow)
================================

A simple php script to automatically follow on Twitter.


Requirements
------------
- PHP (version 5 or better)
- Basic knowledge of Twitter API 1.1 and PHP 
- cURL
 

Usage
-----
Sign in to the http://twitter.com and register an application from the http://dev.twitter.com/apps page. Remember
to never reveal your consumer secrets. Click on My Access Token link from the sidebar and retrieve your own access
token. Now you have consumer key, consumer secret, access token and access token secret.

Create object using application and request/access keys

	$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN,  ACCESS_TOKEN_SECRET);



-----
Project at GitHub: https://github.com/PupkinZade/from_search
Twitter's API documentation: http://dev.twitter.com/doc

(c) Max Makarov (PupkinZade Inc.), 2014 (https://twitter.com/PupkinZade)