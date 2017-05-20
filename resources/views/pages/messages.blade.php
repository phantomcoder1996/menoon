<div class="modal fade" id="fb_success_modal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header msg_modal_header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            @if(Session::has('score'))
          <h1>IQ test score</h1>
            @endif
        </div>
        <div class="modal-body">
 @if(Session::has('success'))
        <p>{{Session::get('success')}}</p>
@endif
      </div>



          @if(Session::has('score'))
              <p class="msg">Your score is {{Session::get('score')[0]}}.</p>
              <p class="msg">Total questions:{{Session::get('score')[2]}}</p>
              <p class="msg"> Correct answers: {{Session::get('score')[1]}}</p>


              @if(Session::get('score')[0]<Session::get('score')[3])
                  <p class="msg">You failed the test. Try again later.</p>
                  @else
                  <p class="msg">Congratulations!You have passed the test.You can now proceed to payment.</p>
                 @endif
          @endif
    </div>
  </div>

</div>



