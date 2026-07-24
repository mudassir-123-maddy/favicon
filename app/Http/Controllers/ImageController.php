<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ImageController extends Controller
{
    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:5120',
        ]);

        $response = Http::attach(
                'file',
                file_get_contents($request->file('image')->getRealPath()),
                $request->file('image')->getClientOriginalName()
            )
            ->post('https://api.elyzo.online/upload-dis/b161a65e46d56f74c34ac38616eefe9f', [
                'public' => 'false',
            ]);

        if ($response->successful()) {
            return response()->json($response->json());
        }

        return response()->json([
            'error' => 'Upload failed',
            'details' => $response->body(),
        ], $response->status());
    }
}