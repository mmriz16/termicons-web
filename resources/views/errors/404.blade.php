@extends('layout.main', ['title', 'Page not found'])
@section('container')
<div class="row flex justify-content-center align-items-center" style="height: calc(100vh - 70px - 100px)">
    <div class="col-4">
        <main class="form-signin w-100 m-auto h-100">
            <form class="text-center">
                <img class="mb-5 flex justify-center" src="just_logo.svg" alt="" width="72" height="57">
                <h1 class="h3 mb-2 fw-semibold" style="font-size: 16px; color: blue;">404 ERROR</h1>
                <h1 class="h3 mb-2 fw-bold" style="font-size: 46px;">Page not found.</h1>
                <h1 class="h3 mb-5 fw-normal" style="font-size: 16px;">Sorry, we couldn't find the page you're looking for</h1>
                <a href="/" style="text-decoration: none">Go back home</a>
            </form>
        </main>
    </div>
</div>
@endsection
