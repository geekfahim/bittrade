<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileRecharge extends Model
{
    use HasFactory;
    
    // Status
    const STATUS_PENDING = 0;
    const STATUS_COMPLETED = 1;
    const STATUS_FAILED = 2;

    public static function listStatus() {
        return [
            self::STATUS_PENDING => 'Pending',
            self::STATUS_COMPLETED => 'Completed',
            self::STATUS_FAILED => 'Failed',
        ];
    }
    
    public function statusLabel() {
        $list = $this->listStatus();
        return isset($list[$this->status]) ? $list[$this->status] : $this->status;
    }

    public function user() {
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
