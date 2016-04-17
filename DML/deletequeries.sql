-- DELETE

DELETE FROM users WHERE user_id = '1';

DELETE FROM profile WHERE user_id = '1';

DELETE FROM education  WHERE school = 'Mizzou', user_id = '1';

DELETE FROM contactInfo WHERE user_id = '1';

DELETE FROM workExperience WHERE user_id = '1', companyName = 'The Best Place to Work Ever!!';

DELETE FROM product WHERE user_id = '1', title = 'THE PROJECT';

DELETE FROM course WHERE user_id = '1', courseNumber = 'CS-4320';

DELETE FROM volunteerExp WHERE user_id = '1', organization = 'VolunteerCo';

DELETE FROM groups WHERE ownerEmail = 'ntctk4@mail.missouri.edu', groupName = 'TheGroup';

DELETE FROM company WHERE companyID = 'companyID';

DELETE FROM is_member WHERE user_id = '1', groupName = 'THE BEST GROUP EVER';

DELETE FROM works_for WHERE user_id = '1', companyName = 'THE BEST COMPANY EVER';

DELETE FROM job_posting WHERE user_id = '1' applicationURL = 'applicationURL.com';

DELETE FROM topic_of_intrest WHERE user_id = '1' topicID = 'topicID';

DELETE FROM post  WHERE user_id = '1' posterID = 'posterID', postURL = 'post.com'; 

--can only delete using primary keys or else you risk deleting information from multiple users instead of just the intended user.