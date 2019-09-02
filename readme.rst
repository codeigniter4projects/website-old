###################
CodeIgniter Website
###################

This is the official informational website for the 
`CodeIgniter project <https://github.com/bcit-ci/CodeIgniter/>`_,
rewritten using CodeIgniter4. This website replaces the 
`previous project <https://github.com/bcit-ci/codeigniter-website>`_,

The website has been open-sourced in the interest of transparency.
We welcome issues and pull requests, to the *develop* branch,
 to handle suggestions or corrections 
to the style or structure of the website. 
We will be a bit more reserved with the content :-/


*****************
Programming Style
*****************

The website exhibits "good" programming style, although definitely not
the only way to do things. 

Some of the programming design decisions reflected:

-   The architecture adheres more to the "model-view-adapter" convention,
    where the view is unaware of the source of data and the model is unaware of
    how any data might be presented. The controllers are go-betweens.
-   A "master template" lets each controller focus 
    only with building its part of a webpage.
-   A base controller takes care of assembling finished pages, using the 
    master template.
-   Using the template parser eliminates PHP code from
    the views, where possible.
-   Mock data for the recent news and most recently active threads, means
    that the website can be tested locally, without needing access to 
    the live forum database.
-   View fragments are used to style single "records" on their own,
    improving cohesion.
-   An ".htaccess" file is incorporated, to configure Apache to remove
    index.php from any URLs.


*******
Sitemap
*******

The site has a simple structure ... basically two-level 
(homepage and then content pages). 
There are a couple of additional pages, for related but subordinate 
information, accessible from the footer navbar.

Appropriate comments are found in each of the controllers.

***************
Project Folders
***************

/app        the obvious
/public             the served face & assets of the website
/public/data        zipped files for downloading, avatars
/public/user_guide  Symbolic link to the CodeIgniter 3 user guide *1
/public/userguide2  Placeholder for the CI2 user guide *1
/public/userguide3  Placeholder for the CI3 user guide *1
/writable           Writable folder for temporary files

*1 The zip files & user guide contents are not part of this repository,
but instead manually uploaded to the server.

*******
License
*******

Please see the `license
agreement <license.txt>`_

*********
Resources
*********

-  `User Guide <https://codeigniter4.github.io/userguide/>`_
-  `Community Forums <https://forum.codeigniter.com/>`_

***************
Acknowledgement
***************

The CodeIgniter Project would like to thank the Reactor Engineers, EllisLab, 
all the contributors to the CodeIgniter project, and you, the CodeIgniter user.

This repository is maintained by James Parry, Project Lead.