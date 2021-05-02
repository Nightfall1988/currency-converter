<?php

namespace App\Console\Commands;

use App\Services\Currencies\Show\ShowCurrencyRequest;
use App\Services\Currencies\Show\ShowCurrencyService;
use Illuminate\Console\Command;

class ShowCurrencyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'currency:show {symbol}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Print Currency';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(ShowCurrencyService $showCurrencyService)
    {
        parent::__construct();
        $this->showCurrencyService = $showCurrencyService;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $currency = $this->showCurrencyService->execute(
            new ShowCurrencyRequest($this->argument('symbol'))
        );
        return 0;
    }
}
