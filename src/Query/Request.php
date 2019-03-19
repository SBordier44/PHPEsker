<?php

namespace Esker\Query;

use Esker\Common\Constant;

/**
 * Class Request
 * @package Esker\Query
 */
class Request
{
    /**
     * @var string
     */
    public $filter;
    /**
     * @var string
     */
    public $sortOrder;
    /**
     * @var array
     */
    public $attributes;
    /**
     * @var int
     */
    public $nItems;
    /**
     * @var string
     */
    public $includeSubNodes = 'false';
    /**
     * @var string
     */
    public $searchInArchive = 'false';
    /**
     * @var string
     */
    public $fileRefMode = Constant::WSFILE_MODE['MODE_INLINED'];
}