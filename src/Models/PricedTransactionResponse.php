<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class PricedTransactionResponse implements \JsonSerializable
{
    /**
     * @var PricedTransactionResponseTransactionsItems[]|null
     */
    private $transactions;

    /**
     * Returns Transactions.
     *
     * @return PricedTransactionResponseTransactionsItems[]|null
     */
    public function getTransactions(): ?array
    {
        return $this->transactions;
    }

    /**
     * Sets Transactions.
     *
     * @maps Transactions
     *
     * @param PricedTransactionResponseTransactionsItems[]|null $transactions
     */
    public function setTransactions(?array $transactions): void
    {
        $this->transactions = $transactions;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->transactions)) {
            $json['Transactions'] = $this->transactions;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
