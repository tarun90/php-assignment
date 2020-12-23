<?php

namespace Core;

use Inc\ViewInterface;

/**
 * Class BaseController
 * @package Core
 */
class BaseController implements ViewInterface
{
    /**
     * @param $params
     * @param array $data
     */
    public function loadView($params, $data = array())
    {
        if (file_exists(SITE_PATH . 'View/' . $params . ".php")) {
            if (!empty($data)) {
                extract($data);
            }

            include(SITE_PATH . 'View/' . $params . ".php");
        }
    }
}