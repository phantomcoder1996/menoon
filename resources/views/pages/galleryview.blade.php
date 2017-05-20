@extends('layouts.galleryhome')


@section('content')



<br>
<br>
<h1> Gallery</h1>

  @if (session('status'))
  <div class="modal fade" id="myModal11" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <p>{{ session('status') }}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
       <script type="text/javascript">
    
        $('#myModal11').modal('show');
   
</script>                
    @endif


 @foreach($events as $event)
<div class="w3-container">
  

  <div class="w3-card-4" style="width:60%">
    <header class="w3-container w3-light-grey">
      <h3>{{$event->name }} Event in {{ $event->country}}</h3>
    </header>
    @if($event->type === 'img')
      
      <img src="/storage/{{$event->pic}}" alt="Avatar" style="width:40%;padding:20px;margin-left: 20px;">
      <div class="w3-section">

      <p style="padding:20px;margin-left: 20px;">{{$event->description}}</p><br>
      </div>
       @if (!Auth::guest())
<footer class="w3-container ">
  <h5 style="display: inline-block;">Tagyourself</h5>

      <button type="button" class="btn btn-default " id="{{$event->id}}" onclick="Tag()">
      <span class="glyphicon glyphicon-tag" aria-hidden="true" id="{{$event->id}}" ></span>
      </button>
     

      </footer>
       @endif
    </div>
    
    
  
</div>
@else 
<video class="img-thumbnail" style="padding:20px;margin-left: 20px;" controls>
          <source src="/storage/{{$event->pic}}" >
                    
          </video> 
          <div class="w3-section">  
           <p style="padding:20px;margin-left: 20px;">{{$event->description}}</p><br>
           </div>

            
 @if (!Auth::guest())
<footer class="w3-container ">
  <h5 style="display: inline-block;">Tagyourself</h5>
      <button type="button" class="btn btn-default " id="{{$event->id}}"  onclick="Tag()">
      <span class="glyphicon glyphicon-tag" aria-hidden="true" id="{{$event->id}}" ></span>       


      </button>
     

      </footer>
 @endif
    </div>
    
   
  
</div>
@endif
@endforeach

<script >
	


	 function Tag() {
var e = window.event,
       btn = e.target || e.srcElement;
   //alert(btn.id);
        // var id=this.id;
        var x=/tagging/+btn.id;
       // console.log(x);
      //  alert(btn.id);
  var xhttp = new XMLHttpRequest();     
xhttp.open("GET", x, true);
xhttp.send();

location.reload();
}
</script>

@endsection