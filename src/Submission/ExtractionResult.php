<?php

namespace Esker\Submission;

/**
 * Class ExtractionResult
 * @package Esker\Submission
 */
class ExtractionResult
{
    /**
     * @var int
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