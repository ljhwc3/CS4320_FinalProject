-- UPDATE
UPDATE users SET firstName = 'Bruce', lastName = 'Smith', hashedPass = '4444444444' WHERE email = 'ntctk4@mail.missouri.edu';

UPDATE profile SET skills 'diff skills', profile_pic = 'newpic.png', resume = 'newresume.docx', languges = 'Spanish', awards = 'hard worker award' WHERE email = 'ntctk4@mail.missouri.edu'; 

UPDATE education SET dates_attended = '10/10/1995 to 05/14/1999', degree =' Bachelors of Arts', field_of_study = 'Biology', grade = 'Junior', organization = 'not so many' WHERE school = 'Mizzou', email = 'ntctk4@mail.missouri.edu';

UPDATE contactInfo SET phone = '098-654-3212', website = 'diffrentwebsite.com', address = '309 This is an Address DR.' WHERE email = 'ntctk4@mail.missouri.edu';

UPDATE workExperience SET isCurrent = 'no', dates_worked = '10/10/1995 to 10/10/2009', location = 'St. Louis', jobTitle = 'Worker', job_description = 'The job is ok' WHERE email = 'ntctk4@mail.missouri.edu', companyName = 'The Best Place to Work Ever!!';

UPDATE product SET isPublication = 'yes', product_url = 'product.com', dicription = 'new publication', isPatent = 'no', isProject = 'no' WHERE email = 'ntctk4@mail.missouri.edu', title = 'THE PROJECT'; 

UPDATE course SET courseName = 'some CS class', location = 'MSU' WHERE email = 'ntctk4@mail.missouri.edu', courseNumber = 'CS-4320';

UPDATE volunteerExp SET dates = '10/10/1995 to 10/10/2009', description = 'volunteer place to do stuff' WHERE email = 'ntctk4@mail.missouri.edu', organization = 'VolunteerCo';

UPDATE groups SET location = 'St.Louis, MO', description = 'a group of people', website 'group.com', groupLogo = 'newLogo.png' WHERE ownerEmail = 'ntctk4@mail.missouri.edu', groupName = 'TheGroup';

UPDATE company SET companyName = 'Cool Company corp.', adminID = 'companyAdmin' WHERE companyID = 'companyID';

UPDATE is_member SET isAdmin = 'no' WHERE email = 'ntctk4@mail.missouri.edu', groupName = 'THE BEST GROUP EVER';

UPDATE works_for SET isAdmin = 'no', WHERE email = 'ntctk4@mail.missouri.edu', companyName = 'THE BEST COMPANY EVER';

UPDATE job_posting SET industry = 'Education', experience = '10 years', employment_type = 'full time', location = 'St.Louis', descriiption = 'This is a good job', job_title = 'Worker', companyID = 'companyID' WHERE email = 'ntctk4@mail.missouri.edu' applicationURL = 'applicationURL.com';

UPDATE topic_of_intrest SET subject ='Who is the best?', description = 'Me or YOU?' WHERE email = 'ntctk4@mail.missouri.edu' topicID = 'topicID';

UPDATE post SET likes = '5000', companyID = 'companyID', topicID = 'topicID', time_of_post = '06:00:00 PM', post_image = 'newimage.png', comments = 'new comments', description = 'this is a post' WHERE email = 'ntctk4@mail.missouri.edu' posterID = 'posterID', postURL = 'post.com';

--we put all elements of each table into each update statment, so we can pick and choose what we want to update when we use these in our php blocks.
