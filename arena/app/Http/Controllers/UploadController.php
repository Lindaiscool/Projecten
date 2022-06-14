<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Video;
use Storage;

class UploadController extends Controller
{

    public function UploadVideo()
    {
        return view('upload');
    }

   public function store(Request $request)
   {
      $this->validate($request, [
         'title' => 'required|string|max:255',
         'video' => 'required|file|mimetypes:video/mp4',
      ]);
      $video = new Video;
      $video->title = $request->title;
      if ($request->hasFile('video'))
      {
      $path = $request->file('video')->store('videos', ['disk' =>      'my_files']);
      $video->video = $path;
      }
      $video->save();

      return redirect('upload')->with('status', 'Dit video is geüpload!');

        
  }
}
// echo