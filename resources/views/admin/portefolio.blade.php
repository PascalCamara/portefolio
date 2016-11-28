@extends("layouts.admin")

@section("adminContent")

    <div id="accordion" role="tablist" aria-multiselectable="true" style="margin-top: 100px">
        @foreach($portefolios as $portefolio)
            <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$portefolio->id}}" aria-expanded="false" aria-controls="collapse{{$portefolio->id}}">
                            {{$portefolio->title}}
                        </a>
                    </h5>
                </div>

                <div id="collapse{{$portefolio->id}}" class="collapse" role="tabpanel"  aria-labelledby="headingOne">
                    <div class="card-block">
                        <form method="post" action="{{url("admin/portefolio")}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{$portefolio->id}}" name="id">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" value="{{$portefolio->title}}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description">{{$portefolio->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="vignette">Vignette </label>
                                <input type="file" class="form-control-file" name="vignette" value="{{$portefolio->vignette}}">
                            </div>
                            <div class="form-group">
                                <label for="vignette_1">Vignette 1</label>
                                <input type="file" class="form-control-file" name="vignette_1" aria-describedby="fileHelp" value="{{$portefolio->vignette_1}}">
                            </div>
                            <div class="form-group">
                                <label for="vignette_2">Vignette 2</label>
                                <input type="file" class="form-control-file" name="vignette_2" aria-describedby="fileHelp" value="{{$portefolio->vignette_2}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Mettre à jour</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row">
        <div class="card-block col-sm-12">
            <h5>Créer un nouveau portefolio :</h5>
            <form action="{{url("/admin/portefolioCreate")}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control" name="title" placeholder="titre">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea  class="form-control" name="description" placeholder="description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Créer</button>
            </form>
        </div>
    </div>

@endsection


