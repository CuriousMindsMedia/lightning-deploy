<?php

/*
 * This file is part of lightning-deploy.
 *
 * (c) Eric Meyer <eric@curiousm.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Lightning Deploy Key
    |--------------------------------------------------------------------------
    |
    | Don't forget to set this in your .env file, as it will be used to find
    | your SPA app.
    |
    |
    */

    'lightning_deploy_key' => env('LIGHTNING_DEPLOY_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Deploy Path
    |--------------------------------------------------------------------------
    |
    | Sets the desired url path name.
    |
    |
    */

    'deploy_url' => env('LIGHTNING_DEPLOY_URL')
];
