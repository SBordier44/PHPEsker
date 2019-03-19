<?php

namespace Esker\Submission;

/**
 * Class Attachment
 * @package Esker\Submission
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
    public $nConvertedAttachments = 0;
    /**
     * @var [Attachment]
     */
    public $convertedAttachments;
    /**
     * @var int
     */
    public $nVars = 0;
}