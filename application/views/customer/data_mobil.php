
<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
<div class="container">
<div class="row">
<!-- Page Title Start -->
<div class="col-lg-12">
<div class="section-title  text-center">
<h2>DANENDRA RENTAL MOBIL</h2>
<span class="title-line"><i class="fa fa-car"></i></span>
<p>Jl Cingised Kom.Pemda Blok D No 49 Arcamanik Bandung</p>
</div>
</div>
<!-- Page Title End -->
</div>
</div>
</section>
<!--== Page Title Area End ==-->
<!--== Car List Area Start ==-->
<section id="car-list-area" class="section-padding">
<div class="container">
   <?php echo $this->session->flashdata('pesan')?>
<div class="row">
<!-- Car List Content Start -->
<div class="col-lg-12">
<div class="car-list-content">
<div class="row">
<!-- Single Car Start -->
<?php foreach($mobil as $mb) : ?>
<div class="col-lg-6 col-md-6">
<div class="single-car-wrap">
<img src="<?php echo base_url('assets/upload/'.$mb->gambar) ?>">
<div class="car-list-info without-bar">
<h2><a href="car-without-sidebar.html#"><?php echo $mb->merk ?></a></h2>
<h5>Rp. <?php echo number_format($mb->harga,0,',','.')  ?> / Hari</h5>

<ul class="car-info-list">
<li><?php 
   		if($mb->ac == "1"){
   			echo "<i class= 'fa fa-check-circle'></i>";
   		}else{
   			echo "<i class='fa fa-times-circle'></i>";
   		}
		?>AC</li>
<li><?php 
   		if($mb->supir == "1"){
   			echo "<i class= 'fa fa-check-circle'></i>";
   		}else{
   			echo "<i class='fa fa-times-circle'></i>";
   		}
		?>Supir</li>
<li><?php 
   		if($mb->mp3_player == "1"){
   			echo "<i class= 'fa fa-check-circle'></i>";
   		}else{
   			echo "<i class='fa fa-times-circle'></i>";
   		}
		?>MP3</li>
<li><?php 
   		if($mb->central_lock == "1"){
   			echo "<i class= 'fa fa-check-circle'></i>";
   		}else{
   			echo "<i class='fa fa-times-circle'></i>";
   		}
		?>Central Lock</li>
</ul>
<p class="rating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star unmark"></i>
</p>
<?php if ($mb->status  == "1") {
   echo anchor('customer/rental/tambah_rental/'.$mb->id_mobil, '<span class="rent-btn">Rental</span>');
}else{
   echo "<span class='rent-btn'>Telah Dirental</span>";
}
?>

<a href="<?php echo base_url('customer/data_mobil/detail_mobil/'.$mb->id_mobil) ?>" class="rent-btn">Detail</a>
</div>
</div>
</div>

<?php endforeach; ?>
<!-- Single Car End -->

</div>
</div>

</div>
<!-- Car List Content End -->
</div>
</div>
</section>
<!--== Car List Area End ==-->
<!--== Footer Area Start ==-->
<section id="footer-area">
<!-- Footer Widget Start -->
<div class="footer-widget-area">
<div class="container">
<div class="row">
<!-- Single Footer Widget Start -->
<div class="col-lg-4 col-md-6">
<div class="single-footer-widget">
<h2>About Us</h2>
<div class="widget-body">
<img src="data:image/png;base64,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" alt="JSOFT" data-pagespeed-url-hash="2987653198" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
<p>Lorem ipsum dolored is a sit ameted consectetur adipisicing elit. Nobis magni assumenda distinctio debitis, eum fuga fugiat error reiciendis.</p>
<div class="newsletter-area">
<form action="index.html">
<input type="email" placeholder="Subscribe Our Newsletter">
<button type="submit" class="newsletter-btn"><i class="fa fa-send"></i></button>
</form>
</div>
</div>
</div>
</div>
<!-- Single Footer Widget End -->
<!-- Single Footer Widget Start -->
<div class="col-lg-4 col-md-6">
<div class="single-footer-widget">
<h2>Recent Posts</h2>
<div class="widget-body">
<ul class="recent-post">
<li>
<a href="car-without-sidebar.html#">
Hello Bangladesh!
<i class="fa fa-long-arrow-right"></i>
</a>
</li>
<li>
<a href="car-without-sidebar.html#">
Lorem ipsum dolor sit amet
<i class="fa fa-long-arrow-right"></i>
</a>
</li>
<li>
<a href="car-without-sidebar.html#">
Hello Bangladesh!
<i class="fa fa-long-arrow-right"></i>
</a>
</li>
<li>
<a href="car-without-sidebar.html#">
consectetur adipisicing elit?
<i class="fa fa-long-arrow-right"></i>
</a>
</li>
</ul>
</div>
</div>
</div>
<!-- Single Footer Widget End -->
<!-- Single Footer Widget Start -->
<div class="col-lg-4 col-md-6">
<div class="single-footer-widget">
<h2>get touch</h2>
<div class="widget-body">
<p>Lorem ipsum doloer sited amet, consectetur adipisicing elit. nibh auguea, scelerisque sed</p>
<ul class="get-touch">
<li><i class="fa fa-map-marker"></i>Jl.cingised blok D, bandung, jawa barat</li>
<li><i class="fa fa-mobile"></i> +62 812-1479-6449</li>
<li><i class="fa fa-envelope"></i> danendrarentalmobil@gmail.com</li>
</ul>
<a href="https://www.google.com.bd/maps/place/Danendra+Rental+Mobil/@-6.9324692,107.6743421,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68c2aeec78261b:0x32d2311623c295c5!8m2!3d-6.9324745!4d107.6765361?hl=en" class="map-show" target="_blank">Show Location</a>
</div>
</div>
</div>
<!-- Single Footer Widget End -->
</div>
</div>
</div>
<!-- Footer Widget End -->