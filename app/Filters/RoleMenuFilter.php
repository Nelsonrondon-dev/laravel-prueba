<?php

namespace App\Filters;

use JeroenNoten\LaravelAdminLte\Menu\Filters\FilterInterface;
use Auth;

class RoleMenuFilter implements FilterInterface
{
	public function transform($item)
	{
		if (! $this->isVisible($item)) {
			return false;
		}

		if (isset($item['header'])) {
			$item = $item['header'];
		}

		return $item;
	}

	protected function isVisible($item)
	{

		if (isset($item['roles'])) {
		
			if (!(Auth::user()->roles->first()->name == $item['roles'])) {
	
				return false;

			} else {
				return true;
			};
		} else {
		
		return true;
		
	}

		
	}

}