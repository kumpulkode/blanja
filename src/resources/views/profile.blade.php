@extends('layouts.frontend',
            [
                'title'=>'Cast Profile',
                'active'=>'profile',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit,',
            ]
        )

@section('content-css')
<style type="text/css">
</style>
@endsection

@section('content')
    <section id="profilesummary">
        <div class="container">
            <div class="row name">
                <div class="col-md-10 col-sm-10 col-xs-12">
                    <h1>
                        Luke Skywalker
                    </h1>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12 text-right">
                    <h1>
                        <a data-toggle="modal" href='#modal-cast'><span class="sr-only">Find Cast</span><i class="glyphicon glyphicon-search"></i></a>
                    </h1>
                </div>
            </div>
            <div class="row detail">
                <div class="col-md-3 col-sm-5 col-xs-12">
                    <div class="img-profile">
                        <img src="https://placeimg.com/640/480/people/grayscale">
                    </div>
                </div>
                <div class="col-md-3 col-sm-7 col-xs-12 info">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Height</td>
                                    <td>:</td>
                                    <td>172 Cm</td>
                                </tr>
                                <tr>
                                    <td>Mass</td>
                                    <td>:</td>
                                    <td>Blond</td>
                                </tr>
                                <tr>
                                    <td>Hair Color</td>
                                    <td>:</td>
                                    <td>Fair</td>
                                </tr>
                                <tr>
                                    <td>Skin Color</td>
                                    <td>:</td>
                                    <td>Blue</td>
                                </tr>
                                <tr>
                                    <td>Birth Year</td>
                                    <td>:</td>
                                    <td>19 June 2010</td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>:</td>
                                    <td>Male</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="profilecontent">
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-sm-9 col-xs-12">
                    <div class="content">
                        <div class="profile-movies">
                            <div class="title row">
                                <div class="col-sm-8">
                                    <h2>
                                        Skywalkers Movie's
                                    </h2>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <a href="#">See More</a>
                                </div>
                            </div> 
                            <div class="movies-gallery">
                            @for($key=0;$key<=10;$key++)
                                <div class="col-md-3 col-sm-4 col-xs-12 col-gal">
                                    <a data-toggle="modal" href='#modal-movie'>
                                        <div class="mov-gal-item">
                                            <div class="item-image">
                                                <img src="{{asset('images/play.png')}}">
                                            </div>
                                            <div class="item-desc">
                                                <h3>The Empire Strikes Back</h3>
                                                <p>
                                                    Director:
                                                    <br>Irvin Karsher
                                                </p>
                                                <p>
                                                    Release:
                                                    <br>1980-05-17
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endfor
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-3 col-xs-12">
                    <div class="sidebar">
                        <div class="side-card">
                            <div class="title">
                                <h2>Related Another Movie's</h2>
                            </div>
                            <div class="movie-card">
                                <div class="detail">
                                    <h3>The Force Awakens</h3>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Director</td>
                                                <td>:</td>
                                                <td>J. J. Abrams</td>
                                            </tr>
                                            <tr>
                                                <td>Producer</td>
                                                <td>:</td>
                                                <td>Kathleen Kennedy, J.J. Abrams, Brayn Bulk</td>
                                            </tr>
                                            <tr>
                                                <td>Release Date</td>
                                                <td>:</td>
                                                <td>2015-12-11</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <p class="text-right">
                                        <a href="#">See More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('modal')
    <div class="modal fade" id="modal-movie">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    <div class="col-xs-12" id="sw-modal-content">
                        <div id="crawl-starwars">
                            <div id="crawl-content">
                                <p class="text-center">Episode 4</p>
                                <p class="text-center">A New Hope</p>
                                <p class="text-justify">It is a period of civil war. Rebel spaceships, striking from a hidden base, have won their first victory against the evil Galactic Empire. During the battle, Rebel spies managed to steal secret plans to the Empire's ultimate weapon, the DEATH STAR, an armored space station with enough power to destroy an entire planet. Pursued by the Empire's sinister agents, Princess Leia races home aboard her starship, custodian of the stolen plans that can save her people and restore freedom to the galaxy....</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-cast">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Find Cast</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12" id="cast-list">
                            <div class="form-group">
                                <label class="sr-only" for="">label</label>
                                <input type="text" class="form-control search" id="" placeholder="Search Star Wars Cast" width="100%">
                            </div>
                            <ul class="list">
                                @for($keys=0;$keys<40;$keys++)
                                    <li>
                                        <a href="#" class="cast">People {{$keys}}, </a>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content-js') 
    <script src="{{ mix('js/list.min.js') }}"></script>

    <script type="text/javascript">
        $(function(){
            // Sets the number of stars we wish to display
            const numStars = 1000;
            
            // For every star we want to display
            for (let i = 0; i < numStars; i++) {
                let star = document.createElement("div");  
                star.className = "star";
                var xy = getRandomPosition();
                    star.style.top = xy[0] + 'px';
                    star.style.left = xy[1] + 'px';
                $('#sw-modal-content').append(star);
            }

            // Gets random x, y values based on the size of the container
            function getRandomPosition() {  
                var y = window.innerWidth;
                var x = window.innerHeight;
                    var randomX = Math.floor(Math.random()*x);
                    var randomY = Math.floor(Math.random()*y);
                return [randomX,randomY];
            }
        });
    </script>
    
    <script type="text/javascript">
        $(function() {
            var options = {
                valueNames: [ 'cast']
            };

            var userList = new List('cast-list', options);
        });
    </script>
@endsection


