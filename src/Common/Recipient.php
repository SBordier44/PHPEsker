<?php

namespace Esker\Common;

/**
 * Class Recipient
 * @package Esker\Common
 */
class Recipient
{
    public const AUDIT = 'AUD';
    public const COPY_FILE = 'CF';
    public const EMAIL = 'SM';
    public const FORM = 'CD#<xxx>';
    public const HOSTED_PROCESS = 'PU';
    public const JOBS_EMAIL = 'ISM';
    public const POSTAL_MAIL = 'MOD';
    public const PREDEFINED_PROCESS = 'CL';
    public const RECEIVED_FAX = 'FGFaxIn';
    public const SENT_FAX = 'FGFaxOut';
    public const RECEIVED_AS2 = 'IAS2';
    public const RECEIVED_SFTP = 'IFTP';
    public const SMS = 'Sms';
    public const STORAGE = 'GARC';
    public const TABLE_PROCESS = 'CT#<xxx>';
    public const WEBFORM = 'USF';
}