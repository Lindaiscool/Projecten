<meta name="csrf-token" content ="{{csrf_token()}}">
<script src="{{asset('js/app.js')}}"> </script>
<link rel="stylesheet" href="{{asset('css/app.css')}}">

<script>      
    $(document).ready(function() {
    $('#table_id').DataTable();
  });
</script>

  <body>

@include('layouts.header')

    <h2 class="ml-2 text-lg font-semibold bestel">Bestel nu je tickets, <br> Voor {{$orders->artist}} op {{$ticket->month}}, {{$ticket->day}} !</h2> 
  
    <h2 class="ml-2 text-lg bestel"></h2> 
    <form class="ml-2" action="save" method="post">
      @csrf
      <h3 class="m-1 font-semibold"><span class="text-green-600">Artiest:</span> {{$orders->artist}}</</h3>
      <h3 class="m-1 font-semibold"><span class="text-green-600">Prijs per stuk:</span> {{$orders->price}}</h3>
      <h3 class="m-1 font-semibold"><span class="text-green-600">Aantal tickets:</span> {{$orders->amount}}</h3></td>
      <h3 class="m-1 font-semibold"><span class="text-green-600">Totaal prijs:</span> €{{$orders->price * $orders->amount}} </h3>
      <input type="submit" class=" bg-green-600 text-white font-bold rounded-xl hover:bg-green-400 p-2" value="bestelling plaatsen">
      <input type="hidden" name="artist" value="{{$orders->artist}}">
      <input type="hidden" name="amount" value="{{$orders->amount}}">
    </form>

    </div>
    </div> 

@include('layouts.footer')