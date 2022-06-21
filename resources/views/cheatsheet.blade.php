@extends('layout.main')
@section('container')
<!-- Header -->
<div class="header" style="margin: 150px 50px 0 50px;">
    <h1 class="display-4"
        style="font-weight: bold; font-family: 'Poppins', sans-serif; margin-top: 150px; color: var(--black);">
        Getting Started</h1>
    <p
        style="font-family: 'Poppins', sans-serif; font-size: 20px; opacity: 80%; margin-top: 20px; color: var(--black);">
        Switching to
        termicons is easy and can be done in 2 steps. There are more features than just the icons set. Termicons
        also follows the official Google Material Design guidelines</p>
</div>

<!-- Usage -->
<div class="usage" style="margin: 150px 50px 0 50px;">
    <div class="row">

        <!-- Side Menu -->
        <div class="col-3">
            <div class="sticky-top" style="top: 30px">
                <div class="row" style="line-height: 30px;">
                    <a href="#install_via_npm" style="text-decoration: none; color: var(--black); font-weight: bold; opacity: 50%;">Icons</a>
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
            <h3 style="color: var(--black);">Line Style Icons</h3>
            <p style="color: var(--black-70);">User Interface</p>
            <div class="col-12">
                <div class="row">
                    <p class="col-4" style="text-align: left; font-size: 16px; display: flex; justify-items: center;"><i class="ti ti-bell" style="font-size: 24px; padding-right: 10px;"></i>bell</p>
                </div>
            </div>
        </div>
    </div>
    @endsection
