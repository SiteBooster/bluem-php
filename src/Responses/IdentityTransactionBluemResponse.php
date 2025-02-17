<?php

namespace Bluem\BluemPHP\Responses;

class IdentityTransactionBluemResponse extends TransactionBluemResponse
{
    public static $transaction_type = "Identity";
    public static $response_primary_key = "Identity" . "Transaction";
    public static $error_response_type = "Identity" . "ErrorResponse";
}
