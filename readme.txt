// *************************************************************************************************
// Title: 		PHP KADRO System ver1.0
// Developed by: Feridun Ozcelik
// Email:		feridunozcelik@gmail.com
// Website:		......
// Copyright:	2005(C)
// Licence:		GPL, You may use this software under the terms of this General Public License
// *************************************************************************************************
//
## Intro:
This project was designed for CRUD operations staff and norm staff of each station by dynamicly.
Based on PHP,MySQL, HTML, CSS


Admin Username:	admin
Admin Password:	admin



## Requirements:
PHP & MYSQL database


## Features:
1. Login Page
2. Log out link
3. User level status check
4. Four different access levels (Inc Admin level)
5. Admin backend page for listing/editing/deleting records
6. Easy to add level and login check to any of your pages
7. User membership sign up page (with auto level 1 status) Now has duplicate check for user name & email address
8. Auto responder 'Thank you' email sent to your new member on signup completion
9. Mysql database setup
10. Built in password encryption

## File Check: (You should have this list of files uploaded to your server)

adduser.php			**UPDATED** NOW CHECKS FOR DUPLICATES OF USER NAME & EMAIL ADDRESS BEFORE ADDING TO DATABASE
admin.php			**UPDATED** NOW PASSWORD IS ENCRYPTED I HAVE REMOVED EDIT PASSWORD (NOT REQUIRED)
check.php			**DELETED**
common.php			**DELETED** NO LONGER NEEDED
config.php			**AMMENDED** ADDED SITE URL TO GO WITH SEND.PHP EMAIL
dbuserdb.sql		**UPDATED** ADDED ENCRYPTED PASSWORD
forgot.php			**NEW**
index.php			**UPDATED** ADDED DEMO MENU BAR
level1_check.php	**AMMENDED**
level2_check.php	**AMMENDED**
level3_check.php	**AMMENDED**
level4_check.php	**AMMENDED**
licence.txt
login.php			**UPDATED** ADDED FORGOT PASSWORD LINK
logout.php			**NEW**
readme.txt			**UPDATED**
send.php 			**UPDATED** NOW HAS LINK TO LOGIN PAGE ON NEW USER EMAIL
style.css

## Instructions:
1. Upload all files to your server
2. Upload dbuserdb.sql to PhpMyAdmin or similar
3. Edit file config.php with your details
4. Your done....

