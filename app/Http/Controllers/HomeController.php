<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index(Request $request, $language = 'en')
{
    if (in_array($language, ['en', 'ru', 'es'])) {
        app()->setLocale($language);
    }

    $v = [];
    $v['pageurl'] = 'home';

    if ($request->isMethod('post') && $request->hasFile('w_image')) {

        $request->validate([
            'w_image' => 'required|image|max:5120',
        ]);

        $image = $request->file('w_image');

        $response = Http::attach(
            'file',
            file_get_contents($image->getRealPath()),
            $image->getClientOriginalName()
        )->post('https://api.elyzo.online/upload-dis/17fb8f2646caa7a0ab58ca6d5bcdbefa', [
            'public' => 'true',
        ]);

        if ($response->successful()) {
            $data = $response->json();

            // Redirect back with the result stored in the session (flash data)
            return redirect()->back()->with('result', [
                'file_name' => $image->getClientOriginalName(),
                'url'       => $data['url'] ?? null,
            ]);
        }

        return redirect()->back()->with('result', [
            'error' => true,
            'body'  => $response->body(),
        ]);
    }

    return view('home', $v);
}
}
