@extends("layouts.iqTestLayout")

@section('content')



<?php $i=0;  $cnt=0; ?>

<div class="page-header iqTestHeader">IQ test</div>
<div class="pagediv">
<form action="/iqtest" method="post" class=""w3-container>
    <input type="hidden" name="question_num" value="{{count($questions)}}" />
    {{csrf_field()}}
    @if (!Auth::guest())
        <input type="hidden" value= "{{Auth::user()->id}}" name="user_id" id="user_id"></input>

    @endif
    <input type="hidden" value="{{$eventid}}" name="event_id"/>
    <?php while($i<count($questions)){ $id=$questions[$i]->getID();?>






        <div class="w3-card-2 question">
            <p class="questionHeader">{{$questions[$i]->getStatement()}}</p>
<hr>
            <input type="hidden" name="<?php echo "qid$cnt"; $cnt++; ?>" value="<?php echo $questions[$i]->getID(); ?>" />

            <?php $choices=$questions[$i]->getAnswers();

            foreach($choices as $key=>$val){?>
            <li><input type="radio" name="<?php echo "q$id"?>" value="{{$key}}" id="{{$id.'a'.$key}}"/>
            <label for="{{$id.'a'.$key}}">{{$val}}</label></li>


          <?php      }?>





        </div>



    <?php $i++;} ?>

    <input type="submit" class="btn btn-default"/>

</form>

</div>
@endsection



