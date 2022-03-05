<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Library\SslCommerz\SslCommerzNotification;

class SslCommerzPaymentController extends Controller
{

    public function exampleEasyCheckout()
    {
        return view('exampleEasycheckout');
    }

    public function exampleHostedCheckout()
    {
        return view('exampleHosted');
    }


    public function CashOnDelivery(Request $request){
        $subTotal = (float) $request->stAmount;
        $vat = ($subTotal*15)/100;
        $total = $subTotal+$vat;


        $post_data = array();
        $post_data['total_amount'] = $total;
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique
        $post_data['vat'] = 15;
        $post_data['subTotal'] = $subTotal;

        //LOCATION INFORMATION
        $post_data['order_location'] = $request->location;

        //SERVICE INFORMATION
        $post_data['bedRP'] = $request->bedRoomPrice;
        $post_data['bedRQ'] = $request->bedRoomQuantity;
        $post_data['bedTP'] = $request->bedRoomTotalPrice;

        $post_data['bathRP'] = $request->bathRoomPrice;
        $post_data['bathRQ'] = $request->bathRoomQuantity;
        $post_data['bathTP'] = $request->bathRoomTotalPrice;

        //SERVICE EXTRA
        $post_data['ksPrice'] = $request->ksPrice;
        $post_data['ksQuantity'] = $request->ksQuantity;
        $post_data['ksTotal'] = $request->ksTotal;

        $post_data['fsPrice'] = $request->fsPrice;
        $post_data['fsQuantity'] = $request->fsQuantity;
        $post_data['fsTotal'] = $request->fsTotal;

        $post_data['gsPrice'] = $request->gsPrice;
        $post_data['gsQuantity'] = $request->gsQuantity;
        $post_data['gsTotal'] = $request->gsTotal;

        $post_data['bsPrice'] = $request->bsPrice;
        $post_data['bsQuantity'] = $request->bsQuantity;
        $post_data['bsTotal'] = $request->bsTotal;

        //APPOINTMENT INFORMATION
        $post_data['appointmentDate'] = $request->appointmentDate;
        $post_data['appointmentTime'] = $request->appointmentTime;

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $request->displayName;
        $post_data['cus_email'] = $request->displayEmail;
        $post_data['cus_add1'] = $request->displayAddress;
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = $request->displayCity;
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = $request->displayPostCode;
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = $request->displayPhone;
        $post_data['cus_fax'] = "";
        $post_data['cus_area'] = $request->displayArea;
        $post_data['cus_order_note'] = $request->displayOrderNote;



        $insertOrder = DB::table('orders')
            ->insert([
                'currency' => "USD",
                'status' => 'Pending',
                'transaction_id' => $post_data['tran_id'],
                'sub_total' => $post_data['subTotal'],
                'vat' => $post_data['vat'],
                'amount' => $post_data['total_amount'],
                'bed_rp' => $post_data['bedRP'],
                'bed_rq' => $post_data['bedRQ'],
                'bed_tp' => $post_data['bedTP'],
                'bath_rp' => $post_data['bathRP'],
                'bath_rq' => $post_data['bathRQ'],
                'bath_tp' => $post_data['bathTP'],

                'ks_price' => $post_data['ksPrice'],
                'ks_quantity' => $post_data['ksQuantity'],
                'ks_total' => $post_data['ksTotal'],

                'fs_price' => $post_data['fsPrice'],
                'fs_quantity' => $post_data['fsQuantity'],
                'fs_total' => $post_data['fsTotal'],

                'gs_price' => $post_data['gsPrice'],
                'gs_quantity' => $post_data['gsQuantity'],
                'gs_total' => $post_data['gsTotal'],

                'bs_price' => $post_data['bsPrice'],
                'bs_quantity' => $post_data['bsQuantity'],
                'bs_total' => $post_data['bsTotal'],
                'appoint_date' => $post_data['appointmentDate'],
                'appoint_time' => $post_data['appointmentTime'],
                'name' => $post_data['cus_name'],
                'email' => $post_data['cus_email'],
                'phone' => $post_data['cus_phone'],
                'address' => $post_data['cus_add1'],
                'post_code' => $post_data['cus_postcode'],
                'order_note' => $post_data['cus_order_note'],
                'city' => $post_data['cus_phone'],
                'area' => $post_data['cus_area'],
                'order_location' => $post_data['order_location'],
                'payment_type' => "Cash"
            ]);

        return $insertOrder;

    }



