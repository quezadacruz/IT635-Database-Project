# IT635-Database-Project
midterm project for it635 

PLease read this file 

I have included a script for every deliverable you have asked please follow instruction on how to run each script and what it does



If you run scripts in the following order that i describe. you can see the modification and the goals being reached 

Deliverables 

*User Authentication 
*Register New User
*limit access based on User privileges

To Register a new user run the following script createuser.php from terminal enter the following parameters after the file name 
Ex : php createuser.php "username" "password" "privilege" "displayname" 

this will create a user at the mysql level 

root user for my database is =jose 
root password for my database is = 1989

*verify through mysql just to double check *

the other deliverables 


Login as a Site Administrator
open mysql databse user root account and password provided below 



Add new actor entries deliverable: run the following script addactor.php from terminal enter the following parameters after the file name 
Ex : php addactor.php "First name" "Last Name"  (Quotation marks not needed)

this will create an actor in a seperate table called actors 


Add new movie entries deliverable:  run the following script addmovie.php from terminal enter the following parameters after the file name 
Ex : php addmovie.php "Movie_Title" "Year"  "rating" if desired (Quotation marks not needed) 

(you can add the rating with the entry or modify later how ever your please)
Note: please use underscore if movie title has a space in it 


add actors to movies :  run the following script addactormovie.php from terminal enter the following parameters after the file name 
Ex : php addactormovie.php "" "Movie Title"  "Actor_Name"   (Quotation marks not needed) 
Note: use _ to seperate first and last name

Update/add reviews deliverable :
run the following script addactormovie.php from terminal enter the following parameters after the file name 
Ex : php addactormovie.php "" "Movie Title"  "Actor_Name"   (Quotation marks not needed) 

Login as a guest userdeliverable: - Account defined in scripts as Guest password guest

Search movies / actors deliverable : run the following script guestsearch.php from terminal enter the following parameters after the file name 
Ex : php guestsearch.php "Actor_Name"   (Quotation marks not needed) 
Note : use _ to seperate actor first and last name

view a movie's information deliverable : run the following script guestsearchmovie.php from terminal enter the following parameters after the file name 
Ex : php addactormovie.php "Movie Title"  (Quotation marks not needed) 

view an actor's information (movies in / dates): provided in the previous actor search and movie deliverable 

