-- DELETE

DELETE FROM users WHERE email = 'ntctk4@mail.missouri.edu';

DELETE FROM profile WHERE email = 'ntctk4@mail.missouri.edu';

DELETE FROM education  WHERE school = 'Mizzou', email = 'ntctk4@mail.missouri.edu';

DELETE FROM contactInfo WHERE email = 'ntctk4@mail.missouri.edu';

DELETE FROM workExperience WHERE email = 'ntctk4@mail.missouri.edu', companyName = 'The Best Place to Work Ever!!';

DELETE FROM product WHERE email = 'ntctk4@mail.missouri.edu', title = 'THE PROJECT';

DELETE FROM course WHERE email = 'ntctk4@mail.missouri.edu', courseNumber = 'CS-4320';

DELETE FROM volunteerExp WHERE email = 'ntctk4@mail.missouri.edu', organization = 'VolunteerCo';

DELETE FROM groups WHERE ownerEmail = 'ntctk4@mail.missouri.edu', groupName = 'TheGroup';

DELETE FROM company WHERE companyID = 'companyID';

DELETE FROM is_member WHERE email = 'ntctk4@mail.missouri.edu', groupName = 'THE BEST GROUP EVER';

DELETE FROM works_for WHERE email = 'ntctk4@mail.missouri.edu', companyName = 'THE BEST COMPANY EVER';

DELETE FROM job_posting WHERE email = 'ntctk4@mail.missouri.edu' applicationURL = 'applicationURL.com';

DELETE FROM topic_of_intrest WHERE email = 'ntctk4@mail.missouri.edu' topicID = 'topicID';

DELETE FROM post  WHERE email = 'ntctk4@mail.missouri.edu' posterID = 'posterID', postURL = 'post.com'; 

--can only delete using primary keys or else you risk deleting information from multiple users instead of just the intended user.