<?php

namespace Esker\Submission;

/**
 * Class SVar
 * @package Esker\Submission
 */
class SVar
{
    /**
     * @var string
     */
    public $attribute;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $simpleValue;
    /**
     * @var int
     */
    public $nValues = 0;
    /**
     * @var array
     */
    public $multipleStringValues;
    /**
     * @var array
     */
    public $multipleLongValues;
    /**
     * @var array
     */
    public $multipleDoubleValues;
}