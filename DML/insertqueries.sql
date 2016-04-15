-- INSERT
INSERT INTO users (user_id, user_name, user_password_hash, user_email, u_fname, u_lname) VALUES('1', 'luke', '$2y$10$wc6fcjsBM.OxN2YPfJCOS.chLVbLZL21gOtLOjt6wO0Is.kcUtmTq','luke@luke.com', 'aaaaaa', 'bbbbb'); -- all dummy values hasedPass needs to be turned into hashedPass

INSERT INTO profile (skills, profile_pic, resume, email, languges, awards) VALUES('skills: can code in c, java, php, html, mysql, and javascript', 'needs a profile pic', 'needs a resume', 'luke@luke.com', 'can fluently speak english and can speak a little bit of spanish', 'Deans list for 8 semesters, a member of UPE, Employee of the month in May 2015'); -- dummy values

INSERT INTO education (school, dates_attended, email, degree, field_of_study, grade, organization) VALUES('Mizzou', '08/20/2012 to 05/14/2017', 'luke@luke.com', 'Bachelors of Science in Computer Science', 'Computer Science', 'Senior', 'Upsilon Pi Epsilon'); -- email with primary key

INSERT INTO contactInfo (email, phone, webiste, address) VALUES('luke@luke.com', '573-123-4567', 'google.com', '1313 Mockingbird ln.'); -- change webiste to website

INSERT INTO workExperience (email, isCurrent, companyName, dates_worked, location, jobTitle, job_describtion) VALUES('luke@luke.com', 'yes', 'MicroSoft', '10/10/2009 to now', 'Redmond, WA', 'software engineer', 'develops software to be distributed out to the public'); -- change job_describtion to job_description, email needs to be a primary key as well.

INSERT INTO product (email, title, isPublication, product_url, description, isPatent, isPorject) VALUES('luke@luke.com', 'Windows 10', 'no', 'google.com', 'a Windows upgrade much better than Windows 8', 'no', 'yes'); -- change isPorject to isProject and email needs to be a primary key

INSERT INTO course (email, courseName, location, courseNumber) VALUES('luke@luke.com', 'software engineering', 'Mizzou', 'CS-4320'); -- email needs to be a primary key

INSERT INTO volunteerExp (email, organization, dates, description) VALUES('luke@luke.com', 'Food bank', '10/10/2013 to 10/10/2015', 'distibuted food out to people in need'); --email needs to be a primary key

INSERT INTO groups (location, descriptioin, website, ownerEmail, groupLogo, groupName) VALUES('Mizzou', 'This group was formed for people with coding skills to network with each other', 'google.com', 'owner@group.edu', 'need a logo to go here', 'Coding Connections');

INSERT INTO company (companyName, adminID, companyID) VALUES('Microsoft', '1', '1');

INSERT INTO is_member (isAdmin, email, groupName) VALUES('yes', 'luke@luke.com', 'Coding Connections'); -- not sure if we can use this as a table name

INSERT INTO works_for (isAdmin, email, companyName) VALUES('yes', 'luke@luke.com', 'Microsoft');

INSERT INTO job_posting (industry, experience, employment_type, location, description, job_title, applicationURL, companyID) VALUES('Software', 'needs at least 5 years experience', 'full time', 'Columbia, MO', 'looking for a software developer to create and support apps for our company', 'Software engineer', 'google.com', '2');

INSERT INTO topic_of_intrest (email, subject, topicID, description) VALUES('luke@luke.com', 'Find any interesting code?', '1', 'lets post any intresting code that you come across!'); --email needs to be a primary key

INSERT INTO post (likes, posterID, companyID, topicID, postURL, email, time_of_post, post_image, comments, description) VALUES('300', '1', '1', '1', 'google.com', 'luke@luke.com', '2015-10-10 12:00:00', 'need an image', 'Thats a great idea! We should totally post interesting code!', 'Im not sure what I should put here so this is now the post discription'); -- if email is a forign key it also needs to be a part of the primary key
