<?php

namespace Nidavellir\Abstracts\Classes;

use Nidavellir\Cube\Models\Api;

abstract class AbstractCrawler
{
    protected $api;
    protected $auth;
    protected $response;
    protected $error;

    public function __construct()
    {
        //
    }

    public function response()
    {
        return $this->response;
    }

    public function execute(callable $function)
    {
        try {
            $this->response = $function();

            return $this;
        } catch (\Exception $e) {
            $this->error = $e;
            // Exception saved in the crawlers error log table.
            return $this; //throw new $e();
        }
    }

    public function onError(callable $function)
    {
        if ($this->error) {
            $aux = $this->error;
            $this->error = null;

            return $function($aux);
        }
    }

    public function withApi(Api $api)
    {
        $this->api = $api;

        return $this;
    }

    public function asSystem()
    {
        $this->system = true;

        return $this;
    }
}
