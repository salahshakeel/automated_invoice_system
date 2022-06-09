<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LinkGeneratorPayment;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;

class InvoiceController extends Controller
{
    public function tableInvoice(){
        if(Auth::check()){  
        $invoice = LinkGeneratorPayment::orderBy('id','DESC')->get();
        return View('Admin.Invoices.invoice_table',compact('invoice'));
    }
    return redirect("/"); 

    }

    public function deleteInvoice($id)
    {
        if(Auth::check()){  
        LinkGeneratorPayment::where('id' , $id)->delete();

        return back()->with('invoice_deleted' , 'Invoice successfully deleted!');
    }
    return redirect("/"); 


    }

    public function viewInvoice($id){
        if(Auth::check()){ 
        $invoice= LinkGeneratorPayment::find($id)->
        join('sales_persons', 'sales_persons.id', '=', 'link_generator_payments.sales_person_email_id')->
        join('sales_payments', 'sales_payments.id', '=', 'link_generator_payments.sales_payment_merchant_id')
        ->orderBy('id','DESC')   
        ->get(['link_generator_payments.*', 'sales_persons.sales_person_email','sales_payments.sales_payment_merchant'])->find($id) ;

      return View('Admin.Invoices.view_invoice',compact('invoice'));
    }
    return redirect("/"); 
  }

}
