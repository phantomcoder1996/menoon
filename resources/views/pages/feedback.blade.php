
<div id="feedback" class="w3-container" style="margin-top:10%;text-align:center">
</div>

<div class="modal fade" id="fb_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align:center;font:Sans-serif">Your feedback counts :)</h4>
        </div>
        <div class="modal-body">
          <!--Here is the feedback form -->

<!--           <form method="post" action="/fb_form">

            <div class="form-group">
                 <input type="text"/>
              
             </div>
              <div class="form-group">


               
               <textarea class="form-control" id="fb_text" rows="7"></textarea>
             </div>
             <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
             <!--This line is necessary to avoid csrf --> 
<!-- 
       <button type="submit" class="btn btn-default" style="margin-left:40%">Submit</button>
        </form>  -->

           
          {!! Form::open(['route'=>'feedback.store','data-parsley-validate'=>'']) !!}
          <div class="form-group">
              {!! Form::textarea('content',null,array('class'=>'form-control','required'=>'','Maxlength'=>'5000','rows'=>7))!!}
            </div>
            @if (!Auth::guest())
              <input type="hidden" value= "{{Auth::user()->id}}" name="user_id" id="user_id"></input>
              @endif
              
              
                 {!! Form::submit('submit',array('class'=>'btn mybtn','style'=>'margin-left:40%'))!!}

             
           {!! Form::close() !!}


        </div>
        




      </div>
      
    </div>
  </div>




