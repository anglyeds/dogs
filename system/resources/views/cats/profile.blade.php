@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{asset('ext_lib/blueimp/css/blueimp-gallery.min.css')}}">
    <style type="text/css">

        .animal-content{
            border:1px solid;
            box-shadow: 5px 5px 3px #888888;
            padding:5px;
            margin:5px;
            margin-bottom:10px;

        }

        .link-images{
            margin-bottom:2px;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            padding-top: 30px;
            height: 0;
            overflow: hidden;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
        }

        @media (min-width: 768px) {
            .modal-dialog {
                width: 745px;
                margin: 10px auto;
            }
        }

    </style>

@endsection
@section('content')

    <div class="row">
        <div class="col-md-5 col-sm-6">
            <div class="row">
                <div id="links" class="links">
                    <!--  /**
                      *loop your image here
                      **/ -->

                    @php
                        if($cat->multiple_images) {
                            $images = json_decode($cat->multiple_images);
                        }else {
                            $images = [];
                        }
                    @endphp
                    @if(count($images))
                        @foreach($images as $key => $image)



                            <a href="{{ URL::asset('/storage/'. $image) }}">
                                <img class="link-images img-thumbnail" src="{{ URL::asset('/storage/'. $image) }}" width="120px" height="120px" data-gallery>
                            </a>

                        @endforeach
                    @else
                        <p> No image yet </p>
                    @endif

                </div>

                <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
                    <div class="slides"></div>
                    <h3 class="title"></h3>
                    <a class="prev">‹</a>
                    <a class="next">›</a>
                    <a class="close">×</a>
                    <a class="play-pause"></a>
                    <ol class="indicator"></ol>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-sm-6">
            <div class="row">
                <div class="animal-content">
                    <h4>Name 名字 :<span> {{$cat->name}} </span></h4>
                    <small>
                        <cite title="{{ $cat->location }}">
                            {{ $cat->location }}
                            <i class="glyphicon glyphicon-map-marker"></i>
                        </cite>
                    </small>
                    <p>Description 描述 :<span>{{ $cat->description }}</span></p>
                    <p>Type 種類 : {{ $cat->type }}</p>
                    <p>Breed 品種 : {{ $cat->breed }}</p>
                    <p>Size 體型 : {{ $cat->size }}</p>
                    <p>Age 年齡 : {{ $cat->age }}</p>
                    <p>Coat Colour : 毛色{{ $cat->coat_colour }}</p>
                    <p>Skills 技能 : {{ $cat->skills }}</p>
                    <p>Shooting Experience 拍攝經驗 : {{ $cat->shooting_exp }}</p>
                </div>
                <!-- Split button -->
                <div class="btn-group" >
                    <a href="{{route('contact')}}" class="btn btn-primary" style="margin-left:10px;color:white">
                        Contact Us</a>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#video">Video</button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="video" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="text-right">
                                    <select id="lang-link" class="btn btn-mini" style="color:black;">
                                        <option value="en">English</option>
                                        <option value="zh-hk">Chinese</option>
                                        <span class="caret"></span>
                                    </select>
                                </div>
                                <div class="video-container">

                                    @if(preg_match('/embed/', $cat->video_link))
                                        <iframe width="640" height="360" src="{{ $cat->video_link }}" frameborder="0" allowfullscreen></iframe>
                                    @else
                                        <div id="cn-link" class="" style="color:black;display:none;";>
                                            <h3>嵌入影片</h3>
                                            <ol>
                                                <li>使用電腦，前往您要嵌入的 YouTube 影片觀賞頁面。</li>
                                                <li>按一下影片下方的「分享」圖示 。</li>
                                                <li>按一下 [嵌入]。</li>
                                                <li>複製方塊中的 video link 程式碼。(e.g https://www.youtube.com/embed/CCqbb9cG7bs)</li>
                                                <li>把程式碼貼到您網誌或網站的 HTML 中。</li>
                                            </ol>

                                            <h3>嵌入播放清單</h3>
                                            <ol>
                                                <li>使用電腦登入您的 YouTube 帳戶。</li>
                                                <li>在頁面左側按一下 [播放清單]。</li>
                                                <li>按一下您要嵌入的播放清單標題。</li>
                                                <li>按一下「分享」圖示 。</li>
                                                <li>按一下 [嵌入]。</li>
                                                <li>複製方塊中的 video link 程式碼。(e.g https://www.youtube.com/embed/CCqbb9cG7bs)</li>
                                                <li>把程式碼貼到您網誌或網站的 backend the video_link 中。</li>
                                            </ol>
                                        </div>

                                        <div id="en-link" class="" style="color:black">
                                            <h3>Embed a video</h3>
                                            <ol>
                                                <li>On a computer, go to the YouTube video you want to embed.</li>
                                                <li>Under the video, click Share .</li>
                                                <li>Click Embed.</li>
                                                <li>From the box that appears, copy video link code.(e.g https://www.youtube.com/embed/CCqbb9cG7bs)</li>
                                                <li>Paste the code into your blog or website HTML.</li>
                                            </ol>

                                            <h3>Embed a playlist</h3>
                                            <ol>
                                                <li>Sign in to your YouTube account on a computer.</li>
                                                <li>On the left side of the page, click Playlists.</li>
                                                <li>For the playlist you want to embed, click its title.</li>
                                                <li>Click Share .</li>
                                                <li>Click Embed.</li>
                                                <li>From the box that appears, copy video link code.(e.g https://www.youtube.com/embed/CCqbb9cG7bs)</li>
                                                <li>Paste the code into your blog or website HTML.</li>
                                            </ol>
                                        </div>

                                    @endif
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('js')

    <script src="{{ asset('bower_components/ekko-lightbox/dist/ekko-lightbox.min.js') }}"></script>
    <script src="{{ asset('ext_lib/blueimp/js/blueimp-gallery.min.js') }}"></script>

    <script>
        document.getElementById('links').onclick = function (event) {
            event = event || window.event;
            var target = event.target || event.srcElement,
                link = target.src ? target.parentNode : target,
                options = {index: link, event: event},
                links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };
    </script>

    <script type="text/javascript">
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                type: 'image',
                onContentLoaded: function() {
                    $(".ekko-lightbox-container").find("img").find(".modal-dialog").css("height","400px").css("width","400px");
                }
            });
        });
    </script>

    <script>

        $('#video').on('hidden.bs.modal', function () {
            $('#video iframe').attr("src", $('#video iframe').attr("src"));
        });

        $('#lang-link').change(function(){
            if($('#en-link').is(':visible') === true){
                $('#cn-link').show();
                $('#en-link').hide();
            } else {
                $('#cn-link').hide();
                $('#en-link').show();
            }
        });
    </script>


@endsection