@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="col-lg-4 card_height_100 mb_20">
        <div class="white_card">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">Total Sales Unit</h3>
                    </div>
                    <div class="header_more_tool">
                        <div class="dropdown">
                            <span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown">
                                <i class="ti-more-alt"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                <a class="dropdown-item" href="#"> <i class="fa fa-download"></i>
                                    Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="white_card_body p-0">
                <div class="card_container">
                    <div id="platform_type_dates_donut" style="height:300px"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
