<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CouponModel extends Model
{
		protected $table = 'coupon';
		protected $primaryKey = 'id';
		public $timestamps = false;

}
