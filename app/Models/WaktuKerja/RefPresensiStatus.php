<?php 
namespace App\Models\WaktuKerja;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ShiftDays extends Model{
    protected $table = 'time_reference_presensi_status';
    protected $primaryKey = 'id';
 
    const CREATED_AT = 'created_at';
}

