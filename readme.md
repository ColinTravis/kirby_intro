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

```<?php echo $page->text()->kirbytext() ?>
```

This tells kirby to insert information from the **"text"** field that is pulled from the YAML file in blueprints. Kirbytext uses a markdown language, making it easier to format.

```<?php echo $page->images() ?>
```

Similar to the other one, this will add images.

## Adding things to the panel
In the _site/blueprints/default.yml_ file, you can add lines to add to the panel.

This is all done in yaml, so indentation is **key**

```subtext: #can be named anything. Used to target in template file.
  label: Sub Text #what the panel sows
  type: textarea #the type that it is
  width: 1/2 #how big it's gonna be
date:
  label: Date
  type: date
  width: 1/2
  default: today
```
By adding these, we can then reference them in the default.php and make sure content is added.


## Miscellaneous Notes

[Kirby cheatsheet](https://getkirby.com/docs/cheatsheet"Kirby's cheatsheet")

[Kirby Cookbook](https://getkirby.com/docs/cookbook"Kirby Cookbook")

```c::set('debug', true);
 ```

This adds a debug feature.
