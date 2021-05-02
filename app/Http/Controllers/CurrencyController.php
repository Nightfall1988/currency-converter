<?php

namespace App\Http\Controllers;
use App\Services\Currencies\Import\ImportCurrenciesService;
use  App\Services\Currencies\Show\ShowCurrencyRequest;
use App\Services\Currencies\Show\ShowCurrencyService;
use App\Models\Currency;

class CurrencyController extends Controller
{
    public function __construct(ImportCurrenciesService $importCurrenciesService) 
    {
        $this->importCurrenciesService = $importCurrenciesService;
        $this->showCurrencyService = new ShowCurrencyService;
    }

    public function home()
    {
        $symbolArray = [];
        foreach (Currency::all() as $currency) {
            $symbolArray[] = $currency->symbol; 
        }
        return view('conversionPage', compact('symbolArray'));
    }

    public function show()
    {
        $amount = request('amount');
        $symbol = request('currencies');
        $currency = $this->showCurrencyService->execute(
            new ShowCurrencyRequest($symbol)
        );
        $convertedRate = $this->showCurrencyService->convert($currency, $amount);
        
        return view('resultPage', compact('convertedRate'));
    }
}
