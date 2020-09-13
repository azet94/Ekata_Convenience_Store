@extends('layouts.website.header')

@section('style')
    <link href="{{ asset('css/webpages.css')}} " rel="stylesheet"/>
@endsection

@section('content')
    <div class="container-fluid pb-4 border-bottom">
        <div class="row py-5 d-flex justify-content-center text-center contact-us">
            <div class="container container-sm">
                <h1 class="">Our Services</h1>
                <p class="heading-description-main mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
                    architecto autem
                    deserunt, dolor doloremque dolores, eveniet facilis fuga ipsam natus nostrum reiciendis saepe sequi
                    voluptas voluptatibus! Corporis eligendi quibusdam rem?</p>
            </div>
        </div>
        <div class="container my-5">
            <main class="row">
                <div class="col-md-12">
                    <h1 class="heading-title">Services We Are Focused On</h1>
                    <p class="heading-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
                        architecto autem
                        deserunt,</p>
                </div>
            </main>
            <div class="row mt-2">
                @foreach($services as $service)
                <div class="col-md-4 col-sm-6 mt-3">
                    <div class="service-card-content">
                        <header class="service-card-header">
                            <h1 class="service-card-title mb-0">{{$service->title}}</h1>
                            <time class="service-card-time">{{$service->date}}</time>
                        </header>
                        {{--<div class="service-card-body">
                            <p id="copy-service-body"></p>
                        </div>
                        <div class="service-card-body d-none">
                            <p id="service-body">{{ $service->details }} </p>
                        </div>--}}
                        <div class="service-card-body">
                            <p>{!! $service->details !!} </p>
                        </div>

                        <footer class="service-card-footer">
                            <a class="text-white" href="{{route('servicedetails',$service->id)}}" >Read more﻿
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </footer>

                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        function removeTags(str) {
            if (str === null || str === "") return false;
            else str = str.toString();
            return str.replace(/(<([^>]+)>)/gi, "");
        }
        const write2 = document.getElementById("service-body").innerText;
        const removetags = removeTags(write2);
        const copies = document.getElementById("copy-service-body");
        copies.innerText = removetags;
    </script>
@endsection
