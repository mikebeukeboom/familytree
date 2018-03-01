@extends('layouts.home')

@section('content')
    <form class="form-signin">
        <div class="text-center mb-4">
            <img class="mb-4 animated flip"
                 src="{{asset('img/beech.png')}}"
                 alt=""
                 width="172"
                 height="172">
            <h1 class="h3 mb-3 font-weight-normal">BEUKEBOOM</h1>
            <h2 class="h3 mb-3 font-weight-normal">Family Tree</h2>
        </div>

        <div class="form-label-group">
            <input type="email"
                   id="inputEmail"
                   class="form-control"
                   required
                   autofocus>
        </div>

        <div class="form-label-group">
            <input type="password"
                   id="inputPassword"
                   class="form-control"
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox"
                       value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block"
                type="submit">Sign in
        </button>
        <button class="btn btn-lg btn-info btn-block"
                type="submit">View as Guest
        </button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
    </form>
@stop