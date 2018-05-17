<?php namespace Bantenprov\Transaksi\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The TransaksiModel class.
 *
 * @package Bantenprov\Transaksi
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TransaksiModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'transaksi';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
