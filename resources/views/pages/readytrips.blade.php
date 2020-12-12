@extends('layouts.app2')

@section('styles')
    <style>
        @import url("https://fonts.googleapis.com/css?family=Roboto+Mono");
        * {
        box-sizing: border-box;
        font-weight: normal;
        }

        body {
        color: #555;
        background: #222;
        text-align: center;
        font-family: 'Roboto Mono';
        padding: 1em;
        }

        h1 {
        font-size: 2.2em;
        }

        .flip {
        position: relative;
        }
        .flip > .front,
        .flip > .back {
        display: block;
        transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
        transition-duration: 1.5s;
        transition-property: transform, opacity;
        }
        .flip > .front {
        transform: rotateY(0deg);
        }
        .flip > .back {
        position: absolute;
        opacity: 0;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        transform: rotateY(-180deg);
        }
        .flip:hover > .front {
        transform: rotateY(180deg);
        }
        .flip:hover > .back {
        opacity: 1;
        transform: rotateY(0deg);
        }
        .flip.flip-vertical > .back {
        transform: rotateX(-180deg);
        }
        .flip.flip-vertical:hover > .front {
        transform: rotateX(180deg);
        }
        .flip.flip-vertical:hover > .back {
        transform: rotateX(0deg);
        }

        .flip {
        position: relative;
        display: inline-block;
        margin-right: 2px;
        margin-bottom: 1em;
        width: 700px;
        }
        .flip > .front,
        .flip > .back {
        display: block;
        color: white;
        width: inherit;
        background-size: cover !important;
        background-position: center !important;
        height: 400px;
        padding: 1em 2em;
        background: #313131;
        border-radius: 10px;
        }
        .flip > .front p,
        .flip > .back p {
        font-size: 0.9125rem;
        line-height: 160%;
        color: #999;
        }

        .text-shadow {
        text-shadow: 1px 1px rgba(0, 0, 0, 0.04), 2px 2px rgba(0, 0, 0, 0.04), 3px 3px rgba(0, 0, 0, 0.04), 4px 4px rgba(0, 0, 0, 0.04), 0.125rem 0.125rem rgba(0, 0, 0, 0.04), 6px 6px rgba(0, 0, 0, 0.04), 7px 7px rgba(0, 0, 0, 0.04), 8px 8px rgba(0, 0, 0, 0.04), 9px 9px rgba(0, 0, 0, 0.04), 0.3125rem 0.3125rem rgba(0, 0, 0, 0.04), 11px 11px rgba(0, 0, 0, 0.04), 12px 12px rgba(0, 0, 0, 0.04), 13px 13px rgba(0, 0, 0, 0.04), 14px 14px rgba(0, 0, 0, 0.04), 0.625rem 0.625rem rgba(0, 0, 0, 0.04), 16px 16px rgba(0, 0, 0, 0.04), 17px 17px rgba(0, 0, 0, 0.04), 18px 18px rgba(0, 0, 0, 0.04), 19px 19px rgba(0, 0, 0, 0.04), 1.25rem 1.25rem rgba(0, 0, 0, 0.04);
        }

    </style>
@endsection

@section('content')
    <!-- horizontal -->
    <br><br> <br><br>
    <div>
        <div class="flip">
            <div class="front" style="background-image: url(https://www.treebo.com/blog/wp-content/uploads/2018/07/The-All-You-Need-To-Know-Mumbai-Darshan-Guide.jpg)">
            </div>
            <div class="back">
            <br><br><br><br><br><br>
            <h2>Mumbai Darshan</h2>
            <br><br>
            <button type="button" class="btn btn-dark" style="background-color: black;
            color: white"><a href="/trip1" style="color: white; text-decoration:none">Read More</a></button>
            </div>
        </div>
    </div>
    <div>
        <div class="flip">
        <div class="front" style="background-image: url(https://www.billdesk.com/hdfc/iskconmumbai/images/pic.jpg)">
        </div>
        <div class="back">
        <br><br><br><br><br><br>
        <h2>Holy Places</h2>
        <br><br>
        <button type="button" class="btn btn-dark" style="background-color: black;
        color: white"><a href="/trip2" style="color: white; text-decoration:none">Read More</a></button>
        </div>
    </div>
    </div>
    <div>
        <div class="flip">
        <div class="front" style="background-image: url(https://storage.googleapis.com/ehimages/2017/7/2/img_a00c095df21836d1a8eab80fa7795c4c_1499037012597_original.jpg)">
        </div>
        <div class="back">
        <br><br><br><br><br><br>
        <h2>Scenic Beauty</h2>
        <br><br>
        <button type="button" class="btn btn-dark" style="background-color: black;
        color: white"><a href="/trip3" style="color: white; text-decoration:none">Read More</a></button>
        </div>
    </div>
    </div>
    </div>
    <div>
        <div class="flip">
        <div class="front" style="background-image: url(https://www.retail4growth.com/public/uploads/editor/2020-08-04/1596517342.jpeg)">
        </div>
        <div class="back">
        <br><br><br><br><br><br>
        <h2>Shopping Spree</h2>
        <br><br>
        <button type="button" class="btn btn-dark" style="background-color: black;
        color: white"><a href="/trip4" style="color: white; text-decoration:none">Read More</a></button>
        </div>
    </div>
    </div>
    <br>
    <br>
@endsection