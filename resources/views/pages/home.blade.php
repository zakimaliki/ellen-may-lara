  @extends('layouts.app')

  @section('tittle')
      Ellen May
  @endsection

  @section('content')
    <main>
    <div class="page-content page-home" style="margin-top: 85px !important;">
      <!-- Hero section -->
      <div class="pt-0">
        <div class="row no-gutters">
          <div class="col-12">
            <div id="carousel-example" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="img-responsive d-block w-100" src="images/slide1.png" alt="" style="object-fit: cover">
                  </a>
                  <div class="carousel-caption" class="content-car" style="top: 20px !important;">
                    <h3 class="hero-sec1">
                      Mau penghasilan lebih dari saham dengan praktis
                      dan rendah resiko?</h3>
                    <h2 class="hero-sec1">
                      Mulai dari mana?</h2>
                    <h2 class="hero-sec1">
                      Mau buka rekening saham pertama?
                      <br /> Kelas Calon Investor</h2>
                    <button class="btn btn-primary">selengkapnya</button>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="img-responsive d-block w-100" src="images/slide2.png" alt="" style="object-fit: cover"
                    class="img-height">
                  </a>
                  <div class="carousel-caption" class="content-car" style="top: 20px !important;">
                    <h3 class="hero-sec1">
                      Mau penghasilan lebih dari saham dengan praktis
                      dan rendah resiko?</h3>
                    <h2 class="hero-sec1">
                      Mulai dari mana?</h2>
                    <h2 class="hero-sec1">
                      Ingin tahu strategi saham terbaru?
                      <br>
                      pelajari di Seminar Online Diskon Vaganza</h2>
                    <button class="btn btn-primary">selengkapnya</button>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="img-responsive d-block w-100" src="images/slide3.png" alt="" style="object-fit: cover"
                    class="img-height">
                  </a>
                  <div class="carousel-caption" class="content-car" style="top: 20px !important;">
                    <h3 class="hero-sec1">
                      Mau penghasilan lebih dari saham dengan praktis
                      dan rendah resiko?</h3>
                    <h2 class="hero-sec1">
                      Mulai dari mana?</h2>
                    <h2 class="hero-sec1">
                      Ingin dibimbing setiap hari dan bisa tanya saham?
                      <br />
                      Bonus Gratis Referensi Saham
                      Daftar sebagai user EMTRADE</h2>
                    <button class="btn btn-primary">selengkapnya</button>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>


      <!-- Testimoni -->
      <section class="py-3">
        <div class="container ">
          <div class="row">
            <div class="col-12 text-center py-5" data-aos="fade-up">
              <h3>Testimoni</h3>
            </div>
            <div class="w-100" data-aos="zoom-in">
              <div id="webCarousel" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="pi-draggable">
                      <div class="container">
                        <div class="row">
                          <div class="d-flex flex-column">
                            <div>
                              <div class="testi-wrapper">
                                <img src="images/image1.png" alt="Testimonial" class="position-absolute img-wdh"
                                  style=" z-index: 1" />
                                <img src="images/frame.png" alt="Testimonial frame"
                                  class="position-absolute testi-frame " />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-5">
                            <img src="images/stars.png" alt="stars">
                            <p class="text-justify">
                              Pada awalnya saya belum mengerti bagaimana cara memilih saham yang bagus.
                              Saya mengikuti rekomendasi dari orang lain tanpa arahan dan alasan yang jelas
                              mengapa orang ia membeli saham itu. Tetapi semenjak saya bergabung dengan
                              EMTrade, saya tahu bagaimana cara memilih saham yg bagus, karena EMTrade
                              memiliki fitur yang sangat lengkap untuk edukasi dan kita juga bisa konsultasi
                              saham di dalam aplikasi ini. Saya juga sangat terbantu dengan fasilitas Morning
                              Briefing. Waktu itu saya membeli saham WSKT dengan dan mendapat keuntungan
                              hingga dua puluh persen. Terima kasih :)
                            </p>
                            <h5 class="color-sec">Ferditius Bernardus</h5>
                            <span class="color-sec"><img src="images/instagram2.png" alt="">
                              ferditiusbernard</span>
                            <br /><button class="btn btn-primary mt-1">Read Their Story</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="pi-draggable">
                      <div class="container">
                        <div class="row">
                          <div class="d-flex flex-column">
                            <div>
                              <div class="testi-wrapper">
                                <img src="images/image2.png" alt="Testimonial" class="position-absolute"
                                  style=" z-index: 1" />
                                <img src="images/frame.png" alt="Testimonial frame"
                                  class="position-absolute testi-frame" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-5">
                            <img src="images/stars.png" alt="stars">
                            <p class="text-justify">
                              Pada awalnya saya belum mengerti bagaimana cara memilih saham yang bagus.
                              Saya mengikuti rekomendasi dari orang lain tanpa arahan dan alasan yang jelas
                              mengapa orang ia membeli saham itu. Tetapi semenjak saya bergabung dengan
                              EMTrade, saya tahu bagaimana cara memilih saham yg bagus, karena EMTrade
                              memiliki fitur yang sangat lengkap untuk edukasi dan kita juga bisa konsultasi
                              saham di dalam aplikasi ini. Saya juga sangat terbantu dengan fasilitas Morning
                              Briefing. Waktu itu saya membeli saham WSKT dengan dan mendapat keuntungan
                              hingga dua puluh persen. Terima kasih :)
                            </p>
                            <h5 class="color-sec">Jonathan</h5>
                            <span class="color-sec"><img src="images/instagram2.png" alt=""> jojo_nathannnnn
                              Handy Prasetyor</span>
                            <br /><button class="btn btn-primary mt-1">Read Their Story</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="pi-draggable">
                      <div class="container">
                        <div class="row">
                          <div class="d-flex flex-column">
                            <div>
                              <div class="testi-wrapper">
                                <img src="images/image3.png" alt="Testimonial" class="position-absolute"
                                  style=" z-index: 1" />
                                <img src="images/frame.png" alt="Testimonial frame"
                                  class="position-absolute testi-frame" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-5">
                            <img src="images/stars.png" alt="stars">
                            <p class="text-justify">
                              Saya mulai join EMTrade 19 Mei 2020. Pertumbuhan portofolio saya,
                              bersih mencapai tiga puluh persen sekitar sebulan. Terima kasih EMTrade
                              selalu memberikan arahan dan panduan emiten apa yang sebaiknya dibeli
                              dan dijual setiap harinya, serta edukasi untuk mengatur risiko.
                            </p>
                            <h5 class="color-sec">Handy Prasetyo</h5>
                            <span class="color-sec"><img src="images/instagram2.png" alt="">
                              prasetyo.handy</span>
                            <br /><button class="btn btn-primary mt-1">Read Their Story</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

      <!-- Tentang Kami -->
      <div class="container py-1">
        <div class="row">
          <div class="col-12 text-center pb-5" data-aos="fade-up">
            <h3>Tentang Kami</h3>
          </div>
        </div>
        <div class="col-12 text-justify" data-aos="fade-up">
          <p>May Institute berdiri sejak 2011, memberikan layanan edukasi dan sudah membantu lebih dari 200.000
            orang dalam
            berinvestasi dan trading saham.
            Saat ini layanan kami berikan secara online terutama melalui aplikasi EMTrade, dan juga seminar online
            rutin tiap pekan
            (Seminar Online Diskonvaganza), serta bekerja sama dengan PT Bursa Efek Indonesia dari berbagai daerah di
            Indonesia
            dan angggota bursa dari seluruh Indonesia untuk pembukaan rekening saham dan edukasi untuk pemula.</p>
          <p class="mt-1">Informasi selengkapnya klik disini untuk menghubungi <a href="#">kami.</a></p>
        </div>
        <div class="my-5 text-center">
          <img src="images/sertifikasi kominfo.png" alt="sertifikasi">
        </div>
      </div>
    </div>
  </main>
  @endsection
  

