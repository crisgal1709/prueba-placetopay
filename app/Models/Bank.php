<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Bank extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'banks';

    public static function getBanks()
    {

    	return Cache::remember('banks', 24 * 60, function(){
    		Bank::truncate();

    		$banks = app()->client->getBankList();
			foreach($banks as $bank){
				static::create((array)$bank);
			}

			return static::all();
    	});
    }
}
