<?php

namespace Esker\Submission;

/**
 * Class BusinessData
 * @package Esker\Submission
 */
class BusinessData
{
    /**
     * @var string
     */
    public $file;
    /**
     * @var int
     */
    public $nExternalVars;
    /**
     * @var [SVar]
     */
    public $externalVars;
    /**
     * @var int
     */
    public $nAttachments;
    /**
     * @var [Attachment]
     */
    public $attachments;
}