<?php  if (session()->has("user")) {  ?>
    <nav class="navbar navbar-dark navbar-fixed-top bg-inverse">
        <button type="button" class="navbar-toggler hidden-sm-up" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" aria-label="Toggle navigation"></button>
        <a class="navbar-brand" href="{{url("/admin/")}}">Espace admin</a>
        <div id="navbar">
            <nav class="nav navbar-nav float-xs-left">
                <a class="nav-item nav-link" href="{{url("/admin/portefolio")}}">Portefolio</a>
            </nav>
        </div>
    </nav>
<?php } ?>
