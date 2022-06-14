<meta name="csrf-token" content ="{{csrf_token()}}">
<script src="{{asset('js/app.js')}}"> </script>
<link rel="stylesheet" href="{{asset('css/app.css')}}">

@include('layouts.header')
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1,   shrink-to-fit=no">
    <strong><title class="mx-2">Upload</title></strong>
</head>
    <body>
        <div>
            <strong><h3 class="mx-2">Upload a video</h3></strong>
        <hr>
    <form method="POST" action="{{ url('upload') }}" enctype="multipart/form-data" >
            @csrf
        <div >
    <strong><label class="mx-2">Upload</label></strong>
        <input type="text" name="title" placeholder="Enter Title">
    </div>
<div >
    <strong><label class="mx-2">Choose Video</label></strong>
        <input type="file" class="inline-flex items-center my-2 mx-2 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"  name="video">
</div>
    <hr>
        <button type="submit" class="inline-flex items-center my-2 mx-2 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Submit</button>
    </form>
    @if(session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
    @endif
</div>
    </body>
</html>
@include('layouts.footer')
<!-- echo -->