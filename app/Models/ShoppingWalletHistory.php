<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingWalletHistory extends Model
{
    use HasFactory;

    // Type
    const TYPE_ADDED = 1;
    const TYPE_DEBIT = 2;

    // Status
    const STATUS_PENDING = 0;
    const STATUS_COMPLETED = 1;
    const STATUS_FAILED = 2;

    public static function listType() {
        return [
            self::TYPE_ADDED => 'Credit',
            self::TYPE_DEBIT => 'Debit',
        ];
    }

    public static function listStatus() {
        return [
            self::STATUS_PENDING => 'Pending',
            self::STATUS_COMPLETED => 'Processed',
            self::STATUS_FAILED => 'Failed',
        ];
    }
    
    public function typeLabel() {
        $list = $this->listType();
        return isset($list[$this->type]) ? $list[$this->type] : $this->type;
    }

    public function statusLabel() {
        $list = $this->listStatus();
        return isset($list[$this->status]) ? $list[$this->status] : $this->status;
    }

    public function user() {
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function scopeAdded($query) {
        return $query->where('type', self::TYPE_ADDED);
    }
}
