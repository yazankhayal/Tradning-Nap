@if($items->count() != 0)
    @foreach($items as $r)
        <div class="col-md-4 col-sm-6">
            <div class="services-box services-box-img">
                <div class="services-overlay"></div>
                <div class="services-content">
                    <h3><a href="{{$r->route()}}">{{$r->name()}}</a></h3>
                    <a href="{{$r->route()}}">{{lang_name('Read_More')}} <i
                            class="icon ion-md-add-circle"></i></a>
                </div>
                <img style="height: 440px;" src="{{$r->img()}}" alt="{{$r->name()}}">
            </div>
        </div>
    @endforeach
@else
    <div class="col-md-12 col-sm-12 col-xs-12">
        <p class="alert alert-danger">
            {{lang_name('Empty')}}
        </p>
    </div>
@endif

<div class="col-md-12 col-sm-12">
    <nav>
        {{$items->render()}}
    </nav>
</div>
