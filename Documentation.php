Welcome to codeigniter 4 project
----------------------
composer create-project codeigniter4/appstarter codeigniter4

// move into the project
cd codeigniter4

// run the application
php spark serve

Environment Variables Preparation
=========================================

$ cp env .env  // open it and set development model
CI_ENVIRONMENT = development


database.default.hostname = localhost
database.default.database = YOUR_DATABASE
database.default.username = YOUR_DATABASE_USERNAME
database.default.password = YOUR_DATABASE_PASSWORD
database.default.DBDriver = MySQLi # this is the driver for a MySQL connection. There are also drivers available for postgres & SQLite3.

IF YOU WANT TO USE SEEDER AND MIGRATION SEE THE "codeigniter4JWT" PROJECT OR SEARCH IN GOOGLE
===============================================================================================

1. How to remove index.php from url
------------------------------------------

How to remove index.php?
1. Create a .htaccess file in root folder


RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L]




2. Removing index.php file

Open the config.php file in your text editor and remove index.php from here.

Change:
$config['index_page'] = "index.php";

To:
$config['index_page'] = '';


But in a few cases, it may happen that the default setting for url_protocol does not work properly. For solving this problem we need to open config.php and

Change:
$config['uri_protocol'] = "AUTO";
To:
$config['uri_protocol'] = "REQUEST_URI";


2. HOW TO REMOVE PUBLIC FOLDER FROM URL IN CODEIGNITER 4
===============================================================

Step 1: Change in App.php File


The first step is to open the app.app file. And the changes mentioned below. You have to do this in your App.php file.

So go to project_name/app/Config/App.php and change mention below:

public $baseURL = 'http://localhost:8080';

To

public $baseURL = 'http://localhost/your_project_name/';

And the second change in the app.php file:

public $uriProtocol = 'REQUEST_URI';

To
public $uriProtocol = 'PATH_INFO';


Step 2: Copy index.php and .htaccess
Visit inside public directory. And copy index.php and .htaccess to codeigniter app root directory.

Step 3: Change In index.php
In the root project directory, open index.php and edit the following line:

$pathsPath = FCPATH . '../app/Config/Paths.php';

change TO

$pathsPath = FCPATH . 'app/Config/Paths.php';


