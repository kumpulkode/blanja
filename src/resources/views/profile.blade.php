@extends('layouts.frontend',
            [
                'title'=>'Cast Profile',
                'active'=>'profile',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit,',
            ]
        )

@section('content-css')
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.css" />
<style type="text/css">

</style>
@endsection

@section('content')
    <section id="profilesummary">
        <div class="container">
            <div class="row name">
                <div class="col-md-10 col-sm-10 col-xs-12">
                    <h1>
                        @{{ castName }}
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
                                    <td>@{{castHeight}}</td>
                                </tr>
                                <tr>
                                    <td>Mass</td>
                                    <td>:</td>
                                    <td>@{{castMass}}</td>
                                </tr>
                                <tr>
                                    <td>Hair Color</td>
                                    <td>:</td>
                                    <td>@{{castHairColor}}</td>
                                </tr>
                                <tr>
                                    <td>Skin Color</td>
                                    <td>:</td>
                                    <td>@{{castSkinColor}}</td>
                                </tr>
                                <tr>
                                    <td>Birth Year</td>
                                    <td>:</td>
                                    <td>@{{castBirthYear}}</td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>:</td>
                                    <td>@{{castGender}}</td>
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
                                        @{{ castName }} Movie's
                                    </h2>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <a href="#" class="jgrowl-error">See More</a>
                                </div>
                            </div> 
                            <div class="movies-gallery" v-if="movieCastList.length">
                            {{-- @for($key=0;$key<=10;$key++) --}}
                                <div class="col-md-3 col-sm-4 col-xs-12 col-gal" v-for="listMovie in movieCastList" :key="listMovie.data.title">
                                    <a href="#"  v-on:click="movieModal(listMovie.data)">
                                        <div class="mov-gal-item">
                                            <div class="item-image">
                                                <img src="{{asset('images/play.png')}}">
                                            </div>
                                            <div class="item-desc">
                                                <h3>@{{listMovie.data.title}}</h3>
                                                <p>
                                                    Director:
                                                    <br>@{{listMovie.data.director}}
                                                </p>
                                                <p>
                                                    Release:
                                                    <br>@{{listMovie.data.release_date}}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            {{-- @endfor --}}
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
                                    <h3>@{{anotherMovie.title}}</h3>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Director</td>
                                                <td>:</td>
                                                <td>@{{anotherMovie.director}}</td>
                                            </tr>
                                            <tr>
                                                <td>Producer</td>
                                                <td>:</td>
                                                <td>@{{anotherMovie.producer}}</td>
                                            </tr>
                                            <tr>
                                                <td>Release Date</td>
                                                <td>:</td>
                                                <td>@{{anotherMovie.release_date}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="description">
                                    <p>
                                        @{{anotherMovie.opening_crawl}}
                                    </p>
                                    <p class="text-right">
                                        <a href="#" class="jgrowl-error">See More</a>
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
                    <h4 class="modal-title">@{{mTitle}}</h4>
                </div>
                <div class="modal-body">
                    <div class="col-xs-12" id="sw-modal-content">
                        <div id="crawl-starwars">
                            <div id="crawl-content">
                                <p class="text-center">Episode @{{mEpisode}}</p>
                                <p class="text-center">@{{mTitle}}</p>
                                <p><br></p>
                                <p class="text-justify">@{{mCrawl}}.</p>
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
                                <label class="sr-only" for="">Form Search Cast</label>
                                <input type="text" class="form-control search" id="" placeholder="Search Star Wars Cast" width="100%" v-model="searchCastForm">
                            </div>
                            <ul class="list" v-if="listCast.length">
                                <li v-for="lists in listCast" :key="lists.name">
                                    <a href="#" v-on:click="changeCast(lists.url)" class="cast">@{{lists.name}} , </a>
                                </li>
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
    <script src="{{ mix('js/axios.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.js"></script>

    <script type="text/javascript">
        var vm = new Vue({
            el: "#vueapp",
            data:{
                castName: "Fetching Data",
                castHeight: "",
                castMass:"",
                castHairColor:"",
                castSkinColor:"",
                castBirthYear:"",
                castGender:"",
                listCast:[],
                searchCastForm:"",
                movieCastList:[],
                mTitle:"",
                mEpisode:"",
                mCrawl:"",
                anotherMovie:[],
            },
            created: function () {
                //getListCast for choose
                var mListCast = this
                axios.get('https://swapi.co/api/people/?format=json').then(function(rp){
                    console.log(rp.data.results);
                    mListCast.listCast = rp.data.results;
                })

                //get default cast
                var defaultCast = this
                    defaultCast.castName="Fetching Data"
                    axios.get('https://swapi.co/api/people/1/?format=json')
                        .then(function(response){
                            defaultCast.castName = response.data.name;
                            defaultCast.castHeight = response.data.height  + " cm";
                            defaultCast.castMass = response.data.mass;
                            defaultCast.castHairColor = response.data.hair_color;
                            defaultCast.castSkinColor = response.data.skin_color;
                            defaultCast.castBirthYear = response.data.birth_year;
                            defaultCast.castGender = response.data.gender;

                            defaultCast.movieCastList = [];
                            for (var i = response.data.films.length - 1; i >= 0; i--) {
                                // console.log(response.data.films[i])
                                axios.get(response.data.films[i])
                                .then(function(responseFilm){
                                    defaultCast.movieCastList.push(responseFilm);
                                })
                            }
                        })

                //get another random movie
                var anoMovie = this
                anoMovie.anotherMovie='';
                var randomId = Math.floor(Math.random() * 6) + 1 ;
                axios.get('https://swapi.co/api/films/'+randomId+'/?format=json').then(function(resRandMov){
                    anoMovie.anotherMovie = resRandMov.data;
                })

            },
            watch:{
                searchCastForm:function(){
                    this.searchCast();
                }
            },
            methods:{
                changeCast:function(getData){
                    $('#modal-cast').modal('toggle');
                    // console.log(getData);
                    var appCast = this
                    appCast.castName="Fetching Data"
                    axios.get(getData+'?format=json')
                        .then(function(response){
                            appCast.castName = response.data.name;
                            appCast.castHeight = response.data.height  + " cm";
                            appCast.castMass = response.data.mass;
                            appCast.castHairColor = response.data.hair_color;
                            appCast.castSkinColor = response.data.skin_color;
                            appCast.castBirthYear = response.data.birth_year;
                            appCast.castGender = response.data.gender;

                            appCast.movieCastList = [];
                            for (var i = response.data.films.length - 1; i >= 0; i--) {
                                // console.log(response.data.films[i])
                                axios.get(response.data.films[i])
                                .then(function(responseFilm){
                                    appCast.movieCastList.push(responseFilm);
                                })
                            }

                            //get another random movie
                            appCast.anotherMovie='';
                            var randomId = Math.floor(Math.random() * 6) + 1 ;
                            axios.get('https://swapi.co/api/films/'+randomId+'/?format=json').then(function(resRandMov){
                                appCast.anotherMovie = resRandMov.data;
                            })
                        })
                },
                searchCast: _.debounce(function(){
                    var mListCast = this
                    axios.get('https://swapi.co/api/people/?search='+mListCast.searchCastForm+'&format=json').then(function(rp){
                        console.log(rp.data.results);
                        mListCast.listCast = rp.data.results;
                    })
                },500),
                movieModal:function(getData){
                    $('#modal-movie').modal('show'); 

                    var movModal = this
                    movModal.mTitle = getData.title;
                    movModal.mEpisode = getData.episode_id;
                    movModal.mCrawl = getData.opening_crawl;

                }

            }
        
            
        })
    </script>

    <script type="text/javascript">
        // Defaults override - hide "close all" button
    $.jGrowl.defaults.closer = false;
    // Solid color theme
    $('.jgrowl-error').on('click', function () {
        $.jGrowl('The Page you want access still under consttruction.', {
            header: 'Sorry!',
        });
    });
    </script>
@endsection


