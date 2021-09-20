<?php

namespace Nidavellir\Abstracts\Contracts;

use Nidavellir\Cube\Models\Api;

interface Pollable
{
    /**
     * Connects to the exchange given env or config parameters.
     *
     * @return mixed The exchange api connection instance
     */
    public function connect();

    /**
     * Returns the raw response of a request.
     *
     * @return mixed The raw response
     */
    public function response();

    /**
     * Injects the api instance for the request.
     *
     * @param  \Nidavellir\Cube\Models\Api|null  $api
     *
     * @return mixed
     */
    public function withApi(Api $api);

    /**
     * Executes a crawler command in a controllable environment.
     *
     * @param  callable $function
     *
     * @return mixed
     */
    public function execute(callable $function);

    public function canExecute();
}
