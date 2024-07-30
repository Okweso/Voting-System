**VOTING SYSTEM**

This is a university/College voting system. The system enables students to vote for their candidates of choice and submit their votes. Immediately after submitting the votes, they are able to see the results as voting continues. However, once a student votes, they are not able to vote again but can see as results continue streaming in. Only registered voters are able to vote. To access the voting page, a voter must first log in and be authenticated.

There are voter admins who are registered by the overall system administrator. Their role is to register candidates and set the voting date and time. Voting can only take place within the set timeline by the voter admins. Once the duration scheduled for voting is over, the submit button will be disabled and no voting can take place.

**Tech Stack**

PHP

HTML

CSS

JAVASCRIPT

SQL

MYSQL


Below is an image of the voting page

![voting page](https://github.com/user-attachments/assets/eb72b77c-1458-4cdd-804f-0d402721c27c)

Below is an image of the results page

![results page](https://github.com/user-attachments/assets/d6b43341-ff4f-4aed-8a9d-b0773218d556)

**STEP BY STEP PROCEDURE ON HOW TO INSTALL THE PROJECT ON YOUR PC**

Step 1: Download and Install XAMPP

1. Download XAMPP:
   
   o Go to https://www.apachefriends.org/download.html and download the appropriate version for your operating system.
   
3. Install XAMPP:

    o Run the installer and follow the on-screen instructions to install XAMPP on your computer.
   
Step 2: Set Up the XAMPP Environment
   
5. Start XAMPP:
   
   o Open the XAMPP Control Panel.
   
   o Start the Apache and MySQL modules by clicking the "Start" buttons next to them.
   
Step 3: Download and Prepare the Project Files
   
7. Copy Project Files:
   
   o After downloading, locate the folder containing the voting system project files.
   
   o Copy the entire project folder.
   
9. Paste Project Files:
    
   o Navigate to the htdocs directory in your XAMPP installation folder. The default path is usually C:\xampp\htdocs.
   
   o Paste your project folder into the htdocs directory.
   
Step 4: Create the Database
   
11. Open phpMyAdmin:
    
   o In your web browser, go to http://localhost/phpmyadmin.
   
13. Create a New Database
    
   o Click on the "New" button in the left sidebar to create a new database.
   
   o Enter a name for your database (e.g., voting_system) and click "Create".
   
15. Import the teau (1).sql File:
    
   o With the new database selected, click on the "Import" tab.
   
   o Click on "Choose File" and select the teau (1).sql file that contains your database schema and data.
   
   o Click "Go" to import the file into your database.
   
Step 5: Configure the Project

17. Update Database Configuration (db_connection.php):
    
   o In your project folder, locate the configuration (db_connection) file where database connection settings have been defined.
   
   o Open this file in a text editor.
   
   o Update the database connection settings with your database name, username, and password.
   
Step 6: Run the Project

19. Open the Project in Your Browser:
    
    o In your web browser, go to http://localhost/your_project_folder, replacing your_project_folder with the name of your project folder.
    
21. Test the Project:
    
    o Ensure that your project is running correctly by interacting with the voting system. Verify that you can connect to the database and perform the expected operations.
    
**Troubleshooting**
    
    • If you encounter any issues, check the following:
    
    o Ensure XAMPP is running and both Apache and MySQL services are started.
    
    o Verify that your database credentials in the configuration file are correct.
    
    o Check the error_log in the XAMPP Control Panel for any errors.

**Contributions**

Contributions to this project will be highly appreciated. Thank you.
