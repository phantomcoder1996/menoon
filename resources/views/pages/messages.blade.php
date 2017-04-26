<div class="modal fade" id="fb_success_modal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
 @if(Session::has('success'))
        <p>{{Session::get('success')}}</p>
@endif
      </div>
      
    </div>
  </div>

</div>



