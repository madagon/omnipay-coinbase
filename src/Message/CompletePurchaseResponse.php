<?php

namespace Omnipay\Coinbase\Message;

/**
 * Coinbase CompletePurchase Response
 */
class CompletePurchaseResponse extends FetchTransactionResponse
{
    /**
     * {@inheritdoc}
     */
    public function isSuccessful()
    {
        return parent::isSuccessful() && $this->isPaid();
    }
}