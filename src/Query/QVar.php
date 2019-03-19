<?php

namespace Esker\Query;

/**
 * Class QVar
 * @package Esker\Query
 */
class QVar
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
    public $nValues;
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