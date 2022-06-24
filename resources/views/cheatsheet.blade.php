@extends('layout.main')
@section('container')
<!-- Header -->
<div class="header" style="margin: 150px 50px 0 50px;">
    <h1 class="display-4"
        style="font-weight: bold; font-family: 'Poppins', sans-serif; margin-top: 150px; color: var(--black);">
        Cheatsheet</h1>
    <p
        style="font-family: 'Poppins', sans-serif; font-size: 20px; opacity: 80%; margin-top: 20px; color: var(--black);">
        Copy paste the name of any of the 100+ icons</p>
</div>

<!-- Usage -->
<div class="usage" style="margin: 120px 50px 0 50px;">
    <div class="row">

        <!-- Side Menu -->
        <div class="col-3">
            <div class="sticky-top" style="padding-top: 30px;">
                <div class="row" style="line-height: 30px;">
                    <a href="#" style="text-decoration: none; color: var(--black); font-weight: bold; opacity: 50%;">Icons</a>
                    <div class="sub col-10" style="margin: 10px 0 0 40px">
                        <div class="col-12">
                            <div class="row">
                                <a href="#line_style" style="text-decoration: none; color: var(--black); opacity: 50%;">Line Style Icons</a>
                                <a href="#solid_style" style="text-decoration: none; color: var(--black); opacity: 50%;">Solid Style Icons</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Start -->
        <div class="col-9">
            {{-- Line Style Icons --}}
            <h3 style="color: var(--black); padding-top: 30px" id="line_style">Line Style Icons</h3>
            <p style="color: var(--black-70);">User Interface</p>
            <div class="col-12">
                <div class="row">
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-bell" style="font-size: 24px; padding-right: 10px;"></i>ti-bell</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-bell-off" style="font-size: 24px; padding-right: 10px;"></i>ti-bell off</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-bookmark" style="font-size: 24px; padding-right: 10px;"></i>ti-bookmark</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-bookmark-add" style="font-size: 24px; padding-right: 10px;"></i>ti-bookmark add</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-bookmark-check" style="font-size: 24px; padding-right: 10px;"></i>ti-bookmark check</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-bookmark-off" style="font-size: 24px; padding-right: 10px;"></i>ti-bookmark off</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-bookmark-remove" style="font-size: 24px; padding-right: 10px;"></i>ti-bookmark remove</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-bookmark-subtract" style="font-size: 24px; padding-right: 10px;"></i>ti-bookmark subtract</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-check-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>ti-check cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-check-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>ti-check sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-chevron-down-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>ti-chevron down cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-chevron-down-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>ti-chevron down sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-chevron-left-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>ti-chevron left cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-chevron-left-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>ti-chevron left sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-chevron-right-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>ti-chevron right cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-chevron-right-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>ti-chevron right sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-chevron-up-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>ti-chevron up cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-chevron-up-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>ti-chevron up sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-edit" style="font-size: 24px; padding-right: 10px;"></i>ti-edit</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-exclamation-mark-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>ti-exclamation mark cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-exclamation-mark-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>ti-exclamation mark sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-export" style="font-size: 24px; padding-right: 10px;"></i>ti-export</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-eye" style="font-size: 24px; padding-right: 10px;"></i>ti-eye</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-eye-off" style="font-size: 24px; padding-right: 10px;"></i>ti-eye off</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-fie-favourite-in-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-fie favourite in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file" style="font-size: 24px; padding-right: 10px;"></i>ti-file</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-add-in-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-file add in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-add-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-file add ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-check-in-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-file check in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-check-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-file check ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-download-in-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-file download in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-download-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-file download ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-edit-in-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-file edit in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-edit-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-file edit ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-export-in-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-file export in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-export-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-file export ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-favourite-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-file favourite ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-import-in-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-file import in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-import-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-file import ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-locked-in-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-file locked in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-locked-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-file locked ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-off" style="font-size: 24px; padding-right: 10px;"></i>ti-file off</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-remove-in-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-file remove in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-remove-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-file remove ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-search-in-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-file search in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-search-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-file search ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-subtract-in-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-file subtract in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-subtract-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-file subtract ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-upload-in-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-file upload in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-upload-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-file upload ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-view-in-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-file view in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-view-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-file view ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder" style="font-size: 24px; padding-right: 10px;"></i>ti-folder</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-add-in-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-folder add in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-add-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-folder add ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-check-in-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-folder check in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-check-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-folder check ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-download-in-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-folder download in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-download-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-folder download ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-edit-in-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-folder edit in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-edit-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-folder edit ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-export-in-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-folder export in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-export-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-folder export ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-favourite-in-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-folder favourite in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-favourite-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-folder favourite ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-import-in-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-folder import in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-import-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-folder import ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-locked-in-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-folder locked in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-locked-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-folder locked ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-off" style="font-size: 24px; padding-right: 10px;"></i>ti-folder off</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-remove-in-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-folder remove in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-remove-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-folder remove ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-search-in-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-folder search in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-search-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-folder search ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-subtract-in-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-folder subtract in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-subtract-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-folder subtract ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-upload-in-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-folder upload in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-upload-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-folder upload ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-view-in-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-folder view in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-view-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>ti-folder view ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-grid-four-01" style="font-size: 24px; padding-right: 10px;"></i>ti-grid four 01</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-grid-four-02" style="font-size: 24px; padding-right: 10px;"></i>ti-grid four 02</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-grid-three" style="font-size: 24px; padding-right: 10px;"></i>ti-grid three</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-grid-two-hr-al" style="font-size: 24px; padding-right: 10px;"></i>ti-grid two hr-al</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-grid-two-vr-al" style="font-size: 24px; padding-right: 10px;"></i>ti-grid two vr-al</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-heart" style="font-size: 24px; padding-right: 10px;"></i>ti-heart</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-heart-off" style="font-size: 24px; padding-right: 10px;"></i>ti-heart off</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-home" style="font-size: 24px; padding-right: 10px;"></i>ti-home</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-import" style="font-size: 24px; padding-right: 10px;"></i>ti-import</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-info-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>ti-info cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-info-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>ti-info sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-lock" style="font-size: 24px; padding-right: 10px;"></i>ti-lock</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-lock-open" style="font-size: 24px; padding-right: 10px;"></i>ti-lock open</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-lock-unlocked" style="font-size: 24px; padding-right: 10px;"></i>ti-lock unlocked</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-login" style="font-size: 24px; padding-right: 10px;"></i>ti-login</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-logout" style="font-size: 24px; padding-right: 10px;"></i>ti-logout</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-minus-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>ti-minus cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-minus-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>ti-minus sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-more-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>ti-more cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-more-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>ti-more sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-plus-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>ti-plus cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-plus-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>ti-plus sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-question-mark-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>ti-question mark cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-question-mark-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>ti-question mark sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-remove-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>ti-remove cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-remove-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>ti-remove sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-search" style="font-size: 24px; padding-right: 10px;"></i>ti-search</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-settings" style="font-size: 24px; padding-right: 10px;"></i>ti-settings</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-settings-adjust-hr-al" style="font-size: 24px; padding-right: 10px;"></i>ti-settings adjust hr-al</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-settings-adjust-vr-al" style="font-size: 24px; padding-right: 10px;"></i>ti-settings adjust vr-al</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-star" style="font-size: 24px; padding-right: 10px;"></i>ti-star</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-star-off" style="font-size: 24px; padding-right: 10px;"></i>ti-star off</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-trash-can" style="font-size: 24px; padding-right: 10px;"></i>ti-trash can</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-user" style="font-size: 24px; padding-right: 10px;"></i>ti-user</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-view-board" style="font-size: 24px; padding-right: 10px;"></i>ti-view board</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-view-column" style="font-size: 24px; padding-right: 10px;"></i>ti-view column</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-view-list" style="font-size: 24px; padding-right: 10px;"></i>ti-view list</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-view-table" style="font-size: 24px; padding-right: 10px;"></i>ti-view table</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-view-timeline" style="font-size: 24px; padding-right: 10px;"></i>ti-view timeline</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-warning" style="font-size: 24px; padding-right: 10px;"></i>ti-warning</p>
                </div>
            </div>

            {{-- Solid Style Icons --}}
            <h3 style="color: var(--black); padding-top: 30px;" id="solid_style">Solid Style Icons</h3>
            <p style="color: var(--black-70);">User Interface</p>
            <div class="col-12">
                <div class="row">
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-bell" style="font-size: 24px; padding-right: 10px;"></i>tis-bell</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-bell-off" style="font-size: 24px; padding-right: 10px;"></i>tis-bell off</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-bookmark" style="font-size: 24px; padding-right: 10px;"></i>tis-bookmark</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-bookmark-add" style="font-size: 24px; padding-right: 10px;"></i>tis-bookmark add</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-bookmark-check" style="font-size: 24px; padding-right: 10px;"></i>tis-bookmark check</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-bookmark-off" style="font-size: 24px; padding-right: 10px;"></i>tis-bookmark off</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-bookmark-remove" style="font-size: 24px; padding-right: 10px;"></i>tis-bookmark remove</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-bookmark-subtract" style="font-size: 24px; padding-right: 10px;"></i>tis-bookmark subtract</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-check-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-check cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-check-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-check sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-chevron-down-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-chevron down cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-chevron-down-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-chevron down sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-chevron-left-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-chevron left cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-chevron-left-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-chevron left sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-chevron-right-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-chevron right cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-chevron-right-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-chevron right sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-chevron-up-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-chevron up cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-chevron-up-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-chevron up sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-edit" style="font-size: 24px; padding-right: 10px;"></i>tis-edit</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-exclamation-mark-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-exclamation mark cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-exclamation-mark-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-exclamation mark sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-export" style="font-size: 24px; padding-right: 10px;"></i>tis-export</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-eye" style="font-size: 24px; padding-right: 10px;"></i>tis-eye</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-eye-off" style="font-size: 24px; padding-right: 10px;"></i>tis-eye off</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-fie-favourite-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-fie favourite in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file" style="font-size: 24px; padding-right: 10px;"></i>tis-file</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-add-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file add in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-add-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file add ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-check-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file check in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-check-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file check ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-download-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file download in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-download-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file download ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-edit-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file edit in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-edit-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file edit ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-export-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file export in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-export-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file export ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-favourite-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file favourite ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-import-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file import in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-import-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file import ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-locked-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file locked in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-locked-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file locked ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-off" style="font-size: 24px; padding-right: 10px;"></i>tis-file off</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-remove-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file remove in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-remove-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file remove ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-search-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file search in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-search-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file search ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-subtract-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file subtract in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-subtract-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file subtract ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-upload-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file upload in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-upload-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file upload ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-view-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file view in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-file-view-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file view ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder" style="font-size: 24px; padding-right: 10px;"></i>tis-folder</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-add-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder add in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-add-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder add ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-check-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder check in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-check-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder check ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-download-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder download in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-download-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder download ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-edit-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder edit in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-edit-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder edit ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-export-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder export in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-export-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder export ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-favourite-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder favourite in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-favourite-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder favourite ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-import-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder import in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-import-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder import ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-locked-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder locked in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-locked-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder locked ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-off" style="font-size: 24px; padding-right: 10px;"></i>tis-folder off</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-remove-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder remove in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-remove-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder remove ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-search-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder search in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-search-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder search ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-subtract-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder subtract in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-subtract-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder subtract ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-upload-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder upload in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-upload-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder upload ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-view-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder view in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-folder-view-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder view ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-grid-four-01" style="font-size: 24px; padding-right: 10px;"></i>tis-grid four 01</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-grid-four-02" style="font-size: 24px; padding-right: 10px;"></i>tis-grid four 02</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-grid-three" style="font-size: 24px; padding-right: 10px;"></i>tis-grid three</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-grid-two-hr-al" style="font-size: 24px; padding-right: 10px;"></i>tis-grid two hr-al</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-grid-two-vr-al" style="font-size: 24px; padding-right: 10px;"></i>tis-grid two vr-al</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-heart" style="font-size: 24px; padding-right: 10px;"></i>tis-heart</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-heart-off" style="font-size: 24px; padding-right: 10px;"></i>tis-heart off</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-home" style="font-size: 24px; padding-right: 10px;"></i>tis-home</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-import" style="font-size: 24px; padding-right: 10px;"></i>tis-import</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-info-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-info cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-info-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-info sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-lock" style="font-size: 24px; padding-right: 10px;"></i>tis-lock</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-lock-open" style="font-size: 24px; padding-right: 10px;"></i>tis-lock open</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-lock-unlocked" style="font-size: 24px; padding-right: 10px;"></i>tis-lock unlocked</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-login" style="font-size: 24px; padding-right: 10px;"></i>tis-login</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-logout" style="font-size: 24px; padding-right: 10px;"></i>tis-logout</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-minus-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-minus cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-minus-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-minus sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-more-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-more cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-more-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-more sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-plus-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-plus cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-plus-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-plus sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-question-mark-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-question mark cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-question-mark-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-question mark sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-remove-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-remove cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-remove-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-remove sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-search" style="font-size: 24px; padding-right: 10px;"></i>tis-search</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-settings" style="font-size: 24px; padding-right: 10px;"></i>tis-settings</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-settings-adjust-hr-al" style="font-size: 24px; padding-right: 10px;"></i>tis-settings adjust hr-al</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-settings-adjust-vr-al" style="font-size: 24px; padding-right: 10px;"></i>tis-settings adjust vr-al</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-star" style="font-size: 24px; padding-right: 10px;"></i>tis-star</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-star-off" style="font-size: 24px; padding-right: 10px;"></i>tis-star off</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-trash-can" style="font-size: 24px; padding-right: 10px;"></i>tis-trash can</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-user" style="font-size: 24px; padding-right: 10px;"></i>tis-user</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-view-board" style="font-size: 24px; padding-right: 10px;"></i>tis-view board</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-view-column" style="font-size: 24px; padding-right: 10px;"></i>tis-view column</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-view-list" style="font-size: 24px; padding-right: 10px;"></i>tis-view list</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-view-table" style="font-size: 24px; padding-right: 10px;"></i>tis-view table</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-view-timeline" style="font-size: 24px; padding-right: 10px;"></i>tis-view timeline</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-warning" style="font-size: 24px; padding-right: 10px;"></i>tis-warning</p>
                </div>
            </div>
        </div>
    </div>
    @endsection
