<?php

namespace Esker\Common;

use SoapClient;

/**
 * Class Debug
 * @package Esker\Common
 */
class Debug extends SoapClient
{
    /**
     * @param string $request
     * @param string $location
     * @param string $action
     * @param int $version
     * @param int $one_way
     * @return string
     */
    public function __doRequest($request, $location, $action, $version, $one_way = 0): string
    {
        self::dump($request);
        return parent::__doRequest($request, $location, $action, $version, $one_way);
    }

    /**
     * @param mixed ...$vars
     * @return void
     */
    public static function dump(...$vars): void
    {
        $output = '<pre>';
        foreach ($vars as $var) {
            $output .= print_r($var, true);
        }
        $output .= '</pre>';
        echo $output;
    }
}