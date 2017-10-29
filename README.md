Web Academy Project
*******************

#Start Date : 17/10/2017

#5 sessions regarding project's technologies and content.

#End Date : 30/10/2017 

About the project:

8 SECTIONS + CONTACT FORM (with a PHP backend to manipulate  db and save feedback)

-HTML_5
-CSS_3
-BOOTSTRAP3
-BOOTSTRAP_JS3
-PHP_7.2
-SQL
-XAMPP

-----------------------------------------------------------------------------------------------
#DEPLOYMENT
for a ready db with some records:
-Create db name: webacademydb
-IMPORT webacademydb.sql (phpMyAdmin)
							
	OR

-for an empty db (no records)
EXECUTE THE QUERIES FROM THE WDA_DB.txt AT XAMPP'S SQL SECTION TAB				
-----------------------------------------------------------------------------------------------


-----------------------------------------------------------------------------------------------
-> HOMEPAGE: http://localhost:80/WDA_PHP/index.php

-> FEEDBACK PAGE: http://localhost:80/WDA_PHP/feedback.php
-----------------------------------------------------------------------------------------------
#REFERENCES

http://www.faqs.org/rfcs/rfc3875.html
https://developer.mozilla.org/en-US/docs/Learn/HTML/Forms/Sending_and_retrieving_form_data
https://developer.mozilla.org/en-US/
https://bootsnipp.com/snippets/featured/circle-progress-bar
http://bootstrapdocs.com/v3.0.3/docs/css/
https://getbootstrap.com/docs/3.3/javascript/
http://php.net/manual/en/reserved.variables.server.php
http://php.net/manual/en/function.require-once.php
http://php.net/manual/en/function.mysql-error.php
http://php.net/manual/en/function.empty.php
http://php.net/manual/en/function.isset.php
http://php.net/manual/en/reserved.variables.post.php
http://php.net/manual/en/function.trim.php


-----------------------------------------------------------------------------------------------
#XAMPP TROUBLESHOOTING APACHE PORT

Apache Config --> Config button and select to edit httpd.conf.
		  Look for the line “Listen 80”
		  Change that value to another number, such as 801 or 8000.
		  Search lower down the same file and find “ServerName localhost:80”, 
		  also change the 80 to the same value as above. Then save the httpd.conf file.

  		  Config button and select httpd-ssl.conf
		  Search for and change the line “Listen 443” to something else, such as 4431
		  Also change “<VirtualHost _default_:443>” to “<VirtualHost _default_:4431>”,
		  and save the file.

		XAMPP will still complain about the ports until you do one final thing. 
		Click Config in the Control Panel, then the Service and Port Settings button.
		Change the Main Port to the port 80 alternative from step 2 and the SSL 
		Port to the alternative from step 4. 
		
		Press Save twice.

Read More: https://www.raymond.cc/blog/change-apache-server-port-80-in-xampp/
-----------------------------------------------------------------------------------------------