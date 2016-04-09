-- INSERT
INSERT INTO users (email, salt, hashedPass, firstName, lastName) VALUES('ntctk4@mail.missouri.edu', '123870987', 'Nathan', 'Callahan'); -- all dummy values hasedPass needs to be turned into hashedPass

INSERT INTO profile (skills, profile_pic, resume, email, lanuages, awards) VALUES('lots of skills', 'profilepic.png', 'resume.docx', 'ntctk4@mail.missouri.edu', 'lots of languges', 'lots of awards'); -- dummy values

INSERT INTO education (school, dates_attended, email, degree, field_of_study, grade, organization) VALUES('Mizzou', '08/20/2012 to 05/14/2017', 'ntctk4@mail.missouri.edu', 'Bachelors of Science', 'Computer Science', 'Senior', 'lots of clubs and organizations'); -- email with primary key

INSERT INTO contactInfo (email, phone, website, address) VALUES('ntctk4@mail.missouri.edu', '573-123-4567', 'website.com', '1313 Mockingbird ln.'); -- change webiste to website

INSERT INTO workExperience (email, isCurrent, companyName, dates_worked, location, jobTitle, job_description) VALUES('ntctk4@mail.missouri.edu', 'yes', 'The Best Place to Work Ever!!', '10/10/2009 to now', 'Columbia, MO', 'THE BOSS', 'Does BOSS stuff, LIKE A BOSS!'); -- change job_describtion to job_description, email needs to be a primary key as well.

INSERT INTO product (email, title, isPublication, product_url, dicription, isPatent, isProject) VALUES('ntctk4@mail.missouri.edu', 'THE PROJECT', 'no', 'project.gov', 'The best project around', 'no', 'yes'); -- change isPorject to isProject and email needs to be a primary key

INSERT INTO course (email, courseName, location, courseNumber) VALUES('ntctk4@mail.missouri.edu', 'software engineering', 'Mizzou', 'CS-4320'); -- email needs to be a primary key

INSERT INTO volunteerExp (email, organization, dates, description) VALUES('ntctk4@mail.missouri.edu', 'VolunteerCo', '10/10/2013 to 10/10/2015', 'We did lots of volunteer stuff'); --email needs to be a primary key

INSERT INTO groups (location, description, website, ownerEmail, groupLogo, groupName) VALUES('Mizzou', 'This group does group stuff', 'group.edu', 'owner@group.edu', 'logo.png', 'TheGroup');

INSERT INTO company (companyName, adminID, companyID) VALUES('The Company', 'companyAdmin', 'companyID');

INSERT INTO is_member (isAdmin, email, groupName) VALUES('yes', 'ntctk4@mail.missouri.edu', 'The Best Group Ever'); -- not sure if we can use this as a table name

INSERT INTO works_for (isAdmin, email, companyName) VALUES('yes', 'ntctk4@mail.missouri.edu', 'The Best Company Ever');

INSERT INTO job_posting (industry, experience, employment_type, location, descriiption, job_title, applicationURL, companyID) VALUES('Health Care', 'need 5 years experience', 'full time', 'Columbia, MO', 'This is a great job', 'THE BOSS', 'applicationURL.com', 'companyID');

INSERT INTO topic_of_intrest (email, subject, topicID, description) VALUES('ntctk4@mail.missouri.edu', 'intresting topic', 'topicID', 'lets talk about this topic'); --email needs to be a primary key

INSERT INTO post (likes, posterID, companyID, topicID, postURL, email, time_of_post, post_image, comments, description) VALUES('300', 'posterID', 'companyID', 'topicID', 'post.com', 'ntctk4@mail.missouri.edu', '10/10/2015 12:00:00 PM', 'image.png', 'this is a comment', 'this is the posts description'); -- if email is a forign key it also needs to be a part of the primary key
