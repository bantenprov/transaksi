<?php namespace Bantenprov\Transaksi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The Transaksi facade.
 *
 * @package Bantenprov\Transaksi
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class Transaksi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'transaksi';
    }
}
