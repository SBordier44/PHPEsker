<?php

namespace Esker\Common;

/**
 * Class Constant
 * @package Esker\Common
 */
class Constant
{
    public const WSFILE_MODE = [
        'MODE_UNDEFINED' => 'MODE_UNDEFINED',
        'MODE_ON_SERVER' => 'MODE_ON_SERVER',
        'MODE_INLINED' => 'MODE_INLINED'
    ];

    public const RESOURCE_TYPE = [
        'TYPE_STYLESHEET' => 'TYPE_STYLESHEET',
        'TYPE_IMAGE' => 'TYPE_IMAGE',
        'TYPE_COVER' => 'TYPE_COVER'
    ];

    public const ATTACHMENTS_FILTER = [
        'FILTER_NONE' => 'FILTER_NONE',
        'FILTER_ALL' => 'FILTER_ALL',
        'FILTER_CONVERTED' => 'FILTER_CONVERTED',
        'FILTER_SOURCE' => 'FILTER_SOURCE'
    ];
}