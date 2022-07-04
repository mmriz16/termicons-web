@extends('layout.main')
@section('container')
<ul class="nav nav-pills justify-content-center" style="margin-top: 87px;" id="pills-tab" role="tablist">
    <li class="nav-item mx-3" role="presentation">
        <button class="nav-link nav-custom active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all"
            type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
    </li>
    <li class="nav-item mx-3" role="presentation">
        <button class="nav-link nav-custom" id="pills-line-tab" data-bs-toggle="pill"
            data-bs-target="#pills-line" type="button" role="tab" aria-controls="pills-line"
            aria-selected="true">Line</button>
    </li>
    <li class="nav-item mx-3" role="presentation">
        <button class="nav-link nav-custom" id="pills-solid-tab" data-bs-toggle="pill" data-bs-target="#pills-solid"
            type="button" role="tab" aria-controls="pills-solid" aria-selected="false">Solid</button>
    </li>
    <li class="nav-item mx-3" role="presentation">
        <button class="nav-link nav-custom" id="pills-logo-tab" data-bs-toggle="pill" data-bs-target="#pills-logo"
            type="button" role="tab" aria-controls="pills-logo" aria-selected="false">Logo</button>
    </li>
</ul>
<div class="tab-content" id="pills-tabContent">

    {{-- Tabs All Style Icon --}}
    <div class="tab-pane show active" style="margin-top: 87px;" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
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
                <input type="text" class="form-control p-3 ti-search" id="myInput" placeholder="Search..." onkeyup="iconSearch()">
            </div>
        </div>
        <p class="mt-2 d-flex justify-content-end" style="color: var(--black-50);" id="iconsTotal">1000 of 1000 icons</p>

        {{-- Modal All Style --}}
        <div class="d-flex flex-row justify-content-between mt-5 flex-wrap" id="iconList"></div>
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
                <input type="search" class="form-control p-3 ti-search search" placeholder="Search..."
                    aria-label="Recipient's username" aria-describedby="button-addon2">
            </div>
        </div>
        <p class="mt-2 d-flex justify-content-end" style="color: var(--black-50);">1000 of 1000 icons</p>

        {{-- Content Line Style --}}
        <div class="d-flex flex-row justify-content-between mt-5 flex-wrap" id="iconListIndex">
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-bell"><div class="row"><i class="ti ti-bell ti-icon-style"></i><p class="ti-font-icon">bell</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-bell-off"><div class="row"><i class="ti ti-bell-off ti-icon-style"></i><p class="ti-font-icon">bell-off</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-bookmark"><div class="row"><i class="ti ti-bookmark ti-icon-style"></i><p class="ti-font-icon">bookmark</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-bookmark-add"><div class="row"><i class="ti ti-bookmark-add ti-icon-style"></i><p class="ti-font-icon">bookmark-add</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-bookmark-check"><div class="row"><i class="ti ti-bookmark-check ti-icon-style"></i><p class="ti-font-icon">bookmark-check</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-bookmark-off"><div class="row"><i class="ti ti-bookmark-off ti-icon-style"></i><p class="ti-font-icon">bookmark-off</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-bookmark-remove"><div class="row"><i class="ti ti-bookmark-remove ti-icon-style"></i><p class="ti-font-icon">bookmark-remove</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-bookmark-subtract"><div class="row"><i class="ti ti-bookmark-subtract ti-icon-style"></i><p class="ti-font-icon">bookmark-subtract</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-check-cr-fr"><div class="row"><i class="ti ti-check-cr-fr ti-icon-style"></i><p class="ti-font-icon">check-cr-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-check-sq-fr"><div class="row"><i class="ti ti-check-sq-fr ti-icon-style"></i><p class="ti-font-icon">check-sq-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-chevron-down-cr-fr"><div class="row"><i class="ti ti-chevron-down-cr-fr ti-icon-style"></i><p class="ti-font-icon">chevron-down-cr-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-chevron-down-sq-fr"><div class="row"><i class="ti ti-chevron-down-sq-fr ti-icon-style"></i><p class="ti-font-icon">chevron-down-sq-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-chevron-left-cr-fr"><div class="row"><i class="ti ti-chevron-left-cr-fr ti-icon-style"></i><p class="ti-font-icon">chevron-left-cr-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-chevron-left-sq-fr"><div class="row"><i class="ti ti-chevron-left-sq-fr ti-icon-style"></i><p class="ti-font-icon">chevron-left-sq-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-chevron-right-cr-fr"><div class="row"><i class="ti ti-chevron-right-cr-fr ti-icon-style"></i><p class="ti-font-icon">chevron-right-cr-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-chevron-right-sq-fr"><div class="row"><i class="ti ti-chevron-right-sq-fr ti-icon-style"></i><p class="ti-font-icon">chevron-right-sq-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-chevron-up-cr-fr"><div class="row"><i class="ti ti-chevron-up-cr-fr ti-icon-style"></i><p class="ti-font-icon">chevron-up-cr-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-chevron-up-sq-fr"><div class="row"><i class="ti ti-chevron-up-sq-fr ti-icon-style"></i><p class="ti-font-icon">chevron-up-sq-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-edit"><div class="row"><i class="ti ti-edit ti-icon-style"></i><p class="ti-font-icon">edit</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-exclamation-mark-cr-fr"><div class="row"><i class="ti ti-exclamation-mark-cr-fr ti-icon-style"></i><p class="ti-font-icon">exclamation-mark-cr-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-exclamation-mark-sq-fr"><div class="row"><i class="ti ti-exclamation-mark-sq-fr ti-icon-style"></i><p class="ti-font-icon">exclamation-mark-sq-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-export"><div class="row"><i class="ti ti-export ti-icon-style"></i><p class="ti-font-icon">export</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-eye"><div class="row"><i class="ti ti-eye ti-icon-style"></i><p class="ti-font-icon">eye</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-eye-off"><div class="row"><i class="ti ti-eye-off ti-icon-style"></i><p class="ti-font-icon">eye-off</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-fie-favourite-in-lc"><div class="row"><i class="ti ti-fie-favourite-in-lc ti-icon-style"></i><p class="ti-font-icon">fie-favourite-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file"><div class="row"><i class="ti ti-file ti-icon-style"></i><p class="ti-font-icon">file</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file-add-in-lc"><div class="row"><i class="ti ti-file-add-in-lc ti-icon-style"></i><p class="ti-font-icon">file-add-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file-add-ou-lc"><div class="row"><i class="ti ti-file-add-ou-lc ti-icon-style"></i><p class="ti-font-icon">file-add-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file-check-in-lc"><div class="row"><i class="ti ti-file-check-in-lc ti-icon-style"></i><p class="ti-font-icon">file-check-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file-check-ou-lc"><div class="row"><i class="ti ti-file-check-ou-lc ti-icon-style"></i><p class="ti-font-icon">file-check-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file-download-in-lc"><div class="row"><i class="ti ti-file-download-in-lc ti-icon-style"></i><p class="ti-font-icon">file-download-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file-download-ou-lc"><div class="row"><i class="ti ti-file-download-ou-lc ti-icon-style"></i><p class="ti-font-icon">file-download-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file-edit-in-lc"><div class="row"><i class="ti ti-file-edit-in-lc ti-icon-style"></i><p class="ti-font-icon">file-edit-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file-edit-ou-lc"><div class="row"><i class="ti ti-file-edit-ou-lc ti-icon-style"></i><p class="ti-font-icon">file-edit-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file-export-in-lc"><div class="row"><i class="ti ti-file-export-in-lc ti-icon-style"></i><p class="ti-font-icon">file-export-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file-export-ou-lc"><div class="row"><i class="ti ti-file-export-ou-lc ti-icon-style"></i><p class="ti-font-icon">file-export-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file-favourite-ou-lc"><div class="row"><i class="ti ti-file-favourite-ou-lc ti-icon-style"></i><p class="ti-font-icon">file-favourite-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file-import-in-lc"><div class="row"><i class="ti ti-file-import-in-lc ti-icon-style"></i><p class="ti-font-icon">file-import-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file-import-ou-lc"><div class="row"><i class="ti ti-file-import-ou-lc ti-icon-style"></i><p class="ti-font-icon">file-import-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file-locked-in-lc"><div class="row"><i class="ti ti-file-locked-in-lc ti-icon-style"></i><p class="ti-font-icon">file-locked-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file-locked-ou-lc"><div class="row"><i class="ti ti-file-locked-ou-lc ti-icon-style"></i><p class="ti-font-icon">file-locked-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file-off"><div class="row"><i class="ti ti-file-off ti-icon-style"></i><p class="ti-font-icon">file-off</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file-remove-in-lc"><div class="row"><i class="ti ti-file-remove-in-lc ti-icon-style"></i><p class="ti-font-icon">file-remove-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file-remove-ou-lc"><div class="row"><i class="ti ti-file-remove-ou-lc ti-icon-style"></i><p class="ti-font-icon">file-remove-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file-search-in-lc"><div class="row"><i class="ti ti-file-search-in-lc ti-icon-style"></i><p class="ti-font-icon">file-search-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file-search-ou-lc"><div class="row"><i class="ti ti-file-search-ou-lc ti-icon-style"></i><p class="ti-font-icon">file-search-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file-subtract-in-lc"><div class="row"><i class="ti ti-file-subtract-in-lc ti-icon-style"></i><p class="ti-font-icon">file-subtract-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file-subtract-ou-lc"><div class="row"><i class="ti ti-file-subtract-ou-lc ti-icon-style"></i><p class="ti-font-icon">file-subtract-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file-upload-in-lc"><div class="row"><i class="ti ti-file-upload-in-lc ti-icon-style"></i><p class="ti-font-icon">file-upload-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file-upload-ou-lc"><div class="row"><i class="ti ti-file-upload-ou-lc ti-icon-style"></i><p class="ti-font-icon">file-upload-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file-view-in-lc"><div class="row"><i class="ti ti-file-view-in-lc ti-icon-style"></i><p class="ti-font-icon">file-view-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-file-view-ou-lc"><div class="row"><i class="ti ti-file-view-ou-lc ti-icon-style"></i><p class="ti-font-icon">file-view-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder"><div class="row"><i class="ti ti-folder ti-icon-style"></i><p class="ti-font-icon">folder</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-add-in-lc"><div class="row"><i class="ti ti-folder-add-in-lc ti-icon-style"></i><p class="ti-font-icon">folder-add-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-add-ou-lc"><div class="row"><i class="ti ti-folder-add-ou-lc ti-icon-style"></i><p class="ti-font-icon">folder-add-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-check-in-lc"><div class="row"><i class="ti ti-folder-check-in-lc ti-icon-style"></i><p class="ti-font-icon">folder-check-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-check-ou-lc"><div class="row"><i class="ti ti-folder-check-ou-lc ti-icon-style"></i><p class="ti-font-icon">folder-check-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-download-in-lc"><div class="row"><i class="ti ti-folder-download-in-lc ti-icon-style"></i><p class="ti-font-icon">folder-download-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-download-ou-lc"><div class="row"><i class="ti ti-folder-download-ou-lc ti-icon-style"></i><p class="ti-font-icon">folder-download-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-edit-in-lc"><div class="row"><i class="ti ti-folder-edit-in-lc ti-icon-style"></i><p class="ti-font-icon">folder-edit-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-edit-ou-lc"><div class="row"><i class="ti ti-folder-edit-ou-lc ti-icon-style"></i><p class="ti-font-icon">folder-edit-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-export-in-lc"><div class="row"><i class="ti ti-folder-export-in-lc ti-icon-style"></i><p class="ti-font-icon">folder-export-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-export-ou-lc"><div class="row"><i class="ti ti-folder-export-ou-lc ti-icon-style"></i><p class="ti-font-icon">folder-export-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-favourite-in-lc"><div class="row"><i class="ti ti-folder-favourite-in-lc ti-icon-style"></i><p class="ti-font-icon">folder-favourite-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-favourite-ou-lc"><div class="row"><i class="ti ti-folder-favourite-ou-lc ti-icon-style"></i><p class="ti-font-icon">folder-favourite-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-import-in-lc"><div class="row"><i class="ti ti-folder-import-in-lc ti-icon-style"></i><p class="ti-font-icon">folder-import-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-import-ou-lc"><div class="row"><i class="ti ti-folder-import-ou-lc ti-icon-style"></i><p class="ti-font-icon">folder-import-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-locked-in-lc"><div class="row"><i class="ti ti-folder-locked-in-lc ti-icon-style"></i><p class="ti-font-icon">folder-locked-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-locked-ou-lc"><div class="row"><i class="ti ti-folder-locked-ou-lc ti-icon-style"></i><p class="ti-font-icon">folder-locked-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-off"><div class="row"><i class="ti ti-folder-off ti-icon-style"></i><p class="ti-font-icon">folder-off</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-remove-in-lc"><div class="row"><i class="ti ti-folder-remove-in-lc ti-icon-style"></i><p class="ti-font-icon">folder-remove-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-remove-ou-lc"><div class="row"><i class="ti ti-folder-remove-ou-lc ti-icon-style"></i><p class="ti-font-icon">folder-remove-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-search-in-lc"><div class="row"><i class="ti ti-folder-search-in-lc ti-icon-style"></i><p class="ti-font-icon">folder-search-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-search-ou-lc"><div class="row"><i class="ti ti-folder-search-ou-lc ti-icon-style"></i><p class="ti-font-icon">folder-search-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-subtract-in-lc"><div class="row"><i class="ti ti-folder-subtract-in-lc ti-icon-style"></i><p class="ti-font-icon">folder-subtract-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-subtract-ou-lc"><div class="row"><i class="ti ti-folder-subtract-ou-lc ti-icon-style"></i><p class="ti-font-icon">folder-subtract-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-upload-in-lc"><div class="row"><i class="ti ti-folder-upload-in-lc ti-icon-style"></i><p class="ti-font-icon">folder-upload-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-upload-ou-lc"><div class="row"><i class="ti ti-folder-upload-ou-lc ti-icon-style"></i><p class="ti-font-icon">folder-upload-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-view-in-lc"><div class="row"><i class="ti ti-folder-view-in-lc ti-icon-style"></i><p class="ti-font-icon">folder-view-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-folder-view-ou-lc"><div class="row"><i class="ti ti-folder-view-ou-lc ti-icon-style"></i><p class="ti-font-icon">folder-view-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-grid-four-01"><div class="row"><i class="ti ti-grid-four-01 ti-icon-style"></i><p class="ti-font-icon">grid-four-01</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-grid-four-02"><div class="row"><i class="ti ti-grid-four-02 ti-icon-style"></i><p class="ti-font-icon">grid-four-02</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-grid-three"><div class="row"><i class="ti ti-grid-three ti-icon-style"></i><p class="ti-font-icon">grid-three</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-grid-two-hr-al"><div class="row"><i class="ti ti-grid-two-hr-al ti-icon-style"></i><p class="ti-font-icon">grid-two-hr-al</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-grid-two-vr-al"><div class="row"><i class="ti ti-grid-two-vr-al ti-icon-style"></i><p class="ti-font-icon">grid-two-vr-al</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-heart"><div class="row"><i class="ti ti-heart ti-icon-style"></i><p class="ti-font-icon">heart</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-heart-off"><div class="row"><i class="ti ti-heart-off ti-icon-style"></i><p class="ti-font-icon">heart-off</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-home"><div class="row"><i class="ti ti-home ti-icon-style"></i><p class="ti-font-icon">home</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-import"><div class="row"><i class="ti ti-import ti-icon-style"></i><p class="ti-font-icon">import</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-info-cr-fr"><div class="row"><i class="ti ti-info-cr-fr ti-icon-style"></i><p class="ti-font-icon">info-cr-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-info-sq-fr"><div class="row"><i class="ti ti-info-sq-fr ti-icon-style"></i><p class="ti-font-icon">info-sq-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-lock"><div class="row"><i class="ti ti-lock ti-icon-style"></i><p class="ti-font-icon">lock</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-lock-open"><div class="row"><i class="ti ti-lock-open ti-icon-style"></i><p class="ti-font-icon">lock-open</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-lock-unlocked"><div class="row"><i class="ti ti-lock-unlocked ti-icon-style"></i><p class="ti-font-icon">lock-unlocked</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-login"><div class="row"><i class="ti ti-login ti-icon-style"></i><p class="ti-font-icon">login</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-logout"><div class="row"><i class="ti ti-logout ti-icon-style"></i><p class="ti-font-icon">logout</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-minus-cr-fr"><div class="row"><i class="ti ti-minus-cr-fr ti-icon-style"></i><p class="ti-font-icon">minus-cr-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-minus-sq-fr"><div class="row"><i class="ti ti-minus-sq-fr ti-icon-style"></i><p class="ti-font-icon">minus-sq-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-more-cr-fr"><div class="row"><i class="ti ti-more-cr-fr ti-icon-style"></i><p class="ti-font-icon">more-cr-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-more-sq-fr"><div class="row"><i class="ti ti-more-sq-fr ti-icon-style"></i><p class="ti-font-icon">more-sq-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-plus-cr-fr"><div class="row"><i class="ti ti-plus-cr-fr ti-icon-style"></i><p class="ti-font-icon">plus-cr-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-plus-sq-fr"><div class="row"><i class="ti ti-plus-sq-fr ti-icon-style"></i><p class="ti-font-icon">plus-sq-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-question-mark-cr-fr"><div class="row"><i class="ti ti-question-mark-cr-fr ti-icon-style"></i><p class="ti-font-icon">question-mark-cr-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-question-mark-sq-fr"><div class="row"><i class="ti ti-question-mark-sq-fr ti-icon-style"></i><p class="ti-font-icon">question-mark-sq-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-remove-cr-fr"><div class="row"><i class="ti ti-remove-cr-fr ti-icon-style"></i><p class="ti-font-icon">remove-cr-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-remove-sq-fr"><div class="row"><i class="ti ti-remove-sq-fr ti-icon-style"></i><p class="ti-font-icon">remove-sq-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-search"><div class="row"><i class="ti ti-search ti-icon-style"></i><p class="ti-font-icon">search</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-settings"><div class="row"><i class="ti ti-settings ti-icon-style"></i><p class="ti-font-icon">settings</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-settings-adjust-hr-al"><div class="row"><i class="ti ti-settings-adjust-hr-al ti-icon-style"></i><p class="ti-font-icon">settings-adjust-hr-al</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-settings-adjust-vr-al"><div class="row"><i class="ti ti-settings-adjust-vr-al ti-icon-style"></i><p class="ti-font-icon">settings-adjust-vr-al</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-star"><div class="row"><i class="ti ti-star ti-icon-style"></i><p class="ti-font-icon">star</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-star-off"><div class="row"><i class="ti ti-star-off ti-icon-style"></i><p class="ti-font-icon">star-off</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-trash-can"><div class="row"><i class="ti ti-trash-can ti-icon-style"></i><p class="ti-font-icon">trash-can</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-user"><div class="row"><i class="ti ti-user ti-icon-style"></i><p class="ti-font-icon">user</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-view-board"><div class="row"><i class="ti ti-view-board ti-icon-style"></i><p class="ti-font-icon">view-board</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-view-column"><div class="row"><i class="ti ti-view-column ti-icon-style"></i><p class="ti-font-icon">view-column</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-view-list"><div class="row"><i class="ti ti-view-list ti-icon-style"></i><p class="ti-font-icon">view-list</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-view-table"><div class="row"><i class="ti ti-view-table ti-icon-style"></i><p class="ti-font-icon">view-table</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-view-timeline"><div class="row"><i class="ti ti-view-timeline ti-icon-style"></i><p class="ti-font-icon">view-timeline</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="ti-warning"><div class="row"><i class="ti ti-warning ti-icon-style"></i><p class="ti-font-icon">warning</p></div></button>
        </div>
        {{-- End Content Line Style --}}
    </div>

    {{-- Tabs Solid Style Icon --}}
    <div class="tab-pane" style="margin-top: 87px;" id="pills-solid" role="tabpanel" aria-labelledby="pills-solid-tab">
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
                <input type="search" class="form-control p-3 ti-search" placeholder="Search..."
                    aria-label="Recipient's username" aria-describedby="button-addon2">
            </div>
        </div>
        <p class="mt-2 d-flex justify-content-end" style="color: var(--black-50);">1000 of 1000 icons</p>

        {{-- Content Solid Style --}}
        <div class="d-flex flex-row justify-content-between mt-5 flex-wrap" id="iconListIndex">
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-bell"><div class="row"><i class="ti tis-bell ti-icon-style"></i><p class="ti-font-icon">bell</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-bell-off"><div class="row"><i class="ti tis-bell-off ti-icon-style"></i><p class="ti-font-icon">bell-off</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-bookmark"><div class="row"><i class="ti tis-bookmark ti-icon-style"></i><p class="ti-font-icon">bookmark</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-bookmark-add"><div class="row"><i class="ti tis-bookmark-add ti-icon-style"></i><p class="ti-font-icon">bookmark-add</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-bookmark-check"><div class="row"><i class="ti tis-bookmark-check ti-icon-style"></i><p class="ti-font-icon">bookmark-check</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-bookmark-off"><div class="row"><i class="ti tis-bookmark-off ti-icon-style"></i><p class="ti-font-icon">bookmark-off</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-bookmark-remove"><div class="row"><i class="ti tis-bookmark-remove ti-icon-style"></i><p class="ti-font-icon">bookmark-remove</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-bookmark-subtract"><div class="row"><i class="ti tis-bookmark-subtract ti-icon-style"></i><p class="ti-font-icon">bookmark-subtract</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-check-cr-fr"><div class="row"><i class="ti tis-check-cr-fr ti-icon-style"></i><p class="ti-font-icon">check-cr-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-check-sq-fr"><div class="row"><i class="ti tis-check-sq-fr ti-icon-style"></i><p class="ti-font-icon">check-sq-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-chevron-down-cr-fr"><div class="row"><i class="ti tis-chevron-down-cr-fr ti-icon-style"></i><p class="ti-font-icon">chevron-down-cr-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-chevron-down-sq-fr"><div class="row"><i class="ti tis-chevron-down-sq-fr ti-icon-style"></i><p class="ti-font-icon">chevron-down-sq-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-chevron-left-cr-fr"><div class="row"><i class="ti tis-chevron-left-cr-fr ti-icon-style"></i><p class="ti-font-icon">chevron-left-cr-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-chevron-left-sq-fr"><div class="row"><i class="ti tis-chevron-left-sq-fr ti-icon-style"></i><p class="ti-font-icon">chevron-left-sq-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-chevron-right-cr-fr"><div class="row"><i class="ti tis-chevron-right-cr-fr ti-icon-style"></i><p class="ti-font-icon">chevron-right-cr-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-chevron-right-sq-fr"><div class="row"><i class="ti tis-chevron-right-sq-fr ti-icon-style"></i><p class="ti-font-icon">chevron-right-sq-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-chevron-up-cr-fr"><div class="row"><i class="ti tis-chevron-up-cr-fr ti-icon-style"></i><p class="ti-font-icon">chevron-up-cr-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-chevron-up-sq-fr"><div class="row"><i class="ti tis-chevron-up-sq-fr ti-icon-style"></i><p class="ti-font-icon">chevron-up-sq-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-edit"><div class="row"><i class="ti tis-edit ti-icon-style"></i><p class="ti-font-icon">edit</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-exclamation-mark-cr-fr"><div class="row"><i class="ti tis-exclamation-mark-cr-fr ti-icon-style"></i><p class="ti-font-icon">exclamation-mark-cr-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-exclamation-mark-sq-fr"><div class="row"><i class="ti tis-exclamation-mark-sq-fr ti-icon-style"></i><p class="ti-font-icon">exclamation-mark-sq-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-export"><div class="row"><i class="ti tis-export ti-icon-style"></i><p class="ti-font-icon">export</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-eye"><div class="row"><i class="ti tis-eye ti-icon-style"></i><p class="ti-font-icon">eye</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-eye-off"><div class="row"><i class="ti tis-eye-off ti-icon-style"></i><p class="ti-font-icon">eye-off</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-fie-favourite-in-lc"><div class="row"><i class="ti tis-fie-favourite-in-lc ti-icon-style"></i><p class="ti-font-icon">fie-favourite-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file"><div class="row"><i class="ti tis-file ti-icon-style"></i><p class="ti-font-icon">file</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file-add-in-lc"><div class="row"><i class="ti tis-file-add-in-lc ti-icon-style"></i><p class="ti-font-icon">file-add-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file-add-ou-lc"><div class="row"><i class="ti tis-file-add-ou-lc ti-icon-style"></i><p class="ti-font-icon">file-add-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file-check-in-lc"><div class="row"><i class="ti tis-file-check-in-lc ti-icon-style"></i><p class="ti-font-icon">file-check-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file-check-ou-lc"><div class="row"><i class="ti tis-file-check-ou-lc ti-icon-style"></i><p class="ti-font-icon">file-check-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file-download-in-lc"><div class="row"><i class="ti tis-file-download-in-lc ti-icon-style"></i><p class="ti-font-icon">file-download-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file-download-ou-lc"><div class="row"><i class="ti tis-file-download-ou-lc ti-icon-style"></i><p class="ti-font-icon">file-download-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file-edit-in-lc"><div class="row"><i class="ti tis-file-edit-in-lc ti-icon-style"></i><p class="ti-font-icon">file-edit-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file-edit-ou-lc"><div class="row"><i class="ti tis-file-edit-ou-lc ti-icon-style"></i><p class="ti-font-icon">file-edit-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file-export-in-lc"><div class="row"><i class="ti tis-file-export-in-lc ti-icon-style"></i><p class="ti-font-icon">file-export-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file-export-ou-lc"><div class="row"><i class="ti tis-file-export-ou-lc ti-icon-style"></i><p class="ti-font-icon">file-export-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file-favourite-ou-lc"><div class="row"><i class="ti tis-file-favourite-ou-lc ti-icon-style"></i><p class="ti-font-icon">file-favourite-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file-import-in-lc"><div class="row"><i class="ti tis-file-import-in-lc ti-icon-style"></i><p class="ti-font-icon">file-import-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file-import-ou-lc"><div class="row"><i class="ti tis-file-import-ou-lc ti-icon-style"></i><p class="ti-font-icon">file-import-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file-locked-in-lc"><div class="row"><i class="ti tis-file-locked-in-lc ti-icon-style"></i><p class="ti-font-icon">file-locked-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file-locked-ou-lc"><div class="row"><i class="ti tis-file-locked-ou-lc ti-icon-style"></i><p class="ti-font-icon">file-locked-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file-off"><div class="row"><i class="ti tis-file-off ti-icon-style"></i><p class="ti-font-icon">file-off</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file-remove-in-lc"><div class="row"><i class="ti tis-file-remove-in-lc ti-icon-style"></i><p class="ti-font-icon">file-remove-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file-remove-ou-lc"><div class="row"><i class="ti tis-file-remove-ou-lc ti-icon-style"></i><p class="ti-font-icon">file-remove-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file-search-in-lc"><div class="row"><i class="ti tis-file-search-in-lc ti-icon-style"></i><p class="ti-font-icon">file-search-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file-search-ou-lc"><div class="row"><i class="ti tis-file-search-ou-lc ti-icon-style"></i><p class="ti-font-icon">file-search-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file-subtract-in-lc"><div class="row"><i class="ti tis-file-subtract-in-lc ti-icon-style"></i><p class="ti-font-icon">file-subtract-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file-subtract-ou-lc"><div class="row"><i class="ti tis-file-subtract-ou-lc ti-icon-style"></i><p class="ti-font-icon">file-subtract-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file-upload-in-lc"><div class="row"><i class="ti tis-file-upload-in-lc ti-icon-style"></i><p class="ti-font-icon">file-upload-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file-upload-ou-lc"><div class="row"><i class="ti tis-file-upload-ou-lc ti-icon-style"></i><p class="ti-font-icon">file-upload-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file-view-in-lc"><div class="row"><i class="ti tis-file-view-in-lc ti-icon-style"></i><p class="ti-font-icon">file-view-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-file-view-ou-lc"><div class="row"><i class="ti tis-file-view-ou-lc ti-icon-style"></i><p class="ti-font-icon">file-view-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder"><div class="row"><i class="ti tis-folder ti-icon-style"></i><p class="ti-font-icon">folder</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-add-in-lc"><div class="row"><i class="ti tis-folder-add-in-lc ti-icon-style"></i><p class="ti-font-icon">folder-add-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-add-ou-lc"><div class="row"><i class="ti tis-folder-add-ou-lc ti-icon-style"></i><p class="ti-font-icon">folder-add-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-check-in-lc"><div class="row"><i class="ti tis-folder-check-in-lc ti-icon-style"></i><p class="ti-font-icon">folder-check-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-check-ou-lc"><div class="row"><i class="ti tis-folder-check-ou-lc ti-icon-style"></i><p class="ti-font-icon">folder-check-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-download-in-lc"><div class="row"><i class="ti tis-folder-download-in-lc ti-icon-style"></i><p class="ti-font-icon">folder-download-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-download-ou-lc"><div class="row"><i class="ti tis-folder-download-ou-lc ti-icon-style"></i><p class="ti-font-icon">folder-download-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-edit-in-lc"><div class="row"><i class="ti tis-folder-edit-in-lc ti-icon-style"></i><p class="ti-font-icon">folder-edit-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-edit-ou-lc"><div class="row"><i class="ti tis-folder-edit-ou-lc ti-icon-style"></i><p class="ti-font-icon">folder-edit-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-export-in-lc"><div class="row"><i class="ti tis-folder-export-in-lc ti-icon-style"></i><p class="ti-font-icon">folder-export-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-export-ou-lc"><div class="row"><i class="ti tis-folder-export-ou-lc ti-icon-style"></i><p class="ti-font-icon">folder-export-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-favourite-in-lc"><div class="row"><i class="ti tis-folder-favourite-in-lc ti-icon-style"></i><p class="ti-font-icon">folder-favourite-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-favourite-ou-lc"><div class="row"><i class="ti tis-folder-favourite-ou-lc ti-icon-style"></i><p class="ti-font-icon">folder-favourite-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-import-in-lc"><div class="row"><i class="ti tis-folder-import-in-lc ti-icon-style"></i><p class="ti-font-icon">folder-import-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-import-ou-lc"><div class="row"><i class="ti tis-folder-import-ou-lc ti-icon-style"></i><p class="ti-font-icon">folder-import-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-locked-in-lc"><div class="row"><i class="ti tis-folder-locked-in-lc ti-icon-style"></i><p class="ti-font-icon">folder-locked-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-locked-ou-lc"><div class="row"><i class="ti tis-folder-locked-ou-lc ti-icon-style"></i><p class="ti-font-icon">folder-locked-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-off"><div class="row"><i class="ti tis-folder-off ti-icon-style"></i><p class="ti-font-icon">folder-off</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-remove-in-lc"><div class="row"><i class="ti tis-folder-remove-in-lc ti-icon-style"></i><p class="ti-font-icon">folder-remove-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-remove-ou-lc"><div class="row"><i class="ti tis-folder-remove-ou-lc ti-icon-style"></i><p class="ti-font-icon">folder-remove-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-search-in-lc"><div class="row"><i class="ti tis-folder-search-in-lc ti-icon-style"></i><p class="ti-font-icon">folder-search-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-search-ou-lc"><div class="row"><i class="ti tis-folder-search-ou-lc ti-icon-style"></i><p class="ti-font-icon">folder-search-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-subtract-in-lc"><div class="row"><i class="ti tis-folder-subtract-in-lc ti-icon-style"></i><p class="ti-font-icon">folder-subtract-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-subtract-ou-lc"><div class="row"><i class="ti tis-folder-subtract-ou-lc ti-icon-style"></i><p class="ti-font-icon">folder-subtract-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-upload-in-lc"><div class="row"><i class="ti tis-folder-upload-in-lc ti-icon-style"></i><p class="ti-font-icon">folder-upload-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-upload-ou-lc"><div class="row"><i class="ti tis-folder-upload-ou-lc ti-icon-style"></i><p class="ti-font-icon">folder-upload-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-view-in-lc"><div class="row"><i class="ti tis-folder-view-in-lc ti-icon-style"></i><p class="ti-font-icon">folder-view-in-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-folder-view-ou-lc"><div class="row"><i class="ti tis-folder-view-ou-lc ti-icon-style"></i><p class="ti-font-icon">folder-view-ou-lc</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-grid-four-01"><div class="row"><i class="ti tis-grid-four-01 ti-icon-style"></i><p class="ti-font-icon">grid-four-01</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-grid-four-02"><div class="row"><i class="ti tis-grid-four-02 ti-icon-style"></i><p class="ti-font-icon">grid-four-02</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-grid-three"><div class="row"><i class="ti tis-grid-three ti-icon-style"></i><p class="ti-font-icon">grid-three</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-grid-two-hr-al"><div class="row"><i class="ti tis-grid-two-hr-al ti-icon-style"></i><p class="ti-font-icon">grid-two-hr-al</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-grid-two-vr-al"><div class="row"><i class="ti tis-grid-two-vr-al ti-icon-style"></i><p class="ti-font-icon">grid-two-vr-al</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-heart"><div class="row"><i class="ti tis-heart ti-icon-style"></i><p class="ti-font-icon">heart</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-heart-off"><div class="row"><i class="ti tis-heart-off ti-icon-style"></i><p class="ti-font-icon">heart-off</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-home"><div class="row"><i class="ti tis-home ti-icon-style"></i><p class="ti-font-icon">home</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-import"><div class="row"><i class="ti tis-import ti-icon-style"></i><p class="ti-font-icon">import</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-info-cr-fr"><div class="row"><i class="ti tis-info-cr-fr ti-icon-style"></i><p class="ti-font-icon">info-cr-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-info-sq-fr"><div class="row"><i class="ti tis-info-sq-fr ti-icon-style"></i><p class="ti-font-icon">info-sq-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-lock"><div class="row"><i class="ti tis-lock ti-icon-style"></i><p class="ti-font-icon">lock</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-lock-open"><div class="row"><i class="ti tis-lock-open ti-icon-style"></i><p class="ti-font-icon">lock-open</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-lock-unlocked"><div class="row"><i class="ti tis-lock-unlocked ti-icon-style"></i><p class="ti-font-icon">lock-unlocked</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-login"><div class="row"><i class="ti tis-login ti-icon-style"></i><p class="ti-font-icon">login</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-logout"><div class="row"><i class="ti tis-logout ti-icon-style"></i><p class="ti-font-icon">logout</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-minus-cr-fr"><div class="row"><i class="ti tis-minus-cr-fr ti-icon-style"></i><p class="ti-font-icon">minus-cr-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-minus-sq-fr"><div class="row"><i class="ti tis-minus-sq-fr ti-icon-style"></i><p class="ti-font-icon">minus-sq-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-more-cr-fr"><div class="row"><i class="ti tis-more-cr-fr ti-icon-style"></i><p class="ti-font-icon">more-cr-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-more-sq-fr"><div class="row"><i class="ti tis-more-sq-fr ti-icon-style"></i><p class="ti-font-icon">more-sq-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-plus-cr-fr"><div class="row"><i class="ti tis-plus-cr-fr ti-icon-style"></i><p class="ti-font-icon">plus-cr-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-plus-sq-fr"><div class="row"><i class="ti tis-plus-sq-fr ti-icon-style"></i><p class="ti-font-icon">plus-sq-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-question-mark-cr-fr"><div class="row"><i class="ti tis-question-mark-cr-fr ti-icon-style"></i><p class="ti-font-icon">question-mark-cr-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-question-mark-sq-fr"><div class="row"><i class="ti tis-question-mark-sq-fr ti-icon-style"></i><p class="ti-font-icon">question-mark-sq-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-remove-cr-fr"><div class="row"><i class="ti tis-remove-cr-fr ti-icon-style"></i><p class="ti-font-icon">remove-cr-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-remove-sq-fr"><div class="row"><i class="ti tis-remove-sq-fr ti-icon-style"></i><p class="ti-font-icon">remove-sq-fr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-search"><div class="row"><i class="ti tis-search ti-icon-style"></i><p class="ti-font-icon">search</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-settings"><div class="row"><i class="ti tis-settings ti-icon-style"></i><p class="ti-font-icon">settings</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-settings-adjust-hr-al"><div class="row"><i class="ti tis-settings-adjust-hr-al ti-icon-style"></i><p class="ti-font-icon">settings-adjust-hr-al</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-settings-adjust-vr-al"><div class="row"><i class="ti tis-settings-adjust-vr-al ti-icon-style"></i><p class="ti-font-icon">settings-adjust-vr-al</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-star"><div class="row"><i class="ti tis-star ti-icon-style"></i><p class="ti-font-icon">star</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-star-off"><div class="row"><i class="ti tis-star-off ti-icon-style"></i><p class="ti-font-icon">star-off</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-trash-can"><div class="row"><i class="ti tis-trash-can ti-icon-style"></i><p class="ti-font-icon">trash-can</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-user"><div class="row"><i class="ti tis-user ti-icon-style"></i><p class="ti-font-icon">user</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-view-board"><div class="row"><i class="ti tis-view-board ti-icon-style"></i><p class="ti-font-icon">view-board</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-view-column"><div class="row"><i class="ti tis-view-column ti-icon-style"></i><p class="ti-font-icon">view-column</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-view-list"><div class="row"><i class="ti tis-view-list ti-icon-style"></i><p class="ti-font-icon">view-list</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-view-table"><div class="row"><i class="ti tis-view-table ti-icon-style"></i><p class="ti-font-icon">view-table</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-view-timeline"><div class="row"><i class="ti tis-view-timeline ti-icon-style"></i><p class="ti-font-icon">view-timeline</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="tis-warning"><div class="row"><i class="ti tis-warning ti-icon-style"></i><p class="ti-font-icon">warning</p></div></button>
        </div>
        {{-- End Content Solid Style --}}
    </div>

    {{-- Tabs Logos Style Icon --}}
    <div class="tab-pane" style="margin-top: 87px;" id="pills-logo" role="tabpanel" aria-labelledby="pills-logo-tab">
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
                <input type="search" class="form-control p-3 ti-search" placeholder="Search..."
                    aria-label="Recipient's username" aria-describedby="button-addon2">
            </div>
        </div>
        <p class="mt-2 d-flex justify-content-end" style="color: var(--black-50);">1000 of 1000 icons</p>

        {{-- Content Logo Style --}}
        <div class="d-flex flex-row justify-content-between mt-5 flex-wrap" id="iconListIndex">
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-500px"><div class="row"><i class="ti til-500px ti-icon-style"></i><p class="ti-font-icon">500px</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-adobe"><div class="row"><i class="ti til-adobe ti-icon-style"></i><p class="ti-font-icon">adobe</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-airbnb"><div class="row"><i class="ti til-airbnb ti-icon-style"></i><p class="ti-font-icon">airbnb</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-algolia"><div class="row"><i class="ti til-algolia ti-icon-style"></i><p class="ti-font-icon">algolia</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-amazon"><div class="row"><i class="ti til-amazon ti-icon-style"></i><p class="ti-font-icon">amazon</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-android"><div class="row"><i class="ti til-android ti-icon-style"></i><p class="ti-font-icon">android</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-angular"><div class="row"><i class="ti til-angular ti-icon-style"></i><p class="ti-font-icon">angular</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-apple"><div class="row"><i class="ti til-apple ti-icon-style"></i><p class="ti-font-icon">apple</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-audible"><div class="row"><i class="ti til-audible ti-icon-style"></i><p class="ti-font-icon">audible</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-aws"><div class="row"><i class="ti til-aws ti-icon-style"></i><p class="ti-font-icon">aws</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-baidu"><div class="row"><i class="ti til-baidu ti-icon-style"></i><p class="ti-font-icon">baidu</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-behance"><div class="row"><i class="ti til-behance ti-icon-style"></i><p class="ti-font-icon">behance</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-bing"><div class="row"><i class="ti til-bing ti-icon-style"></i><p class="ti-font-icon">bing</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-bitcoin"><div class="row"><i class="ti til-bitcoin ti-icon-style"></i><p class="ti-font-icon">bitcoin</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-blender"><div class="row"><i class="ti til-blender ti-icon-style"></i><p class="ti-font-icon">blender</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-blogger"><div class="row"><i class="ti til-blogger ti-icon-style"></i><p class="ti-font-icon">blogger</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-bootstrap"><div class="row"><i class="ti til-bootstrap ti-icon-style"></i><p class="ti-font-icon">bootstrap</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-chrome"><div class="row"><i class="ti til-chrome ti-icon-style"></i><p class="ti-font-icon">chrome</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-codepen"><div class="row"><i class="ti til-codepen ti-icon-style"></i><p class="ti-font-icon">codepen</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-c-plus-plus"><div class="row"><i class="ti til-c-plus-plus ti-icon-style"></i><p class="ti-font-icon">c-plus-plus</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-creative-commons"><div class="row"><i class="ti til-creative-commons ti-icon-style"></i><p class="ti-font-icon">creative-commons</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-css3"><div class="row"><i class="ti til-css3 ti-icon-style"></i><p class="ti-font-icon">css3</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-dailymotion"><div class="row"><i class="ti til-dailymotion ti-icon-style"></i><p class="ti-font-icon">dailymotion</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-deviantart"><div class="row"><i class="ti til-deviantart ti-icon-style"></i><p class="ti-font-icon">deviantart</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-dev-to"><div class="row"><i class="ti til-dev-to ti-icon-style"></i><p class="ti-font-icon">dev-to</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-digg"><div class="row"><i class="ti til-digg ti-icon-style"></i><p class="ti-font-icon">digg</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-digitalocean"><div class="row"><i class="ti til-digitalocean ti-icon-style"></i><p class="ti-font-icon">digitalocean</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-discord"><div class="row"><i class="ti til-discord ti-icon-style"></i><p class="ti-font-icon">discord</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-discord-alt"><div class="row"><i class="ti til-discord-alt ti-icon-style"></i><p class="ti-font-icon">discord-alt</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-discourse"><div class="row"><i class="ti til-discourse ti-icon-style"></i><p class="ti-font-icon">discourse</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-django"><div class="row"><i class="ti til-django ti-icon-style"></i><p class="ti-font-icon">django</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-docker"><div class="row"><i class="ti til-docker ti-icon-style"></i><p class="ti-font-icon">docker</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-dribbble"><div class="row"><i class="ti til-dribbble ti-icon-style"></i><p class="ti-font-icon">dribbble</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-dropbox"><div class="row"><i class="ti til-dropbox ti-icon-style"></i><p class="ti-font-icon">dropbox</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-drupal"><div class="row"><i class="ti til-drupal ti-icon-style"></i><p class="ti-font-icon">drupal</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-ebay"><div class="row"><i class="ti til-ebay ti-icon-style"></i><p class="ti-font-icon">ebay</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-edge"><div class="row"><i class="ti til-edge ti-icon-style"></i><p class="ti-font-icon">edge</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-etsy"><div class="row"><i class="ti til-etsy ti-icon-style"></i><p class="ti-font-icon">etsy</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-facebook"><div class="row"><i class="ti til-facebook ti-icon-style"></i><p class="ti-font-icon">facebook</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-facebook-circle"><div class="row"><i class="ti til-facebook-circle ti-icon-style"></i><p class="ti-font-icon">facebook-circle</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-facebook-square"><div class="row"><i class="ti til-facebook-square ti-icon-style"></i><p class="ti-font-icon">facebook-square</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-figma"><div class="row"><i class="ti til-figma ti-icon-style"></i><p class="ti-font-icon">figma</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-firebase"><div class="row"><i class="ti til-firebase ti-icon-style"></i><p class="ti-font-icon">firebase</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-firefox"><div class="row"><i class="ti til-firefox ti-icon-style"></i><p class="ti-font-icon">firefox</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-flickr"><div class="row"><i class="ti til-flickr ti-icon-style"></i><p class="ti-font-icon">flickr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-flickr-square"><div class="row"><i class="ti til-flickr-square ti-icon-style"></i><p class="ti-font-icon">flickr-square</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-flutter"><div class="row"><i class="ti til-flutter ti-icon-style"></i><p class="ti-font-icon">flutter</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-foursquare"><div class="row"><i class="ti til-foursquare ti-icon-style"></i><p class="ti-font-icon">foursquare</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-git"><div class="row"><i class="ti til-git ti-icon-style"></i><p class="ti-font-icon">git</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-github"><div class="row"><i class="ti til-github ti-icon-style"></i><p class="ti-font-icon">github</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-gitlab"><div class="row"><i class="ti til-gitlab ti-icon-style"></i><p class="ti-font-icon">gitlab</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-google"><div class="row"><i class="ti til-google ti-icon-style"></i><p class="ti-font-icon">google</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-google-cloud"><div class="row"><i class="ti til-google-cloud ti-icon-style"></i><p class="ti-font-icon">google-cloud</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-google-plus"><div class="row"><i class="ti til-google-plus ti-icon-style"></i><p class="ti-font-icon">google-plus</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-google-plus-circle"><div class="row"><i class="ti til-google-plus-circle ti-icon-style"></i><p class="ti-font-icon">google-plus-circle</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-html5"><div class="row"><i class="ti til-html5 ti-icon-style"></i><p class="ti-font-icon">html5</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-imdb"><div class="row"><i class="ti til-imdb ti-icon-style"></i><p class="ti-font-icon">imdb</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-instagram"><div class="row"><i class="ti til-instagram ti-icon-style"></i><p class="ti-font-icon">instagram</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-instagram-alt"><div class="row"><i class="ti til-instagram-alt ti-icon-style"></i><p class="ti-font-icon">instagram-alt</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-internet-explorer"><div class="row"><i class="ti til-internet-explorer ti-icon-style"></i><p class="ti-font-icon">internet-explorer</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-invision"><div class="row"><i class="ti til-invision ti-icon-style"></i><p class="ti-font-icon">invision</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-javascript"><div class="row"><i class="ti til-javascript ti-icon-style"></i><p class="ti-font-icon">javascript</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-joomla"><div class="row"><i class="ti til-joomla ti-icon-style"></i><p class="ti-font-icon">joomla</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-jquery"><div class="row"><i class="ti til-jquery ti-icon-style"></i><p class="ti-font-icon">jquery</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-jsfiddle"><div class="row"><i class="ti til-jsfiddle ti-icon-style"></i><p class="ti-font-icon">jsfiddle</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-kickstarter"><div class="row"><i class="ti til-kickstarter ti-icon-style"></i><p class="ti-font-icon">kickstarter</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-kubernetes "><div class="row"><i class="ti til-kubernetes  ti-icon-style"></i><p class="ti-font-icon">kubernetes </p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-less"><div class="row"><i class="ti til-less ti-icon-style"></i><p class="ti-font-icon">less</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-linkedin"><div class="row"><i class="ti til-linkedin ti-icon-style"></i><p class="ti-font-icon">linkedin</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-linkedin-square"><div class="row"><i class="ti til-linkedin-square ti-icon-style"></i><p class="ti-font-icon">linkedin-square</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-magento"><div class="row"><i class="ti til-magento ti-icon-style"></i><p class="ti-font-icon">magento</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-mailchimp"><div class="row"><i class="ti til-mailchimp ti-icon-style"></i><p class="ti-font-icon">mailchimp</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-markdown"><div class="row"><i class="ti til-markdown ti-icon-style"></i><p class="ti-font-icon">markdown</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-mastercard"><div class="row"><i class="ti til-mastercard ti-icon-style"></i><p class="ti-font-icon">mastercard</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-mastodon"><div class="row"><i class="ti til-mastodon ti-icon-style"></i><p class="ti-font-icon">mastodon</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-medium"><div class="row"><i class="ti til-medium ti-icon-style"></i><p class="ti-font-icon">medium</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-medium-old"><div class="row"><i class="ti til-medium-old ti-icon-style"></i><p class="ti-font-icon">medium-old</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-medium-square"><div class="row"><i class="ti til-medium-square ti-icon-style"></i><p class="ti-font-icon">medium-square</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-messenger"><div class="row"><i class="ti til-messenger ti-icon-style"></i><p class="ti-font-icon">messenger</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-microsoft"><div class="row"><i class="ti til-microsoft ti-icon-style"></i><p class="ti-font-icon">microsoft</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-microsoft-teams"><div class="row"><i class="ti til-microsoft-teams ti-icon-style"></i><p class="ti-font-icon">microsoft-teams</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-nodejs"><div class="row"><i class="ti til-nodejs ti-icon-style"></i><p class="ti-font-icon">nodejs</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-ok-ru"><div class="row"><i class="ti til-ok-ru ti-icon-style"></i><p class="ti-font-icon">ok-ru</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-opera"><div class="row"><i class="ti til-opera ti-icon-style"></i><p class="ti-font-icon">opera</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-patreon"><div class="row"><i class="ti til-patreon ti-icon-style"></i><p class="ti-font-icon">patreon</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-paypal"><div class="row"><i class="ti til-paypal ti-icon-style"></i><p class="ti-font-icon">paypal</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-periscope"><div class="row"><i class="ti til-periscope ti-icon-style"></i><p class="ti-font-icon">periscope</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-php"><div class="row"><i class="ti til-php ti-icon-style"></i><p class="ti-font-icon">php</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-pinterest"><div class="row"><i class="ti til-pinterest ti-icon-style"></i><p class="ti-font-icon">pinterest</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-pinterest-alt"><div class="row"><i class="ti til-pinterest-alt ti-icon-style"></i><p class="ti-font-icon">pinterest-alt</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-play-store"><div class="row"><i class="ti til-play-store ti-icon-style"></i><p class="ti-font-icon">play-store</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-pocket"><div class="row"><i class="ti til-pocket ti-icon-style"></i><p class="ti-font-icon">pocket</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-product-hunt"><div class="row"><i class="ti til-product-hunt ti-icon-style"></i><p class="ti-font-icon">product-hunt</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-python"><div class="row"><i class="ti til-python ti-icon-style"></i><p class="ti-font-icon">python</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-quora"><div class="row"><i class="ti til-quora ti-icon-style"></i><p class="ti-font-icon">quora</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-react"><div class="row"><i class="ti til-react ti-icon-style"></i><p class="ti-font-icon">react</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-redbubble"><div class="row"><i class="ti til-redbubble ti-icon-style"></i><p class="ti-font-icon">redbubble</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-reddit"><div class="row"><i class="ti til-reddit ti-icon-style"></i><p class="ti-font-icon">reddit</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-redux"><div class="row"><i class="ti til-redux ti-icon-style"></i><p class="ti-font-icon">redux</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-sass"><div class="row"><i class="ti til-sass ti-icon-style"></i><p class="ti-font-icon">sass</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-shopify"><div class="row"><i class="ti til-shopify ti-icon-style"></i><p class="ti-font-icon">shopify</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-sketch"><div class="row"><i class="ti til-sketch ti-icon-style"></i><p class="ti-font-icon">sketch</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-skype"><div class="row"><i class="ti til-skype ti-icon-style"></i><p class="ti-font-icon">skype</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-slack"><div class="row"><i class="ti til-slack ti-icon-style"></i><p class="ti-font-icon">slack</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-slack-old"><div class="row"><i class="ti til-slack-old ti-icon-style"></i><p class="ti-font-icon">slack-old</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-snapchat"><div class="row"><i class="ti til-snapchat ti-icon-style"></i><p class="ti-font-icon">snapchat</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-soundcloud"><div class="row"><i class="ti til-soundcloud ti-icon-style"></i><p class="ti-font-icon">soundcloud</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-spotify"><div class="row"><i class="ti til-spotify ti-icon-style"></i><p class="ti-font-icon">spotify</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-spring-boot"><div class="row"><i class="ti til-spring-boot ti-icon-style"></i><p class="ti-font-icon">spring-boot</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-squarespace"><div class="row"><i class="ti til-squarespace ti-icon-style"></i><p class="ti-font-icon">squarespace</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-stack-overflow"><div class="row"><i class="ti til-stack-overflow ti-icon-style"></i><p class="ti-font-icon">stack-overflow</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-steam"><div class="row"><i class="ti til-steam ti-icon-style"></i><p class="ti-font-icon">steam</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-stripe"><div class="row"><i class="ti til-stripe ti-icon-style"></i><p class="ti-font-icon">stripe</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-tailwind-css"><div class="row"><i class="ti til-tailwind-css ti-icon-style"></i><p class="ti-font-icon">tailwind-css</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-telegram"><div class="row"><i class="ti til-telegram ti-icon-style"></i><p class="ti-font-icon">telegram</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-tiktok"><div class="row"><i class="ti til-tiktok ti-icon-style"></i><p class="ti-font-icon">tiktok</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-trello"><div class="row"><i class="ti til-trello ti-icon-style"></i><p class="ti-font-icon">trello</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-trip-advisor"><div class="row"><i class="ti til-trip-advisor ti-icon-style"></i><p class="ti-font-icon">trip-advisor</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-tumblr"><div class="row"><i class="ti til-tumblr ti-icon-style"></i><p class="ti-font-icon">tumblr</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-tux"><div class="row"><i class="ti til-tux ti-icon-style"></i><p class="ti-font-icon">tux</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-twitch"><div class="row"><i class="ti til-twitch ti-icon-style"></i><p class="ti-font-icon">twitch</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-twitter"><div class="row"><i class="ti til-twitter ti-icon-style"></i><p class="ti-font-icon">twitter</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-unity"><div class="row"><i class="ti til-unity ti-icon-style"></i><p class="ti-font-icon">unity</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-unsplash"><div class="row"><i class="ti til-unsplash ti-icon-style"></i><p class="ti-font-icon">unsplash</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-vimeo"><div class="row"><i class="ti til-vimeo ti-icon-style"></i><p class="ti-font-icon">vimeo</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-visa"><div class="row"><i class="ti til-visa ti-icon-style"></i><p class="ti-font-icon">visa</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-visual-studio"><div class="row"><i class="ti til-visual-studio ti-icon-style"></i><p class="ti-font-icon">visual-studio</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-vk"><div class="row"><i class="ti til-vk ti-icon-style"></i><p class="ti-font-icon">vk</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-vuejs"><div class="row"><i class="ti til-vuejs ti-icon-style"></i><p class="ti-font-icon">vuejs</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-whatsapp"><div class="row"><i class="ti til-whatsapp ti-icon-style"></i><p class="ti-font-icon">whatsapp</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-whatsapp-square"><div class="row"><i class="ti til-whatsapp-square ti-icon-style"></i><p class="ti-font-icon">whatsapp-square</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-wikipedia"><div class="row"><i class="ti til-wikipedia ti-icon-style"></i><p class="ti-font-icon">wikipedia</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-windows"><div class="row"><i class="ti til-windows ti-icon-style"></i><p class="ti-font-icon">windows</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-wix"><div class="row"><i class="ti til-wix ti-icon-style"></i><p class="ti-font-icon">wix</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-wordpress"><div class="row"><i class="ti til-wordpress ti-icon-style"></i><p class="ti-font-icon">wordpress</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-yahoo"><div class="row"><i class="ti til-yahoo ti-icon-style"></i><p class="ti-font-icon">yahoo</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-yelp"><div class="row"><i class="ti til-yelp ti-icon-style"></i><p class="ti-font-icon">yelp</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-youtube"><div class="row"><i class="ti til-youtube ti-icon-style"></i><p class="ti-font-icon">youtube</p></div></button>
            <button class="ti-button tt" id="liveToastBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="til-zoom"><div class="row"><i class="ti til-zoom ti-icon-style"></i><p class="ti-font-icon">zoom</p></div></button>
        </div>
        {{-- End Content Logo Style --}}

    </div>
</div>
@endsection
