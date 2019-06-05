
I developed the ‘UNEP Project Manager’ web app using the PHP CodeIgniter and Bootstrap frameworks and a MySQL database.
To install the app, clone the repository and place it in the htdocs of your xampp/lamp/wamp server folder. 
Import the database and navigate to localhost/unepprojectmanager in your browser.
The database dump is ‘projectmanager.sql’ and is located in the root of the folder.    
It allows the user to: -
•	Fetch the project data from the database and list them on the home page.
•	Add new project records to the database.
•	Edit and update individual project records in the database.
•	Delete individual project records from the database.
•	Expose projects as JSON (Simply add ‘ ?format=json ’ infront of page url e.g. http://127.0.0.1/unepprojectmanager/index.php/welcome?format=json)
•	Links to the project list on the homepage using CodeIgniter Pagination library.
