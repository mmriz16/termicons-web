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
                <div class="row" style="line-height: 30px;"><a href="#install_via_npm"
                        style="text-decoration: none; color: var(--black); font-weight: bold; opacity: 50%;">Install
                        via
                        NPM</a><a href="#using_the_web_component"
                        style="text-decoration: none; color: var(--black); font-weight: bold; opacity: 50%;">Using
                        the
                        Web Component</a><a href="#using_as_a_font"
                        style="text-decoration: none; color: var(--black); font-weight: bold; opacity: 50%;">Using
                        as a
                        Font</a>
                    <div class="sub col-10" style="margin: 10px 0 0 40px">
                        <div class="col-12">
                            <div class="row"><a href="#import_the_css"
                                    style="text-decoration: none; color: var(--black); opacity: 50%;">Import the
                                    CSS</a><a href="#html"
                                    style="text-decoration: none; color: var(--black); opacity: 50%;">HTML</a>
                            </div>
                        </div>
                    </div><a href="#starter_templates"
                        style="text-decoration: none; color: var(--black); font-weight: bold; opacity: 50%;">Starter
                        Templates</a><a href="#styling"
                        style="text-decoration: none; color: var(--black); font-weight: bold; opacity: 50%;">Styling</a>
                    <div class="sub col-10" style="margin: 10px 0 0 40px">
                        <div class="col-12">
                            <div class="row"><a href="#sizing"
                                    style="text-decoration: none; color: var(--black); opacity: 50%;">Sizing</a><a
                                    href="#rotation_&_flipping"
                                    style="text-decoration: none; color: var(--black); opacity: 50%;">Rotation &
                                    Flipping</a><a href="#list_icons"
                                    style="text-decoration: none; color: var(--black); opacity: 50%;">List
                                    Icons</a><a href="#fixed_width"
                                    style="text-decoration: none; color: var(--black); opacity: 50%;">Fixed
                                    Width</a><a href="#pulled_icons"
                                    style="text-decoration: none; color: var(--black); opacity: 50%;">Pulled
                                    Icons</a><a href="#border"
                                    style="text-decoration: none; color: var(--black); opacity: 50%;">Border</a><a
                                    href="#animation"
                                    style="text-decoration: none; color: var(--black); opacity: 50%;">Animation</a><a
                                    href="#animation_on_hover"
                                    style="text-decoration: none; color: var(--black); opacity: 50%;">Animation
                                    on
                                    Hover</a></div>
                        </div>
                    </div><a href="#contribution"
                        style="text-decoration: none; color: var(--black); font-weight: bold; opacity: 50%;">Contribution</a><a
                        href="#license"
                        style="text-decoration: none; color: var(--black); font-weight: bold; opacity: 50%;">License</a>
                </div>
            </div>
        </div>

        <!-- Quick Start -->
        <div class="col-9">
            <h3 style="color: var(--black);">Quick Start</h3>
            <p style="color: var(--black-70);">Looking to quickly add Termicons to your project? Use the paths
                to
                CDN or Download the files <a href="" style="text-decoration: none;">here</a>.</p>

            <!-- Install Via NPM -->
            <h3 id="install_via_npm" style="margin-top: 20px; padding-top: 30px; color: var(--black);">Install
                via NPM</h3>
            <p style="color: var(--black-70);">Install the Termicons package by copy pasting the following in
                your
                terminal:</p>
            <div class="card" style="border: none; background-color: var(--black-5); margin-bottom: 16px;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center m-0">
                        <span class="text-line me-2" style="font-family: monospace; color: var(--black-70);"
                            id="text1">$ npm install
                            termicons --save</span>
                        <button id="copyButton1" class="btn btn-sm copyButton"
                            style="color: #0F58EB; background-color: rgba(15, 88, 235, .2);">Copy</button>
                    </div>
                </div>
            </div>
            <p style="color: var(--black-70);">Import the npm module in your javascript</p>
            <div class="card" style="border: none; background-color: var(--black-5);">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center m-0"><span class="text-line me-2"
                            style="font-family: monospace; color: var(--black-70);" id="text2">import
                            'termicons'</span><button id="copyButton2" class="btn btn-sm copyButton"
                            style="color: #0F58EB; background-color: rgba(15, 88, 235, .2);">Copy</button></div>
                </div>
            </div>

            <!-- Using The Web Component -->
            <h3 id="using_the_web_component" style="margin-top: 20px; padding-top: 30px; color: var(--black);">
                Using the Web
                Component</h3>
            <p style="color: var(--black-70);">Termicons includes a Custom Element that makes using icons easy
                and efficient. To use it, add the
                <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">termicons.js</span>
                file
                to the page:</p>
            <div class="card" style="border: none; background-color: var(--black-5);">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center m-0"><span class="text-line me-2"
                            style="font-family: monospace" id="text3">
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">script src</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;https://unpkg.com/termicons@</span><span style="color: #3366CC;">{{ $version }}</span><span style="color: #3366CC;">/dist/termicons.js&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">script</span>&gt;</pre>
                        </span><button id="copyButton3" class="btn btn-sm copyButton"
                            style="color: #0F58EB; background-color: rgba(15, 88, 235, .2);">Copy</button></div>
                </div>
            </div>
            <p style="margin-top: 16px; color: var(--black-70);">To use an icon, add the <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">term-icons</span>
                element
                to the location where the icon should be displayed:</p>
            <div class="card" style="border: none; background-color: var(--black-5);">
                <div class="card-body">
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">term-icon name</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;rocket&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">term-icon</span>&gt;</pre>
                </div>
            </div>
            <p style="margin-top: 16px; color: var(--black-70);">To use solid icons or logos add attribute <span
                    class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">type</span>
                as
                solid or logo</p>
            <div class="card" style="border: none; background-color: var(--black-5);">
                <div class="card-body">
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">term-icon type</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;line&quot;</span><span style="color: #FA5C7C;">name</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;trash-can&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">term-icon</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">term-icon type</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;duotone&quot;</span><span style="color: #FA5C7C;">name</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;file-favourite-in-lc&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">term-icon</span>&gt;</pre>
                </div>
            </div>
            <p style="margin-top: 16px; color: var(--black-70);">The <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">term-icon</span>
                custom
                element supports the following attributes:</p>
            <div class="card" style="border: none; background-color: var(--black-5);">
                <div class="card-body">
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">term-icon</span></pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);"><span style="color: #FA5C7C;">type</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;line | solid | duotone&quot;</span></pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);"><span style="color: #FA5C7C;">type</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;adjust | alarm | etc..&quot;</span></pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);"><span style="color: #FA5C7C;">type</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;blue | red | etc..&quot;</span></pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);"><span style="color: #FA5C7C;">type</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;xs | sm | md | lg | cssSize&quot;</span></pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);"><span style="color: #FA5C7C;">type</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;90 | 180 | 270&quot;</span></pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);"><span style="color: #FA5C7C;">type</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;horizontal | vertical&quot;</span></pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);"><span style="color: #FA5C7C;">type</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;square | circle&quot;</span></pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);"><span style="color: #FA5C7C;">type</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;spin | tada | etc..&quot;</span></pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);"><span style="color: #FA5C7C;">type</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;left | right&quot;</span></pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&gt;&lt;/<span style="color: #FA5C7C;">term-icon</span>&gt;</pre>
                </div>
            </div>

            <!-- Using as a Font -->
            <h3 id="using_as_a_font" style="margin-top: 20px; padding-top: 30px; color: var(--black);">Using as
                a Font</h3>
            <h5 id="import_the_css" style="padding-top: 30px; font-weight: normal; color: var(--black);">Import
                the CSS</h5>
            <p style="color: var(--black-70);">Copy-paste the stylesheet <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">link</span>
                into
                your <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">head</span>
                to
                load our CSS</p>
            <div class="card" style="border: none; background-color: var(--black-5);">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center m-0"><span class="text-line me-2"
                            style="font-family: monospace" id="text4">
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">link href</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;https://unpkg.com/termicons@</span><span style="color: #3366CC;">{{ $version }}</span><span style="color: #3366CC;">/css/termicons.min.css&quot;</span><span style="color: #FA5C7C;">rel</span><span>=</span>&quot;<span style="color: #0F58EB;">stylesheet</span>&quot;&gt;</pre>
                        </span><button id="copyButton4" class="btn btn-sm copyButton"
                            style="color: #0F58EB; background-color: rgba(15, 88, 235, .2);">Copy</button></div>
                </div>
            </div>
            <p style="margin-top: 16px; color: var(--black-70);">This will load termicons font into your webpage
            </p>
            <h5 id="html" style="padding-top: 30px; font-weight: normal; color: var(--black);">HTML</h5>
            <p style=" color: var(--black-70);">To use an icon on your page, add a prefix <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti-</span>
                for
                line style icons,
                <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">tis-</span>
                for solid style icons, &
                <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">til-</span>
                for
                logos followed by the icon name and seperate class with the <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti</span>
                :
            </p>
            <div class="card" style="border: none; background-color: var(--black-5);">
                <div class="card-body">
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti ti-trash-can&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti tis-user&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti til-facebook-square&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                </div>
            </div>
            <p style="margin-top: 16px; color: var(--black-70);">You can see the names of all the icons <a
                    href="cheatsheet.html" style="text-decoration: none;">here</a></p>

            <!-- Starter Templates -->
            <h3 id="starter_templates" style="margin-top: 20px; padding-top: 30px; color: var(--black);">Starter
                Templates</h3>
            <p style="font-weight: normal; color: var(--black-70);">Create an HTML document and copy-paste the
                starter template</p>
            <div class="card" style="border: none; background-color: var(--black-5);">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start m-0"><span class="text-line me-2"
                            style="font-family: monospace" id="text5">
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0;"><span style="color: #339933;">&lt;!document html&gt;</span></pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">html lang</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;en&quot;</span>&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">head</span>&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">meta charset</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;utf-8&quot;</span>&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">meta name</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;viewport&quot;</span><span style="color: #FA5C7C;">content</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;width=device-width, initial-scale=1, shrink-to-fit=no&quot;</span>&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; font-style: italic; color: #9b9b9b;">&lt;-- Termicons CSS --&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">link href</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;https://unpkg.com/termicons@</span><span style="color: #3366CC;">{{ $version }}</span><span style="color: #3366CC;">/css/termicons.min.css&quot;</span><span style="color: #FA5C7C;">rel</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;stylesheet&quot;</span>&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">title</span>&gt;Hello, Termicons!</span>&lt;/<span style="color: #FA5C7C;">title</span>&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;/<span style="color: #FA5C7C;">head</span>&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">body</span>&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">h1</span>&gt;Hello, Termicons!</span>&lt;/<span style="color: #FA5C7C;">h1</span>&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti ti-hot&quot;</span>&gt;</span>&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti tis-hot&quot;</span>&gt;</span>&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti til-facebook-square&quot;</span>&gt;</span>&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;/<span style="color: #FA5C7C;">body</span>&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;/<span style="color: #FA5C7C;">html</span>&gt;</pre>
                        </span><button id="copyButton5" class="btn btn-sm copyButton"
                            style="color: #0F58EB; background-color: rgba(15, 88, 235, .2);">Copy</button></div>
                </div>
            </div>
            <p style="margin-top: 16px; font-weight: normal; color: var(--black-70);">A template usage with the
                web component instead of
                icon font template</p>
            <div class="card" style="border: none; background-color: var(--black-5);">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start m-0"><span class="text-line me-2"
                            style="font-family: monospace" id="text6">
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0;"><span style="color: #339933;">&lt;!document html&gt;</span></pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">html lang</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;en&quot;</span>&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">head</span>&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">meta charset</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;utf-8&quot;</span>&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">meta name</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;viewport&quot;</span><span style="color: #FA5C7C;">content</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;width=device-width, initial-scale=1, shrink-to-fit=no&quot;</span>&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; font-style: italic; color: #9b9b9b;">&lt;-- Termicons JS --&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">link href</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;https://unpkg.com/termicons@</span><span style="color: #3366CC;">{{ $version }}</span><span style="color: #3366CC;">/dist/termicons.js&quot;</span><span style="color: #FA5C7C;">rel</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;stylesheet&quot;</span>&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">title</span>&gt;Hello, Termicons!</span>&lt;/<span style="color: #FA5C7C;">title</span>&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;/<span style="color: #FA5C7C;">head</span>&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">body</span>&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">h1</span>&gt;Hello, Termicons!</span>&lt;/<span style="color: #FA5C7C;">h1</span>&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">term-icon name</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;hot&quot;</span>&gt;</span>&lt;/<span style="color: #FA5C7C;">term-icon</span>&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">term-icon type</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;solid&quot;</span><span style="color: #FA5C7C;">name</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;hot&quot;</span>&gt;</span>&lt;/<span style="color: #FA5C7C;">term-icon</span>&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">term-icon type</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;logo&quot;</span><span style="color: #FA5C7C;">name</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;facebook-square&quot;</span>&gt;</span>&lt;/<span style="color: #FA5C7C;">term-icon</span>&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;/<span style="color: #FA5C7C;">body</span>&gt;</pre>
                            <pre class="javascript"
                                style="font-family:monospace; margin: 0; color: var(--black);">&lt;/<span style="color: #FA5C7C;">html</span>&gt;</pre>
                        </span><button id="copyButton6" class="btn btn-sm copyButton"
                            style="color: #0F58EB; background-color: rgba(15, 88, 235, .2);">Copy</button></div>
                </div>
            </div>

            <!-- Styling -->
            <h3 id="styling" style="margin-top: 20px; padding-top: 30px; color: var(--black);">Styling</h3>

            <!-- Sizing -->
            <h5 id="sizing" style="padding-top: 30px; font-weight: normal; color: var(--black);">Sizing</h5>
            <p style=" color: var(--black-70);">You can change size of the icon with <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">font-size</span>
                CSS.
                it will inherit the <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">font-size</span>
                from
                the parent by default. There are fixed sizes you can add to the icon by adding classes <span
                    class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti-xs</span>
                ,
                <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti-sm</span>
                ,
                <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti-md</span>
                and
                <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti-lg</span>
            </p>
            <div class="card" style="border: none; background-color: var(--black-5);">
                <div class="card-body" style=" color: var(--black-70);">
                    <i class="ti ti-heart ti-xs" style="padding-right: 5px;"></i>
                    <i class="ti ti-heart ti-sm" style="padding-right: 5px;"></i>
                    <i class="ti ti-heart ti-md" style="padding-right: 5px;"></i>
                    <i class="ti ti-heart ti-lg" style="padding-right: 5px;"></i>
                </div>
            </div>
            <div class="card" style="margin-top: 16px; border: none; background-color: var(--black-5);">
                <div class="card-body">
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti ti-heart ti-xs&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti ti-heart ti-sm&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti ti-heart ti-md&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti ti-heart ti-lg&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; font-style: italic; color: #9b9b9b;">&lt;-- Termicons web component --&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">term-icon name</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;heart&quot;</span><span style="color: #FA5C7C;">size</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;lg</span>&gt;&lt;/<span style="color: #FA5C7C;">term-icon</span>&gt;</pre>
                </div>
            </div>

            <!-- Rotation & Flipping -->
            <h5 id="rotation_&_flipping" style="padding-top: 30px; font-weight: normal; color: var(--black);">
                Rotation & Flipping
            </h5>
            <p style=" color: var(--black-70);">Rotate the icons using classes <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti-rotate-90</span>
                ,
                <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti-rotate-180</span>
                and
                <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti-rotate-270</span>
                or
                Flip the icons using <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">bx-flip-horizontal</span>
                and
                <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">bx-flip-vertical</span>
            </p>
            <div class="card" style="border: none; background-color: var(--black-5);">
                <div class="card-body" style=" color: var(--black-70);">
                    <i class="ti ti-heart ti-md ti-rotate-90" style="padding-right: 5px;"></i>
                    <i class="ti ti-heart ti-md ti-rotate-180" style="padding-right: 5px;"></i>
                    <i class="ti ti-heart ti-md ti-rotate-270" style="padding-right: 5px;"></i>
                    <i class="ti ti-heart-off ti-md ti-flip-horizontal" style="padding-right: 5px;"></i>
                    <i class="ti ti-heart-off ti-md ti-flip-vertical" style="padding-right: 5px;"></i>
                </div>
            </div>
            <div class="card" style="margin-top: 16px; border: none; background-color: var(--black-5);">
                <div class="card-body">
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti ti-heart ti-rotate-90&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti ti-heart ti-rotate-180&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti ti-heart ti-rotate-270&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti ti-heart ti-flip-horizontal&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti ti-heart ti-flip-vertical&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; font-style: italic; color: #9b9b9b;">&lt;-- Termicons web component --&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">term-icon name</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;heart&quot;</span><span style="color: #FA5C7C;">rotate</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;90</span>&gt;&lt;/<span style="color: #FA5C7C;">term-icon</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">term-icon name</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;heart&quot;</span><span style="color: #FA5C7C;">flip</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;horizontal</span>&gt;&lt;/<span style="color: #FA5C7C;">term-icon</span>&gt;</pre>
                </div>
            </div>

            <!-- List Icons -->
            <h5 id="list_icons" style="padding-top: 30px; font-weight: normal; color: var(--black);">List Icons
            </h5>
            <p style=" color: var(--black-70);">Use icons as bullets for the list by adding class <span
                    class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti-ul</span>
                to
                the unordered list ement and include the icons inside the <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">li</span>
            </p>
            <div class="card" style="border:none; background-color: var(--black-5);">
                <div class="card-body">
                    <ul class="ti-ul mb-0" style=" color: var(--black-70);">
                        <li><i class="ti ti-plus-cr-fr"></i>List item 1</li>
                        <li><i class="ti ti-minus-sq-fr"></i>List item 2</li>
                        <li><i class="ti ti-chevron-right-cr-fr"></i>List item 3</li>
                    </ul>
                </div>
            </div>
            <div class="card" style="margin-top: 16px; border: none; background-color: var(--black-5);">
                <div class="card-body">
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">ul class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti-ul&quot;</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">li</span>&gt;&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti ti-plus-cr-fr&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;<span>List item 1</span>&lt;/<span style="color: #FA5C7C;">li</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">li</span>&gt;&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti ti-minus-sq-fr&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;<span>List item 2</span>&lt;/<span style="color: #FA5C7C;">li</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">li</span>&gt;&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti ti-chevron-right-cr-fr&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;<span>List item 3</span>&lt;/<span style="color: #FA5C7C;">li</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;/<span style="color: #FA5C7C;">ul</span>&gt;</pre>
                </div>
            </div>

            <!-- Fixed Width -->
            <h5 id="fixed_width" style="padding-top: 30px; font-weight: normal; color: var(--black);">Fixed
                Width</h5>
            <p style=" color: var(--black-70);">You can use fixed width class <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti-fw</span>
                to
                get a fixed width icon next to the text <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">li</span>
            </p>
            <div class="card" style="border: none; background-color: var(--black-5);">
                <div class="card-body" style="color: var(--black-70);">
                    <i class="ti-fw ti til-facebook"
                        style="padding-right: 5px; color: var(--black-70);"></i>Facebook<br>
                    <i class="ti-fw ti til-slack" style="padding-right: 5px; color: var(--black-70);"></i>Slack<br>
                    <i class="ti-fw ti til-instagram" style="padding-right: 5px; color: var(--black-70);"></i>Instagram
                </div>
            </div>
            <div class="card" style="margin-top: 16px; border: none; background-color: var(--black-5);">
                <div class="card-body">
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti-fw ti ti-facebook-square&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;Facebook</pre>
                </div>
            </div>

            <!-- Pulled Icons -->
            <h5 id="pulled_icons" style="padding-top: 30px; font-weight: normal; color: var(--black);">Pulled
                Icons</h5>
            <p style=" color: var(--black-70);">Use class <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti-pull-left</span>
                or
                <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti-pull-right</span>
                on
                icons for easy pull quotes <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">li</span>
            </p>
            <div class="card" style="border: none; background-color: var(--black-5);">
                <div class="card-body" style=" color: var(--black-70);">
                    <i class="ti-pull-left ti tis-bell ti-lg"></i>Lorem ipsum dolor sit
                    amet
                    consectetur adipisicing elit. Commodi omnis deserunt, corrupti dolorem vero ratione
                    earum qui sapiente quam perferendis libero voluptate ex minima odio enim maiores,
                    saepe
                    fuga! Obcaecati enim non, cupiditate exercitationem minima eligendi fuga
                    reprehenderit
                    sequi veniam vero quas dicta perspiciatis deleniti ea! Odio corporis recusandae nam.
                </div>
            </div>
            <div class="card" style="margin-top: 16px; border: none; background-color: var(--black-5);">
                <div class="card-body">
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i className</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti-pull-left ti tis-bell ti-lg&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <p style="font-family: monospace; margin: 0; font-size: 14px; color: var(--black-70);">Lorem
                        ipsum dolor sit
                        amet
                        consectetur adipisicing elit. Commodi omnis deserunt, corrupti dolorem vero ratione
                        earum qui sapiente quam perferendis libero voluptate ex minima odio enim maiores,
                        saepe
                        fuga! Obcaecati enim non, cupiditate exercitationem minima eligendi fuga
                        reprehenderit
                        sequi veniam vero quas dicta perspiciatis deleniti ea! Odio corporis recusandae nam.
                    </p>
                    <br>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">ti-icon name</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;quote&quot;</span><span style="color: #FA5C7C;">pull</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;left&quot;</span><span style="color: #FA5C7C;">size</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;lg&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">ti-icon</span>&gt;</pre>
                    <p style="font-family: monospace; margin: 0; font-size: 14px; color: var(--black-70);">Lorem
                        ipsum dolor sit
                        amet
                        consectetur adipisicing elit. Commodi omnis deserunt, corrupti dolorem vero ratione
                        earum qui sapiente quam perferendis libero voluptate ex minima odio enim maiores,
                        saepe
                        fuga! Obcaecati enim non, cupiditate exercitationem minima eligendi fuga
                        reprehenderit
                        sequi veniam vero quas dicta perspiciatis deleniti ea! Odio corporis recusandae nam.
                    </p>
                </div>
            </div>

            <!-- Border -->
            <h5 id="border" style="padding-top: 30px; font-weight: normal; color: var(--black);">Border</h5>
            <p style=" color: var(--black-70);">Add border to your icons with classes <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti-border</span>
                ,
                <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti-border-circle</span>
            </p>
            <div class="card" style="border: none; background-color: var(--black-5);">
                <div class="card-body p-3 d-flex align-items-center">
                    <i class="ti tis-heart ti-border ti-md" style="margin-right: 10px; color: var(--black-70);"></i>
                    <i class="ti tis-heart ti-border-circle ti-md" style=" color: var(--black-70);"></i>
                </div>
            </div>
            <div class="card" style="margin-top: 16px; border: none; background-color: var(--black-5);">
                <div class="card-body">
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti tis-heart bx-border&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti tis-heart bx-border-circle&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0;"><span style="color: #9b9b9b; font-style: italic;">&lt;!-- Termicons web component --&gt;</span></pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">term-icon name</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;trash-can&quot;</span><span style="color: #FA5C7C;">border</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;circle&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">term-icon</span>&gt;</pre>
                </div>
            </div>

            <!-- Animation -->
            <h5 id="animation" style="padding-top: 30px; font-weight: normal; color: var(--black);">Animation
            </h5>
            <p style=" color: var(--black-70);">Animate your icons with built CSS animations using classes <span
                    class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti-spin</span>
                ,
                <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti-tada</span>
                ,
                <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti-flashing</span>
                ,
                <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti-burst</span>
                ,
                <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti-fade-left</span>
                and
                <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti-fade-right</span>
                You
                can change the speed of the animation with the <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">animation-duration</span>
                property
                & to change the number of times the animation takes place with the property <span
                    class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">animation-iteration-count</span>
                in
                CSS </p>
            <div class="card" style="border: none; background-color: var(--black-5);">
                <div class="card-body">
                    <i class="ti tis-settings ti-md ti-spin" style="padding: 0 8px; color: var(--black);"></i>
                    <i class="ti tis-bell ti-md ti-tada" style="padding: 0 8px; color: var(--black);"></i>
                    <i class="ti tis-warning ti-md ti-flashing" style="padding: 0 8px; color: var(--black);"></i>
                    <i class="ti tis-eye ti-md ti-burst" style="padding: 0 8px; color: var(--black);"></i>
                    <i class="ti tis-chevron-left-cr-fr ti-md ti-fade-left"
                        style="padding: 0 8px; color: var(--black);"></i>
                    <i class="ti tis-chevron-right-cr-fr ti-md ti-fade-right"
                        style="padding: 0 8px; color: var(--black);"></i>
                    <i class="ti tis-chevron-down-cr-fr ti-md ti-fade-up"
                        style="padding: 0 8px; color: var(--black); position: relative;"></i>
                    <i class="ti tis-chevron-up-cr-fr ti-md ti-fade-down"
                        style="padding: 0 8px; color: var(--black);"></i>
                </div>
            </div>
            <div class="card" style="margin-top: 16px; border: none; background-color: var(--black-5);">
                <div class="card-body">
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti tis-settings ti-spin&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti tis-bell ti-tada&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti tis-warning ti-flashing&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti tis-eye ti-burst&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti tis-chevron-left-cr-fr ti-fade-left&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti tis-chevron-right-cr-fr ti-fade-right&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti tis-chevron-up-cr-fr ti-fade-up&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti tis-chevron-down-cr-fr ti-fade-down&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);"><span style="color: #9b9b9b; font-style: italic;">&lt;!-- Termicons web component --&gt;</span></pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">term-icon name</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;bell&quot;</span><span style="color: #FA5C7C;">animation</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;tada&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">term-icon</span>&gt;</pre>
                </div>
            </div>

            <!-- Animation on Hover -->
            <h5 id="animation_on_hover" style="padding-top: 30px; font-weight: normal; color: var(--black);">
                Animation on Hover
            </h5>
            <p style="color: var(--black-70);">Animate your icons on hover with pre built CSS animations using
                classes <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti-spin-hover</span>
                ,
                <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti-tada-hover</span>
                ,
                <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti-flashing-hover</span>
                ,
                <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti-burst-hover</span>
                ,
                <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti-fade-left-hover</span>
                and
                <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">ti-fade-right-hover</span>
                You
                can change the speed of the animation with the <span class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">animation-duration</span>
                property
                & to change the number of times the animation takes place with the property <span
                    class="badge bg-custom"
                    style="color: #0F58EB; background-color: rgba(15, 88, 235, .2); font-weight: normal;">animation-iteration-count</span>
                in
                CSS </p>
            <div class="card" style="border: none; background-color: var(--black-5);">
                <div class="card-body">
                    <i class="ti tis-settings ti-md ti-spin-hover" style="padding: 0 8px; color: var(--black);"></i>
                    <i class="ti tis-bell ti-md ti-tada-hover" style="padding: 0 8px; color: var(--black);"></i>
                    <i class="ti tis-warning ti-md ti-flashing-hover" style="padding: 0 8px; color: var(--black);"></i>
                    <i class="ti tis-eye ti-md ti-burst-hover" style="padding: 0 8px; color: var(--black);"></i>
                    <i class="ti tis-chevron-left-cr-fr ti-md ti-fade-left-hover"
                        style="padding: 0 8px; color: var(--black);"></i>
                    <i class="ti tis-chevron-right-cr-fr ti-md ti-fade-right-hover"
                        style="padding: 0 8px; color: var(--black);"></i>
                    <i class="ti tis-chevron-down-cr-fr ti-md ti-fade-up-hover"
                        style="padding: 0 8px; color: var(--black);"></i>
                    <i class="ti tis-chevron-up-cr-fr ti-md ti-fade-down-hover"
                        style="padding: 0 8px; color: var(--black);"></i>
                </div>
            </div>
            <div class="card" style="margin-top: 16px; border: none; background-color: var(--black-5);">
                <div class="card-body">
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti tis-settings ti-spin-hover&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti tis-bell ti-tada-hover&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti tis-warning ti-flashing-hover&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti tis-eye ti-burst-hover&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti tis-chevron-left-cr-fr ti-fade-left-hover&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti tis-chevron-right-cr-fr ti-fade-right-hover&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti tis-chevron-up-cr-fr ti-fade-up-hover&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">i class</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;ti tis-chevron-down-cr-fr ti-fade-down-hover&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">i</span>&gt;</pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);"><span style="color: #9b9b9b; font-style: italic;">&lt;!-- Termicons web component --&gt;</span></pre>
                    <pre class="javascript"
                        style="font-family:monospace; margin: 0; color: var(--black);">&lt;<span style="color: #FA5C7C;">term-icon name</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;bell&quot;</span><span style="color: #FA5C7C;">animation</span><span style="color: #339933;">=</span><span style="color: #3366CC;">&quot;tada-hover&quot;</span>&gt;&lt;/<span style="color: #FA5C7C;">term-icon</span>&gt;</pre>
                </div>
            </div>

            <!-- Contribution -->
            <h3 id="contribution" style="margin-top: 50px; color: var(--black);">Contribution</h3>
            <p style="color: var(--black-70);">Want to report a bug? Have some suggestions or ideas? Have an
                icon or a feature request?
                Create a
                new issue on Github with the appropriate label <a href="" style="text-decoration: none;">here</a></p>

            <!-- License -->
            <h3 id="license" style="margin-top: 50px; color: var(--black);">License</h3>
            <p style="color: var(--black-70);">Termicons is free, open source, and GPL friendly. You can use it
                for commercial projects,
                open source projects, or anywhere you want.</p>
            <p style="font-weight: bold; margin-bottom: 0; color: var(--black-70);">Icons : CC BY 4.0 License
            </p>
            <p style="color: var(--black-70);">In the Termicons Free download, the CC BY 4.0 license applies to
                all icons packaged as SVG
                and JS
                file types.</p>
            <p style="font-weight: bold; margin-bottom: 0; color: var(--black-70);">Attribution</p>
            <p style="color: var(--black-70);">Attribution is required by CC BY licenses. Downloaded Termicons
                Free files already contain
                embedded comments with sufficient attribution, you aren't required to do anything more.
                We've kept attribution comments short and precise, so we ask that you do not actively work
                to
                remove them from files, especially code. They're a great way for people to learn about
                Termicons.</p>
        </div>
    </div>
</div>
@endsection
