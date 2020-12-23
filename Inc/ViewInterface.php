<?php

namespace Inc;

/**
 * Interface ViewInterface
 * @package Inc
 */
interface ViewInterface
{
    /**
     * @param $params
     * @param $data
     * @return mixed
     */
    public function loadView($params, $data);
}