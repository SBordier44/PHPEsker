<?php

namespace Esker\Submission;

/**
 * Class ExtractionParameters
 * @package Esker\Submission
 */
class ExtractionParameters
{
    /**
     * @var int
     */
    public $nItems = 0;
    /**
     * @var string
     */
    public $fullPreviewMode;
    /**
     * @var string
     */
    public $attachmentFilter;
    /**
     * @var string
     */
    public $outputFileMode;
    /**
     * @var string
     */
    public $includeSubNodes = 'false';
    /**
     * @var int
     */
    public $startIndex;
}