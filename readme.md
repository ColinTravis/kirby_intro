# Kirby Crash Course

### Once the Server is running on PHP, access it with /panel


## Folder Structure
###Assets Folder
This is where all the images/fonts/external files/etc go.

###Content folder
This is where all of the content goes, _duh.._

When pages are manipulated in the admin panel, Kirby just renames folders and moves things round.

###Site folder
The actual configuration of the site.

###### Blueprints
Defines the structure of the page. A lot of YAML that explains pages.

###### Plugins
Obviously, plugins.

###### Templates
Where the custom templates or others are placed

## Creating a Template

>default.php is your basic page layout.

We're going to add a p tag to it.

```php
// PHP
<?php echo $page->text()->kirbytext() ?>
```

This tells kirby to insert information from the **"text"** field that is pulled from the YAML file in blueprints. Kirbytext uses a markdown language, making it easier to format.

```php
// PHP
<?php echo $page->images() ?>
```

Similar to the other one, this will add images.

But! We can also add feature images easily.

```php
// PHP
<?php echo $page->image($page->featureImage() ) ?>
```

```html
<!-- HTML -->
<img src="<?php echo $page->image($page->featureImage())->url() ?>" alt="a feature image" />
```

## Adding things to the panel
In the _site/blueprints/default.yml_ file, you can add lines to add to the panel.

This is all done in yaml, so indentation is **key**

```yaml
# YAML
subtext:
  #can be named anything. Used to target in template file.
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

#####Here's a Way We Can Add the Option to Select Feature images:

```yaml
#YAML
featureimage:
  label: Feature Image
  type: select
  options: query
  query:
    fetch: images
    value: '{{filename}}'
    text: '{{filename}}'
```

## Styling
Add a .css file to the `assets/css/templates` folder.

Then, under the title of your `site/templates/default.php` file, insert:

```php
// PHP
<?php echo css('@auto') ?>
```
>Template specific css files must be located in /assets/css/templates and named like the template.



## Miscellaneous Notes

[Kirby cheatsheet](https://getkirby.com/docs/cheatsheet"Kirby's cheatsheet")

[Kirby Cookbook](https://getkirby.com/docs/cookbook"Kirby Cookbook")

```php
c::set('debug', true);
```

This adds a debug feature that you'll see when your code breaks. It looks a lot prettier than an error page.
