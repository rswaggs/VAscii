# VAscii

## Project Information
**Course:** CS4312, Fall 2017

**Institute:** Lakehead University

**Instructor:** Dr. Mago

## Required Software

Updated: October 26th 2017  

* [PHP 7.1](http://php.net)
    - Windows, I can recommend just using [XAMPP](https://www.apachefriends.org/index.html)
    - Linux, use package manager, depending on the distribution you will probably need to install a repository for PHP 7.1. Google is your friend here.
    - Mac, no idea. Good Luck
* The following PHP extensions. These will probably be installed by default, only worry about these if errors come up.
    - OpenSSL
    - PDO
    - Mbstring
    - Tokenizer
    - XML
* [Composer](https://getcomposer.org)
    - Package manager for PHP, follow instructions on website
* [Node](https://nodejs.org/en/)
    - We only need Node for NPM (node package manager), which we will use for front end asset compilation. 
    
 **Alternatively:** I highly recommend simply running the project through a VM pre-configured with all the software we will possible need
 The framework we are using, Laravel, has a pre-configured VM that is very easy to set up and run. [See here for details on installing and using](https://laravel.com/docs/5.5/homestead)
 
 ## Installation Instructions
 
 Updated: September 15th 2017
 Updated By: Daniel Kivi
 
 1. Clone this project into a directory
 2. Run `composer install`
 3. Make a copy of .env.example with the filename of just .env
 4. Run `php artisan key:generate`
 5. Fill in relevant database information (if you are homestead, the defaults are fine)
 6. Run `php artisan migrate`
 7. Run `php artisan db:seed`
 8. Run `npm install`
 9. Copy the theme files into the root directory (should be in a folder named theme). Ask Danny for a link to the theme files.
 10. Run `npm run development`
 
 If you are not using Homestead and need a quick server:
 
 1. Run `php artisan serve`
 2. Access the site from [http://127.0.0.1:8000](http://127.0.0.1:8000)
 
 
  
 