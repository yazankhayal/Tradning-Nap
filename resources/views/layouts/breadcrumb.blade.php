<div class="page-header" style="background: url('{{setting()->bunner()}}') no-repeat center center;">
    <div class="container">
        <div class="breadc-box no-line">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">@yield("title")</h2>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="{{route('index')}}">{{lang_name('Home_Page')}}</a></li>
                        <li class="active">@yield("title")</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
