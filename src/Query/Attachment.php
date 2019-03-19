<?php

namespace Esker\Query;

/**
 * Class Attachment
 * @package Esker\Query
 */
class Attachment
{
    /**
     * @var string
     */
    public $inputFormat;
    /**
     * @var string
     */
    public $outputFormat;
    /**
     * @var string
     */
    public $stylesheet;
    /**
     * @var string
     */
    public $outputName;
    /**
     * @var string
     */
    public $sourceAttachment;
    /**
     * @var int
     */
    public $nConvertedAttachments;
    /**
     * @var array
     */
    public $convertedAttachments;
}