    public function index(Request $request)
    {
        # Here you have to receive all the order data to initate the payment.
        # Let's say, your oder transaction informations are saving in a table called "orders"
        # In "orders" table, order unique identity is "transaction_id". "status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.

        $subTotal = (float) $request->stAmount;
        $vat = ($subTotal*15)/100;
        $total = $subTotal+$vat;


        $post_data = array();
        $post_data['total_amount'] = $total;
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique
        $post_data['vat'] = 15;
        $post_data['subTotal'] = $subTotal;

        //LOCATION INFORMATION
        $post_data['order_location'] = $request->location;

        //SERVICE INFORMATION
        $post_data['bedRP'] = $request->bedRoomPrice;
        $post_data['bedRQ'] = $request->bedRoomQuantity;
        $post_data['bedTP'] = $request->bedRoomTotalPrice;

        $post_data['bathRP'] = $request->bathRoomPrice;
        $post_data['bathRQ'] = $request->bathRoomQuantity;
        $post_data['bathTP'] = $request->bathRoomTotalPrice;

        //SERVICE EXTRA
        $post_data['ksPrice'] = $request->ksPrice;
        $post_data['ksQuantity'] = $request->ksQuantity;
        $post_data['ksTotal'] = $request->ksTotal;

        $post_data['fsPrice'] = $request->fsPrice;
        $post_data['fsQuantity'] = $request->fsQuantity;
        $post_data['fsTotal'] = $request->fsTotal;

        $post_data['gsPrice'] = $request->gsPrice;
        $post_data['gsQuantity'] = $request->gsQuantity;
        $post_data['gsTotal'] = $request->gsTotal;

        $post_data['bsPrice'] = $request->bsPrice;
        $post_data['bsQuantity'] = $request->bsQuantity;
        $post_data['bsTotal'] = $request->bsTotal;

        //APPOINTMENT INFORMATION
        $post_data['appointmentDate'] = $request->appointmentDate;
        $post_data['appointmentTime'] = $request->appointmentTime;


        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $request->displayName;
        $post_data['cus_email'] = $request->displayEmail;
        $post_data['cus_add1'] = $request->displayAddress;
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = $request->displayCity;
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = $request->displayPostCode;
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = $request->displayPhone;
        $post_data['cus_fax'] = "";
        $post_data['cus_area'] = $request->displayArea;
        $post_data['cus_order_note'] = $request->displayOrderNote;

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";

        #Before  going to initiate the payment order status need to insert or update as Pending.
        $update_product = DB::table('orders')
            ->where('transaction_id', $post_data['tran_id'])
            ->updateOrInsert([
                'currency' => "USD",
                'status' => 'Pending',
                'transaction_id' => $post_data['tran_id'],
                'sub_total' => $post_data['subTotal'],
                'vat' => $post_data['vat'],
                'amount' => $post_data['total_amount'],
                'bed_rp' => $post_data['bedRP'],
                'bed_rq' => $post_data['bedRQ'],
                'bed_tp' => $post_data['bedTP'],
                'bath_rp' => $post_data['bathRP'],
                'bath_rq' => $post_data['bathRQ'],
                'bath_tp' => $post_data['bathTP'],

                'ks_price' => $post_data['ksPrice'],
                'ks_quantity' => $post_data['ksQuantity'],
                'ks_total' => $post_data['ksTotal'],

                'fs_price' => $post_data['fsPrice'],
                'fs_quantity' => $post_data['fsQuantity'],
                'fs_total' => $post_data['fsTotal'],

                'gs_price' => $post_data['gsPrice'],
                'gs_quantity' => $post_data['gsQuantity'],
                'gs_total' => $post_data['gsTotal'],

                'bs_price' => $post_data['bsPrice'],
                'bs_quantity' => $post_data['bsQuantity'],
                'bs_total' => $post_data['bsTotal'],
                'appoint_date' => $post_data['appointmentDate'],
                'appoint_time' => $post_data['appointmentTime'],
                'name' => $post_data['cus_name'],
                'email' => $post_data['cus_email'],
                'phone' => $post_data['cus_phone'],
                'address' => $post_data['cus_add1'],
                'post_code' => $post_data['cus_postcode'],
                'order_note' => $post_data['cus_order_note'],
                'city' => $post_data['cus_phone'],
                'area' => $post_data['cus_area'],
                'order_location' => $post_data['order_location'],
                'payment_type' => "SSL"
            ]);

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }

    }

    public function payViaAjax(Request $request)
    {

        # Here you have to receive all the order data to initate the payment.
        # Lets your oder trnsaction informations are saving in a table called "orders"
        # In orders table order uniq identity is "transaction_id","status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.

        $post_data = array();
        $post_data['total_amount'] = '10'; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = 'Customer Name';
        $post_data['cus_email'] = 'customer@mail.com';
        $post_data['cus_add1'] = 'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801XXXXXXXXX';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";


        #Before  going to initiate the payment order status need to update as Pending.
        $update_product = DB::table('orders')
            ->where('transaction_id', $post_data['tran_id'])
            ->updateOrInsert([
                'name' => $post_data['cus_name'],
                'email' => $post_data['cus_email'],
                'phone' => $post_data['cus_phone'],
                'amount' => $post_data['total_amount'],
                'status' => 'Pending',
                'address' => $post_data['cus_add1'],
                'transaction_id' => $post_data['tran_id'],
                'currency' => $post_data['currency']
            ]);

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'checkout', 'json');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }

    }

    public function success(Request $request)
    {
        echo "Transaction is Successful";

        $tran_id = $request->input('tran_id');
        $amount = $request->input('amount');
        $currency = $request->input('currency');

        $sslc = new SslCommerzNotification();

        #Check order status in order tabel against the transaction id or order id.
        $order_detials = DB::table('orders')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount')->first();

        if ($order_detials->status == 'Pending') {
            $validation = $sslc->orderValidate($request->all(), $tran_id, $amount, $currency);

            if ($validation == TRUE) {
                /*
                That means IPN did not work or IPN URL was not set in your merchant panel. Here you need to update order status
                in order table as Processing or Complete.
                Here you can also sent sms or email for successfull transaction to customer
                */
                $update_product = DB::table('orders')
                    ->where('transaction_id', $tran_id)
                    ->update(['status' => 'success']);

                echo "<br >Transaction is successfully Completed";
                return redirect('/successfull');
            } else {
                /*
                That means IPN did not work or IPN URL was not set in your merchant panel and Transation validation failed.
                Here you need to update order status as Failed in order table.
                */
                $update_product = DB::table('orders')
                    ->where('transaction_id', $tran_id)
                    ->update(['status' => 'Failed']);
                echo "validation Fail";
            }
        } else if ($order_detials->status == 'success' || $order_detials->status == 'Complete') {
            /*
             That means through IPN Order status already updated. Now you can just show the customer that transaction is completed. No need to udate database.
             */
            echo "Transaction is successfully Completed";
            return redirect('/successfull');
        } else {
            #That means something wrong happened. You can redirect customer to your product page.
            echo "Invalid Transaction";
        }


    }

    public function fail(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_detials = DB::table('orders')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount')->first();

        if ($order_detials->status == 'Pending') {
            $update_product = DB::table('orders')
                ->where('transaction_id', $tran_id)
                ->update(['status' => 'Failed']);
            echo "Transaction is Falied";
        } else if ($order_detials->status == 'success' || $order_detials->status == 'Complete') {
            echo "Transaction is already Successful";
        } else {
            echo "Transaction is Invalid";
        }

    }

    public function cancel(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_detials = DB::table('orders')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount')->first();

        if ($order_detials->status == 'Pending') {
            $update_product = DB::table('orders')
                ->where('transaction_id', $tran_id)
                ->update(['status' => 'Canceled']);
            echo "Transaction is Cancel";
        } else if ($order_detials->status == 'success' || $order_detials->status == 'Complete') {
            echo "Transaction is already Successful";
        } else {
            echo "Transaction is Invalid";
        }


    }

    public function ipn(Request $request)
    {
        #Received all the payement information from the gateway
        if ($request->input('tran_id')) #Check transation id is posted or not.
        {

            $tran_id = $request->input('tran_id');

            #Check order status in order tabel against the transaction id or order id.
            $order_details = DB::table('orders')
                ->where('transaction_id', $tran_id)
                ->select('transaction_id', 'status', 'currency', 'amount')->first();

            if ($order_details->status == 'Pending') {
                $sslc = new SslCommerzNotification();
                $validation = $sslc->orderValidate($request->all(), $tran_id, $order_details->amount, $order_details->currency);
                if ($validation == TRUE) {
                    /*
                    That means IPN worked. Here you need to update order status
                    in order table as Processing or Complete.
                    Here you can also sent sms or email for successful transaction to customer
                    */
                    $update_product = DB::table('orders')
                        ->where('transaction_id', $tran_id)
                        ->update(['status' => 'success']);

                    echo "Transaction is successfully Completed";
                } else {
                    /*
                    That means IPN worked, but Transation validation failed.
                    Here you need to update order status as Failed in order table.
                    */
                    $update_product = DB::table('orders')
                        ->where('transaction_id', $tran_id)
                        ->update(['status' => 'Failed']);

                    echo "validation Fail";
                }

            } else if ($order_details->status == 'success' || $order_details->status == 'Complete') {

                #That means Order status already updated. No need to udate database.

                echo "Transaction is already successfully Completed";
            } else {
                #That means something wrong happened. You can redirect customer to your product page.

                echo "Invalid Transaction";
            }
        } else {
            echo "Invalid Data";
        }
    }

}
