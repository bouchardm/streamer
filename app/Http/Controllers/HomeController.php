<?php

namespace App\Http\Controllers;

use Illuminate\Filesystem\FilesystemManager;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $files = Storage::files("video");
        foreach ($files as &$file) {
            $file = str_replace('video/', '', $file);
        }

        return view('welcome')->with(compact('files'));
    }

    public function videoPlayer($video, $subtitle = '') {
        $subtitles = Storage::files("subtitle");
        foreach ($subtitles as &$array_subtitle) {
            $array_subtitle = str_replace('subtitle/', '', $array_subtitle);
        }

        return view('video-player')
            ->with(compact('video'))
            ->with(compact('subtitles'))
            ->with(compact('subtitle'));
    }

    public function addSubtitle(Request $request) {
        $file = $request->file('subtitle');
        $request->file('subtitle')->move(public_path('subtitle'), $file->getClientOriginalName());
        return Redirect::route('home');
    }

    public function addVideo(Request $request) {
        $file = $request->file('video');
        $request->file('video')->move(public_path('video'), $file->getClientOriginalName());
        return Redirect::route('home');
    }
}
