<?php
namespace Semdevops\Backpage\Controllers;

use Illuminate\Http\Request;

class BackpageController
{

	public function redirctRoute(Request $request, $route)
	{
		$originUrl = $request->server('HTTP_REFERER');
		
		$backUrls = session('backUrls',[]);
		$backUrls[] = $originUrl;
		session(['backUrls' => $backUrls]);
		$keys = array_keys($backUrls);
		$last = end($keys);
		$backId = base64_encode($last);
		
		$requestParam = $request->all();
		$requestParam['back'] = $backId;
		return redirect()->route($route, $requestParam);
	}


}