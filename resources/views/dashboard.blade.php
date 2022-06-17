@extends('layout.main')
@section('container')
<ul class="nav nav-pills justify-content-center" style="margin-top: 87px;" id="pills-tab" role="tablist">
    <li class="nav-item mx-3" role="presentation">
        <button class="nav-link nav-custom" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all"
            type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
    </li>
    <li class="nav-item mx-3" role="presentation">
        <button class="nav-link nav-custom active" id="pills-line-tab" data-bs-toggle="pill"
            data-bs-target="#pills-line" type="button" role="tab" aria-controls="pills-line" aria-selected="true">Line
            Style</button>
    </li>
    <li class="nav-item mx-3" role="presentation">
        <button class="nav-link nav-custom" id="pills-solid-tab" data-bs-toggle="pill" data-bs-target="#pills-solid"
            type="button" role="tab" aria-controls="pills-solid" aria-selected="false">Solid Style</button>
    </li>
    <li class="nav-item mx-3" role="presentation">
        <button class="nav-link nav-custom" id="pills-filled-tab" data-bs-toggle="pill" data-bs-target="#pills-filled"
            type="button" role="tab" aria-controls="pills-filled" aria-selected="false">Filled Line Style</button>
    </li>
    <li class="nav-item mx-3" role="presentation">
        <button class="nav-link nav-custom" id="pills-duotone-tab" data-bs-toggle="pill" data-bs-target="#pills-duotone"
            type="button" role="tab" aria-controls="pills-duotone" aria-selected="false">Duotone Style</button>
    </li>
    <li class="nav-item mx-3" role="presentation">
        <button class="nav-link nav-custom" id="pills-logo-tab" data-bs-toggle="pill" data-bs-target="#pills-logo"
            type="button" role="tab" aria-controls="pills-logo" aria-selected="false">Logos Style</button>
    </li>
</ul>
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane" style="margin-top: 87px;" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
        <h1 style="font-weight: bold; color: var(--black);">All Style Icons</h1>
    </div>
    <div class="tab-pane show active" style="margin-top: 87px;" id="pills-line" role="tabpanel"
        aria-labelledby="pills-line-tab">
        <h1 style="font-weight: bold; color: var(--black);">Line Style Icons</h1>
        <div class="detail d-flex justify-content-between">
            <div class="card mt-5" style="border: none; background-color: var(--body);">
                <div class="row">
                    <div class="col-4">
                        <img src="Icon User.png" style="width: 100%;">
                    </div>
                    <div class="col-8">
                        <div class="card-body py-0">
                            <h5 class="card-title" style="font-weight: bold; color: var(--black);">User</h5>
                            <p class="card-text" style="color: var(--black-70);">Standard grid, termicons free
                            </p>
                            <p class="card-text m-0" style="color: var(--black-50);"><small>Light / Primary /
                                    Blue
                                    100</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-5" style="border: none; background-color: var(--body);">
                <div class="row">
                    <div class="col-4">
                        <img src="Icon Trash Can.png" style="width: 100%;">
                    </div>
                    <div class="col-8">
                        <div class="card-body py-0">
                            <h5 class="card-title" style="font-weight: bold; color: var(--black);">Trash Can
                            </h5>
                            <p class="card-text" style="color: var(--black-70);">Standard grid, termicons free
                            </p>
                            <p class="card-text m-0" style="color: var(--black-50);"><small>Light / Primary /
                                    Blue
                                    100</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-5" style="border: none; background-color: var(--body);">
                <div class="row">
                    <div class="col-4">
                        <img src="Icon Trash Can-1.png" style="width: 100%;">
                    </div>
                    <div class="col-8">
                        <div class="card-body py-0">
                            <h5 class="card-title" style="font-weight: bold; color: var(--black);">Warning</h5>
                            <p class="card-text" style="color: var(--black-70);">Standard grid, termicons free
                            </p>
                            <p class="card-text m-0" style="color: var(--black-50);"><small>Light / Primary /
                                    Blue
                                    100</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-5" style="border: none; background-color: var(--black-5); border-radius: 10px;">
            <div class="input-group">
                <div class="input-group-text p-3" id="button-addon2"
                    style="border: none; background-color: rgba(0, 0, 0, 0);"><i class="ti ti-search ti-sm"
                        style="color: var(--black-70);"></i></div>
                <input type="search" class="form-control p-3 ti-search" placeholder="Search..."
                    aria-label="Recipient's username" aria-describedby="button-addon2">
            </div>
        </div>
        <p class="mt-2 d-flex justify-content-end" style="color: var(--black-50);">1000 of 1000 icons</p>

        <div class="d-flex flex-row justify-content-between mt-5 flex-wrap" id="iconListIndex">

        </div>
    </div>
    <div class="tab-pane" style="margin-top: 87px;" id="pills-solid" role="tabpanel" aria-labelledby="pills-solid-tab">
        <h1 style="font-weight: bold; color: var(--black);">Solid Style Icons</h1>
    </div>
    <div class="tab-pane" style="margin-top: 87px;" id="pills-filled" role="tabpanel"
        aria-labelledby="pills-filled-tab">
        <h1 style="font-weight: bold; color: var(--black);">Filled Line Style Icons</h1>
    </div>
    <div class="tab-pane" style="margin-top: 87px;" id="pills-duotone" role="tabpanel"
        aria-labelledby="pills-duotone-tab">
        <h1 style="font-weight: bold; color: var(--black);">Duotone Style Icons</h1>
    </div>
    <div class="tab-pane" style="margin-top: 87px;" id="pills-logo" role="tabpanel" aria-labelledby="pills-logo-tab">
        <h1 style="font-weight: bold; color: var(--black);">Logo Style Icons</h1>
    </div>
</div>

<hr class="mt-5" style="margin: 0; opacity: 5%;">

<!-- Go To Top -->
<div class="row justify-content-right">
    <div class="col-lg-10">
        <a class="gotopbtn" href="#"><i class="fas fa-caret-up"></i></a>
    </div>
</div>

<!-- Go To Top -->
<div class="row justify-content-right">
    <div class="col-lg-10">
        <i class="fa-solid fa-moon darkmode" id="toggleDark"></i>
    </div>
</div>
@endsection
