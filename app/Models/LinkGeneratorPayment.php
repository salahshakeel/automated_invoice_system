<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class LinkGeneratorPayment extends Model
{

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'invoice_id',
        'payement_type',
        'project_title',
        'amount',
        'description',
        'brand',
       'customer_email',
        'sales_person_email_id',
        'sales_payment_merchant_id',
       
    ];

    

   
}
