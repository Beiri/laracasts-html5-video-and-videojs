<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class CompletionController extends Controller
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            'auth',
        ];
    }

    public function store(Request $request)
    {
        $video = Video::findOrFail($request->videoId);

        /** @var \App\Models\User $user */
        $user = auth()->user();
        $user->complete($video);
    }
}
