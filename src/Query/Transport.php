<?php

namespace Esker\Query;

/**
 * Class Transport
 * @package Esker\Query
 */
class Transport
{
    /**
     * @var string
     */
    public $transportID;
    /**
     * @var string
     */
    public $transportName;
    /**
     * @var string
     */
    public $recipientType;
    /**
     * @var string
     */
    public $state;
    /**
     * @var int
     */
    public $nVars;
    /**
     * @var [QVar]
     */
    public $vars;
    /**
     * @var int
     */
    public $nSubnodes;
    /**
     * @var [SubNode]
     */
    public $subnodes;
}