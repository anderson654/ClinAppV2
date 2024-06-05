<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsaasTransfer extends Model
{
    use HasFactory;
    protected $fillable = [
        'transfer_id', 'status', 'dateCreated',
        'effectiveDate', 'event', 'object',
        'endToEndIdentifier', 'type', 'value',
        'netValue', 'transferFee', 'scheduleDate', 'authorized',
        'confirmedDate', 'failReason', 'bank_code', 'bank_name',
        'bank_accountName', 'bank_ownerName', 'bank_cpfCnpj',
        'bank_agency', 'bank_agencyDigit', 'bank_account',
        'bank_accountDigit', 'bank_pixAddressKey', 'transactionReceiptUrl',
        'operationType', 'description', 'payment_id'
    ];
    protected $hidden = ["updated_at", "created_at"];

    public function payment()
    {
        return $this->hasOne(Payment::class, 'id', 'payment_id');
    }
}
