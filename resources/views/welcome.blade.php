@extends('layouts.app')

@section('content')
    <section class="hero-wrap js-fullheight" style="background-image: url(https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80);" data-section="home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="d-flex align-items-center" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
							<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center mr-3">
    						<span class="ion-ios-play play mr-2"></span>
    						<span class="watch">Tonton Video</span>
    					</a>
						</p>
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Website kursus online terbaik di Indonesia</h1>
            <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tidak perlu bingung untuk pergi kursus kemana saja</p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-services ftco-no-pt">
      <div class="container">
        <div class="row services-section">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-layers"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Pendaftaran yang mudah</h3>
                <p>Pendaftaran yang sangat mudah, tidak perlu mengisi hal-hal yang rumit</p>
                {{-- <p><a href="#" class="btn btn-primary">Read more</a></p> --}}
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-compass-symbol"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Pengajar yang hebat</h3>
                <p>Pengajar merupakan orang - orang hebat yang sangat berpengalaman di bidangnya.</p>
                {{-- <p><a href="#" class="btn btn-primary">Read more</a></p> --}}
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-layers"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Harga yang murah</h3>
                <p>Walaupun pengajar yang berpengalaman, harga kursus sangat murah dan aman untuk kantong.</p>
                {{-- <p><a href="#" class="btn btn-primary">Read more</a></p> --}}
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="section-counter" data-section="about">
    	<div class="container">
    		<div class="row d-flex">    			
    			<div class="col-md-12 col-lg-12 pl-lg-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Welcome</span>
		            <h2 class="mb-4">Sejak 2020</h2>
		            <p>Primalangga dibentuk atas dasar peningkatan pendidikan di Indonesia. Negara ini memerlukan edukasi yang lebih mendalam, oleh karena itu Primalangga hadir dan menjadi penenang.</p>
		            <p>Walaupun pendidikan di Indonesia masih kurang, namun kami akan sebisa mungkin meningkatkan mutu kualitas pendidikan.</p>
		            <p>Tanpa mengambil keuntungan yang banyak, Primalangga bersungguh-sungguh akan meningkatkan kualitas pendidikan tanah air.</p>
		          </div>
		        </div>		    		
	        </div>
        </div>
    	</div>
    </section>

    <section class="testimony-section bg-light" data-section="testimony">
      <div class="container">
        <div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Produk</span>
            <h2 class="mb-4">Produk Kami</h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
        	<div class="col-md-12 d-flex align-items-center">
        		<div class="carousel-testimony owl-carousel">
	        		<div class="item">
	        			<div class="testimony-wrap d-flex align-items-stretch">
		              <div class="user-img d-flex align-self-stretch" style="background-image: url(img/secret-file.png);background-size:contain">
		              </div>
		              <div class="text d-flex align-items-center">
		              	<div>
			              	<div class="icon-quote">
			              		<span class="icon-quote-left"></span>
			              	</div>
			                <p class="mb-4">Pembelajaran selama 2 kali seminggu selama sebulan penuh.</p>
			                <p class="mb-4">Dibimbing oleh pengajar yang handal dibidangnya.</p>
			                <p class="name">Primalangga Private</p>
			                <span class="position">Rp 200.000</span>
		                </div>
		              </div>
		            </div>
	        		</div>
	        		<div class="item">
	        			<div class="testimony-wrap d-flex align-items-stretch">
		              <div class="user-img d-flex align-self-stretch" style="background-image: url(img/read.png);background-size:contain">
		              </div>
		              <div class="text d-flex align-items-center">
		              	<div>
			              	<div class="icon-quote">
			              		<span class="icon-quote-left"></span>
			              	</div>
			                <p class="mb-4">Aktif selama sebulan setelah pembelian paket.</p>
			                <p class="mb-4">Akses seluruh video pembelajaran materi yang tersedia.</p>
			                <p class="mb-4">Akses seluruh latihan soal yang tersedia.</p>
			                <p class="name">Belajar Mand<strong>irit</strong></p>
			                <span class="position">Rp. 200.000</span>
		                </div>
		              </div>
		            </div>
              </div>
              <div class="item">
	        			<div class="testimony-wrap d-flex align-items-stretch">
		              <div class="user-img d-flex align-self-stretch" style="background-image: url(img/tag.png); background-size:contain">
		              </div>
		              <div class="text d-flex align-items-center">
		              	<div>
			              	<div class="icon-quote">
			              		<span class="icon-quote-left"></span>
			              	</div>
			                <p class="mb-4">Aktif gratis materi-materi berkualitas.</p>
			                <p class="mb-4">Update hampir setiap minggu.</p>
			                <p class="name">Freemalangga</p>
			                <span class="position">Gratis</span>
		                </div>
		              </div>
		            </div>
	        		</div>
	        	</div>
        	</div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Contact</span>
            <h2 class="mb-4">Kontak Kami</h2>
            <p>Kami selalu setia menemani Anda, dimanapun dan kapanpun</p>
          </div>
        </div>
        <div class="row d-flex contact-info justify-content-center">
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<h3 class="mb-4">Address</h3>
	            <p>Institut Teknologi Sepuluh Nopember</p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="mailto:info@yoursite.com">primalangga@gmail.com</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<h3 class="mb-4">Website</h3>
	            <p><a href="#">primalangga.com</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>

@endsection