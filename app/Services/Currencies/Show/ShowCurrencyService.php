<?php 

namespace App\Services\Currencies\Show;

use App\Models\Currency;
use PhpParser\Builder\Function_;

class ShowCurrencyService
{
    public function execute(ShowCurrencyRequest $showCurrencyRequest)
    {
        return Currency::findOrFail($showCurrencyRequest->symbol());
    }

    public function convert(Currency $currency, string $amount)
    {
        $converted = ($currency->rate / 100000) * $amount;
        return $converted;
    }
}

?>