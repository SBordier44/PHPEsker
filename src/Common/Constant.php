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

    public const MAIL_TYPE = [
        'FR' => [
            'Prior' => 'U', // default
            'Eco' => 'E',
            'Registered' => 'R1',
            'Ecopli' => 'En'
        ],
        'US' => [
            'FirstClass' => 'F' // default
        ],
        'ES' => [
            'Standard' => 'S' // default
        ],
        'UK' => [
            'Premier' => 'P', // default
            'Standard' => 'S'
        ],
        'SP' => [
            'Standard' => 'S' // default
        ],
        'BE' => [
            'Prior' => 'P', // default
            'PriorWithMailID' => 'PMID',
            'NonPrior' => 'NP',
            'DM1' => 'DM1',
            'DM2' => 'DM2',
            'Registered' => 'R'
        ]
    ];
}
