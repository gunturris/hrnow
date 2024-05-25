<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ShiftDays extends Model{
    protected $table = 'shift';
    protected $primaryKey = 'id';

    public function shift_detail(): HasMany
    {
        return $this->hasMany(AssesorAssign::class, 'assesor_id', 'id');
    }

    const CREATED_AT = 'created_at';
}

