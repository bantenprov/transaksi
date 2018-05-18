<?php namespace Bantenprov\Transaksi\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * The TransaksiModel class.
 *
 * @package Bantenprov\Transaksi
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TransaksiModel extends Model
{
    use SoftDeletes;

    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'transaksies';

    protected $fillable = [
        'uuid',
        'nomor',
        'total',
        'denda',
        'potongan',
        'grandtotal',
        'admin_id',
        'customer_transaksi_id',
        'tarif_id',
        'admin_uuid',
        'customer_transaksi_uuid',
        'tarif_uuid'
    ];

    // public function getitem()
    // {
    //     return $this->hasMany('Item', 'id');
    // }

    public function getCustomer()
    {
        return $this->hasOne('Bantenprov\CustomerRetribusi\Models\CustomerRetribusiModel', 'id');
    }

    public function getAdmin()
    {
        return $this->hasOne('Bantenprov\Admin\Models\AdminModel', 'id');
    }
}
