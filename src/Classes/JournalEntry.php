<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2019-06-12 10:27:00 AM PDT
 */

namespace NetSuite\Classes;

class JournalEntry extends Record {
    public $postingPeriod;
    public $tranDate;
    public $currency;
    public $exchangeRate;
    public $tranId;
    public $reversalDate;
    public $reversalDefer;
    public $parentExpenseAlloc;
    public $isBookSpecific;
    public $accountingBook;
    public $reversalEntry;
    public $createdFrom;
    public $department;
    public $class;
    public $location;
    public $subsidiary;
    public $nexus;
    public $subsidiaryTaxRegNum;
    public $taxPointDate;
    public $memo;
    public $toSubsidiary;
    public $approved;
    public $createdDate;
    public $lastModifiedDate;
    public $customForm;
    public $lineList;
    public $accountingBookDetailList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "postingPeriod" => "RecordRef",
        "tranDate" => "dateTime",
        "currency" => "RecordRef",
        "exchangeRate" => "float",
        "tranId" => "string",
        "reversalDate" => "dateTime",
        "reversalDefer" => "boolean",
        "parentExpenseAlloc" => "RecordRef",
        "isBookSpecific" => "boolean",
        "accountingBook" => "RecordRef",
        "reversalEntry" => "string",
        "createdFrom" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "nexus" => "RecordRef",
        "subsidiaryTaxRegNum" => "RecordRef",
        "taxPointDate" => "dateTime",
        "memo" => "string",
        "toSubsidiary" => "RecordRef",
        "approved" => "boolean",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "lineList" => "JournalEntryLineList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
