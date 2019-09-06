<?php
namespace Semdevops\Backpage\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BackpageController
{

	public function redirctRoute(Request $request, $route)
	{
		$originUrl = $request->server('HTTP_REFERER');
		
        $backUrls = session('backUrls',[]);
        $backId = (string) Str::uuid();

		$backUrls[$backId] = $originUrl;
		session(['backUrls' => $backUrls]);
		
		$requestParam = $request->all();
		$requestParam['back'] = base64_encode($backId);
		return redirect()->route($route, $requestParam);
	}


}