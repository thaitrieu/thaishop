    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            {{--<li class="active"><a href="#">Overview</a></li>--}}
            @foreach($manufacturers as $m)
                <li><a href="/thaishop/public/manufacturer/{{ $m->id }}">{{ $m->name }}</a></li>
            @endforeach
          </ul>
        </div>
