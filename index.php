<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Order produk dan pekerjaan Biru, Inc. secara online dari manapun dan kapan pun">
    <meta name="author" content="Usman Arif (usman@biru.co.id)">
    <title>Biru Software | Order Produk</title>

	<link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
	<link rel="manifest" href="img/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
	<script src="js/modernizr.js"></script>
</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div>
	<nav>
		<ul class="cd-primary-nav">
			<li><a href="https://biru.software" class="animated_link">Biru Software</a></li>
			<li><a href="https://crm.biru.software" class="animated_link">C.R.M</a></li>
			<li><a href="template/login.php" class="animated_link">Login</a></li>
			<li class="hide"><a href="https://demo.biru.software" class="animated_link">DEMO</a></li>
			<li class="hide"><a href="about.php" class="animated_link">Tentang Biru</a></li>
			<li class="hide"><a href="kontak.php" class="animated_link">Kontak</a></li>
		</ul>
	</nav>
	
	<div class="container-fluid">
	    <div class="row row-height">
	        <div class="col-xl-4 col-lg-4 content-left">
	            <div class="content-left-wrapper">
	                <a href="index.html" id="logo"><img src="https://cdn.biru.co.id/images/logo/logo512.png" alt=""  height="45"></a>
	                <div id="social">
	                    <ul>
	                        <li><a href="https://fb.me/birusoftware" target="new"><i class="icon-facebook"></i></a></li>
	                        <li><a href="https://twitter.com/birusoftware"  target="new"><i class="icon-twitter"></i></a></li>
	                        <li><a href="https://instagram.com/birusoftware" target="new"><i class="icon-instagram"></i></a></li>
	                        <li><a href="https://g.page/birusoftware" target="new"><i class="icon-google"></i></a></li>
	                        <li><a href="https://id.linkedin.com/company/biru-software" target="new"><i class="icon-linkedin"></i></a></li>
	                    </ul>
	                </div>
	                <!-- /social -->
	                <div>
	                    <figure><img src="img/info_graphic_1.svg" alt="" class="img-fluid" width="270" height="270"></figure>
	                    <h2>KITA BERSAMA</h2>
	                    <p>Kami siap melayani Anda dengan profesional dan menyajikan teknologi terkini.</p>
	                    <a href="https://biru.software" class="btn_1 rounded yellow">Produk Kami</a>
	                    <a href="#orderyuk" class="btn_1 rounded mobile_btn">Ayo! Order</a>
	                </div>
	                <div class="copy">© 2021 Biru Indonesia Creative</div>
	            </div>

	        </div>

	        <div class="col-xl-8 col-lg-8 content-right" id="orderyuk">
	            <div id="wizard_container">
	                <div id="top-wizard">
	                    <span id="location"></span>
	                    <div id="progressbar"></div>
	                </div>
	                <form id="wrapped" method="POST" enctype="multipart/form-data">
	                    <input id="website" name="website" type="text" value="">
						<div id="middle-wizard">
	                        <div class="step" data-state="branchtype">
	                            <h2 class="section_title hide">Pilih Produk</h2>
	                            <h3 class="main_question">Pilih produk yang akan anda pesan</h3>
	                            <div class="form-group">
	                                <label class="container_radio version_2">Desain Web
	                                    <input type="radio" name="nama_produk" value="Desain Web" class="required">
	                                    <span class="checkmark"></span>
	                                </label>
	                                <label class="container_radio version_2">Desain Web <span class="badge badge-danger">Promo Juli 2021 </span>
	                                    <input type="radio" name="nama_produk" value="Desain Web Promo Juli 2021" class="required">
	                                    <span class="checkmark"></span>
	                                </label>
	                                <label class="container_radio version_2 hide">Aplikasi/Software
	                                    <input type="radio" name="nama_produk" value="Backend-Developer" class="required">
	                                    <span class="checkmark"></span>
	                                </label>									
	                                <label class="container_radio version_2 hide">Domain & Server 
	                                    <input type="radio" name="nama_produk" value="Frontend-Developer" class="required">
	                                    <span class="checkmark"></span>
	                                </label>
	                                <label class="container_radio version_2 hide">IoT & Otomasi 
	                                    <input type="radio" name="nama_produk" value="Frontend-Developer" class="required">
	                                    <span class="checkmark"></span>
	                                </label>
	                                <label class="container_radio version_2 hide">Desain Sistem & Integrasi
	                                    <input type="radio" name="nama_produk" value="Frontend-Developer" class="required">
	                                    <span class="checkmark"></span>
	                                </label>																				
	                                <label class="container_radio version_2 hide">Konsultan Teknologi 
	                                    <input type="radio" name="nama_produk" value="Frontend-Developer" class="required">
	                                    <span class="checkmark"></span>
	                                </label>									
	                            </div>
	                        </div>
	                        <div class="branch" id="Desain Web Promo Juli 2021">
	                            <div class="step" data-state="hosting">
	                                <h2 class="section_title hide">Desain WEB</h2>
	                                <h3 class="main_question hide">Desain WEB seperti apa?</h3>

	                                <label class="custom mb-3">Jenis Web</label>
	                                <div class="row">
	                                	<div class="col-md-6">
	                                		<div class="form-group">
											    <label class="container_check">Profil Personal
											        <input type="radio" name="jenis_web_072021" value="Web Profil Personal" class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>										
	                                		<div class="form-group">
											    <label class="container_check">Profil Perusahaan
											        <input type="radio" name="jenis_web_072021" value="Web Profil Perusahaan" class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>
	                                		<div class="form-group">
											    <label class="container_check">Profil Pemerintah
											        <input type="radio" name="jenis_web_072021" value="Web Komunitas" class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>																								
	                                	</div>
	                                	<div class="col-md-6">
	                                		<div class="form-group">
											    <label class="container_check">Profil Sekolah
											        <input type="radio" name="jenis_web_072021" value="Web Sekolah" class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>			
	                                		<div class="form-group">
											    <label class="container_check">Profil Komunitas
											        <input type="radio" name="jenis_web_072021" value="Web Komunitas" class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>																									
											<div class="form-group">
											    <label class="container_check">Produk/Landing Page 
											        <input type="radio" name="jenis_web_072021" value="Web Produk/Landing Page " class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>												
	                                	</div>
	                                </div>


	                                <label class="custom mb-3 add_top_20">Konten Web</label>
	                                <div class="row">
	                                	<div class="col-md-6">
	                                		<div class="form-group">
											    <label class="container_check">Statis
											        <input type="radio" name="konten_web_072021" value="Statis" class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>										
	                                	</div>
	                                	<div class="col-md-6">
	                                		<div class="form-group">
											    <label class="container_check text-muted"><del>Dinamis</del>
											        <input type="radio" name="konten_web_072021" value="Dinamis" class="required" disabled>
											        <span class="checkmark"></span>
											    </label>
											</div>			
	                                	</div>
	                                </div>

	                                <label class="custom mb-3 add_top_20">Fitur Web</label>
	                                <div class="row">
	                                	<div class="col-md-6">
	                                		<div class="form-group">
											    <label class="container_check">Desain Telp. Seluler
											        <input type="checkbox" name="web_desain_fitur_072021[]" value="Mobile Design" class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>
											<div class="form-group">
											    <label class="container_check">Support Video
											        <input type="checkbox" name="web_desain_fitur_072021[]" value="UX Design" class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>
	                                	</div>
	                                	<div class="col-md-6">
	                                		<div class="form-group">
											    <label class="container_check">Minimalis
											        <input type="checkbox" name="web_desain_fitur_072021[]" value="App Design" class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>
											<div class="form-group">
											    <label class="container_check">Integrasi Sosial Media
											        <input type="checkbox" name="web_desain_fitur_072021[]" value="Wireframe Design" class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>
	                                	</div>
	                                </div>
	                                <!-- /row-->
	                                <label class="add_top_20">Keinginan WEB Anda</label>
									<div class="form-group">
										<label for="keinginan_web_072021">Misal : Saya ingin seperti web www.123.abc</label>
										<textarea type="text" name="keinginan_web_072021" id="keinginan_web_072021" class="form-control required"></textarea>
									</div>

	                                <label class="add_top_10">Diskripsi Anda/Perusahaan Anda</label>
									<div class="form-group">
										<label for="diskripsi_web_072021">Misal : Perusahaan saya bergerak dibidang....</label>
										<textarea type="text" name="diskripsi_web_072021" id="diskripsi_web_072021" class="form-control required"></textarea>
									</div>
	                                	                                
	                            </div>
	                        </div>

	                        <div class="branch" id="Desain Web">
	                            <div class="step" data-state="hosting">
	                                <h2 class="section_title hide">Desain WEB</h2>
	                                <h3 class="main_question hide">Desain WEB seperti apa?</h3>

	                                <label class="custom mb-3">Jenis Web</label>
	                                <div class="row">
	                                	<div class="col-md-6">
	                                		<div class="form-group">
											    <label class="container_check">Profil Personal
											        <input type="radio" name="jenis_web" value="Web Profil Personal" class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>										
	                                		<div class="form-group">
											    <label class="container_check">Profil Perusahaan
											        <input type="radio" name="jenis_web" value="Web Profil Perusahaan" class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>										
											<div class="form-group">
											    <label class="container_check">Portal Berita
											        <input type="radio" name="jenis_web" value="Portal Berita" class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>
	                                		<div class="form-group">
											    <label class="container_check">Toko Online
											        <input type="radio" name="jenis_web" value="Toko Online" class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>											
	                                	</div>
	                                	<div class="col-md-6">
	                                		<div class="form-group">
											    <label class="container_check">Sekolah
											        <input type="radio" name="jenis_web" value="Web Sekolah" class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>			
	                                		<div class="form-group">
											    <label class="container_check">Pemerintah/Komunitas
											        <input type="radio" name="jenis_web" value="Web Komunitas" class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>																									
											<div class="form-group">
											    <label class="container_check">Produk/Landing Page 
											        <input type="radio" name="jenis_web" value="Web Produk/Landing Page " class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>												
	                                		<div class="form-group">
											    <label class="container_check">Blog
											        <input type="radio" name="jenis_web" value="Blog" class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>
	                                	</div>
	                                </div>


	                                <label class="custom mb-3 add_top_20">Konten Web</label>
	                                <div class="row">
	                                	<div class="col-md-6">
	                                		<div class="form-group">
											    <label class="container_check">Statis
											        <input type="radio" name="konten_web" value="Statis" class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>										
	                                	</div>
	                                	<div class="col-md-6">
	                                		<div class="form-group">
											    <label class="container_check">Dinamis
											        <input type="radio" name="konten_web" value="Dinamis" class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>			
	                                	</div>
	                                </div>

	                                <label class="custom mb-3 add_top_20">Fitur Web</label>
	                                <div class="row">
	                                	<div class="col-md-6">
	                                		<div class="form-group">
											    <label class="container_check">Desain Telp. Seluler
											        <input type="checkbox" name="web_desain_fitur[]" value="Mobile Design" class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>
											<div class="form-group">
											    <label class="container_check">Support Video
											        <input type="checkbox" name="web_desain_fitur[]" value="UX Design" class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>
											<div class="form-group">
											    <label class="container_check">Integrasi Sosial Media
											        <input type="checkbox" name="web_desain_fitur[]" value="Wireframe Design" class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>
	                                	</div>
	                                	<div class="col-md-6">
	                                		<div class="form-group">
											    <label class="container_check">Minimalis
											        <input type="checkbox" name="web_desain_fitur[]" value="App Design" class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>
											<div class="form-group">
											    <label class="container_check">Upload Google Play Store
											        <input type="checkbox" name="web_desain_fitur[]" value="Web Design" class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>
	                                	</div>
	                                </div>
	                                <!-- /row-->
	                                <label class="add_top_20">Keinginan WEB Anda</label>
									<div class="form-group">
										<label for="keinginan_web">Misal : Saya ingin seperti web www.123.abc</label>
										<textarea type="text" name="keinginan_web" id="keinginan_web" class="form-control required"></textarea>
									</div>

	                                <label class="add_top_10">Diskripsi Anda/Perusahaan Anda</label>
									<div class="form-group">
										<label for="diskripsi_web">Misal : Perusahaan saya bergerak dibidang....</label>
										<textarea type="text" name="diskripsi_web" id="diskripsi_web" class="form-control required"></textarea>
									</div>
	                                	                                
	                            </div>
	                        </div>

	                        <div class="branch" id="hosting">
	                            <div class="step" data-state="bio">
	                                <h2 class="section_title hide">Desain WEB</h2>
	                                <h3 class="main_question hide">Desain WEB seperti apa?</h3>



	                                <label class="custom mb-3 add_top_20">Sudah Punya Domain?</label>
	                                <div class="row">
	                                	<div class="col-md-6">
	                                		<div class="form-group">
											    <label class="container_check">Sudah Punya Domain
											        <input type="radio" name="sudah_punya_domain" value="Ya" class="required" onchange="getVals(this, 'domain_field');" onblur="getVals(this, 'domain_field');">
											        <span class="checkmark"></span>
											    </label>
											</div>										
	                                	</div>
	                                	<div class="col-md-6">
	                                		<div class="form-group">
											    <label class="container_check">Belum Punya Domain
											        <input type="radio" name="sudah_punya_domain" value="Tidak" class="required" onchange="getVals(this, 'domain_field');" onblur="getVals(this, 'domain_field');">
											        <span class="checkmark"></span>
											    </label>
											</div>			
	                                	</div>
	                                	<div class="col-md-12">
											<div class="form-group" id="frm_nama_domain" style="display:none;">
												<label for="nama_domain" id="label_nama_domain">Nama Domain</label>
												<input type="url" name="nama_domain" id="nama_domain" class="form-control required">
											</div>		
										</div>											
	                                </div>
	                                <label class="custom mb-3 add_top_20">Sudah Punya Hosting?</label>
	                                <div class="row">
	                                	<div class="col-md-6">
	                                		<div class="form-group">
											    <label class="container_check">Sudah Punya Hosting
											        <input type="radio" name="sudah_punya_hosting" value="Ya" class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>										
	                                	</div>
	                                	<div class="col-md-6">
	                                		<div class="form-group">
											    <label class="container_check">Belum Punya Hosting
											        <input type="radio" name="sudah_punya_hosting" value="Tidak" class="required">
											        <span class="checkmark"></span>
											    </label>
											</div>			
	                                	</div>									
	                                </div>
                     
	                            </div>
	                        </div>

	                        <div class="step" id="bio">
	                            <h2 class="section_title hide">Presentation</h2>
	                            <h3 class="main_question">Info Anda</h3>
	                            <div class="form-group add_top_10">
	                                <label for="name">Nama Lengkap</label>
	                                <input type="text" name="name" id="name" class="form-control required" onchange="getVals(this, 'name_field');">
	                            </div>
	                            <div class="form-group add_top_10">
	                                <label for="perusahaan">Nama Perusahaan</label>
	                                <input type="text" name="perusahaan" id="perusahaan" class="form-control">
	                            </div>		
	                            <div class="form-group add_top_30">
	                                <label for="posisi">Posisi di Perusahaan</label>
	                                <input type="text" name="posisi" id="posisi" class="form-control">
	                            </div>												
	                            <div class="form-group add_top_30">
	                                <label for="alamat">Alamat Lengkap</label>
	                                <input type="text" name="alamat" id="alamat" class="form-control required">
	                            </div>																	
	                            <div class="form-group">
	                                <label for="email">Email</label>
	                                <input type="email" name="email" id="email" class="form-control required" onchange="getVals(this, 'email_field');">
	                            </div>
	                            <div class="form-group">
	                                <label for="telepon">Telepon</label>
	                                <input type="text" name="telepon" id="telepon" class="form-control">
	                            </div>
	                            <div class="form-group">
	                                <label for="wa">No. WA</label>
	                                <input type="text" name="wa" id="wa" class="form-control">
	                            </div>								
								<label>Jenis Kelamin</label>
								<div class="form-group radio_input">
								    <label class="container_radio mr-3">Pria
								        <input type="radio" name="gender" value="Pria" class="required">
								        <span class="checkmark"></span>
								    </label>
								    <label class="container_radio">Wanita
								        <input type="radio" name="gender" value="Wanita" class="required">
								        <span class="checkmark"></span>
								    </label>
								</div>
	                        </div>

	                        <div class="submit step">
	                            <div class="summary">
	                                <div class="wrapper">
	                                    <h3><span id="name_field"></span>!</h3>
										<p>Terima Kasih atas kepercayaan Anda di <strong>Biru</strong>, Inc.</p>
	                                    <p>Kami akan mengubungi anda secepatnya melalui email <strong id="email_field"></strong> atau melalui Whatsapp jika anda mencantumkan dalam form order Kami.</p>
	                                </div>
	                                <div class="text-center">
	                                    <div class="form-group terms">
	                                        <label class="container_check">Saya bersedia dihubungi melalui email dari tim Biru Indonesia Creative
	                                            <input type="checkbox" name="terms" value="Ya" class="required">
	                                            <span class="checkmark"></span>
	                                        </label>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /step last-->

	                    </div>
	                    <!-- /middle-wizard -->
	                    <div id="bottom-wizard">
	                        <button type="button" name="backward" class="backward">Sebelumnya</button>
	                        <button type="button" name="forward" class="forward">Berikutnya</button>
	                        <button type="submit" name="process" class="submit">Kirim</button>
	                    </div>
	                    <!-- /bottom-wizard -->
	                </form>
	            </div>
	            <!-- /Wizard container -->
	        </div>
	        <!-- /content-right-->
	    </div>
	    <!-- /row-->
	</div>
	<!-- /container-fluid -->

	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- /cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- /cd-overlay-content -->

	<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>
	<!-- /menu button -->
	
	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	
	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/common_scripts.js"></script>
	<script src="js/velocity.min.js"></script>
	<script src="js/common_functions.js"></script>
	<script src="js/file-validator.js"></script>

	<!-- Wizard script-->
	<script src="js/func.js"></script>
	<script>

	</script>
</body>
</html>