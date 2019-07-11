<p align="center"><img src="https://curious-minds.s3.amazonaws.com/lightning-deploy.svg" height="100px"></p>

## Laravel Lightning Deploy

A simple methodology to deploy single page apps in Laravel using the [lightning deploy strategy.](http://ember-cli-deploy.com/docs/v0.6.x/the-lightning-strategy/)  


### Installation
- composer require curiousminds/lightning-deploy
- php artisan vendor:publish

### Use
This package provides a configurable route that will pull page content from a Redis store. Running the vendor:publish command will create a lightning.php file in the config directory. There are two options which may be set: `lightning_deploy_key`, and the `deploy_url`. The deploy key is the Redis key which contains the desired version of the app. The `deploy_url` option tells the app what path you would like the single page app to appear on. 
