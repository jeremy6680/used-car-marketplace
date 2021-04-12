# Used-Car MarketPlace Plugin

## Notes

This is a simple plugin to set up a used-car marketplace on a WordPress website.

It uses Metabox and you'll need a premium license to utilize this plugin on your project.

This plugin, upon activation, does the following things:

* Creation of a custom post type for cars  (`includes/custom/custom-post-type.php`);
* Creation of custom fields for the cars (`includes/custom/custom-fields.php`);
* Creation of a template for the single car page (`templates/archive-car.php`);
* Creation of a template for the cars archive page (`templates/single-car.php`).

NB. The frontend leverages Tailwind CSS (with PostCSS).

## How it works

* Download the plugin
* Using the command line, go to your project: 
```
$ cd your-project/wp-content/plugins/used-car-marketplace
```
Then, install the dependencies (Metabox free and premium extensions):
```
$ composer install
```

In the backend of your website, you'll see a new post type: Car

You can enter a new Car to sell on the front end.

To do that, create a new page and add the following shortcode:
`[mb_frontend_form id='product-details' post_fields='title']`

For the frontend, you need to add your code in `assets/src/script.js` and `assets/src/style.css`.

Then you can compile your assets:

```
$ npm run build
```

In order to optimize the files for production, you may execute the following command:

```
$ npm run prod
```
