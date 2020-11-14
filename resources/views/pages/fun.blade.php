@extends('layouts.app2')

@section('styles')

<style>
    @import url("https://fonts.googleapis.com/css?family=Faster+One|Monoton");
    body {
    width: 100%;
    height: 100%;
    background: url("https://s3.amazonaws.com/ritalbradley-dev-photos/twinkle-back.gif");
    }

    .container {
    max-width: 60%;
    float: none;
    margin: 0 auto;
    display: -webkit-box;
    display: flex;
    -webkit-box-pack: center;
            justify-content: center;
    }

    body:before {
    /* width: 100%;
    height: 100%;
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    z-index: -1; */
    background-image: -webkit-gradient(linear, left top, right bottom, from(rgba(29, 38, 113, 0.6)), to(rgba(195, 55, 100, 0.6)));
    background-image: linear-gradient(to bottom right, rgba(29, 38, 113, 0.6), rgba(195, 55, 100, 0.6));
    background-size: auto;
    }

    .ok {
        color: #fff;
        font-family: 'Monoton', cursive;
        font-size: 50px;
        letter-spacing: 5px;
        text-shadow: 2px 2px 10px #1D2671, 4px 4px 15px #C33764;
    }

    .wow {
    -webkit-perspective: 600;
            perspective: 600;
    margin: 0 auto;
    }

    .ab {
    width: 200px;
    height: 200px;
    float: left;
    list-style: none;
    margin-right: 80px;
    margin-bottom: 50px;
    position: relative;
    cursor: pointer;
    counter-increment: item;
    }
    .ab div {
    width: 100%;
    height: 100%;
    position: absolute;
    border-radius: 5px;
    -webkit-transition: all .5s;
    transition: all .5s;
    -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
    }
    .ab img {
    width: 100%;
    height: 100%;
    position: absolute;
    border-radius: 5px;
    }
    .ab:hover .front {
    z-index: 0;
    -webkit-transform: rotateY(180deg);
            transform: rotateY(180deg);
    }
    .ab:hover .back {
    -webkit-transform: rotateY(0);
            transform: rotateY(0);
    }

    .front {
    z-index: 3;
    color: #333;
    text-align: center;
    line-height: 200px;
    font-size: 80px;
    font-family: 'Faster One', cursive;
    background: #ad5389;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #3c1053, #ad5389);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #3c1053, #ad5389); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
    .front:after {
    content: counter(item);
    }

    .back {
    -webkit-transform: rotateY(180deg);
            transform: rotateY(180deg);
    }

</style>
    
@endsection

@section('content')



<div class='container'>
    <div class="row">
      <div class="col-md-12">
        <h3 class="text-center ok">Click on the images at back for surprises😉</h3><br><br>
        <ul id="wow">
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://aaron-bird.github.io/demo/rubiks-cube/" target="_blank"><img src='https://popculturetees.com/wp-content/uploads/2013/02/rubiks_cube_t_shirt.jpg'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://paveldogreat.github.io/WebGL-Fluid-Simulation/" target="_blank"><img src='https://lh3.googleusercontent.com/UtuxtMS2SQYXXlJw1ek795lxMZg0AgW_6QTW56KQhF2oQgqZlwM6CMerCE47NiwdvRk'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://starrior.com/" target="_blank"><img src='https://daks2k3a4ib2z.cloudfront.net/56caebb72687776b7c733740/59c4f8cbd5964f0001efc75a_tw.jpg'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://mrdoob.neocities.org/017/" target="_blank"><img src='https://lh3.googleusercontent.com/proxy/WHTcfpiJd8TuZmcfS-19C0TisLD1vPpfPzJEJMr9xjHh3eM6N2r9vQswCMvbqSyfNI5O47WkSLbNtzQvJy3IlZYDLbFTnme30LFb7O912mXzhikkuEQRUP9gApFmMVRHC6OE8g'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://robotics.ovh/" target="_blank"><img src='https://lh3.googleusercontent.com/proxy/hJvy-RiZLmwH0RS9R5QPxmHDkIRzigNrA7mOsHscfWtngkwFKT3mEtQkdgftThkFFLB3c-lH5_AuKdV0a7FAKh3lYhOxwP0i9GOc3X0'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://smashthewalls.com/" target="_blank"><img src='https://miro.medium.com/max/1038/1*UtmCjMmOxNA10DijFnvztQ.jpeg'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://calm.ovh/" target="_blank"><img src='https://www.pngitem.com/pimgs/m/536-5363296_freetoedit-cute-kawaii-animal-poke-love-care-piske.png'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://harmony.ovh/" target="_blank"><img src='https://awealthofnature.org/wp-content/uploads/2019/10/Butterflies-on-Blazing-Star-cropped.jpg'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://codepen.io/Yakudoo/full/rVGraP" target="_blank"><img src='https://webartdevelopers.com/blog/wp-content/uploads/2018/11/holy-running-cow-three-js.png'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://threejs.org/examples/webgl_shaders_ocean.html" target="_blank"><img src='https://miro.medium.com/max/7776/0*Rp48l4z21Xh7NhKA'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://ykob.github.io/sketch-threejs/sketch/transform.html" target="_blank"><img src='https://i.pinimg.com/originals/35/06/f0/3506f0f78839087be9bb07f2ee478b82.jpg'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://musiclab.chromeexperiments.com/Arpeggios/" target="_blank"><img src='https://scx2.b-cdn.net/gfx/news/hires/2016/578650fe544c4.jpg'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://blocks.ovh/" target="_blank"><img src='https://ph-files.imgix.net/e1a6de31-268a-4590-93d2-7432050980f1?auto=format'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://larsberg.github.io/_lsr/2017/2017/XmasXperiment/index.html" target="_blank"><img src='https://d1e2bohyu2u2w9.cloudfront.net/sites/default/files/experience-media-file/seesaw.jpg'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://robpayot.github.io/glowing-tree/build/" target="_blank"><img src='https://s3.envato.com/files/628d023a-afad-45cb-b8aa-a0c8247f8b32/inline_image_preview.jpg'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="http://magickeyboard.io/" target="_blank"><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQpAphWuk9kAsfoISs6LCi-xKVd77eu5P9pcA&usqp=CAU'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://haxiomic.github.io/GPU-Fluid-Experiments/html5/" target="_blank"><img src='https://haxiomic.github.io/GPU-Fluid-Experiments/html5/glfluid.jpg'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://codepen.io/ge1doot/full/ZYPEBG/" target="_blank"><img src='https://steamuserimages-a.akamaihd.net/ugc/773983150596800567/1D0787975C328822EF6AE7FD20114DFD7C460EB0/?imw=637&imh=358&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="http://www.staggeringbeauty.com/" target="_blank"><img src='https://froyonation.files.wordpress.com/2012/08/staggering-beauty.png'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://lumina.goodboydigital.com/" target="_blank"><img src='https://3.bp.blogspot.com/-qB9tCDgWLiE/XJPq3tsA31I/AAAAAAAAYqo/jqoCL5nBmv0FM_1obvmvxhbssjJ3Wf8OgCLcBGAs/s1600/goodboydigital_lumina.png'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://mrdoob.neocities.org/018/" target="_blank"><img src='https://i.ytimg.com/vi/VHrCYC8glQE/maxresdefault.jpg'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://mrdoob.neocities.org/021/" target="_blank"><img src='https://upload.wikimedia.org/wikipedia/commons/6/6b/Serotonin-Spartan-HF-based-on-xtal-3D-sf-web.png'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://stephaneginier.com/sculptgl/" target="_blank"><img src='https://wadejohnston1962.files.wordpress.com/2013/11/peacefulface.jpg'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://ykob.github.io/sketch-threejs/sketch/newyear2019.html" target="_blank"><img src='https://marketingarmor.com/wp-content/uploads/2019/02/2019_trends_900x500-FINAL.jpg'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://codepen.io/ge1doot/full/LXPaME" target="_blank"><img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/222599/AngeloPlessasRobots.png'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://sketches.vlucendo.com/portal/" target="_blank"><img src='https://vistapointe.net/images/portal-1.jpg'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="http://rugs.grindselect.com/" target="_blank"><img src='https://i.ytimg.com/vi/3eZH_lm1pL0/hqdefault.jpg'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://codepen.io/cl4ws0n/full/YXXjWe/" target="_blank"><img src='https://previews.123rf.com/images/belchonock/belchonock1501/belchonock150108875/35887307-honeycomb-background.jpg'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://landemy.netlify.app/" target="_blank"><img src='https://cdn.businesstraveller.com/wp-content/uploads/2020/07/Virgin-Galactic-Spaceship-Cabin-Interior-In-Space-1280x720-1.jpg'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://guillaumegouessan.com/sketches/dancing-instances/" target="_blank"><img src='https://cdn.lowgif.com/full/411f46fabb0f85f9-the-dance-of-my-people-gifs-on-giphy.gif'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://codepen.io/Yakudoo/full/YGxYZj" target="_blank"><img src='https://assets.codepen.io/264161/internal/screenshots/pens/YGxYZj.custom.jpg?fit=cover&format=auto&ha=true&height=720&quality=75&v=2&version=1587070640&width=1279'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="http://slices.ovh/" target="_blank"><img src='https://lh3.googleusercontent.com/proxy/TjvD4ACmHxCXb2J381er63fzCq8NQqEiOcbm7AcoRtH2-uUvB4VGMCm8fTmn_2O3CCroWSkKzVo'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://codepen.io/ge1doot/full/VwvvgYx" target="_blank"><img src='https://s31991.pcdn.co/wp-content/uploads/2019/02/block-illusion-gif.gif'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://relaxcalm.netlify.app/" target="_blank"><img src='https://i.pinimg.com/originals/71/4d/94/714d947b5d5bf3f6d720329c400dd303.png'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="http://arkadia.xyz/" target="_blank"><img src='https://arkadia.xyz/prints/img/arkadiaprint01.jpg'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://codepen.io/Yakudoo/full/YXxmYR" target="_blank"><img src='https://assets.codepen.io/264161/internal/screenshots/pens/YXxmYR.custom.jpg?fit=cover&format=auto&ha=true&height=720&quality=75&v=2&version=1583523720&width=1279'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="http://arkadia.xyz/" target="_blank"><img src='https://arkadia.xyz/prints/img/arkadiaprint01.jpg'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://codepen.io/Yakudoo/pen/oXJYxy" target="_blank"><img src='https://assets.codepen.io/264161/internal/screenshots/pens/oXJYxy.custom.jpg?fit=cover&format=auto&ha=true&height=720&quality=75&v=2&version=1503062173&width=1279'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://codepen.io/Yakudoo/full/yNjRRL" target="_blank"><img src='https://assets.codepen.io/264161/internal/screenshots/pens/yNjRRL.custom.jpg?fit=cover&format=auto&ha=true&height=720&quality=75&v=2&version=1583523815&width=1279'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://codepen.io/Yakudoo/full/LVyJXw" target="_blank"><img src='https://assets.codepen.io/264161/internal/screenshots/pens/LVyJXw.custom.jpg?fit=cover&format=auto&ha=true&height=720&quality=75&v=2&version=1503061945&width=1279'></a>
            </div>
          </li>
          <li class="col-md-4 ab">
            <div class='front'></div>
            <div class='back'>
              <a href="https://tympanus.net/Development/ExplodingObjects/index-heart.html" target="_blank"><img src='https://i.pinimg.com/originals/e5/2f/f6/e52ff60009c8ca6c099f4ae61411ae76.jpg'></a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
    
@endsection