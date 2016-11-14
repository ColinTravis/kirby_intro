# Kirby Crash Course

## Folder Structure
###Assets Folder
This is where all the images/fonts/external files/etc. go.

###Content folder
This is where all of the content goes, duh..

When pages are manipulated in the admin panel, Kirby just renames folders and moves things round.

###Site folder
The actual configuration of the site.

###### Blueprints
Defines the structure of the page. A lot of YAML that explains pages.

###### Plugins
Obviously, plugins

###### Templates
Where the custom templates or others are placed


## Once the Server is running on PHP, access it with /panel

## Creating a Template

>default.php is your basic page layout.

We're going to add a p tag to it.

```
<?php echo $page->text()->kirbytext() ?>

```

This tells kirby to insert information from the **"text"** field that is pulled from the YAML file in blueprints. Kirbytext uses a markdown language, making it easier to format.

## Miscellaneous Notes

[Kirby cheatsheet](https://getkirby.com/docs/cheatsheet"Kirby's cheatsheet")

[Kirby Cookbook](https://getkirby.com/docs/cookbook"Kirby Cookbook")

```
c::set('debug', true);
 ```

This adds a debug feature.
