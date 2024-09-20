# AnnexBios LeidscheRijn Website

Welcome in the github repository from the AnnexBios LeidscheRijn Website!
In this repository you could find every code from the AnnexBios LeidscheRijn Website.

AnnexBios LeidscheRijn is a fictional cinema in the Netherlands.

In this readme you could read how to setup this project on your machine and important information


## Table of Contents

1. [License and Copyright](#1-license-and-copyright)
2. [Technical information](#2-technical-information)
3. [Folder Structure](#3-folder-structure)
4. [Installation](#4-installation)
5. [Changing document root in Xampp](#5-changing-document-root-in-xampp)
6. [Using the product during testing](#6-using-the-product-during-testing)
7. [Explanation abbriviations](#7-explanation-abbriviations)


## 1. License and Copyright

### Copyright

This project is from a school project and all information and logo's is owned by Grafisch Lyceum Utrecht.

All information about movies is owned by the companies that created the movies. You cannot use any of the images, texts etc from the movies unless you have permission from the copyright owner. 

The code is owned and created by rileydeman, Tristan & Jesse, you aren't allowed to use the codes unless you have permission from the developers.

### License

After you got granted permission to use something from this product you can use it for free (personal usage) or paid (commercial use).
This is mostly a lifetime license, but it could be that you have restrictions in time, this information will be given to you when you got the permission.

By using something without permission could result in an immediate shut down or payment, depending on what you have used.
It is always better to request permission before using something from this product.


## 2. Technical information

This software has created with the following technical services:
- OS: Windows 11 (and/or 10)
- IDE: Visual Studio Code and PHPstorm (by jetbrains)
- Localhost: Xampp (Apache and MySQL)
- Browser: OperaGX & Google Chrome
- Languages (programming): HTML, CSS, JS, PHP & SQL
- Languages (reading in product): Dutch (NL) and a little bit English (AUS)
- Cloud code saving: Github

Using these technical services is recommended, by using something different could result in getting errors.


## 3. Folder Structure

- In the root from the product you see the following items folders and files
    - admin (folder)
    - app (folder)
    - public (folder)
    - .gitignore (file)
    - .htaccess (file)
    - favicon.ico (image)
    - favivcon.png (image)
    - favicon.svg (image)
    - index.php (file)
    - LICENSE (file)
    - README.md (file)

- In the `admin` folder you can see all the files from the admin panel/dashboard
- In the `app` folder you can see all the server side scripts, like adding to a database, updating in a database, and database connection
- In the `public` folder you can see all the files from the main site
- The `.htaccess` file is for getting the urls without `.php` at the end
- The `index.php` is the index from the webshop, this will automaticly get the `public/home.php` file
- The `admin` and `public` folder have an `assets` folder and an `core` folder
    - The `assets` folder is for all the assets, like stylesheets, javascript files, fonts, images, etc.
    - The `core` folder is for all the important files like `header.php`, `footer.php`, etc.


## 4. Installation

If you want to use this product, you need to install this product. In this part from the readme you can read how to do that.

1. Clone the repository to your PC
    - If you don't know how to do this, please watch this [instruction video](https://youtu.be/EhxPBMQFCaI?si=Ju6vKj0HYkatJrEu).

2. Start XAMPP and change the document root to the correct folder on your PC
    - If you do not have XAMPP, please install it from this [website](https://www.apachefriends.org) and follow the instructions during the installation. Be sure to download Apache and MySQL within the istallation
    - Don't know how? Read and follow the steps in chapter `5. Changing document root in xampp`
3. Start or restart `apache` and start the `MySQL`
4. Setup the database
    1. Go to `localhost/phpmyadmin`
    2. Create a new database named `annexbios-leidscherijn` and **DO NOT** create a table
        - Using a other name is not recommended, in case if you do that, change the database name in the `app/db/db-conn.php` file (the variable for the database name has called `$dbname`)
    3. Go to the database you just created
    4. Then go to `Import`
    5. Click on Choose file
    6. Select the newest database backup file in the `app/db/backup` folder
        - The date has been noted as `YYYYMMDD`
    7. Then click on the button `open` and after that the database has been set 
   8. Create in the root a `config.ini` file and add the following in the file
        - ```ini
          [database]
          host=localhost
          port=3306
          username=root
          password=""
          name=annexbios-leidscherijn
          
          [api]
          annexbios=50e0ad3617490b19272646df7ce799f0d78d517240e650830a4ddcab9e3bd8aa
5. Go to localhost in your web browser
6. Good luck with using the product!


## 5. Changing document root in xampp

1. Go to the folder where the index.php is located from this product
2. Copy the path to that folder
3. Open xampp
4. Click on "config" from the apache service
5. Click on the top link named "Apache (httpd.conf)"
6. Scoll down until you see something like this
    - DocumentRoot "C:\xampp\htdocs"
    - <Directory "C:\xampp\htdocs">
7. Paste the copied path to both, DocumentRoot and Directory, between the ""
8. Save the file


## 6. Using the product during testing

### Main site

You can see the main site without logging in, and you can visit it on `localhost` in your internet browser.


## 7. Explanation abbriviations

- OS
    - Operation System
- IDE
    - Integrated Development Environment
- HTML
    - HyperText Markup Language
- CSS
    - Cascading Style Sheet
- JS
    - JavaScript
- PHP
    - Hypertext Preprocessor
- SQL
    - Structured query language
- NL
    - Netherlands
- AUS
    - Australia


## Special for Grafisch Lyceum Utrecht

Let op! Alle bestanden worden opgeroepen vanaf de root, zorg er dus voor dat mijn website vanaf de root wordt opgevraagt en in de root staat. Anders gaan er dingen fout!


(c) [rileydeman](https://www.rileydeman.com/) | (c) Tristan | (c) Jesse