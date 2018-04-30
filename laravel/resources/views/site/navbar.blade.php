<nav class="navbar navbar-default navbar-fixed-top navbar-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="hamburger btn-link">
                <span class="hamburger-inner"></span>
            </button>
        </div>
        <ul class="nav navbar-nav navbar-right">
            @if(Auth::user())
                {!! menu('navbar', 'bootstrap'); !!}
            @endif
        </ul>
    </div>
</nav>
