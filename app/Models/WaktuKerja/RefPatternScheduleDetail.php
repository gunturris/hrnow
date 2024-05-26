<?php 
namespace App\Models\WaktuKerja;
use Illuminate\Database\Eloquent\Model; 

class RefPatternScheduleDetail extends Model{
    protected $table = 'time_reference_pattern_schedule_detail';
    protected $primaryKey = 'id';
 

    const CREATED_AT = 'created_at';
}
