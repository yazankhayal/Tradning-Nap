@if($items->count() != 0)
    @foreach($items as $r)
        <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="post-box post type-post entry">
                <div class="entry-media">
                    <a href="{{$r->route()}}">
                        <img style="height: 207px;" src="{{$r->img()}}" alt="{{$r->name()}}">
                    </a>
                </div>
                <div class="inner-post">
                    <header class="entry-header">

                        <div class="entry-meta">
				                        <span class="posted-on">
				                        	<span class="entry-date published">{{$r->date()}}</span>
				                        </span>
                        </div>
                        <!-- .entry-meta -->
                        <h3 class="entry-title"><a href="{{$r->route()}}"
                                                   rel="bookmark">{{$r->name()}}</a>
                        </h3>
                    </header>
                    <!-- .entry-header -->

                    <div class="entry-summary">
                        <p> {{$r->tags()}}</p>
                    </div>
                    <!-- .entry-content -->

                    <footer class="entry-footer">
                        <a class="post-link" href="{{$r->route()}}">{{lang_name('Read_More')}}<i
                                class="icon ion-md-add-circle-outline"></i></a>
                    </footer>
                    <!-- .entry-footer -->
                </div>
            </article>
        </div>
    @endforeach
@else
    <div class="col-md-12 col-sm-12 col-xs-12">
        <p class="alert alert-danger">
            {{lang_name('Empty')}}
        </p>
    </div>
@endif
