<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Shakurov\Coinbase\Facades\Coinbase;
use Shakurov\Coinbase\CoinbaseServiceProvider;

class pay extends Controller
{
    public function charge()
    {
        
        $usuario = Auth()->user()->id;
        $charges = Coinbase::getCharges();
        
        $charge = Coinbase::createCharge([
            'name' => 'Open Invesment',
            'description' => 'Compra de Ocoin',
            'local_price' => [
                'amount' => 0.20,
                'currency' => 'USD',
            ],
            'pricing_type' => 'fixed_price',
        ]);
        $url = $charge['data']['hosted_url'];
        return redirect($url);


        // print_r($url);die();
        // print_r($charge['data']['hosted_url']);die();
        // return view('inversion.create', compact('inversion','usuario'));
    }

    public function show()
    {
        
        // $usuario = Auth()->user()->id;
        // $charges = Coinbase::getCharges();
        print_r($charges);die();
        return view('inversion.create', compact('inversion','usuario'));
    }
}
