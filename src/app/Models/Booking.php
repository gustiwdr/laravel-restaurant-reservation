<?php

namespace App\Models;

use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'bookings';

    protected $dates = [
        'tanggal',
        'waktu',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nama_depan',
        'nama_belakang',
        'email',
        'no_telp',
        'tamu',
        'jenis_paket',
        'tanggal',
        'waktu',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getStartBookAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

//     public function setStartBookAttribute($value)
//     {
//         $this->attributes['start_book'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
//     }

//     public function getFinishBookAttribute($value)
//     {
//         return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
//     }

//     public function setFinishBookAttribute($value)
//     {
//         $this->attributes['finish_book'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
//     }
}