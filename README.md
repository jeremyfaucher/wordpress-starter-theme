# WordPress (bare bones) Starter Theme Files

This is a starter theme and installation instructions for setting up a WordPress development environment. This will be the starting point to build out the custom fields using the CMB2 developer's toolkit .

# Datebase Setup if needed - phpMyAdmin 

**Export** 
=> Export method: => Custom - display all possible options

**Tables:**
=> Select all

**Output:**
Compression: => gzipped

**Object creation options**
=> Add DROP TABLE / VIEW / PROCEDURE / FUNCTION

**Data creation options**
Maximal length of created query => (delete giving amount and leave empy)

=> Go

**Import**

Import zipped file
=> Go

**.htaccess**
https://wordpress.org/support/article/htaccess/

# Plugins

Here is a list of all the plugin needed to start the project.

 - Classic Editor
 - CMB2
 - Single Post template
 - Disable REST API
 - Yoast SEO

## WordPress Configurations

These configurations allow for clean starting point so you are ready to start building custom fields.

**Disable post revisions**
wp-config define('WP_POST_REVISIONS', false );

**Disable thumbnails**
Media => thumbnails => 0

**Disable srcset**
include => Disable_srcset_img.php

**Remove the categories prefix**
SEO => Search Appearance => Taxonomies => Remove the categories prefix

**Turn of Yoast columns post and pages**
SEO => Search Appearance => Content Types => Show Posts in search results? => Off