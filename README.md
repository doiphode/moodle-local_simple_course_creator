Simple Course Creator
=======================

This local plugin allows users to create courses from the Course Category menu. This tool gives minimum options to create courses, handy for new or reluctant users. The different sections on core Moodle's course creation page can optionally be added / removed from the plugin's administration.

- Every section when creatig a course except the General is made optional. So at the minimum the user will have only the Course Full name, Shortname, Start Date and End Date.
- The Category if not shown, creates the course in the existing category
- The Simple Course Creation skips the User enrolment page as the Core Moodle Course Creation would take the user to when creating a course. Of course you can add users once the course is created.


Requirements
------------
- Moodle 3.6 (build 2018112800.00 or later)

Installation
------------
Copy the simple_course_creator folder into your /local directory and visit your Admin Notification page to complete the installation.

Usage
-----
The tool adds a link to the category navigation block, "Simple Course Creator". The user will be shown four options at the minimum (Course full name, Course short name, Course start date and Course end date), this can be configured from the plugin's settings page, see below. when the user enters the information and clicks Save and display, the page goes directly to the course view page rather than the course enrolment page.

If you're using Boost or a similar theme, you may need to access /course/index.php directly, navigate to the desired category, then click the edit cog at top right to reach the links.

Configuration
-------------
The tool gives a configuration under plugins -> Local plugins -> Simple Course Creator Settings. Users may select the options they want to have for this tool on their site.

Acknowledgements
----------------
This development came out of user requests at the Moodle Moot 2019 Manchester (mootIE19). This item was second on the popularity list.
Thanks to Brett Lucas at Queen Mary University of London for refining the requirements.

Author
------
Shubhendra Doiphode (doiphode.sunny@gmail.com)
