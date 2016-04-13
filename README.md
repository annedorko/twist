# Twist: a WordPress Starter Theme

Author's note – Bear with me, this is my first public GitHub project.

## What's Included

Twist is an ultra minimal starter theme loaded with all the features you need ready to go at a moment's notice. The theme itself includes practically nothing, but the ingredients provided will allow you to create almost anything your heart desires.

Twist is _not_ designed to be shipped as-is. It provides you with the tools you need to get an elegant and fully functional project running quickly.

### DRY Theme Wrappers

Based on [Scribu's Theme Wrapper](http://scribu.net/wordpress/theme-wrappers.html) class, you can use one simple wrapper for your project and keep your templates DRY.

### FontAwesome

FontAwesome comes bundled and ready for action.

### SCSS Libraries: Bourbon & Neat

Themes often get weighed down by unnecessary bulk that come built in with large frameworks like Bootstrap or Foundation. For truly customized themes, you end up writing your own styles, anyways.

Think about it like walking into a room with thousands of art supplies. Alone, they don't mean much, but when you pair it with a little creativity, you are only limited by your imagination.

Bourbon and Neat offer incredibly simple SCSS libraries to include only exactly what you need for a quick and responsive layout.

* [Bourbon Docs](http://bourbon.io/docs/)
* [Neat Docs](http://thoughtbot.github.io/neat-docs/latest/)
* [Refills](http://refills.bourbon.io/)

Normalize.css is included for an optimal starting point.

### Responsive Typographic Baseline

You get complete control over the future of your typography, but it's always best to start with a baseline that keeps everything mathematical and clean.

Twist's current typographic baseline is [Devin Hunt's typebase.css](https://github.com/devinhunt/typebase.css/blob/master/src/typebase.sass).

### Future Features

#### Material Design Mixins, Automated Theme Builds, and beyond

For the sake of getting this project off the ground, I'm launching without a few of the basics I'm looking at incorporating in the future. These being:

* Some more basic templating included
* Default supports for the basics that should really come baked in with every theme
* Material Design mixins for shadows, forms, and buttons
* Automated theme builds from the command line

...what do you want to see?

## Getting Started

Run `sass --watch _scss/main.scss:main.css --style compressed` from the terminal within the project folder, and use the `_scss` folder to manage your styles.

Use the `wrapper.php` to manage anything you normally would from `get_header()` or `get_footer()`

Beyond that, everything runs fairly normally!

### A few tips for future compatibility:

As this is a new project, things are going to change a lot and become more modularized to help with future updates. For now, keep things as clean as possible by controlling your settings using the existing variables.

* Customize your typography settings in scss/baselines/typography.scss
* Set your themes's colors in scss/baselines/colors.scss
* For new theme styles, add your own templates under the /templates/ folder. Best naming structure is to match the .scss file name to the .php template it customizes. Don't forget to reference your new .scss in the main.scss page!
