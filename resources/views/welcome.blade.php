@extends('layouts-landing.app')

@section('content')
<section id="meteorologi-geofisika">
    <div class="container">
        <div class="row">
            <!-- include file="../config.bmkg" -->
            <div class="col-md-8 md-margin-bottom-20">
                <div class="prakicu-kota-besar no-space-carousel-block owl-carousel-v1 margin-bottom-10 md-margin-bottom-20">
                    <div class="headline">
                        <h4 class="pull-left">Prakiraan Cuaca <small>(24 Mei 2021)</small></h4>
                        <div class="owl-navigation">
                            <div class="customNavigation">
                                <a class="owl-btn prev-pk"><i class="fa fa-angle-left"></i></a>
                                <a class="owl-btn next-pk"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="prakicu-kota-besar-bg">
                        <div class="owl-prakicu-kota">
                            <div class="col-width-full id-501397">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Banda Aceh</h2>
                                        <p>13:00&nbsp;WIB</p>
                                        <img src="asset/img/icon-cuaca/cerah-am.png" alt="cerah">
                                        <p>Cerah</p>
                                        <h2 class="heading-md">32&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Banda_Aceh&Prov=Aceh&AreaID=501397&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-5008773">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Serang</h2>
                                        <p>13:00&nbsp;WIB</p>
                                        <img src="asset/img/icon-cuaca/hujan ringan-am.png" alt="hujan ringan">
                                        <p>Hujan Ringan</p>
                                        <h2 class="heading-md">32&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Serang&Prov=Banten&AreaID=5008773&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501178">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Bengkulu</h2>
                                        <p>13:00&nbsp;WIB</p>
                                        <img src="asset/img/icon-cuaca/hujan ringan-am.png" alt="hujan ringan">
                                        <p>Hujan Ringan</p>
                                        <h2 class="heading-md">32&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Bengkulu&Prov=Bengkulu&AreaID=501178&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501190">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Yogyakarta</h2>
                                        <p>13:00&nbsp;WIB</p>
                                        <img src="asset/img/icon-cuaca/hujan ringan-am.png" alt="hujan ringan">
                                        <p>Hujan Ringan</p>
                                        <h2 class="heading-md">32&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Yogyakarta&Prov=DI_Yogyakarta&AreaID=501190&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501195">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Jakarta</h2>
                                        <p>13:00&nbsp;WIB</p>
                                        <img src="asset/img/icon-cuaca/berawan-am.png" alt="berawan">
                                        <p>Berawan</p>
                                        <h2 class="heading-md">32&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Jakarta&Prov=DKI_Jakarta&AreaID=501195&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501205">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Jambi</h2>
                                        <p>13:00&nbsp;WIB</p>
                                        <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                        <p>Cerah Berawan</p>
                                        <h2 class="heading-md">33&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Jambi&Prov=Jambi&AreaID=501205&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501212">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Bandung</h2>
                                        <p>13:00&nbsp;WIB</p>
                                        <img src="asset/img/icon-cuaca/hujan ringan-am.png" alt="hujan ringan">
                                        <p>Hujan Ringan</p>
                                        <h2 class="heading-md">31&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Bandung&Prov=Jawa_Barat&AreaID=501212&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501262">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Semarang</h2>
                                        <p>13:00&nbsp;WIB</p>
                                        <img src="asset/img/icon-cuaca/berawan-am.png" alt="berawan">
                                        <p>Berawan</p>
                                        <h2 class="heading-md">33&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Semarang&Prov=Jawa_Tengah&AreaID=501262&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501306">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Surabaya</h2>
                                        <p>13:00&nbsp;WIB</p>
                                        <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                        <p>Cerah Berawan</p>
                                        <h2 class="heading-md">34&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Surabaya&Prov=Jawa_Timur&AreaID=501306&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501315">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Pontianak</h2>
                                        <p>13:00&nbsp;WIB</p>
                                        <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                        <p>Cerah Berawan</p>
                                        <h2 class="heading-md">33&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Pontianak&Prov=Kalimantan_Barat&AreaID=501315&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501342">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Palangkaraya</h2>
                                        <p>13:00&nbsp;WIB</p>
                                        <img src="asset/img/icon-cuaca/berawan-am.png" alt="berawan">
                                        <p>Berawan</p>
                                        <h2 class="heading-md">33&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Palangkaraya&Prov=Kalimantan_Tengah&AreaID=501342&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501365">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Pangkal Pinang</h2>
                                        <p>13:00&nbsp;WIB</p>
                                        <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                        <p>Cerah Berawan</p>
                                        <h2 class="heading-md">32&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Pangkal_Pinang&Prov=Kep_Bangka_Belitung&AreaID=501365&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501371">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Tanjung Pinang</h2>
                                        <p>13:00&nbsp;WIB</p>
                                        <img src="asset/img/icon-cuaca/berawan-am.png" alt="berawan">
                                        <p>Berawan</p>
                                        <h2 class="heading-md">32&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Tanjung_Pinang&Prov=Kepulauan_Riau&AreaID=501371&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501373">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Lampung</h2>
                                        <p>13:00&nbsp;WIB</p>
                                        <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                        <p>Cerah Berawan</p>
                                        <h2 class="heading-md">32&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Lampung&Prov=Lampung&AreaID=501373&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501478">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Pekanbaru</h2>
                                        <p>13:00&nbsp;WIB</p>
                                        <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                        <p>Cerah Berawan</p>
                                        <h2 class="heading-md">32&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Pekanbaru&Prov=Riau&AreaID=501478&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501545">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Padang</h2>
                                        <p>13:00&nbsp;WIB</p>
                                        <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                        <p>Cerah Berawan</p>
                                        <h2 class="heading-md">28&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Padang&Prov=Sumatera_Barat&AreaID=501545&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501568">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Palembang</h2>
                                        <p>13:00&nbsp;WIB</p>
                                        <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                        <p>Cerah Berawan</p>
                                        <h2 class="heading-md">33&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Palembang&Prov=Sumatera_Selatan&AreaID=501568&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501580">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Medan</h2>
                                        <p>13:00&nbsp;WIB</p>
                                        <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                        <p>Cerah Berawan</p>
                                        <h2 class="heading-md">31&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Medan&Prov=Sumatera_Utara&AreaID=501580&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501164">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Denpasar</h2>
                                        <p>14:00&nbsp;WITA</p>
                                        <img src="asset/img/icon-cuaca/berawan-am.png" alt="berawan">
                                        <p>Berawan</p>
                                        <h2 class="heading-md">33&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Denpasar&Prov=Bali&AreaID=501164&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501197">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Gorontalo</h2>
                                        <p>14:00&nbsp;WITA</p>
                                        <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                        <p>Cerah Berawan</p>
                                        <h2 class="heading-md">33&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Gorontalo&Prov=Gorontalo&AreaID=501197&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501325">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Banjarmasin</h2>
                                        <p>14:00&nbsp;WITA</p>
                                        <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                        <p>Cerah Berawan</p>
                                        <h2 class="heading-md">34&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Banjarmasin&Prov=Kalimantan_Selatan&AreaID=501325&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501354">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Samarinda</h2>
                                        <p>14:00&nbsp;WITA</p>
                                        <img src="asset/img/icon-cuaca/berawan-am.png" alt="berawan">
                                        <p>Berawan</p>
                                        <h2 class="heading-md">31&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Samarinda&Prov=Kalimantan_Timur&AreaID=501354&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501359">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Tanjung Selor</h2>
                                        <p>14:00&nbsp;WITA</p>
                                        <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                        <p>Cerah Berawan</p>
                                        <h2 class="heading-md">33&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Tanjung_Selor&Prov=Kalimantan_Utara&AreaID=501359&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501421">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Mataram</h2>
                                        <p>14:00&nbsp;WITA</p>
                                        <img src="asset/img/icon-cuaca/berawan-am.png" alt="berawan">
                                        <p>Berawan</p>
                                        <h2 class="heading-md">32&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Mataram&Prov=Nusa_Tenggara_Barat&AreaID=501421&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501434">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Kupang</h2>
                                        <p>14:00&nbsp;WITA</p>
                                        <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                        <p>Cerah Berawan</p>
                                        <h2 class="heading-md">33&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Kupang&Prov=Nusa_Tenggara_Timur&AreaID=501434&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501485">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Mamuju</h2>
                                        <p>14:00&nbsp;WITA</p>
                                        <img src="asset/img/icon-cuaca/hujan ringan-am.png" alt="hujan ringan">
                                        <p>Hujan Ringan</p>
                                        <h2 class="heading-md">31&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Mamuju&Prov=Sulawesi_Barat&AreaID=501485&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501495">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Makassar</h2>
                                        <p>14:00&nbsp;WITA</p>
                                        <img src="asset/img/icon-cuaca/hujan ringan-am.png" alt="hujan ringan">
                                        <p>Hujan Ringan</p>
                                        <h2 class="heading-md">33&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Makassar&Prov=Sulawesi_Selatan&AreaID=501495&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-1200106">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Palu</h2>
                                        <p>14:00&nbsp;WITA</p>
                                        <img src="asset/img/icon-cuaca/hujan ringan-am.png" alt="hujan ringan">
                                        <p>Hujan Ringan</p>
                                        <h2 class="heading-md">28&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Palu&Prov=Sulawesi_Tengah&AreaID=1200106&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-5013053">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Kendari</h2>
                                        <p>14:00&nbsp;WITA</p>
                                        <img src="asset/img/icon-cuaca/hujan sedang-am.png" alt="hujan sedang">
                                        <p>Hujan Sedang</p>
                                        <h2 class="heading-md">31&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Kendari&Prov=Sulawesi_Tenggara&AreaID=5013053&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501534">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Manado</h2>
                                        <p>14:00&nbsp;WITA</p>
                                        <img src="asset/img/icon-cuaca/hujan ringan-am.png" alt="hujan ringan">
                                        <p>Hujan Ringan</p>
                                        <h2 class="heading-md">32&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Manado&Prov=Sulawesi_Utara&AreaID=501534&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501382">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Ambon</h2>
                                        <p>15:00&nbsp;WIT</p>
                                        <img src="asset/img/icon-cuaca/hujan ringan-am.png" alt="hujan ringan">
                                        <p>Hujan Ringan</p>
                                        <h2 class="heading-md">27&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Ambon&Prov=Maluku&AreaID=501382&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-5002253">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Sofifi</h2>
                                        <p>15:00&nbsp;WIT</p>
                                        <img src="asset/img/icon-cuaca/hujan sedang-am.png" alt="hujan sedang">
                                        <p>Hujan Sedang</p>
                                        <h2 class="heading-md">31&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Sofifi&Prov=Maluku_Utara&AreaID=5002253&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501447">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Jayapura</h2>
                                        <p>15:00&nbsp;WIT</p>
                                        <img src="asset/img/icon-cuaca/cerah berawan-am.png" alt="cerah berawan">
                                        <p>Cerah Berawan</p>
                                        <h2 class="heading-md">31&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Jayapura&Prov=Papua&AreaID=501447&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-width-full id-501467">
                                <div class="carousel-block-table prakicu-kota">
                                    <div class="service-block bg-cuaca cerah-berawan-siang">
                                        <h2 class="kota">Manokwari</h2>
                                        <p>15:00&nbsp;WIT</p>
                                        <img src="asset/img/icon-cuaca/hujan ringan-am.png" alt="hujan ringan">
                                        <p>Hujan Ringan</p>
                                        <h2 class="heading-md">31&deg;C</h2>
                                        <a class="link-block" href="/cuaca/prakiraan-cuaca.bmkg?kab=Manokwari&Prov=Papua_Barat&AreaID=501467&lang=ID"></a>
                                        <svg class="more-arrow" width="20px" height="20px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="right-arrow-svgrepo-com">
                                                    <g id="Group" fill="#FFA500">
                                                        <path d="M27,53 C12.641,53 1,41.359 1,27 C1,12.641 12.641,1 27,1 C41.359,1 53,12.641 53,27 C53,41.359 41.359,53 27,53 Z" id="Path"></path>
                                                        <path d="M27,54 C12.112,54 0,41.888 0,27 C0,12.112 12.112,0 27,0 C41.888,0 54,12.112 54,27 C54,41.888 41.888,54 27,54 Z M27,2 C13.215,2 2,13.215 2,27 C2,40.785 13.215,52 27,52 C40.785,52 52,40.785 52,27 C52,13.215 40.785,2 27,2 Z" id="Shape" fill-rule="nonzero"></path>
                                                    </g>
                                                    <path d="M22.294,40 C22.038,40 21.782,39.902 21.587,39.707 C21.196,39.316 21.196,38.684 21.587,38.293 L32.88,27 L21.587,15.707 C21.196,15.316 21.196,14.684 21.587,14.293 C21.978,13.902 22.61,13.902 23.001,14.293 L34.499,25.791 C35.166,26.458 35.166,27.542 34.499,28.209 L23.001,39.707 C22.806,39.902 22.55,40 22.294,40 Z" id="Path" stroke="#FFFFFF" stroke-width="3" fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="peringatan-dini-home owl-carousel-v1 md-margin-bottom-20">
                    <div class="clearfix">
                        <div class="peringatan-dini-home-head col-md-2 no-padding">
                            <h4><span></span>Peringatan Dini</h4>
                        </div>
                        <div class="peringatan-dini-home-bg col-md-10">
                            <div class="owl-peringatan-dini">
                                <div><strong>24 Mei 2021 | Aceh</strong>Waspada hujan dengan intensitas sedang hingga lebat dapat disertai angin kencang dan petir untuk wilayah Aceh Tenggara, dan sekitarnya.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=01&NamaProv=Aceh"></a></div>
                                <div><strong>24 Mei 2021 | Banten</strong>Waspada potensi hujan sedang hingga lebat yang dapat disertai kilat/petir dan angin kencang di sebagian besar wilayah Kab. Lebak, Kab. Pandeglang bagian Utara, Kab. Tangerang bagian Selatan, Kota Tangerang dan Kota Tangerang Selatan.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=04&NamaProv=Banten"></a></div>
                                <div><strong>24 Mei 2021 | Bengkulu</strong>Waspada potensi hujan dengan intensitas sedang hingga lebat da[at disertai kilat/petir dan angin kencang di wilayah Kab. Bengkulu Utara, Lebong, Rejang Lebong, Kepahiang, Bengkulu Tengah, Seluma dan Kaur.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=05&NamaProv=Bengkulu"></a></div>
                                <div><strong>24 Mei 2021 | DKI Jakarta</strong>Waspada Potensi hujan disertai kilat/petir dan angin kencang di Jakpus, Jakbar, Jaksel, dan Jaktim pada sore dan malam hari<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=07&NamaProv=DKI Jakarta"></a></div>
                                <div><strong>24 Mei 2021 | Gorontalo</strong>WASPADA POTENSI HUJAN DENGAN INTENSITAS SEDANG HINGGA LEBAT YANG DAPAT DISERTAI KILAT/PETIR DAN ANGIN KENCANG BERDURASI SINGKAT ANTARA SIANG DAN SORE HARI DI WILAYAH POPAYATO, MARISA, TILAMUTA, SUMALATA, PAGUYAMAN PANTAI, PINOGU, ANGGREK, KWANDANG, BATUDAA, DAN SEKITARNYA.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=08&NamaProv=Gorontalo"></a></div>
                                <div><strong>24 Mei 2021 | Jawa Barat</strong>Waspada potensi hujan yang dapat disertai kilat/petir dan angin kencang pada siang/sore hingga dini hari di wilayah Kota dan Kota dan Kab. Bogor, Kota Depok, Kota dan Kab. Sukabumi,&nbsp; Kab. Cianjur, Kab dan Kota Bandung, Kab Bandung Barat, Kota Cimahi, Kab Sumedang, Kab Majalengka, Kab Karawang, Kab dan Kota Bekasi, Kab Purwakarta, Kab Subang, Kab Indramayu, Kab dan Kota Cirebon, Kab Garut, Kab dan Kota Tasikmalaya, Kab Ciamis, Kota Banjar, Kab Kuningan.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=10&NamaProv=Jawa Barat"></a></div>
                                <div><strong>24 Mei 2021 | Jawa Timur</strong>Waspadai hujan intensitas sedang hingga lebat disertai petir dan angin kencang sesaat pada:
                                    Siang-Sore hari di wilayah Jombang, Nganjuk, Kab. Kediri, Kab. Malang, Batu, Kab. Pasuruan, Kab. Probolinggo, Lumajang dan Situbondo.
                                    Malam hari di wilayah Lamongan, Bojonegoro dan Ngawi.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=12&NamaProv=Jawa Timur"></a></div>
                                <div><strong>24 Mei 2021 | Kalimantan Selatan</strong>Waspada potensi hujan disertai kilat/petir dan angin kencang berdurasi singkat pada siang/sore hari di wilayah Kabupaten Kotabaru, Tanah Bumbu dan sekitarnya.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=14&NamaProv=Kalimantan Selatan"></a></div>
                                <div><strong>24 Mei 2021 | Kalimantan Tengah</strong>Waspada potensi hujan intensitas sedang hingga lebat yang dapat disertai petir/kilat dan angin kencang di hampir sebagian besar wilayah Kalimantan Tengah.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=15&NamaProv=Kalimantan Tengah"></a></div>
                                <div><strong>24 Mei 2021 | Kalimantan Utara</strong>Waspada potensi hujan sedang-lebat yang dapat disertai kilat/petir dan angin kencang pada malam dan dini hari di wilayah Sei Menggaris, Sembakung Atulai,&nbsp; Tana Lia,&nbsp; Tanjung Palas Utara, Nunukan, Bunyu, dan Tarakan.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=17&NamaProv=Kalimantan Utara"></a></div>
                                <div><strong>24 Mei 2021 | Lampung</strong>Waspada potensi hujan lebat disertai kilat/petir dan angin kencang di Way Kanan, Lamteng, Lampura, Metro, Balam, Pesawaran, Pringsewu, Pesibar, Lambar, Lamsel, Tanggamus, pada sore hari.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=19&NamaProv=Lampung"></a></div>
                                <div><strong>24 Mei 2021 | Maluku</strong>Waspada hujan dengan intensitas sedang hingga lebat disertai angin kencang di wilayah Kota Ambon, Kota Tual, Kab.: Seram Bagian Barat, Seram Bagian Timur, Maluku Tengah, Buru Selatan, Maluku Tenggara dan Kepulauan Aru.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=20&NamaProv=Maluku"></a></div>
                                <div><strong>24 Mei 2021 | Maluku Utara</strong>WASPADA POTENSI TERJADI HUJAN SEDANG-LEBAT DISERTAI PETIR DAN ANGIN KENCANG DI WILAYAH JAILOLO, SIDANGOLI, SOFIFI, TIDORE, TERNATE, MOROTAI PADA PAGI &amp; SIANG HARI.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=21&NamaProv=Maluku Utara"></a></div>
                                <div><strong>24 Mei 2021 | Nusa Tenggara Barat</strong>Waspadai adanya potensi hujan sedang hingga lebat yang dapat disertai kilat/petir dan angin kencang di sebagian wilayah Kota Mataram, Lombok Utara, Lombok Timur, Lombok Tengah, Sumbawa Barat, pada siang hingga malam hari, dan waspadai tinggi gelombang yang mencapai 2 meter atau lebih di Selat Lombok bag. selatan, Selat Alas bag. selatan, Samudra Hindia selatan NTB dan Selat Sape bag. selatan.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=22&NamaProv=Nusa Tenggara Barat"></a></div>
                                <div><strong>24 Mei 2021 | Papua</strong>BERPOTENSI HUJAN SEDANG HINGGA LEBAT DI WILAYAH AGATS, SUMOHAI, DAN MAMBERAMO ULU PADA SIANG HINGGA MALAM HARI.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=24&NamaProv=Papua"></a></div>
                                <div><strong>24 Mei 2021 | Sulawesi Tengah</strong>Berpotensi hujan dengan intensitas sedang hingga lebat disertai petir/kilat dan angin kencang pada Siang dan Malam hari di wilayah Kab/Kota : Palu, Donggala, Sigi, Parimo, Poso, Touna, Tolitoli, Buol, Morowali, Morowali Utara, Banggai, Banggai Laut dan Banggai Kepulauan<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=29&NamaProv=Sulawesi Tengah"></a></div>
                                <div><strong>24 Mei 2021 | Sulawesi Tenggara</strong>Berpotensi Hujan Sedang di wilayah Kendari, Konawe Selatan, Konawe Utara, Konawe, dan Kolaka Timur<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=30&NamaProv=Sulawesi Tenggara"></a></div>
                                <div><strong>24 Mei 2021 | Sulawesi Utara</strong>WASPADA POTENSI HUJAN LEBAT DI WILAYAH KEP. SITARO<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=31&NamaProv=Sulawesi Utara"></a></div>
                                <div><strong>24 Mei 2021 | Sumatera Barat</strong>Waspada potensi hujan sedang-lebat dapat disertai petir/kilat dan angin kencang pada siang hingga sore hari di wilayah Kep. Mentawai, Pasaman, Limapuluh Kota, Payakumbuh, Agam, Bukittinggi, Tanah Datar, Kab Solok, dan Solok Selatan<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=32&NamaProv=Sumatera Barat"></a></div>
                                <div><strong>24 Mei 2021 | Sumatera Selatan</strong>Waspada potensi hujan sedang - lebat yang dapat disertai petir/kilat dan angin kencang berdurasi singkat pada sore -&nbsp; malam hari di wilayah OKU Selatan, OKU Timur dan OKI.<a class='moree'> Selengkapnya&rarr;</a> <a class='link-block' href="cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=33&NamaProv=Sumatera Selatan"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 md-margin-bottom-10">

                <div class="headline">
                    <h4>Gempabumi Terkini</h4>
                </div>
                <div class="gempabumi-home-bg margin-top-13">
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <a href="https://ews.bmkg.go.id/tews/data/20210524114350.mmi.jpg" class="fancybox img-hover-v1" rel="gallery1" title="Gempabumi Terkini">
                                <img class="img-responsive" src="https://ews.bmkg.go.id/tews/data/20210524114350.mmi.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-xs-6 gempabumi-detail no-padding">
                            <ul class="list-unstyled">
                                <li><span class="waktu">24 Mei 2021, 11:43 WIB</li>
                                <li><span class="ic magnitude"></span>2.9</li>
                                <li><span class="ic kedalaman"></span>4 km</li>
                                <li><span class="ic koordinat"></span>4.92 LS - 103.96 BT</li>
                                <li><span class="ic lokasi"></span>Pusat gempa berada di darat 15 km BaratLaut lampung</li>
                                <li><span class="ic dirasakan"></span>Dirasakan (Skala MMI): II Liwa</li>
                                <li><a class="more" href="gempabumi/gempabumi-dirasakan.bmkg">Selengkapnya →</a></li>
                            </ul>
                        </div>
                    </div>
                    <ul class="list-unstyled gempabumi-detail no-bot">
                        <li><span class="ic lokasi"></span>Pusat gempa berada di darat 15 km BaratLaut lampung</li>
                        <li><span class="ic dirasakan"></span>Dirasakan (Skala MMI): II Liwa</li>
                        <li><a class="more" href="gempabumi/gempabumi-dirasakan.bmkg">Selengkapnya →</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="berita-press-release">
    <div class="container">
        <div class="row">
            <div class="berita-utama-home col-md-8 md-margin-bottom-20">
                <div class="headline">
                    <h4>Berita</h4>
                </div>

                <div class="berita-utama-home margin-bottom-30">
                    <div class="master-slider ms-skin-black-2 round-skin" id="masterslider">

                        <div class="ms-slide blog-slider">
                            <img src="asset/plugins/master-slider/masterslider/style/blank.gif" data-src="https://cdn.bmkg.go.id/Web/upload-17.jpg" />
                            <div class="ms-info"></div>
                            <div class="blog-slider-title">
                                <span class="blog-slider-posted">21 Mei 2021</span>
                                <h2><a href="berita/?p=deputi-bidang-meteorologi-buka-pelatihan-teknis-pengamatan-meteorologi-penerbangan&lang=ID">Deputi Bidang Meteorologi Buka Pelatihan Teknis Pengamatan Meteorologi Penerbangan </a></h2>
                            </div>
                            <div class="ms-thumb">
                                <p>Deputi Bidang Meteorologi Buka Pelatihan Teknis Pengamatan Meteorologi Penerbangan </p>
                            </div>
                        </div>
                        <div class="ms-slide blog-slider">
                            <img src="asset/plugins/master-slider/masterslider/style/blank.gif" data-src="https://cdn.bmkg.go.id/Web/bandicam-2021-05-20-09-47-44-112.jpg" />
                            <div class="ms-info"></div>
                            <div class="blog-slider-title">
                                <span class="blog-slider-posted">20 Mei 2021</span>
                                <h2><a href="berita/?p=bmkg-gelar-pelatihan-group-fellowship-training-on-the-enhancement-of-numerical-weather-prediction-2021&lang=ID">Pusdiklat BMKG Gelar Pelatihan "Group Fellowship Training On The Enhancement of Numerical Weather Prediction 2021"</a></h2>
                            </div>
                            <div class="ms-thumb">
                                <p>Pusdiklat BMKG Gelar Pelatihan "Group Fellowship Training On The Enhancement of Numerical Weather Prediction 2021"</p>
                            </div>
                        </div>
                        <div class="ms-slide blog-slider">
                            <img src="asset/plugins/master-slider/masterslider/style/blank.gif" data-src="https://cdn.bmkg.go.id/Web/WhatsApp-Image-2021-05-12-at-12.55.01-PM-3.jpeg" />
                            <div class="ms-info"></div>
                            <div class="blog-slider-title">
                                <span class="blog-slider-posted">11 Mei 2021</span>
                                <h2><a href="berita/?p=kepala-bmkg-buoy-bppt-mampu-deteksi-ada-tidaknya-tsunami-pasca-gempa&lang=ID">Kepala BMKG: Buoy BPPT Mampu Deteksi Ada Tidaknya Tsunami Pascagempa</a></h2>
                            </div>
                            <div class="ms-thumb">
                                <p>Kepala BMKG: Buoy BPPT Mampu Deteksi Ada Tidaknya Tsunami Pascagempa</p>
                            </div>
                        </div>
                        <div class="ms-slide blog-slider">
                            <img src="asset/plugins/master-slider/masterslider/style/blank.gif" data-src="https://cdn.bmkg.go.id/Web/WhatsApp-Image-2021-05-06-at-7.28.26-AM.jpeg" />
                            <div class="ms-info"></div>
                            <div class="blog-slider-title">
                                <span class="blog-slider-posted">06 Mei 2021</span>
                                <h2><a href="berita/?p=sli-bmkg-dorong-petani-melek-teknologi-dan-ilmu-iklim&lang=ID">SLI BMKG Dorong Petani Melek Teknologi dan Ilmu Iklim</a></h2>
                            </div>
                            <div class="ms-thumb">
                                <p>SLI BMKG Dorong Petani Melek Teknologi dan Ilmu Iklim</p>
                            </div>
                        </div>
                        <div class="ms-slide blog-slider">
                            <img src="asset/plugins/master-slider/masterslider/style/blank.gif" data-src="https://cdn.bmkg.go.id/Web/179697340_517790412683231_7254844579949390585_n.jpg" />
                            <div class="ms-info"></div>
                            <div class="blog-slider-title">
                                <span class="blog-slider-posted">04 Mei 2021</span>
                                <h2><a href="berita/?p=tutup-rangkaian-hmd-2021-puslitbang-bmkg-gelar-kuliah-umum-bahas-dinamika-laut-dan-iklim-indonesia&lang=ID">Tutup Rangkaian HMD 2021, Puslitbang BMKG Gelar Kuliah Umum Bahas Dinamika Laut dan Iklim Indonesia</a></h2>
                            </div>
                            <div class="ms-thumb">
                                <p>Tutup Rangkaian HMD 2021, Puslitbang BMKG Gelar Kuliah Umum Bahas Dinamika Laut dan Iklim Indonesia</p>
                            </div>
                        </div>
                        <div class="ms-slide blog-slider">
                            <img src="asset/plugins/master-slider/masterslider/style/blank.gif" data-src="https://cdn.bmkg.go.id/Web/bandicam-2021-04-30-15-36-28-471.jpg" />
                            <div class="ms-info"></div>
                            <div class="blog-slider-title">
                                <span class="blog-slider-posted">30 Apr 2021</span>
                                <h2><a href="berita/?p=rotasi-pejabat-administrasi-kepala-bmkg-ingatkan-dedikasi-dan-loyalitas&lang=ID">Rotasi Pejabat Administrasi, Kepala BMKG Ingatkan Dedikasi dan Loyalitas</a></h2>
                            </div>
                            <div class="ms-thumb">
                                <p>Rotasi Pejabat Administrasi, Kepala BMKG Ingatkan Dedikasi dan Loyalitas</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="http://web.meteo.bmkg.go.id/id/posko-nataru-2019-2020/posko/posko-jawa" target="_blank">
                    <img class="img-responsive" data-original="https://www.bmkg.go.id/asset/img/banner/banner-posko-monitoring-2021.png" alt="">
                    <!--<img class="img-responsive" data-original="https://www.bmkg.go.id/asset/img/banner/banner_panduan-evakuasi-gempa-tsunami-di-situasi-covid-19.jpg" alt="">-->
                </a>
                <!--
			<a href="cuaca/posko.bmkg">
				<img class="img-responsive" data-original="https://www.bmkg.go.id/asset/img/banner/banner_posko_natal_tahun_baru_2020.jpeg" alt="">
			</a>
			<div id="popup">
				<a href="http://web.meteo.bmkg.go.id/id/posko-nataru-2019-2020/darat" target="_blank">
					<img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/banner_posko_natal_tahun_baru_2020.jpg" alt="">
				</a>
			</div>-->

            </div>

            <div class="col-md-4 md-margin-bottom-10">
                <!-- <div class="headline">
                    <h4>Siaran Pers</h4>
                </div> -->

                <!-- <div class="press-release-home-bg margin-bottom-20">
                    <div class="blog-thumb margin-bottom-20">
                        <div class="blog-thumb-mkg">
                            <img src="https://cdn.bmkg.go.id/Web/Lokasi-gempabumi-Blitar-250x150.jpg" alt="">
                        </div>
                        <div class="blog-thumb-desc">
                            <h3><a href="/press-release/?p=gempabumi-tektonik-m-62-di-blitar-jawa-timur-tidak-berpotensi-tsunami&tag=press-release&lang=ID">Gempabumi Tektonik M 6,2 di Blitar-Jawa Timur, Tidak Berpotensi Tsunami</a></h3>
                            <ul class="blog-thumb-info">
                                <li>21 Mei 2021</li>
                            </ul>
                        </div>
                    </div>

                    <div class="blog-thumb margin-bottom-20">
                        <div class="blog-thumb-mkg">
                            <img src="https://cdn.bmkg.go.id/Web/GBT-250x150.jpg" alt="">
                        </div>
                        <div class="blog-thumb-desc">
                            <h3><a href="/press-release/?p=gerhana-bulan-total-26-mei-2021&tag=press-release&lang=ID">Gerhana Bulan Total 26 Mei 2021</a></h3>
                            <ul class="blog-thumb-info">
                                <li>21 Mei 2021</li>
                            </ul>
                        </div>
                    </div>

                    <div class="blog-thumb margin-bottom-20">
                        <div class="blog-thumb-mkg">
                            <img src="https://cdn.bmkg.go.id/Web/WhatsApp-Image-2021-05-21-at-8.16.20-AM-250x150.jpeg" alt="">
                        </div>
                        <div class="blog-thumb-desc">
                            <h3><a href="/press-release/?p=super-blood-moon-gerhana-bulan-total-26-mei-2021&tag=press-release&lang=ID">Super Blood Moon; Gerhana Bulan Total 26 Mei 2021</a></h3>
                            <ul class="blog-thumb-info">
                                <li>21 Mei 2021</li>
                            </ul>
                        </div>
                    </div>

                    <div class="blog-thumb margin-bottom-20">
                        <div class="blog-thumb-mkg">
                            <img src="https://cdn.bmkg.go.id/Web/76574-gelombang-panas-250x150.jpg" alt="">
                        </div>
                        <div class="blog-thumb-desc">
                            <h3><a href="/press-release/?p=apakah-di-indonesia-terjadi-gelombang-panas-ini-penjelasan-bmkg&tag=press-release&lang=ID">Apakah di Indonesia Terjadi Gelombang Panas? Begini Penjelasan BMKG</a></h3>
                            <ul class="blog-thumb-info">
                                <li>17 Mei 2021</li>
                            </ul>
                        </div>
                    </div>

                </div> -->
                <a href="gempabumi/panduan-evakuasi-gempa-tsunami-situasi-covid19.bmkg">
                    <img class="img-responsive md-margin-bottom-30" data-original="https://www.bmkg.go.id/asset/img/banner/banner_web_Panduan_evakuasi_gempa_tsunami_di_situasi_covid_19_01.png" alt="">
                </a>

                <!-- include file="includes/depan-section-banner-layanan.bmkg" -->
            </div>
        </div>
    </div>
</section>

<!-- <section id="klimatologi">
    <div class="container">
        <div class="row margin-bottom-30 md-margin-bottom-10">
            <div class="col-md-6 md-margin-bottom-20">
                <div class="kualitas-udara-home no-space-carousel-block owl-carousel-v1 owl-work-v1">
                    <div class="headline">
                        <h4 class="pull-left">Kualitas Udara (PM<sub>10</sub> &amp; PM<sub>2.5</sub>)</h4>
                        <div class="owl-navigation">
                            <div class="customNavigation">
                                <a class="owl-btn prev-ku"><i class="fa fa-angle-left"></i></a>
                                <a class="owl-btn next-ku"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="kualitas-udara-home-bg">
                        <div class="owl-kualitas-udara">
                            <div class="ku-chart col-width-full PALEMBANG">
                                <div class="ku-in">
                                    <h3 class="heading-xs">Palembang</h3>
                                    <div class="circle margin-bottom-20" id="PALEMBANG"></div>
                                    <p><a class="link-block" href="/kualitas-udara/informasi-partikulat-pm10.bmkg?Lokasi=PALEMBANG">Baik</a></p>

                                </div>
                            </div>

                            <div class="ku-chart col-width-full PANGKALANBUN">
                                <div class="ku-in">
                                    <h3 class="heading-xs">Pangkalanbun</h3>
                                    <div class="circle margin-bottom-20" id="PANGKALANBUN"></div>
                                    <p><a class="link-block" href="/kualitas-udara/informasi-partikulat-pm10.bmkg?Lokasi=PANGKALANBUN">Baik</a></p>

                                </div>
                            </div>

                            <div class="ku-chart col-width-full CIBEUREUM">
                                <div class="ku-in">
                                    <h3 class="heading-xs">Cibeureum</h3>
                                    <div class="circle margin-bottom-20" id="CIBEUREUM"></div>
                                    <p><a class="link-block" href="/kualitas-udara/informasi-partikulat-pm10.bmkg?Lokasi=CIBEUREUM">Sedang</a></p>

                                </div>
                            </div>

                            <div class="ku-chart col-width-full KOTOTABANG">
                                <div class="ku-in">
                                    <h3 class="heading-xs">Kototabang</h3>
                                    <div class="circle margin-bottom-20" id="KOTOTABANG"></div>
                                    <p><a class="link-block" href="/kualitas-udara/informasi-partikulat-pm10.bmkg?Lokasi=KOTOTABANG">Baik</a></p>

                                </div>
                            </div>

                            <div class="ku-chart col-width-full KEMAYORAN">
                                <div class="ku-in">
                                    <h3 class="heading-xs">Kemayoran</h3>
                                    <div class="circle margin-bottom-20" id="KEMAYORAN"></div>
                                    <p><a class="link-block" href="/kualitas-udara/informasi-partikulat-pm10.bmkg?Lokasi=KEMAYORAN">Sedang</a></p>

                                </div>
                            </div>

                        </div>
                        <ul class="ku-legend">
                            <li>0&ndash;50 <span>&micro;gr/m<sup>3</sup></span><small>Baik</small></li>
                            <li>51&ndash;150 <span>&micro;gr/m<sup>3</sup></span><small>Sedang</small></li>
                            <li>151&ndash;350 <span>&micro;gr/m<sup>3</sup></span><small>Tidak Sehat</small></li>
                            <li>351&ndash;420 <span>&micro;gr/m<sup>3</sup></span><small>Sangat Tidak Sehat</small></li>
                            <li>> 420 <span>&micro;gr/m<sup>3</sup></span><small>Berbahaya</small></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 md-margin-bottom-20">
                <div class="headline">
                    <h4>Informasi Iklim</h4>
                </div>
                <div class="img-mkg-home-bg">
                    <a href="https://cdn.bmkg.go.id/DataMKG/CEWS/pch/pch.bulan.1.cond1.png?id=85621tumfh6x54f6hs7it0d" class="fancybox img-hover-v1" rel="gallery" title="Informasi Ikilim">
                        <img class="img-responsive" data-original="https://cdn.bmkg.go.id/DataMKG/CEWS/pch/pch.bulan.1.cond1.png?id=85621tumfh6x54f6hs7it0d" alt="Informasi Ikilim">
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 md-margin-bottom-20">
                <div class="headline">
                    <h4>Hari Tanpa Hujan</h4>
                </div>
                <div class="img-mkg-home-bg">
                    <a href="https://cdn.bmkg.go.id/DataMKG/CEWS/hth/PetaMonitoringHariTanpaHujan-Indonesia.jpg?id=85621tumfh6x54f6hs7it0d" class="fancybox img-hover-v1" rel="gallery" title="Hari Tanpa Hujan">
                        <img class="img-responsive" data-original="https://cdn.bmkg.go.id/DataMKG/CEWS/hth/PetaMonitoringHariTanpaHujan-Indonesia.jpg?id=85621tumfh6x54f6hs7it0d" alt="Hari Tanpa Hujan">
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-6 md-margin-bottom-20">
                <div class="headline">
                    <h4>Citra Satelit</h4>
                </div>
                <div class="img-mkg-home-bg">
                    <a href="https://inderaja.bmkg.go.id/IMAGE/HIMA/H08_EH_Indonesia.png?id=85621tumfh6x54f6hs7it0d" class="fancybox img-hover-v1" rel="gallery" title="Citra Satelit">
                        <img class="img-responsive" data-original="https://inderaja.bmkg.go.id/IMAGE/HIMA/H08_EH_Indonesia.png?id=85621tumfh6x54f6hs7it0d" alt="Citra Satelit">
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 md-margin-bottom-20">
                <div class="headline">
                    <h4>Prakiraan Tinggi Gelombang</h4>
                </div>
                <div class="img-mkg-home-bg">
                    <a href="https://cdn.bmkg.go.id/DataMKG/MEWS/maritim/gelombang_maritim.png?id=85621tumfh6x54f6hs7it0d" class="fancybox img-hover-v1" rel="gallery" title="Prakiraan Tinggi Gelombang">
                        <img class="img-responsive" data-original="https://cdn.bmkg.go.id/DataMKG/MEWS/maritim/gelombang_maritim.png?id=85621tumfh6x54f6hs7it0d" alt="Prakiraan Tinggi Gelombang">
                    </a>
                </div>
            </div>
            <div class="clearfix visible-sm"></div>
            <div class="col-md-3 col-sm-6 md-margin-bottom-10">
                <div class="headline">
                    <h4>Prakiraan Angin</h4>
                </div>
                <div class="img-mkg-home-bg">
                    <a href="https://cdn.bmkg.go.id/DataMKG/MEWS/angin/streamline_d1.jpg?id=85621tumfh6x54f6hs7it0d" class="fancybox img-hover-v1" rel="gallery" title="Prakiraan Angin">
                        <img class="img-responsive" data-original="https://cdn.bmkg.go.id/DataMKG/MEWS/angin/streamline_d1.jpg?id=85621tumfh6x54f6hs7it0d" alt="Prakiraan Angin">
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 md-margin-bottom-10">
                <div class="headline">
                    <h4>Potensi Kebakaran Hutan</h4>
                </div>
                <div class="img-mkg-home-bg">
                    <a href="https://cdn.bmkg.go.id/DataMKG/MEWS/spartan/36_indonesia_ffmc_01.png?id=85621tumfh6x54f6hs7it0d" class="fancybox img-hover-v1" rel="gallery" title="Potensi Kebakaran Hutan">
                        <img class="img-responsive" data-original="https://cdn.bmkg.go.id/DataMKG/MEWS/spartan/36_indonesia_ffmc_01.png?id=85621tumfh6x54f6hs7it0d" alt="Potensi Kebakaran Hutan">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- <section id="foto-artikel-pengumuman">
    <div class="container">
        <div class="row">
            <div class="col-md-4 md-margin-bottom-20">
                <div class="foto-daerah-home tab-v1">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#foto">Berita Foto</a></li>
                        <li><a data-toggle="tab" href="#daerah">Berita Daerah</a></li>
                    </ul>

                    <div class="tab-content foto-daerah-home-bg margin-top-13">
                        <div id="foto" class="tab-pane fade in active">
                            <div class="blog-thumb margin-bottom-20">
                                <div class="blog-thumb-mkg">
                                    <img data-original="https://cdn.bmkg.go.id/Web/bandicam-2021-05-17-16-29-16-194-250x150.jpg" alt="" width="120" height="72">
                                </div>
                                <div class="blog-thumb-desc">
                                    <h3><a href="berita/?p=bmkg-gelar-halal-bi-halal-idul-fitri-1442h-secara-daring&lang=ID">BMKG Gelar Halal Bi Halal Idul Fitri 1442 H Secara Daring</a></h3>
                                    <ul class="blog-thumb-info">
                                        <li>17 Mei 2021</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="blog-thumb margin-bottom-20">
                                <div class="blog-thumb-mkg">
                                    <img data-original="https://cdn.bmkg.go.id/Web/foto-utama-124-250x150.jpg" alt="" width="120" height="72">
                                </div>
                                <div class="blog-thumb-desc">
                                    <h3><a href="berita/?p=tim-psgt-lakukan-pengamatan-hilal-di-pantai-karnaval-ancol&lang=ID">Tim PSGT Lakukan Pengamatan Hilal di Pantai Karnaval Ancol</a></h3>
                                    <ul class="blog-thumb-info">
                                        <li>13 Apr 2021</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="blog-thumb margin-bottom-20">
                                <div class="blog-thumb-mkg">
                                    <img data-original="https://cdn.bmkg.go.id/Web/SIDOARJO-5-250x150.jpg" alt="" width="120" height="72">
                                </div>
                                <div class="blog-thumb-desc">
                                    <h3><a href="berita/?p=kunjungan-kerja-kepala-bmkg-di-stasiun-meteorologi-juanda-sidoarjo&lang=ID">Kunjungan Kerja Kepala BMKG di Stasiun Meteorologi Juanda Sidoarjo</a></h3>
                                    <ul class="blog-thumb-info">
                                        <li>08 Mar 2021</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div id="daerah" class="tab-pane fade in">
                            <div class="blog-thumb margin-bottom-20">
                                <div class="blog-thumb-mkg">
                                    <img data-original="https://cdn.bmkg.go.id/Web/2-36-250x150.jpeg" alt="" width="120" height="72">
                                </div>
                                <div class="blog-thumb-desc">
                                    <h3><a href="berita/?p=membangun-sinergi-bersama-media-bmkg-sorong-perkuat-perjanjian-kerja-sama-antara-rri-sorong-dan-tv-cwm-sorong&lang=ID">Membangun Sinergi Bersama Media, BMKG Sorong Perkuat Perjanjian Kerja Sama Antara RRI Sorong dan TV CWM Sorong</a></h3>
                                    <ul class="blog-thumb-info">
                                        <li>11 Mei 2021</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="blog-thumb margin-bottom-20">
                                <div class="blog-thumb-mkg">
                                    <img data-original="https://cdn.bmkg.go.id/Web/WhatsApp-Image-2021-05-07-at-06.49.13-250x150.jpeg" alt="" width="120" height="72">
                                </div>
                                <div class="blog-thumb-desc">
                                    <h3><a href="berita/?p=inspeksi-kepala-bbmkg-wilayah-i-medan-ke-stasiun-geofisika-deli-serdang&lang=ID">Inspeksi Kepala BBMKG Wilayah I Medan ke Stasiun Geofisika Deli Serdang</a></h3>
                                    <ul class="blog-thumb-info">
                                        <li>07 Mei 2021</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="blog-thumb margin-bottom-20">
                                <div class="blog-thumb-mkg">
                                    <img data-original="https://cdn.bmkg.go.id/Web/WhatsApp-Image-2021-05-07-at-11.11.49-250x150.jpeg" alt="" width="120" height="72">
                                </div>
                                <div class="blog-thumb-desc">
                                    <h3><a href="berita/?p=kenalkan-potensi-ancaman-gempabumi-dan-tsunami-stageof-sorong-lakukan-goes-to-school&lang=ID">Kenalkan Potensi Ancaman Gempabumi dan Tsunami, Stageof Sorong Lakukan Goes To School</a></h3>
                                    <ul class="blog-thumb-info">
                                        <li>07 Mei 2021</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 artikel-pengumuman-home md-margin-bottom-20">
                <div class="headline">
                    <h4>Artikel</h4>
                </div>

                <div class="blog-thumb margin-bottom-10">
                    <div class="blog-thumb-desc">
                        <h3><a href="/artikel/?p=dampak-penambahan-jaringan-inatews-di-kab-maros-sulawesi-selatan&tag=artikel&lang=ID">Dampak Penambahan Jaringan InaTEWS di Kab. Maros, Sulawesi Selatan</a></h3>
                        <ul class="blog-thumb-info">
                            <li>24 Mei 2021</li>
                        </ul>
                    </div>
                </div>

                <div class="blog-thumb margin-bottom-10">
                    <div class="blog-thumb-desc">
                        <h3><a href="/artikel/?p=gerhana-bulan-total-super-blood-moon&tag=artikel&lang=ID">Gerhana Bulan Total (Super Blood Moon) </a></h3>
                        <ul class="blog-thumb-info">
                            <li>19 Mei 2021</li>
                        </ul>
                    </div>
                </div>

                <div class="blog-thumb margin-bottom-10">
                    <div class="blog-thumb-desc">
                        <h3><a href="/artikel/?p=analisa-lengkap-kejadian-hujan-lebat-dan-anging-kencang-puting-beliung-di-desa-labuhan-ratu-ii-kecamatan-way-jepara-lampung-timur&tag=artikel&lang=ID">Analisis Lengkap Kejadian Hujan Lebat dan Anging Kencang (Puting Beliung) di Desa Labuhan Ratu II Kecamatan Way Jepara Lampung Timur</a></h3>
                        <ul class="blog-thumb-info">
                            <li>10 Mei 2021</li>
                        </ul>
                    </div>
                </div>

                <div class="blog-thumb margin-bottom-10">
                    <div class="blog-thumb-desc">
                        <h3><a href="/artikel/?p=analisis-klimatologis-terkait-hujan-ekstrem-di-kecamatan-kediri-lombok-barat-01-mei-2021&tag=artikel&lang=ID">Analisis Klimatologis Terkait Hujan Ekstrem Di Kecamatan Kediri Lombok Barat 01 Mei 2021</a></h3>
                        <ul class="blog-thumb-info">
                            <li>05 Mei 2021</li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="artikel-pengumuman-home col-md-4 md-margin-bottom-20">
                <div class="headline">
                    <h4>Pengumuman</h4>
                </div>

                <div class="blog-thumb margin-bottom-10">
                    <div class="blog-thumb-desc">
                        <h3><a href="/pengumuman/?p=penempatan-tugas-lulusan-ikatan-dinas-stmkg-program-diploma-iv-tahun-2020&tag=pengumuman&lang=ID">Penempatan Tugas Lulusan Ikatan Dinas STMKG Program Diploma IV Tahun 2020</a></h3>
                        <ul class="blog-thumb-info">
                            <li>21 Mei 2021</li>
                        </ul>
                    </div>
                </div>

                <div class="blog-thumb margin-bottom-10">
                    <div class="blog-thumb-desc">
                        <h3><a href="/pengumuman/?p=pemanggilan-peserta-pelatihan-teknis-meteorologi-penerbangan-secara-online-tahun-2021&tag=pengumuman&lang=ID">Pemanggilan Peserta Pelatihan Teknis Meteorologi Penerbangan Secara Online Tahun 2021</a></h3>
                        <ul class="blog-thumb-info">
                            <li>18 Mei 2021</li>
                        </ul>
                    </div>
                </div>

                <div class="blog-thumb margin-bottom-10">
                    <div class="blog-thumb-desc">
                        <h3><a href="/pengumuman/?p=pengumuman-hasil-seleksi-penyesuaian-inpassing-jabatan-fungsional-analis-pengelolaan-keuangan-apbn-pranata-keuangan-apbn-dan-penata-laksana-barang-pegawai-bmkg-tahun-2021&tag=pengumuman&lang=ID">Pengumuman Hasil Seleksi Penyesuaian / Inpassing Jabatan Fungsional Analis Pengelolaan Keuangan APBN, Pranata Keuangan APBN, dan Penata Laksana Barang Pegawai BMKG Tahun 2021</a></h3>
                        <ul class="blog-thumb-info">
                            <li>10 Mei 2021</li>
                        </ul>
                    </div>
                </div>

                <div class="blog-thumb margin-bottom-10">
                    <div class="blog-thumb-desc">
                        <h3><a href="/pengumuman/?p=tawaran-mengikuti-pelatihan-daring-rtc-nanjing-nuist-tahun-2021&tag=pengumuman&lang=ID">Tawaran Mengikuti Pelatihan Daring RTC Nanjing/NUIST Tahun 2021</a></h3>
                        <ul class="blog-thumb-info">
                            <li>10 Mei 2021</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section> -->


<!-- <section id="partner" class="margin-bottom-30">
    <div class="container">
        <div class="row">
            <div class="col-xs-12md-margin-bottom-20">
                <div class="banner-layanan-home owl-carousel-v1">
                    <div class="owl-banner-layanan">
                        <div class="col-md-12">
                            <a href="https://www.wmo.int/" target="_blank">
                                <img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/banner-wmo.jpg" alt="WMO">
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="http://epengawasan.bmkg.go.id/wbs/" target="_blank">
                                <img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/banner-epengawasan.jpg" alt="E-Pengawasan">
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="https://www.lapor.go.id/" target="_blank">
                                <img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/Lapor-UKP4.jpg" alt="LAPOR!">
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="https://www.bmkg.go.id/rb" target="_blank">
                                <img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/banner-reformasi-birokrasi.jpg" alt="Reformasi Birokrasi BMKG">
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="https://www.bmkg.go.id/profil/?p=stop-pungli-bmkg" target="_blank">
                                <img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/saber-pungli.jpg" alt="Saber Pungli">
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="http://dataonline.bmkg.go.id/home" target="_blank">
                                <img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/banner_data_online.jpg" alt="Data Online">
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="http://puslitbang.bmkg.go.id/jmg" target="_blank">
                                <img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/banner-journalMG.jpg" alt="Jurnal Meteorologi dan Geofisika">
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="http://inatews.bmkg.go.id/new/query_gmpqc.php" target="_blank">
                                <img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/dataGempa.jpg" alt="Data Gempabumi">
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="https://www.bmkg.go.id/geofisika-potensial/kalkulator-magnet-bumi.bmkg" target="_blank">
                                <img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/kalkulator-magnet.jpg" alt="Kalkulator Magnet Bumi">
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="#">
                                <img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/mottobmkg.jpg" alt="Motto BMKG">
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="https://www.bmkg.go.id/profil/?p=maklumat-pelayanan">
                                <img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/maklumatpelayanan.jpg" alt="Maklumat Pelayanan">
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="http://lpse.bmkg.go.id" target="_blank">
                                <img class="img-responsive" src="https://www.bmkg.go.id/asset/img/banner/lpse.jpg" alt="LPSE">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
@endsection