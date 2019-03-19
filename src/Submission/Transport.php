<?php

namespace Esker\Submission;

/**
 * Class Transport
 * @package Esker\Submission
 */
class Transport
{
    /**
     * @var string
     */
    public $transportName;
    /**
     * @var string
     */
    public $recipientType;
    /**
     * @var int
     */
    public $transportIndex;
    /**
     * @var int
     */
    public $nVars = 0;
    /**
     * @var [SVar]
     */
    public $vars;
    /**
     * @var int
     */
    public $nSubnodes = 0;
    /**
     * @var [SubNode]
     */
    public $subnodes;
    /**
     * @var int
     */
    public $nAttachments = 0;
    /**
     * @var [Attachment]
     */
    public $attachments;
}