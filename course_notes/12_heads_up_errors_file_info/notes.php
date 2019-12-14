<?php

/*
    Important!

Before you start learning Symfony theory save the following 
information, preferably print it:



To avoid errors while studying theory, install Symfony in version 
which the application was initially created (4.2). Do not worry! 
In future versions everything will work almost the same way! In the 
Upgrade section I will show you how to upgrade the applications to 
the next versions of Symfony, what new features new versions have, etc.



If you are installing Symfony using Composer, run the following command:

composer create-project symfony/website-skeleton ./ "4.2.*"

./ - means that Symfony will be installed in the current directory. 
You can replace it with any name.

Later if you need to install some packages, it may be necessary (not always!) 
to specify the version of the package. For example composer require sensio/framework-extra-bundle "5.2.4"

In order to find the right package version, visit packagist website, 
for example https://packagist.org/packages/sensio/framework-extra-bundle#v5.2.4 and 
    take a look at the "requires" section, and framework-bundle package version - 
    it must not be greater than your Symfony installation version.



----------------------------------



If errors appear when running unit tests, add ?ServerVersion=5.7 at the 
end of the database entry in the .env file:

DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/your_database_name?ServerVersion=5.7

*/