<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\SalesPayment;
use App\Models\SalesPerson;
use Illuminate\Support\Facades\Auth;

class SalesController extends Controller
{
    public function addSalesPaymentMerchant(){
        if(Auth::check()){  
        return View('Admin.Sales.add_sales_payment_merchant');
        }
        return redirect("/");
    }

    public function createSalesPaymentMerchant(Request $request)
    {
        if(Auth::check()){     
            $request->validate([
                'sales_payment_merchant' => 'required||unique:sales_payments|regex:/[a-zA-Z]+$/u',
            ]);

            if($p = SalesPayment::create ($request -> input()) )
            {
                   
                $p->sales_payment_merchant = $request->sales_payment_merchant;
               

                $p->save();

                 return back()->with ('sales_payment_merchant_created','Successfully created');
            }
        }
        return redirect("/");
    }

    public function addSalesPersonEmail(){
        if(Auth::check()){   
        return View('Admin.Sales.add_sales_person_email');
        }
        return redirect("/");
    }

    public function createSalesPersonEmail(Request $request)
    {
        if(Auth::check()){         
            $request->validate([
                'sales_person_email' => 'required||unique:sales_persons|regex:/[a-zA-Z]+$/u',
            ]);

            if($p = SalesPerson::create ($request -> input()) )
            {
                   
                $p->sales_person_email = $request->sales_person_email;
               

                $p->save();

                 return back()->with ('sales_person_email_created','Successfully created');
            }
        }
        return redirect("/");
    }


    public function tableSalesPaymentMerchant(){
        if(Auth::check()){       
        $spm = SalesPayment::orderBy('id','DESC')->get();

        return View('Admin.Sales.sales_payment_merchant_table', compact('spm'));
    }
    return redirect("/");

    }

    public function tableSalesPersonEmail(){
        if(Auth::check()){    
        $spe = SalesPerson::orderBy('id','DESC')->get();
        return View('Admin.Sales.sales_person_email_table', compact('spe'));
    }
    return redirect("/");
    }

    
    public function deleteSalesPaymentMerchant($id)
    {
        if(Auth::check()){  
        SalesPayment::where('id' , $id)->delete();

        return back()->with('sales_payment_merchant_deleted' , 'Merchant successfully deleted!');
    }
    return redirect("/");

    }

    public function deleteSalesPersonEmail($id)
    {
        if(Auth::check()){  
        SalesPerson::where('id' , $id)->delete();

        return back()->with('sales_person_email_deleted' , 'Email successfully deleted!');
    }
    return redirect("/"); 

    }
}
