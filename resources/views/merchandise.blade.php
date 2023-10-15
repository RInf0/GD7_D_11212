@extends('dashboard')
@section('content')
<style>
    .table-container {
        background-color: #261420;
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        padding-top: 20px;
        padding-left: 20px;
        padding-right: 20px;
        left: 0;
        z-index: -1;
        overflow-x: hidden;
        border: 1px solid black;
    }
    .table-container::-webkit-scrollbar {
        width: 0%;
    }
    .table-container .content-index {
        margin-top: 20px;
        margin-left: 20px;
    }
    p{
        font-family: goldenbook, serif;
        font-style: normal;
        color: #FFFFFF;
    }
    h1{
        color: #FFFFFF;
    }
    .horisontalScroll{
        overflow-x: auto;
        display: flex;  
        margin-top: 64px;
    }
    .outer-card{
        margin: 16px;
    }
    .card{
        background: #23141E;
        min-width: 240px;
        max-width: 240px;
        box-shadow: rgba(0, 0, 0.2, 0,5) 2px 2px 3px;
    }
</style>

<div class="container-details">
    <div class="table-container">
        <div class="content-index">
            <div class="container">
                <h1 class="text-center">2022 IU CONCERT (The Golden Hour: Under The Orange Sun)</h1>
                <p class="text-center my-4">Our Official Merchandise</p>
                <div class="horisontalScroll">
                    @foreach($merchandise as $item)
                        <div class="outer-card">
                            <div class="card custom-card">
                                <img src="{{ asset ('images/lightstick.jpeg') }}" class="img-fluid">
                            </div>
                            <p style="margin-bottom: 16px">{{ $item->name }}</p>
                            <p style="margin-bottom: 16px">IDR {{ number_format($item->price, 2) }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection