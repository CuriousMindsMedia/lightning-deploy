<?php
$deploypath = config('lightning.deploy_url', '/');

Route::GET($deploypath, 'CuriousMinds\LightningDeploy\Http\LDController@deploy')->middleware('web');