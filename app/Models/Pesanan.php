<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'warkop_name',
        'warkop_address',
        'jasa_desain_interior',
        'jasa_desain_branding',
        'jasa_desain_pencahayaan',
        'jasa_desain_exterior',
        'jasa_pengurusan_internet',
        'persediaan_meja',
        'persediaan_kursi',
        'persediaan_lemari',
        'persediaan_lampu',
        'persediaan_kipas',
        'persediaan_wire',
    ];

    /**
     * Get the user that owns the Pesanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
