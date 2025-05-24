<?php

namespace App\Repositories;

use App\Interfaces\TransactionRepositoryInterface;
use App\Jobs\SendMailTransactionSuccessjob;
use App\Models\Transaction;
use App\Models\TransactionPassenger;
use App\Models\FlightClass;
use App\Models\PromoCode;

class TransactionRepository implements TransactionRepositoryInterface
{
    public function getTransactionDataFromSession()
    {
        return session()->get('transaction');
    }

    
}
