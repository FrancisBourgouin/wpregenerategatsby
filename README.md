# WP Regenerate Gatsby
Adds an link to regenerate Gatsby from the admin view in WordPress if installed on the same server

## Usage
- Runs 'gatsby build' synchronously for now when clicked in the admin Toolbar.
- Specifify location of your Gatsby.js root folder, and make sure everything is writable by your webserver user (www-data for example)

## TODO
- Use PHP environment variable to specify Gatsby folder
- Add sub menu item to see the Gatsby front
- Add rollback option / temp page while building
- Use an AJAX call to asynchronously run or in a popup so that you can continue to work while you build
