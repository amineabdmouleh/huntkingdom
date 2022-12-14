@extends('layouts.switcher-app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header">
                            <div>
                                <h2 class="main-content-title tx-24 mg-b-5">Switcher Style 2</h2>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:;">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Switcher Style 2</li>
                                </ol>
                            </div>
                            <div class="d-flex">
                                <div class="justify-content-center">
                                    <button type="button" class="btn btn-white btn-icon-text my-2 me-2">
                                        <i class="fe fe-settings"></i>
                                        <span>Settings</span>
                                    </button>
                                    <button type="button" class="btn btn-primary my-2 btn-icon-text">
                                        <i class="fe fe-download-cloud bg-white-transparent text-white"></i>
                                        <span>Reports</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE HEADER -->

                        <!-- ROW -->
                        <div class="container">
                            <div class="row row-sm">
                                <div class="col-lg-6 m-auto">
                                    <div class="card custom-card sidebar-right1 switcher-2">
                                        <div class="">
                                        <div class="swichermainleft text-center">
                                            <h4 class="py-2 border-bottom mt-1">LTR and RTL Versions</h4>
                                            <div class="skin-body">
                                                <div class="switch_section">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">LTR</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch7" id="myonoffswitch19" class="onoffswitch2-checkbox" checked>
                                                            <label for="myonoffswitch19" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">RTL</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch7" id="myonoffswitch20" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch20" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swichermainleft text-center">
                                            <h4  class="py-2 bd-y">Navigation Style</h4>
                                            <div class="skin-body">
                                                <div class="switch_section">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Vertical Menu</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch01" id="myonoffswitch01" class="onoffswitch2-checkbox" checked>
                                                            <label for="myonoffswitch01" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Horizontal Click Menu</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch01" id="myonoffswitch02" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch02" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Horizontal Hover Menu</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch01" id="myonoffswitch03" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch03" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swichermainleft text-center">
                                            <h4  class="py-2 bd-y">Light Theme Style</h4>
                                            <div class="skin-body">
                                                <div class="switch_section">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Light Theme</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
                                                            <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Dark Theme</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitch2" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swichermainleft text-center">
                                            <h4  class="py-2 bd-y">Theme Primary Color</h4>
                                            <div class="skin-body">
                                                <div class="switch_section">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Primary Color</span>
                                                        <div class="">
                                                            <input class=" input-color-picker color-primary-light"
                                                                value="#4454c3" id="colorID" (change)="changePrimaryColor()" type="color"
                                                                data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" name="lightPrimary">
                                                        </div>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Background Color</span>
                                                        <div class="">
                                                            <input class="w-30p h-30 input-bg-picker background-primary-light"
                                                                value="#1c203c" id="bgID" (change)="changeBackgroundColor()"
                                                                type="color" data-id3="body" data-id4="theme" name="BackgroundPrimary">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swichermainleft text-center">
                                            <h4  class="py-2 bd-y">Menu Styles</h4>
                                            <div class="skin-body">
                                                <div class="switch_section">
                                                    <div class="switch-toggle lightMenu d-flex">
                                                        <span class="me-auto">Light Menu</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch3" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch3" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle colorMenu d-flex mt-2">
                                                        <span class="me-auto">Color Menu</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch4" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch4" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle darkMenu d-flex mt-2">
                                                        <span class="me-auto">Dark Menu</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch5" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch5" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swichermainleft text-center">
                                            <h4  class="py-2 bd-y">Header Styles</h4>
                                            <div class="skin-body">
                                                <div class="switch_section">
                                                    <div class="switch-toggle lightHeader d-flex">
                                                        <span class="me-auto">Light Header</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch6" class="onoffswitch2-checkbox" checked>
                                                            <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle  colorHeader d-flex mt-2">
                                                        <span class="me-auto">Color Header</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch7" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle darkHeader d-flex mt-2">
                                                        <span class="me-auto">Dark Header</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch8" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch8" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swichermainleft text-center layout-width-style">
                                            <h4  class="py-2 bd-y">Layout Width Styles</h4>
                                            <div class="skin-body">
                                                <div class="switch_section">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Full Width</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch4" id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
                                                            <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Boxed</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch4" id="myonoffswitch10" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swichermainleft text-center">
                                            <h4  class="py-2 bd-y">Layout Positions</h4>
                                            <div class="skin-body">
                                                <div class="switch_section">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Fixed</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch5" id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
                                                            <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Scrollable</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch5" id="myonoffswitch12" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swichermainleft text-center vertical-switcher">
                                            <h4  class="py-2 bd-y">Sidemenu layout Styles</h4>
                                            <div class="skin-body">
                                                <div class="switch_section">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Default Menu</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>
                                                            <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Icon with Text</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch14" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch14" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Icon Overlay</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch15" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch15" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Closed Sidemenu</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch16" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch16" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Hover Submenu</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch17" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch17" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Hover Submenu Style 1</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch18" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch18" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swichermainleft text-center">
										<h4  class="py-2 bd-y">Reset All Styles</h4>
										<div class="skin-body">
											<div class="switch_section my-4">
												<button id="resetAll" class="btn btn-danger btn-block" type="button">Reset All</button>
											</div>
										</div>
									</div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END ROW -->

                        
@endsection

@section('scripts')

@endsection
