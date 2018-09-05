<?php 
 
 /*


 	This website is for the Netlinks ISAMM university club, it is the club's main site and will have both a front end view for everyone to see and a backend part with authentification only for members.

 	There are 3 actors : 

 	1- Users - these are the people that are not part of the club, they can only access the front view. 

 	2- Members - these inherit from Users but can also log into the website by adding '/login' to the address and putting in their credentials.

 		The members can also :  - Change their account parameters in the "Settings" Page : mail, password, name.
 								- Change their profile in the "Profile" Page : Photo, CV , Portfolio
 								- Access the Academy and all the courses in it
 								- ask a question on any slide

 	3- Admins - these inherit from Members and depending on their function they have different roles : 

 			Pole Chiefs  can :	- Add, Edit or Remove slides
 								- Answer the questions of their respective Poles
			
		President & HRVP can :	- See, Edit and Delete Members




	Pages : There is a front view and a back view.

	    1-Front view contains : 
								- Home          : Lastest Activity, Latest Projects, Latest Activities, Partners
								- Presentation  : *Netlinks_ISAMM : Foundation, activities and vision
												  *History : All our past activities
												  *Netlinks_Association : Foundation, vision and Netlinks Day
								- Meet the team : The family, the bureau, poles, departments
								- Portfolio     : *our expertises
												  *projects per pole 
												  *single project : Photo, details, related photos, makers, related projects
								- Contact       : *details, form and map

		2- Back view contains :
								- Home : 
								- Academy : - your pole's track, all tracks
											* track : all courses
											* course : slide and slides list
								- Members : - table containing infos , and an edit button
											$edit : edit any info.

								- Settings : edit your own settings
								- Logout
*/