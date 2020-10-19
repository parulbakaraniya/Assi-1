@extends('layout');
@section('content')

<div class="wrapper row3 coloured">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div style="background-color:teal; padding:2em;">
      <ul class="nospace group"  style=" width:100%">
      @foreach($list as $p)
        <li style=" width:100%; margin:2em">
          <article>
            <div>
              <h6 class="heading">{{$p->title}}</h6>
              <h5>{{$p->post_date}}</h5>
              <p>{{$p->desc}}</p>
            </div>
            <img src="images/demo/320x180.png" alt="">
            
          </article>
        </li>
       @endforeach
      </ul>
    </div>
    <p class="center"><a class="btn inverse" href="#">Consequat commodo</a></p>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
@endsection