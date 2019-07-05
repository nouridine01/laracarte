<?php
namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;

trait DataScopable
{
	public function scopeTwoMonthsOld(Builder $query){
    	//$query->where('created_at','<=',Carbon::parse('2 month ago'));
    	$query->where('created_at','<=',now()->subMonths(2));
    }
}

