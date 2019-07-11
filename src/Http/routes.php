<?php
$deploypath = config('lightning.deploy_url', '/');

Route::GET('/', 'Curiousminds\LightningDeploy\Http\LightningDeployController@deploy');