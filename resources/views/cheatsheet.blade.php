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
                                <a href="#logo" style="text-decoration: none; color: var(--black); opacity: 50%;">Logo Icons</a>
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
            <div class="col-12" style="color: var(--black-70)">
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
            <div class="col-12" style="color: var(--black-70)">
                <div class="row">
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-bell" style="font-size: 24px; padding-right: 10px;"></i>tis-bell</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-bell-off" style="font-size: 24px; padding-right: 10px;"></i>tis-bell off</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-bookmark" style="font-size: 24px; padding-right: 10px;"></i>tis-bookmark</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-bookmark-add" style="font-size: 24px; padding-right: 10px;"></i>tis-bookmark add</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-bookmark-check" style="font-size: 24px; padding-right: 10px;"></i>tis-bookmark check</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-bookmark-off" style="font-size: 24px; padding-right: 10px;"></i>tis-bookmark off</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-bookmark-remove" style="font-size: 24px; padding-right: 10px;"></i>tis-bookmark remove</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-bookmark-subtract" style="font-size: 24px; padding-right: 10px;"></i>tis-bookmark subtract</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-check-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-check cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-check-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-check sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-chevron-down-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-chevron down cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-chevron-down-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-chevron down sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-chevron-left-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-chevron left cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-chevron-left-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-chevron left sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-chevron-right-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-chevron right cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-chevron-right-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-chevron right sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-chevron-up-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-chevron up cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-chevron-up-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-chevron up sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-edit" style="font-size: 24px; padding-right: 10px;"></i>tis-edit</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-exclamation-mark-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-exclamation mark cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-exclamation-mark-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-exclamation mark sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-export" style="font-size: 24px; padding-right: 10px;"></i>tis-export</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-eye" style="font-size: 24px; padding-right: 10px;"></i>tis-eye</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-eye-off" style="font-size: 24px; padding-right: 10px;"></i>tis-eye off</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-fie-favourite-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-fie favourite in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file" style="font-size: 24px; padding-right: 10px;"></i>tis-file</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file-add-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file add in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file-add-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file add ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file-check-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file check in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file-check-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file check ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file-download-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file download in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file-download-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file download ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file-edit-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file edit in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file-edit-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file edit ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file-export-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file export in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file-export-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file export ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file-favourite-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file favourite ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file-import-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file import in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file-import-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file import ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file-locked-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file locked in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file-locked-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file locked ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file-off" style="font-size: 24px; padding-right: 10px;"></i>tis-file off</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file-remove-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file remove in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file-remove-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file remove ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file-search-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file search in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file-search-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file search ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file-subtract-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file subtract in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file-subtract-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file subtract ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file-upload-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file upload in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file-upload-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file upload ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file-view-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file view in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-file-view-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-file view ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder" style="font-size: 24px; padding-right: 10px;"></i>tis-folder</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-add-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder add in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-add-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder add ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-check-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder check in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-check-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder check ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-download-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder download in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-download-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder download ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-edit-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder edit in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-edit-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder edit ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-export-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder export in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-export-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder export ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-favourite-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder favourite in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-favourite-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder favourite ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-import-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder import in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-import-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder import ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-locked-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder locked in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-locked-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder locked ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-off" style="font-size: 24px; padding-right: 10px;"></i>tis-folder off</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-remove-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder remove in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-remove-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder remove ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-search-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder search in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-search-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder search ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-subtract-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder subtract in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-subtract-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder subtract ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-upload-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder upload in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-upload-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder upload ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-view-in-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder view in-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-folder-view-ou-lc" style="font-size: 24px; padding-right: 10px;"></i>tis-folder view ou-lc</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-grid-four-01" style="font-size: 24px; padding-right: 10px;"></i>tis-grid four 01</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-grid-four-02" style="font-size: 24px; padding-right: 10px;"></i>tis-grid four 02</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-grid-three" style="font-size: 24px; padding-right: 10px;"></i>tis-grid three</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-grid-two-hr-al" style="font-size: 24px; padding-right: 10px;"></i>tis-grid two hr-al</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-grid-two-vr-al" style="font-size: 24px; padding-right: 10px;"></i>tis-grid two vr-al</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-heart" style="font-size: 24px; padding-right: 10px;"></i>tis-heart</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-heart-off" style="font-size: 24px; padding-right: 10px;"></i>tis-heart off</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-home" style="font-size: 24px; padding-right: 10px;"></i>tis-home</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-import" style="font-size: 24px; padding-right: 10px;"></i>tis-import</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-info-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-info cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-info-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-info sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-lock" style="font-size: 24px; padding-right: 10px;"></i>tis-lock</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-lock-open" style="font-size: 24px; padding-right: 10px;"></i>tis-lock open</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-lock-unlocked" style="font-size: 24px; padding-right: 10px;"></i>tis-lock unlocked</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-login" style="font-size: 24px; padding-right: 10px;"></i>tis-login</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-logout" style="font-size: 24px; padding-right: 10px;"></i>tis-logout</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-minus-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-minus cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-minus-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-minus sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-more-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-more cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-more-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-more sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-plus-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-plus cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-plus-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-plus sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-question-mark-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-question mark cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-question-mark-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-question mark sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-remove-cr-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-remove cr-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-remove-sq-fr" style="font-size: 24px; padding-right: 10px;"></i>tis-remove sq-fr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-search" style="font-size: 24px; padding-right: 10px;"></i>tis-search</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-settings" style="font-size: 24px; padding-right: 10px;"></i>tis-settings</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-settings-adjust-hr-al" style="font-size: 24px; padding-right: 10px;"></i>tis-settings adjust hr-al</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-settings-adjust-vr-al" style="font-size: 24px; padding-right: 10px;"></i>tis-settings adjust vr-al</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-star" style="font-size: 24px; padding-right: 10px;"></i>tis-star</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-star-off" style="font-size: 24px; padding-right: 10px;"></i>tis-star off</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-trash-can" style="font-size: 24px; padding-right: 10px;"></i>tis-trash can</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-user" style="font-size: 24px; padding-right: 10px;"></i>tis-user</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-view-board" style="font-size: 24px; padding-right: 10px;"></i>tis-view board</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-view-column" style="font-size: 24px; padding-right: 10px;"></i>tis-view column</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-view-list" style="font-size: 24px; padding-right: 10px;"></i>tis-view list</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-view-table" style="font-size: 24px; padding-right: 10px;"></i>tis-view table</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-view-timeline" style="font-size: 24px; padding-right: 10px;"></i>tis-view timeline</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti tis-warning" style="font-size: 24px; padding-right: 10px;"></i>tis-warning</p>
                </div>
            </div>

            {{-- Logo Style Icons --}}
            <h3 style="color: var(--black); padding-top: 30px;" id="logo">Logo Style Icons</h3>
            <div class="col-12" style="color: var(--black-70)">
                <div class="row">
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-500px" style="font-size: 24px; padding-right: 10px;"></i>til-500px</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-adobe" style="font-size: 24px; padding-right: 10px;"></i>til-adobe</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-airbnb" style="font-size: 24px; padding-right: 10px;"></i>til-airbnb</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-algolia" style="font-size: 24px; padding-right: 10px;"></i>til-algolia</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-amazon" style="font-size: 24px; padding-right: 10px;"></i>til-amazon</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-android" style="font-size: 24px; padding-right: 10px;"></i>til-android</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-angular" style="font-size: 24px; padding-right: 10px;"></i>til-angular</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-apple" style="font-size: 24px; padding-right: 10px;"></i>til-apple</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-audible" style="font-size: 24px; padding-right: 10px;"></i>til-audible</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-aws" style="font-size: 24px; padding-right: 10px;"></i>til-aws</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-baidu" style="font-size: 24px; padding-right: 10px;"></i>til-baidu</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-behance" style="font-size: 24px; padding-right: 10px;"></i>til-behance</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-bing" style="font-size: 24px; padding-right: 10px;"></i>til-bing</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-bitcoin" style="font-size: 24px; padding-right: 10px;"></i>til-bitcoin</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-blender" style="font-size: 24px; padding-right: 10px;"></i>til-blender</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-blogger" style="font-size: 24px; padding-right: 10px;"></i>til-blogger</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-bootstrap" style="font-size: 24px; padding-right: 10px;"></i>til-bootstrap</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-chrome" style="font-size: 24px; padding-right: 10px;"></i>til-chrome</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-codepen" style="font-size: 24px; padding-right: 10px;"></i>til-codepen</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-c-plus-plus" style="font-size: 24px; padding-right: 10px;"></i>til-c-plus-plus</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-creative-commons" style="font-size: 24px; padding-right: 10px;"></i>til-creative-commons</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-css3" style="font-size: 24px; padding-right: 10px;"></i>til-css3</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-dailymotion" style="font-size: 24px; padding-right: 10px;"></i>til-dailymotion</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-deviantart" style="font-size: 24px; padding-right: 10px;"></i>til-deviantart</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-dev-to" style="font-size: 24px; padding-right: 10px;"></i>til-dev-to</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-digg" style="font-size: 24px; padding-right: 10px;"></i>til-digg</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-digitalocean" style="font-size: 24px; padding-right: 10px;"></i>til-digitalocean</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-discord" style="font-size: 24px; padding-right: 10px;"></i>til-discord</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-discord-alt" style="font-size: 24px; padding-right: 10px;"></i>til-discord-alt</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-discourse" style="font-size: 24px; padding-right: 10px;"></i>til-discourse</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-django" style="font-size: 24px; padding-right: 10px;"></i>til-django</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-docker" style="font-size: 24px; padding-right: 10px;"></i>til-docker</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-dribbble" style="font-size: 24px; padding-right: 10px;"></i>til-dribbble</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-dropbox" style="font-size: 24px; padding-right: 10px;"></i>til-dropbox</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-drupal" style="font-size: 24px; padding-right: 10px;"></i>til-drupal</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-ebay" style="font-size: 24px; padding-right: 10px;"></i>til-ebay</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-edge" style="font-size: 24px; padding-right: 10px;"></i>til-edge</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-etsy" style="font-size: 24px; padding-right: 10px;"></i>til-etsy</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-facebook" style="font-size: 24px; padding-right: 10px;"></i>til-facebook</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-facebook-circle" style="font-size: 24px; padding-right: 10px;"></i>til-facebook-circle</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-facebook-square" style="font-size: 24px; padding-right: 10px;"></i>til-facebook-square</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-figma" style="font-size: 24px; padding-right: 10px;"></i>til-figma</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-firebase" style="font-size: 24px; padding-right: 10px;"></i>til-firebase</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-firefox" style="font-size: 24px; padding-right: 10px;"></i>til-firefox</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-flickr" style="font-size: 24px; padding-right: 10px;"></i>til-flickr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-flickr-square" style="font-size: 24px; padding-right: 10px;"></i>til-flickr-square</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-flutter" style="font-size: 24px; padding-right: 10px;"></i>til-flutter</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-foursquare" style="font-size: 24px; padding-right: 10px;"></i>til-foursquare</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-git" style="font-size: 24px; padding-right: 10px;"></i>til-git</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-github" style="font-size: 24px; padding-right: 10px;"></i>til-github</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-gitlab" style="font-size: 24px; padding-right: 10px;"></i>til-gitlab</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-google" style="font-size: 24px; padding-right: 10px;"></i>til-google</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-google-cloud" style="font-size: 24px; padding-right: 10px;"></i>til-google-cloud</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-google-plus" style="font-size: 24px; padding-right: 10px;"></i>til-google-plus</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-google-plus-circle" style="font-size: 24px; padding-right: 10px;"></i>til-google-plus-circle</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-html5" style="font-size: 24px; padding-right: 10px;"></i>til-html5</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-imdb" style="font-size: 24px; padding-right: 10px;"></i>til-imdb</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-instagram" style="font-size: 24px; padding-right: 10px;"></i>til-instagram</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-instagram-alt" style="font-size: 24px; padding-right: 10px;"></i>til-instagram-alt</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-internet-explorer" style="font-size: 24px; padding-right: 10px;"></i>til-internet-explorer</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-invision" style="font-size: 24px; padding-right: 10px;"></i>til-invision</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-javascript" style="font-size: 24px; padding-right: 10px;"></i>til-javascript</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-joomla" style="font-size: 24px; padding-right: 10px;"></i>til-joomla</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-jquery" style="font-size: 24px; padding-right: 10px;"></i>til-jquery</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-jsfiddle" style="font-size: 24px; padding-right: 10px;"></i>til-jsfiddle</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-kickstarter" style="font-size: 24px; padding-right: 10px;"></i>til-kickstarter</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-kubernetes " style="font-size: 24px; padding-right: 10px;"></i>til-kubernetes </p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-less" style="font-size: 24px; padding-right: 10px;"></i>til-less</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-linkedin" style="font-size: 24px; padding-right: 10px;"></i>til-linkedin</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-linkedin-square" style="font-size: 24px; padding-right: 10px;"></i>til-linkedin-square</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-magento" style="font-size: 24px; padding-right: 10px;"></i>til-magento</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-mailchimp" style="font-size: 24px; padding-right: 10px;"></i>til-mailchimp</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-markdown" style="font-size: 24px; padding-right: 10px;"></i>til-markdown</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-mastercard" style="font-size: 24px; padding-right: 10px;"></i>til-mastercard</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-mastodon" style="font-size: 24px; padding-right: 10px;"></i>til-mastodon</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-medium" style="font-size: 24px; padding-right: 10px;"></i>til-medium</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-medium-old" style="font-size: 24px; padding-right: 10px;"></i>til-medium-old</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-medium-square" style="font-size: 24px; padding-right: 10px;"></i>til-medium-square</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-messenger" style="font-size: 24px; padding-right: 10px;"></i>til-messenger</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-microsoft" style="font-size: 24px; padding-right: 10px;"></i>til-microsoft</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-microsoft-teams" style="font-size: 24px; padding-right: 10px;"></i>til-microsoft-teams</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-nodejs" style="font-size: 24px; padding-right: 10px;"></i>til-nodejs</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-ok-ru" style="font-size: 24px; padding-right: 10px;"></i>til-ok-ru</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-opera" style="font-size: 24px; padding-right: 10px;"></i>til-opera</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-patreon" style="font-size: 24px; padding-right: 10px;"></i>til-patreon</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-paypal" style="font-size: 24px; padding-right: 10px;"></i>til-paypal</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-periscope" style="font-size: 24px; padding-right: 10px;"></i>til-periscope</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-php" style="font-size: 24px; padding-right: 10px;"></i>til-php</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-pinterest" style="font-size: 24px; padding-right: 10px;"></i>til-pinterest</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-pinterest-alt" style="font-size: 24px; padding-right: 10px;"></i>til-pinterest-alt</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-play-store" style="font-size: 24px; padding-right: 10px;"></i>til-play-store</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-pocket" style="font-size: 24px; padding-right: 10px;"></i>til-pocket</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-product-hunt" style="font-size: 24px; padding-right: 10px;"></i>til-product-hunt</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-python" style="font-size: 24px; padding-right: 10px;"></i>til-python</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-quora" style="font-size: 24px; padding-right: 10px;"></i>til-quora</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-react" style="font-size: 24px; padding-right: 10px;"></i>til-react</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-redbubble" style="font-size: 24px; padding-right: 10px;"></i>til-redbubble</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-reddit" style="font-size: 24px; padding-right: 10px;"></i>til-reddit</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-redux" style="font-size: 24px; padding-right: 10px;"></i>til-redux</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-sass" style="font-size: 24px; padding-right: 10px;"></i>til-sass</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-shopify" style="font-size: 24px; padding-right: 10px;"></i>til-shopify</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-sketch" style="font-size: 24px; padding-right: 10px;"></i>til-sketch</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-skype" style="font-size: 24px; padding-right: 10px;"></i>til-skype</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-slack" style="font-size: 24px; padding-right: 10px;"></i>til-slack</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-slack-old" style="font-size: 24px; padding-right: 10px;"></i>til-slack-old</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-snapchat" style="font-size: 24px; padding-right: 10px;"></i>til-snapchat</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-soundcloud" style="font-size: 24px; padding-right: 10px;"></i>til-soundcloud</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-spotify" style="font-size: 24px; padding-right: 10px;"></i>til-spotify</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-spring-boot" style="font-size: 24px; padding-right: 10px;"></i>til-spring-boot</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-squarespace" style="font-size: 24px; padding-right: 10px;"></i>til-squarespace</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-stack-overflow" style="font-size: 24px; padding-right: 10px;"></i>til-stack-overflow</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-steam" style="font-size: 24px; padding-right: 10px;"></i>til-steam</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-stripe" style="font-size: 24px; padding-right: 10px;"></i>til-stripe</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-tailwind-css" style="font-size: 24px; padding-right: 10px;"></i>til-tailwind-css</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-telegram" style="font-size: 24px; padding-right: 10px;"></i>til-telegram</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-tiktok" style="font-size: 24px; padding-right: 10px;"></i>til-tiktok</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-trello" style="font-size: 24px; padding-right: 10px;"></i>til-trello</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-trip-advisor" style="font-size: 24px; padding-right: 10px;"></i>til-trip-advisor</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-tumblr" style="font-size: 24px; padding-right: 10px;"></i>til-tumblr</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-tux" style="font-size: 24px; padding-right: 10px;"></i>til-tux</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-twitch" style="font-size: 24px; padding-right: 10px;"></i>til-twitch</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-twitter" style="font-size: 24px; padding-right: 10px;"></i>til-twitter</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-unity" style="font-size: 24px; padding-right: 10px;"></i>til-unity</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-unsplash" style="font-size: 24px; padding-right: 10px;"></i>til-unsplash</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-vimeo" style="font-size: 24px; padding-right: 10px;"></i>til-vimeo</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-visa" style="font-size: 24px; padding-right: 10px;"></i>til-visa</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-visual-studio" style="font-size: 24px; padding-right: 10px;"></i>til-visual-studio</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-vk" style="font-size: 24px; padding-right: 10px;"></i>til-vk</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-vuejs" style="font-size: 24px; padding-right: 10px;"></i>til-vuejs</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-whatsapp" style="font-size: 24px; padding-right: 10px;"></i>til-whatsapp</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-whatsapp-square" style="font-size: 24px; padding-right: 10px;"></i>til-whatsapp-square</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-wikipedia" style="font-size: 24px; padding-right: 10px;"></i>til-wikipedia</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-windows" style="font-size: 24px; padding-right: 10px;"></i>til-windows</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-wix" style="font-size: 24px; padding-right: 10px;"></i>til-wix</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-wordpress" style="font-size: 24px; padding-right: 10px;"></i>til-wordpress</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-yahoo" style="font-size: 24px; padding-right: 10px;"></i>til-yahoo</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-yelp" style="font-size: 24px; padding-right: 10px;"></i>til-yelp</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-youtube" style="font-size: 24px; padding-right: 10px;"></i>til-youtube</p>
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti til-zoom" style="font-size: 24px; padding-right: 10px;"></i>til-zoom</p>
                </div>
            </div>
        </div>
    </div>
    @endsection
