<?php
class PrepareBill
{

    protected Bill $bill;

    public function __construct(Bill $bill)
    {
        $this->bill = $bill;
    }

    public function getBill(): Bill
    {
        return $this->bill;
    }
    public function payBy(IPaySystem $paySystem)
    {
        return $paySystem->pay($this->bill);
    }
}
