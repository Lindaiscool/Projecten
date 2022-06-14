<meta name="csrf-token" content ="{{csrf_token()}}">
<script src="{{asset('js/app.js')}}"> </script>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
  
  <script>
    function showAlert(id){
      var val=document.getElementById('aantal'+id).value;
      if (val>0){
        document.getElementById('tForm'+id).submit();
      }else{
        alert('voer een getal in hoger dan 0.');
      }
    } 
  </script>
</header>

@include('layouts.header')
@if(session('success'))
<div class="alert bg-red-700 text-white m-4 p-2">
  <span class="ml-2 font-semibold text-base" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Let op!</strong> U moet eerst zijn ingelogd.
</div>
@endif
<div class="shadow-xl">
    <div class="flex">
        <div class="row">
            <div class="flex flex-col items-center flex-1 md:flex-col lg:flex-row">

                <div class="flex flex-row">
                    <div class="my-4 px-4 md:w-auto md:my-2 md:px-2">
                    <!-- LINKER VELD NAAM ETC. -->
                      <script>
                            $(document).ready(function() {
                              $('').dataTable();
                            });
                      </script>

                    @foreach($tickets as $dataT) 
                                  <div class="flex flex-col">
                                  <h3 class="m-1 font-semibold"><span class="text-green-600">Artiest:</span> {{$dataT->name}}</h3>
                                  <h3 class="m-1 font-semibold"><span class="text-green-600">Datum:</span> {{$dataT->day}} {{$dataT->month}}</h3>
                                  <h4 class="m-1 font-semibold"><span class="text-green-600">Locatie:</span> {{$dataT->place}}</h4>
                                  <h3 class="m-1 font-semibold"><span class="text-green-600">Prijs:</span> €{{$dataT->price}}</h3>
                                  </div>
                                  <form class="flex" id="tForm{{$dataT->id}}" action="add" method="post">
                                    @csrf
                                      <input type="hidden" class="concertID" name="concertID" value="{{$dataT->id}}">
                                      <input type="number" min="1" placeholder="Aantal tickets" class="aantalT" name="aantal" id="aantal{{$dataT->id}}">
                                      <input type="button" name="subm1" onclick="showAlert({{$dataT->id}})" class="ml-2 bg-green-600 text-white font-bold rounded-xl hover:bg-green-400 p-2" id="sub" value="Koop tickets ">
                                      <input type="hidden" name="price" value="{{$dataT->price}}">
                                      <input type="hidden" name="artist" value="{{$dataT->name}}">
                                      <input type="hidden" name="day" value="{{$dataT->day}}">
                                      <input type="hidden" name="month" value="{{$dataT->month}}">
                                  </form>
                    @endforeach

                  </div>
                </div>


            </div>
        </div>
    </div>
</div>
@include('layouts.footer')