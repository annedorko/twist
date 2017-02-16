# Twist: a WordPress Starter Theme

Twist is a no-nonsense WordPress starter theme that doesn’t assume anything about what kind of theme you want to build, while offering you a solid toolbox to create your own theme from scratch.

Pair with the [WP CLI Zip Package](https://github.com/annedorko/zip-package) for easy theme builds.

## What's Included

Twist is an ultra minimal starter theme loaded with all the features you need ready to go at a moment's notice. The theme itself includes practically nothing, but the ingredients provided will allow you to create almost anything your heart desires.

Please remember, Twist is _not_ designed to be shipped as-is. It merely provides you with the tools you need to get an elegant and fully functional project running quickly. Those tools are as follows.

### DRY Theme Wrappers

Keep your templates DRY with a theme wrapper, instead of the traditional `get_header();` and `get_footer();` tags.

Wrappers are based on [Scribu's Theme Wrapper](http://scribu.net/wordpress/theme-wrappers.html).

### FontAwesome

FontAwesome 4.7.0 comes bundled and ready for action.

### SCSS Libraries: Bourbon & Neat

While Bootstrap and Foundation are great frameworks when you’re in a pinch for production, I usually find they are a little much for my from-scratch themes.

I use Bourbon and Neat to write fast, flexible, and completely custom styles from scratch without having to reinvent the wheel. Think about Twist like walking into a room with thousands of art supplies. Individually, each supply doesn't mean much, but when you pair them with a little creativity on canvas, your imagination is the only limitation.

Learn more about using Bourbon and Neat here:

* [Bourbon Docs](http://bourbon.io/docs/)
* [Neat Docs](http://thoughtbot.github.io/neat-docs/latest/)
* [Refills](http://refills.bourbon.io/)

Meanwhile, the default CSS to get you started is [Normalize.css](https://necolas.github.io/normalize.css/).

### Responsive Typographic Baseline

The future of your theme’s typography rests in your hands. However, I believe in using a solid baseline to keep everything mathamatical and clean automatically.

Twist offers you [Devin Hunt's typebase.css](https://github.com/devinhunt/typebase.css/blob/master/src/typebase.sass).

### Future Features

As I continue to use Twist for projects, I will continue adding the features that make from-scratch theme development simple. Here are a few ideas I hope to add one day. Feel free to make a pull request and add your own feature!

* Some more basic templating included
* Default supports for the basics that should really come baked in with every theme, like a Customizer class, Widgets class, and so on
* Material Design mixins for shadows, forms, and buttons

## Getting Started

Twist uses SASS. To generate the necessary WordPress files, use this command within the terminal in your project folder:

`sass --watch _scss/style.scss:style.css --style compressed`

Beyond that, everything runs fairly normally!

## Wrapping Up

I use the [WP CLI Zip Package](https://github.com/annedorko/zip-package) to create deliverable .zip folders once my theme is completed.

### A few tips for future compatibility:

As this is a new project, things are going to change a lot and become more modularized to help with future updates. For now, keep things as clean as possible by controlling your settings using the existing variables.

* Customize your typography settings in scss/baselines/typography.scss
* Set your themes's colors in scss/baselines/colors.scss
* For new theme styles, add your own templates under the /templates/ folder. Best naming structure is to match the .scss file name to the .php template it customizes. Don't forget to reference your new .scss in the main.scss page!
