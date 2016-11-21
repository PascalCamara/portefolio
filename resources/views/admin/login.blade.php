@extends("layouts.admin")

    @section("adminContent")
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6" style="margin-top: 50px;">

                    <form action="{{ url("/admin/login") }}" method="post">
                        <div class="form-group">
                            {{ csrf_field() }}
                            <label for="login">
                                login
                            </label>
                            <input type="text" class="form-control" name="login">
                        </div>
                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                            <button type="submit" class="btn btn-primary">Connexion</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection