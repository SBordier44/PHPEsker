<?php

namespace Esker\Query;

/**
 * Class Result
 * @package Esker\Query
 */
class Result
{
    /**
     * @var string
     */
    public $noMoreItems;
    /**
     * @var int
     */
    public $nTransports;
    /**
     * @var [Transport]
     */
    public $transports;
}