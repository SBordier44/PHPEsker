<?php

namespace Esker\Submission;

/**
 * Class SubNode
 * @package Esker\Submission
 */
class SubNode
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $relativeName;
    /**
     * @var int
     */
    public $nSubnodes;
    /**
     * @var [SubNode]
     */
    public $subNodes;
    /**
     * @var int
     */
    public $nVars;
    /**
     * @var [SVar]
     */
    public $vars;
}