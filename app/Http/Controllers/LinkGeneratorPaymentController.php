<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\LinkGeneratorPayment;
use App\Models\SalesPayment;
use App\Models\SalesPerson;
use App\Helpers\Helper;
use DB;


class LinkGeneratorPaymentController extends Controller
{
  
    function link_generator_payment_page1(){
        return View('Client_UserInterface.link_generator_payment_page1');
    }

    function create_link_generator_payment_page1(Request $request){
        
 
           $payement_type  = $request->payement_type;
        
        
        return redirect('/link2')->with('payement_type', $payement_type);
    }

    function link_generator_payment_page2(){
      
         return View('Client_UserInterface.link_generator_payment_page2');
    }

    function create_link_generator_payment_page2(Request $request){
     
        $payement_type  = $request->payement_type;
        $project_title =  $request->project_title;
        $amount =  $request->amount;
        $description = $request->description;
        $brand = $request->brand;
        
        return redirect('/link3')->with('payement_type', $payement_type)->with( 'project_title', $project_title)->with('amount', $amount)->with('description', $description)->with('brand', $brand);
    }

    function link_generator_payment_page3(){
        $sales_payment_merchant = SalesPayment::orderBy('id','DESC')-> get();
        $sales_person_email = SalesPerson::orderBy('id','DESC')-> get();
        return View('Client_UserInterface.link_generator_payment_page3',compact('sales_payment_merchant','sales_person_email'));
    }

   function create_link_generator_payment_page3(Request $request){

                $date =  date('y');
     
                $inv_no = Helper::IDGenerator(new LinkGeneratorPayment, 'invoice_id', 4,  "INV-$date"); /** Generate id */

                $id = DB::table('link_generator_payments')->insertGetId([
                    'invoice_id' => $inv_no,
                    'payement_type'  => $request->payement_type,
                    'project_title' =>  $request->project_title,
                    'amount' =>  $request->amount,
                    'description' => $request->description,
                    'brand' => $request->brand,
    
                    'customer_email' => $request->customer_email,
                    'sales_person_email_id' => $request->sales_person_email_id,
                    'sales_payment_merchant_id' => $request->sales_payment_merchant_id,
                
                ]);

           
                return redirect('/url')->with('id',$id);
            


   }

   function url_page(){
      
    return View('Client_UserInterface.url_page');
}

    function payment_details(){
        return View('Client_UserInterface.client_payment');
    }

    function paymentDone(Request $request){
            \Stripe\Stripe::setApiKey ( 'sk_test_yourSecretkey' );
        try {
            \Stripe\Charge::create ( array (
                    "amount" => 300 * 100,
                    "currency" => "usd",
                    "source" => $request->input ( 'stripeToken' ), // obtained with Stripe.js
                    "description" => "Test payment." 
            ) );
            
            Session::flash ( 'success-message', 'Payment done successfully !' );
            return Redirect::back ();
        } catch ( \Exception $e ) {
            Session::flash ( 'fail-message', "Error! Please Try again." );
            return Redirect::back ();
        }
    }

    
}
