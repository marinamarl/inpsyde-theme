Install:

For local development
---------------------
(vendor will be installed on separate folder from wordpress, wp core will be in wp subfolder, theme will still be in themes/wp-content.)

Create a composer.json in directory of choice:

{
  "name": "Inpsyde",
  "homepage": "https://marina_marlag@bitbucket.org/marina_marlag/inpsyde-theme.git",
  "repositories": [{
  "type" : "vcs",
    "url": "https://marina_marlag@bitbucket.org/marina_marlag/inpsyde-theme.git"
  }],
  "require": {
     "php": ">=5.4",
     "composer/installers": "~1.0",
      "johnpbloch/wordpress": "4.2",
     "marina_marlag/inpsyde-theme": "*"
   },

 "minimum-stability": "dev",

 "config"      : {
    "vendor-dir": "wp-content/vendor"
},

  "extra": {
    "wordpress-install-dir": "wp",
    "installer-paths": {
      "wp/wp-content/themes/{$name}": ["type:wordpress-theme"]
    }
  }
}

Run composer install in cmd.


Ready for deploy
---------------
(wordpress files will be in root, composer's vendor file will be in wp-content, theme will be installed in wp-content/themes)

create composer.json in root:

{
  "name": "Inpsyde",
  "homepage": "https://marina_marlag@bitbucket.org/marina_marlag/inpsyde-theme.git",
  "repositories": [{
  "type" : "vcs",
    "url": "https://marina_marlag@bitbucket.org/marina_marlag/inpsyde-theme.git"
  }],
  "require": {
     "php": ">=5.4",
     "composer/installers": "~1.0",
     "marina_marlag/inpsyde-theme": "*"
   },

 "minimum-stability": "dev",

 "config"      : {
    "vendor-dir": "wp-content/vendor"
},

  "extra": {
    "installer-paths": {
      "wp-content/themes/{$name}": ["type:wordpress-theme"]
    }
  }
}

-------------------
Develop:

To install node dependencies

npm Install,

to run developing tasks:

gulp

For the plugin:
For the sake of styling, there is a custom post type of which posts 'events' show on the page 'Events'.There is no link to them in the theme, as was not required.

caution: I wasn't sure what the Imprint page on the footer would be. To me it seemed that it is meant to be a biography of the author, therefore an administrator with the nickname of the author, and a page named after the author will make the Imprint on the footer lead to the correct page-template.
