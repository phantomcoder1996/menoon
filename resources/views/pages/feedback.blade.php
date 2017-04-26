

<div class="modal fade" id="fb_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" >&times;</button>
          <h4 class="modal-title" style="color:gray; text-align:center;font:Sans-serif">Feel free to send us a feedback</h4>
        </div>
        <div class="modal-body">
          <!--Here is the feedback form -->




          {!! Form::open(['route'=>'feedback.store','data-parsley-validate'=>'']) !!}
          <div class="form-group">
              {!! Form::textarea('content',null,array('class'=>'form-control','required'=>'','Maxlength'=>'5000','rows'=>7))!!}
            </div>
            @if (!Auth::guest())
              <input type="hidden" value= "{{Auth::user()->id}}" name="user_id" id="user_id"></input>
              @endif


                 {!! Form::submit('submit',array('class'=>'btn mybtn','style'=>'background-color:#2C3E50;'))!!}


           {!! Form::close() !!}


        </div>





      </div>
      
    </div>
  </div>




