<?php 
namespace App\Services\Currencies\Show;

class ShowCurrencyRequest
{
     private string $symbol;

     public function __construct(string $symbol)
     {
        $this->symbol = $symbol;
     }

     public function symbol()
     {
         return $this->symbol;
     }
}
?>