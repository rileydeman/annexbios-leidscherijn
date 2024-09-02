# PHP website folder structure/template


The PHP website folder template that rileydeman uses in his web projects!


## Using this folder template

Using of this folder structure/template is completely free of charge.
You are allowed to fork and/or use this repository/template and edit all the files in this template

## Important

- The homepage is not in the `index.php`, the index.php file gets automaticly the `public/home.php` file.
- The public folder is for everything that the user sees, like all the pages, images etc.
- The app folder is for everything that is back-end, and what the user doesn't see, like adding items to a cart, etc.
- Be sure that the folder where the `index.php` is located, is the root from your xampp, wampp, lampp or mampp software for your localhost during development.
- The `public/home.php` file has the template for a web page, including the header and footer include
- The header and footer are in the `public/core folder`
- The 404 page will automaticly shown at not valid urls on your localhost or website, editing the 404 page is possible in the `public/core/errors/404.php` file

## .htacess

Mostly the `.htacces` file can't get the good file, in that case go to the `.htaccess file` and add the following code to the file:
`RewriteRule ^requestName public/requestName.php`

## Changing document root in xampp

1. Go to the folder where the index.php is located
2. Copy the path to that file
3. Open xampp
4. Click on "config" form the apache
5. Click on the top link named "Apache (httpd.conf)"
6. Scoll down until you see something like this
- DocumentRoot "C:\xampp\htdocs"
- <Directory "C:\xampp\htdocs">
7. Paste the copied path to both, DocumentRoot and Directory, between the ""
8. Save the file and start or restart apache 
9. Go to localhost in your web browser


More information soon!

##  

(c) rileydeman