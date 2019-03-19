<?php

namespace Esker\Query;

/**
 * Class ActionResult
 * @package Esker\Query
 */
class ActionResult
{
    /**
     * @var int
     */
    public $nSucceeded;
    /**
     * @var int
     */
    public $nFailed;
    /**
     * @var int
     */
    public $nItem;
    /**
     * @var array
     */
    public $transportIDs;
    /**
     * @var string
     */
    public $errorReason;
}