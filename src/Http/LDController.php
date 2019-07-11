<?php
namespace CuriousMinds\LightningDeploy\Http;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Redis as Redis;


class LDController extends BaseController
{
    /**
     * Finds the indicated version of the application
     * from the Redis cache.
     *
     * @return mixed
     */
    public function deploy(){
        return $this->noCache($this->getApp());
    }

    /**
     * @param $response
     *
     * @return mixed
     */
    protected function noCache($response)
    {
        // See http://stackoverflow.com/questions/49547/how-to-control-web-page-caching-across-all-browsers
        return $response->header('Cache-Control', 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0')
            ->header('Pragma', 'no-cache')->header('Expires', '0');
    }

    /**
     *
     * @return mixed
     */
    protected function getApp()
    {
        $redis        = Redis::connection();
        $indexHtmlKey = env('LIGHTNING_DEPLOY_KEY','edd-cli:current-content');
        return response($redis->get($indexHtmlKey));
    }
}