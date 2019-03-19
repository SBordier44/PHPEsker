<?php

namespace Esker\Common;

/**
 * Class Transport
 * @package Esker\Common
 */
class Transport
{
    public const AUDIT = 'Audit';
    public const COPY_FILE = 'Copy';
    public const EMAIL = 'Mail';
    public const FORM = 'CustomData';
    public const HOSTED_PROCESS = 'Pickup';
    public const JOBS_EMAIL = 'MailRecv';
    public const POSTAL_MAIL = 'MODEsker';
    public const PREDEFINED_PROCESS = 'CmdLine';
    public const RECEIVED_FAX = 'FaxRecv';
    public const SENT_FAX = 'Fax';
    public const RECEIVED_AS2 = 'InboundAS2';
    public const RECEIVED_SFTP = 'InboundFtp';
    public const SMS = 'Sms';
    public const STORAGE = 'GARC';
    public const TABLE_PROCESS = 'CustomTable';
    public const WEBFORM = 'UserForm';

}