<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
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

    public function from_user() {
    	return $this->belongsTo(User::class, 'from_user_id', 'id');
    }

    public function to_user() {
    	return $this->belongsTo(User::class, 'to_user_id', 'id');
    }
}
