@extends('layout.main')
@section('container')
    <ul class="nav nav-pills justify-content-center" style="margin-top: 87px;" id="pills-tab" role="tablist">
        <li class="nav-item mx-3" role="presentation">
            <button class="nav-link nav-custom btn-tab-icon active" id="pills-all-tab" data-icon="all" data-bs-toggle="pill"
                data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all"
                aria-selected="true">All</button>
        </li>
        <li class="nav-item mx-3" role="presentation">
            <button class="nav-link nav-custom btn-tab-icon" id="pills-line-tab" data-icon="line" data-bs-toggle="pill"
                data-bs-target="#pills-line" type="button" role="tab" aria-controls="pills-line"
                aria-selected="true">Line</button>
        </li>
        <li class="nav-item mx-3" role="presentation">
            <button class="nav-link nav-custom btn-tab-icon" id="pills-solid-tab" data-icon="solid" data-bs-toggle="pill"
                data-bs-target="#pills-solid" type="button" role="tab" aria-controls="pills-solid"
                aria-selected="false">Solid</button>
        </li>
        <li class="nav-item mx-3" role="presentation">
            <button class="nav-link nav-custom btn-tab-icon" id="pills-logo-tab" data-icon="logo" data-bs-toggle="pill"
                data-bs-target="#pills-logo" type="button" role="tab" aria-controls="pills-logo"
                aria-selected="false">Logo</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">

        {{-- Tabs All Style Icon --}}
        <div class="tab-pane show active" style="margin-top: 87px;" id="pills-all" role="tabpanel"
            aria-labelledby="pills-all-tab">
            <h1 style="font-weight: bold; color: var(--black);">All Style Icons</h1>
            <div class="detail d-flex justify-content-between">
                <div class="card mt-5" style="border: none; background-color: var(--body);">
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/user.png" style="width: 100%;">
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
                            <img src="assets/trash_can_solid.png" style="width: 100%;">
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
                            <img src="assets/android.png" style="width: 100%;">
                        </div>
                        <div class="col-8">
                            <div class="card-body py-0">
                                <h5 class="card-title" style="font-weight: bold; color: var(--black);">Android</h5>
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
                    <input type="text" class="form-control p-3 ti-search search-all" id="myInput"
                        placeholder="Search..." onkeyup="iconSearch()">
                </div>
            </div>
            <p class="mt-2 d-flex justify-content-end" style="color: var(--black-50);" id="iconsTotal-all">1000 of 1000
                icons</p>

            {{-- Modal All Style --}}
            <div class="d-flex flex-row justify-content-start mt-5 mx-5 flex-wrap icon-full" id="iconList-all"></div>
            {{-- Modal All Style --}}
        </div>

        {{-- Tabs Line Style Icon --}}
        <div class="tab-pane" style="margin-top: 87px;" id="pills-line" role="tabpanel"
            aria-labelledby="pills-line-tab">
            <h1 style="font-weight: bold; color: var(--black);">Line Style Icons</h1>
            <div class="detail d-flex justify-content-between">
                <div class="card mt-5" style="border: none; background-color: var(--body);">
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/user.png" style="width: 100%;">
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
                            <img src="assets/trash_can.png" style="width: 100%;">
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
                            <img src="assets/warning.png" style="width: 100%;">
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
                    <input type="search" class="form-control p-3 ti-search search-line" onkeyup="iconSearch()"
                        placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2">
                </div>
            </div>
            <p class="mt-2 d-flex justify-content-end" style="color: var(--black-50);" id="iconsTotal-line">1000 of 1000
                icons</p>

            {{-- Content Line Style --}}
            <div class="d-flex flex-row justify-content-start mt-5 mx-5 flex-wrap" id="iconList-line">

            </div>
            {{-- End Content Line Style --}}
        </div>

        {{-- Tabs Solid Style Icon --}}
        <div class="tab-pane" style="margin-top: 87px;" id="pills-solid" role="tabpanel"
            aria-labelledby="pills-solid-tab">
            <h1 style="font-weight: bold; color: var(--black);">Solid Style Icons</h1>
            <div class="detail d-flex justify-content-between">
                <div class="card mt-5" style="border: none; background-color: var(--body);">
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/user_solid.png" style="width: 100%;">
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
                            <img src="assets/trash_can_solid.png" style="width: 100%;">
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
                            <img src="assets/warning_solid.png" style="width: 100%;">
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
                    <input type="search" class="form-control p-3 ti-search search-solid" placeholder="Search..."
                        aria-label="Recipient's username" onkeyup="iconSearch()" aria-describedby="button-addon2">
                </div>
            </div>
            <p class="mt-2 d-flex justify-content-end" style="color: var(--black-50);" id="iconsTotal-solid">1000 of 1000
                icons</p>

            {{-- Content Solid Style --}}
            <div class="d-flex flex-row justify-content-start mt-5 mx-5 flex-wrap" id="iconList-solid">

            </div>
            {{-- End Content Solid Style --}}
        </div>

        {{-- Tabs Logos Style Icon --}}
        <div class="tab-pane" style="margin-top: 87px;" id="pills-logo" role="tabpanel"
            aria-labelledby="pills-logo-tab">
            <h1 style="font-weight: bold; color: var(--black);">Logo Style Icons</h1>
            <div class="detail d-flex justify-content-between">
                <div class="card mt-5" style="border: none; background-color: var(--body);">
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/whatsapp.png" style="width: 100%;">
                        </div>
                        <div class="col-8">
                            <div class="card-body py-0">
                                <h5 class="card-title" style="font-weight: bold; color: var(--black);">Whatsapp</h5>
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
                            <img src="assets/android.png" style="width: 100%;">
                        </div>
                        <div class="col-8">
                            <div class="card-body py-0">
                                <h5 class="card-title" style="font-weight: bold; color: var(--black);">Android
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
                            <img src="assets/apple.png" style="width: 100%;">
                        </div>
                        <div class="col-8">
                            <div class="card-body py-0">
                                <h5 class="card-title" style="font-weight: bold; color: var(--black);">Apple</h5>
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
                    <input type="search" class="form-control p-3 ti-search search-logo" onkeyup="iconSearch()"
                        placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2">
                </div>
            </div>
            <p class="mt-2 d-flex justify-content-end" style="color: var(--black-50);" id="iconsTotal-logo">1000 of 1000
                icons</p>

            {{-- Content Logo Style --}}
            <div class="d-flex flex-row justify-content-start mt-5 mx-5 flex-wrap" id="iconList-logo">

            </div>
            {{-- End Content Logo Style --}}

        </div>
    </div>
@endsection
