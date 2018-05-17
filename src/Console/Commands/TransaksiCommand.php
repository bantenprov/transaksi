<?php namespace Bantenprov\Transaksi\Console\Commands;

use Illuminate\Console\Command;

/**
 * The TransaksiCommand class.
 *
 * @package Bantenprov\Transaksi
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TransaksiCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:transaksi';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\Transaksi package';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Welcome to command for Bantenprov\Transaksi package');
    }
}
