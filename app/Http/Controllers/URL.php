<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\newURLReq;

class URL extends Controller
{
    /**
     * new url
     */
    public function newURL(newURLReq $request)
    {
        $shortname = $request->input("shortname");
        if (\App\URL::where('shortname', $shortname)->exists()) {
            return back()->withInput($request->all())->withErrors(['此短網址已經存在，請使用其他名稱']);
        }
        \App\URL::create($request->all());
        return view("success",compact('shortname'));
    }

    /**
     * redirect
     */
    public function redirect($shortname)
    {
        $url = \App\URL::where('shortname',$shortname)->firstOrFail();
        $url->hits+=1;
        $url->save();
        return redirect($url->url);
    }
}
