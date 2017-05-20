@extends('layouts.galleryhome')


@section('content')



@if (session('status'))
  <div class="modal fade" id="myModal111" role="dialog">
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
    
        $('#myModal111').modal('show');
   
</script>                
    @endif

<br>
<br>
<h1>MY Gallery</h1>

<br>
<br>
@foreach($events as $event)

<div class="w3-container ">
  
@if($event->type === 'img')
  <div class="w3-card-4" style="width:50%">
    <img src="/storage/{{$event->pic}}" alt="Avatar" style="width:50%">
    <div class="w3-container w3-center">
      <p>{{$event->name }} Event in {{ $event->country}}</p>
    </div>
    <a href="#" style="margin-left: 20px;" class="tag">{{Auth::user()->username}}</a>
  </div>
</div>
@else
<div class="w3-card-4" style="width:50%">
    <video class="img-thumbnail" style="padding:20px;margin-left: 20px;width:50%;" controls>
          <source src="/storage/{{$event->pic}}" >
                    
          </video> 
    <div class="w3-container w3-center">
      <p>{{$event->name }} Event in {{ $event->country}}</p>
    </div>
    <a href="#" style="margin-left: 20px;" class="tag">{{Auth::user()->username}}</a>
  </div>
</div>
 @endif
 <br>
 <br>
 <hr>
@endforeach


@endsection