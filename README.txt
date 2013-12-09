Car Insurance System Prototype, Version 0.00000001
Licensed under MIT
-------------------------------
Author: Edgar Ivanov
Email: edi@aber.ac.uk
Date: 2013-12-08
-------------------------------

This README documents steps that are necessary to get the Broker and Underwriter up and running.
This file was produced as part of the SE315 assignment (Car Insurance System) by the Edgar Ivanov in 2013.

* Broker 
Broker application was tested on the MS Windows Server 2012 platform running IIS 8 web server with installed PHP support and the cURL
command line tool ( cURL can be obtained from here: http://curl.haxx.se/download.html). It should work fine on Linux platform
with Apache or any other web server given that the PHP and cURL are installed in the system and are supported by the web server.
To start using broker application "broker" folder should be placed in the root directory that is used by the web server to serve web pages. 
URL links used to communicate with the underwriter application are hardcoded in the code and point to the 192.168.1.20:3000 address. 
If it is necessary to alter URL links that point to the underwriter application they can be changed in the following files:
getquote.php (two URLs to be changed)
showquote.php (one URL to be changed)

* Underwriter
Underwriter application was developed  with Rubby on Rails. Its functionality  was tested using WEBRick, a Ruby library providing
simple HTTP web server services, in a development mode. Your system should also have Ruby and Rails 
installed (procedure how to install both can be found on this page: http://rubyonrails.org/download).
To start WEBrick you should open command prompt (in Windows environment) or terminal (in Linux) and change working directory to the
one that contains underwriter code. From there you need to type in "rails s" command which will start WEBrick server, if it fails 
and shows an error saying that some gems are missing try to run "bundle install" command which should fetch all required gem form the
internet and install them, after that try "rails s" command again.



Copyright (c) 2013 Edgar ivanov

Permission is hereby granted, free of charge, to any person obtaining a copy
 of this software and associated documentation files (the "Software"), to deal
 in the Software without restriction, including without limitation the rights
 to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 copies of the Software, and to permit persons to whom the Software is
 furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
 all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 THE SOFTWARE.