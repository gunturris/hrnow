<?php 
namespace App\Models\WaktuKerja;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RefPatternSchedule extends Model{
    protected $table = 'time_reference_pattern_schedule';
    protected $primaryKey = 'id';
 

    const CREATED_AT = 'created_at';
}
