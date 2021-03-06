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
        width: 400px;
        }
        .flip > .front,
        .flip > .back {
        display: block;
        color: white;
        width: inherit;
        background-size: cover !important;
        background-position: center !important;
        height: 220px;
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
    <div class="flip">
        <div class="front" style="background-image: url(https://2.bp.blogspot.com/-tI1EbtjFqr4/U_CQaUDjwmI/AAAAAAAAHNw/mE5S1qVCkwQ/s1600/sgnp-forest-road-1.jpg)">
        </div>
        <div class="back">
        <h2>Sanjay Gandhi National Park</h2>
        <br><br>
        <button type="button" class="btn btn-dark" style="background-color: black;
        color: white"><a href="/place/3" style="color: white; text-decoration:none">Read More</a></button>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(https://www.makemytrip.com/travel-guide/media/dg_image/mumbai/Gateway-of-India_Mumbai.jpg)">
        </div>
        <div class="back">
        <h2>Gateway Of India</h2>
        <br><br>
        <button type="button" class="btn btn-dark" style="background-color: black;
        color: white"><a href="/place/1" style="color: white; text-decoration:none">Read More</a></button>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(https://cdn.dnaindia.com/sites/default/files/styles/full/public/2018/02/23/654525-566369-elephanta-caves-041717.jpg)">
        </div>
        <div class="back">
        <h2>Elephanta Caves</h2>
        <br><br>
        <button type="button" class="btn btn-dark" style="background-color: black;
        color: white"><a href="/place/2" style="color: white; text-decoration:none">Read More</a></button>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(https://www.gosahin.com/go/p/d/1522821601_Haji-Ali-Dargah1.jpg)">
        </div>
        <div class="back">
        <h2>Haji Ali Dargah</h2>
        <br><br>
        <button type="button" class="btn btn-dark" style="background-color: black;
        color: white"><a href="/place/4" style="color: white; text-decoration:none">Read More</a></button>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(https://cdn.dnaindia.com/sites/default/files/styles/full/public/2017/07/03/589680-sea-link-bandra-worli-070317.jpg)">
        </div>
        <div class="back">
        <h2>Bandra Worli Sea Link</h2>
        <br><br>
        <button type="button" class="btn btn-dark" style="background-color: black;
        color: white"><a href="/place/5" style="color: white; text-decoration:none">Read More</a></button>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(https://im.rediff.com/news/2019/jan/24fountain2.jpg)">
        </div>
        <div class="back">
        <h2>Flora Fountain</h2>
        <br><br>
        <button type="button" class="btn btn-dark" style="background-color: black;
        color: white"><a href="/place/6" style="color: white; text-decoration:none">Read More</a></button>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(https://www.vtvgujarati.com/sites/default/files/news_image/Untitled-2_17.jpg)">
        </div>
        <div class="back">
        <h2>Veermata Jijabai Bhosale Udyaan And Zoo</h2>
        <br><br>
        <button type="button" class="btn btn-dark" style="background-color: black;
        color: white"><a href="/place/7" style="color: white; text-decoration:none">Read More</a></button>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(https://www.indiaeasytrip.com/states-of-india/jehangir-art-gallery.jpg)">
        </div>
        <div class="back">
        <h2>Jehangir Art Gallery</h2>
        <br><br>
        <button type="button" class="btn btn-dark" style="background-color: black;
        color: white"><a href="/place/8" style="color: white; text-decoration:none">Read More</a></button>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(https://www.fabhotels.com/blog/wp-content/uploads/2019/01/1000x650-38.jpg)">
        </div>
        <div class="back">
        <h2>Taraporewala Aquarium</h2>
        <br><br>
        <button type="button" class="btn btn-dark" style="background-color: black;
        color: white"><a href="/place/9" style="color: white; text-decoration:none">Read More</a></button>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(https://www.oyorooms.com/travel-guide/wp-content/uploads/2019/04/Juhu-Beach-1.jpg)">
        </div>
        <div class="back">
        <h2>Juhu Chowpatty</h2>
        <br><br>
        <button type="button" class="btn btn-dark" style="background-color: black;
        color: white"><a href="/place/10" style="color: white; text-decoration:none">Read More</a></button>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(https://www.billdesk.com/siddhivinayak/images/1.jpg)">
        </div>
        <div class="back">
        <h2>Shri Siddhi Vinayak Ganapati Mandir</h2>
        <br><br>
        <button type="button" class="btn btn-dark" style="background-color: black;
        color: white"><a href="/place/11" style="color: white; text-decoration:none">Read More</a></button>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(https://image3.mouthshut.com/images/Restaurant/Photo/-61755_7565.jpg)">
        </div>
        <div class="back">
        <h2>ISKCON Temple</h2>
        <br><br>
        <button type="button" class="btn btn-dark" style="background-color: black;
        color: white"><a href="/place/12" style="color: white; text-decoration:none">Read More</a></button>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(https://imgk.timesnownews.com/story/Mumba_Devi_temple.jpeg?tr=w-600,h-450,fo-auto)">
        </div>
        <div class="back">
        <h2>Mumbadevi Temple</h2>
        <br><br>
        <button type="button" class="btn btn-dark" style="background-color: black;
        color: white"><a href="/place/13" style="color: white; text-decoration:none">Read More</a></button>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/c/c5/Phoenix-marketcity-BLR-1.jpg)">
        </div>
        <div class="back">
        <h2>Phoenix Market City</h2>
        <br><br>
        <button type="button" class="btn btn-dark" style="background-color: black;
        color: white"><a href="/place/14" style="color: white; text-decoration:none">Read More</a></button>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(https://images.jdmagicbox.com/comp/mumbai/v2/022pxx22.xx22.110707160241.m6v2/catalogue/high-street-phoenix-lower-parel-mumbai-malls-vrbxczaxc4.jpg?clr=#333333)">
        </div>
        <div class="back">
        <h2>High Street Phoenix Mall</h2>
        <br><br>
        <button type="button" class="btn btn-dark" style="background-color: black;
        color: white"><a href="/place/15" style="color: white; text-decoration:none">Read More</a></button>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/9/97/Infiniti_Mall_-_Malad.jpg)">
        </div>
        <div class="back">
        <h2>Infiniti Mall</h2>
        <br><br>
        <button type="button" class="btn btn-dark" style="background-color: black;
        color: white"><a href="/place/16" style="color: white; text-decoration:none">Read More</a></button>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(https://www.malls2shop.com/admin/malls/47/47.jpg)">
        </div>
        <div class="back">
        <h2>Growel's 101</h2>
        <br><br>
        <button type="button" class="btn btn-dark" style="background-color: black;
        color: white"><a href="/place/17" style="color: white; text-decoration:none">Read More</a></button>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(https://media-cdn.tripadvisor.com/media/photo-m/1280/15/71/f9/35/wonderful-weekend-gateway.jpg)">
        </div>
        <div class="back">
        <h2>Aksa Beach</h2>
        <br><br>
        <button type="button" class="btn btn-dark" style="background-color: black;
        color: white"><a href="/place/18" style="color: white; text-decoration:none">Read More</a></button>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(https://www.nativeplanet.com/img/2016/06/kovalambeach-20-1466398724.jpg)">
        </div>
        <div class="back">
        <h2>Madh Island Beach</h2>
        <br><br>
        <button type="button" class="btn btn-dark" style="background-color: black;
        color: white"><a href="/place/19" style="color: white; text-decoration:none">Read More</a></button>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(https://content3.jdmagicbox.com/comp/mumbai/k9/022pxx22.xx22.131229153156.c2k9/catalogue/five-garden-dadar-east-mumbai-tourist-attraction-3vvsglc.jpg)">
        </div>
        <div class="back">
        <h2>5 Gardens</h2>
        <br><br>
        <button type="button" class="btn btn-dark" style="background-color: black;
        color: white"><a href="/place/20" style="color: white; text-decoration:none">Read More</a></button>
        </div>
    </div>
    <div class="flip">
        <div class="front" style="background-image: url(https://media-cdn.tripadvisor.com/media/photo-s/15/19/88/12/global-vipassana-pagoda.jpg)">
        </div>
        <div class="back">
        <h2>Global Vipassana Pagoda</h2>
        <br><br>
        <button type="button" class="btn btn-dark" style="background-color: black;
        color: white"><a href="/place/21" style="color: white; text-decoration:none">Read More</a></button>
        </div>
    </div>
    <br>
    <br>
@endsection