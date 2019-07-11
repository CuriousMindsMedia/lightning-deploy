<p align="center"><img src="https://curious-minds.s3.amazonaws.com/lightning-deploy.svg" height="100px"></p>

# Laravel Lightning Deploy

A simple methodology to deploy single page apps in Laravel using the [lightning deploy strategy.](http://ember-cli-deploy.com/docs/v0.6.x/the-lightning-strategy/)  


## Installation
Installation is pretty simple. Just run the following command:

```
composer require curiousminds/lightning-deploy
php artisan vendor:publish
```

After that, simply add your configuration, and you are all set. 

## What does it do?
This package provides a configurable route that will pull statically generated page content from your Redis store. It will add the appropriate headers so that client-side content is not cached. (This will be configurable in future versions of the package).  

## Configuration
There are two options which may be set: `lightning_deploy_key`, and the `lightning_deploy_url`.

- `lightning_deploy_key` is the Redis key which contains the desired version of the app. This is typically set when you build your single page application. 
 
-  The `deploy_url` option tells the laravel app what path you would like the single page app to appear on. `/` is set by default. (placing the application on the root url.)
