@extends('layouts.master')
<html>
    <style>
     .alert {
  padding: 20px;
  background-color: #18b53c;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
    </style>
</html>
<!-- START Content left -->
@section('left-titel')
    Wat en wie zijn Relauch
@endsection


@section('left-content')
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis fringilla ex. Cras ullamcorper, lacus eu elementum sodales, nulla orci sagittis mi, egestas auctor lacus mauris nec elit. Maecenas egestas, lacus sed sollicitudin aliquam, lacus lectus rutrum sem, vitae fermentum augue lacus eu mauris. Donec lobortis lacus enim, vel fringilla ante pellentesque sit amet. Donec a elementum odio. Quisque interdum urna eu lacus auctor vehicula at vitae dui. Aenean eleifend gravida ipsum sit amet vulputate. Pellentesque condimentum, ipsum eget malesuada cursus, libero dolor semper diam, sed condimentum nisl est et sapien. Nunc quis nibh ac libero ultrices dictum. Quisque suscipit velit a metus aliquam feugiat. Nam efficitur erat orci, ut fermentum lorem maximus eget. Phasellus semper aliquam est.
<br><br>
Etiam ultricies lacinia metus, et pellentesque sem pharetra eget. Nunc sit amet purus facilisis, pulvinar tellus sit amet, tincidunt dolor. Mauris in tempus libero. In erat lorem, euismod vel sollicitudin eu, egestas in mi. Vivamus aliquam lobortis diam eu porta. Aliquam erat volutpat. Nulla tempus mauris vitae lectus pharetra, a ultricies velit pharetra. Ut auctor dolor a finibus venenatis. Proin nec ex in lacus bibendum hendrerit. Integer in justo posuere, finibus nunc ac, sollicitudin sapien.
@endsection


@section('image')
    <img src="/image/hero-image.jpg" width="580">
@endsection
<!-- END Content left -->



<!-- START Midle double -->
@section('midle-double-title-left')
Veiligheid gegarandeerd
@endsection

@section('midle-double-content-left')
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis fringilla ex. Cras ullamcorper, lacus eu elementum sodales, nulla orci sagittis mi, egestas auctor lacus mauris nec elit. Maecenas egestas, lacus sed sollicitudin aliquam, lacus lectus rutrum sem, vitae fermentum augue lacus eu mauris. Donec lobortis lacus enim, vel fringilla ante pellentesque sit amet. Donec a elementum odio. Quisque interdum urna eu lacus auctor vehicula at vitae dui. Aenean eleifend gravida ipsum sit amet vulputate. Pellentesque condimentum, ipsum eget malesuada cursus, libero dolor semper diam, sed condimentum nisl, eget malesuada cursus, libero dolor semper diam, sed condimentum 
@endsection


@section('midle-double-title-right')
Top Video's deze week
@endsection

@section('midle-double-content-right')
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis fringilla ex. Cras ullamcorper, lacus eu elementum sodales, nulla orci sagittis mi, egestas
@endsection

@if(session('success'))
<div class="alert">
 <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>succes!</strong> Uw bestelling is geplaatst!
</div>
@endif
<!-- echo -->
<!-- END Midle double -->



<!-- START Content Right -->
@section('right-titel')
    Lorem ipsum
@endsection


@section('right-content')
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis fringilla ex. Cras ullamcorper, lacus eu elementum sodales, nulla orci sagittis mi, egestas auctor lacus mauris nec elit. Maecenas egestas, lacus sed sollicitudin aliquam, lacus lectus rutrum sem, vitae fermentum augue lacus eu mauris. Donec lobortis lacus enim, vel fringilla ante pellentesque sit amet. Donec a elementum odio. Quisque interdum urna eu lacus auctor vehicula at vitae dui. Aenean eleifend gravida ipsum sit amet vulputate. Pellentesque condimentum, ipsum eget malesuada cursus, libero dolor semper diam, sed condimentum nisl est et sapien. Nunc quis nibh ac libero ultrices dictum. Quisque suscipit velit a metus aliquam feugiat. Nam efficitur erat orci, ut fermentum lorem maximus eget. Phasellus semper aliquam est.
<br><br>
Etiam ultricies lacinia metus, et pellentesque sem pharetra eget. Nunc sit amet purus facilisis, pulvinar tellus sit amet, tincidunt dolor. Mauris in tempus libero. In erat lorem, euismod vel sollicitudin eu, egestas in mi. Vivamus aliquam lobortis diam eu porta. Aliquam erat volutpat. Nulla tempus mauris vitae lectus pharetra, a ultricies velit pharetra. Ut auctor dolor a finibus venenatis. Proin nec ex in lacus bibendum hendrerit. Integer in justo posuere, finibus nunc ac, sollicitudin sapien.
@endsection


@section('right-image')
    <img src="/image/hero-image.jpg" width="580">
@endsection
<!-- END Content Right -->