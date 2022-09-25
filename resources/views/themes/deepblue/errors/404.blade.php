@extends($theme.'layouts.app')
@section('title','404')

@section('banner_heading')
   @lang('404')
@endsection

@section('content')
    <section class="not-found">
        <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col">
                <div class="text-box text-center">
                    <img src="./img/404.svg" alt="" />
                    <h1>Oops!</h1>
                    <p>We can't seem to find the page you are looking for</p>
                    <a href="{{ route('home') }}">back to home</a>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
