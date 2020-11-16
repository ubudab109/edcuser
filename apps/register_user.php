<?php
session_start();

if ($_SESSION['loggedIn'] == true) {
	echo "<script>window.location.href = 'login.php'; alert('Anda Telah Keluar')</script>";
	session_destroy();
}
?>
<!doctype html>
<html lang="en" dir="ltr">

<head>

	<!-- META DATA -->
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="EDCCASH">
	<meta name="author" content="EDCCASH">

	<!-- FAVICON -->
	<link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />

	<!-- TITLE -->
	<title>EDCCASH</title>

	<!-- BOOTSTRAP CSS -->
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

	<!-- STYLE CSS -->
	<link href="../assets/css/style.css" rel="stylesheet" />
	<link href="../assets/css/skin-modes.css" rel="stylesheet" />

	<!-- SIDE-MENU CSS -->
	<link href="../assets/plugins/sidemenu/sidemenu.css" rel="stylesheet">

	<!-- SINGLE-PAGE CSS -->
	<link href="../assets/plugins/single-page/css/main.css" rel="stylesheet" type="text/css">

	<!--C3 CHARTS CSS -->
	<link href="../assets/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

	<!-- CUSTOM SCROLL BAR CSS-->
	<link href="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

	<!--- FONT-ICONS CSS -->
	<link href="../assets/css/icons.css" rel="stylesheet" />

	<!-- COLOR SKIN CSS -->
	<link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/colors/color1.css" />

</head>

<body>

	<!-- Modal -->
	<div class="modal fade" id="terms" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<!-- <div class="modal-header text-center">
		</div> -->
				<div class="modal-body" id="conditions">
					<h3 class="text-center" id="staticBackdropLabel">Terms and Condition</h3>
					<hr>
					<p style="text-align: justify;">Syarat-Syarat dan Ketentuan Umum (selanjutnya disebut sebagai &ldquo;SKU&rdquo;) EDCCASH adalah ketentuan yang berisikan syarat dan ketentuan mengenai penggunaan produk, jasa, teknologi, fitur layanan yang diberikan oleh EDCCASH termasuk, namun tidak terbatas pada penggunaan Website, Dompet Edccash Indonesia dan EDCCASH Trading Platform (Trading App) (untuk selanjutnya disebut sebagai &ldquo;Platform EDCCASH&rdquo;) sepanjang tidak diatur secara khusus sebagaimana tercantum pada bagian registrasi akun EDCCASH yang dibuat pada hari dan tanggal yang tercantum dalam bagian registrasi akun https://edccash.com, merupakan satu kesatuan tidak terpisahkan dan persetujuan atas SKU ini. Dengan mendaftar menjadi Member/Verified Member, Anda menyatakan telah MEMBACA, MEMAHAMI, MENYETUJUI dan MEMATUHI Persyaratan dan Ketentuan di bawah. Anda disarankan membaca semua persyaratan dan ketentuan secara seksama sebelum menggunakan layanan platform EDCCASH atau segala layanan yang diberikan, dan bersama dengan ini Anda setuju dan mengikatkan diri terhadap seluruh kegiatan dalam SKU ini dengan persyaratan dan ketentuan sebagai berikut :</p>
					<hr>

					<p style="text-align: center;"><strong>DEFINISI</strong></p>
					<p style="text-align: justify;">Sepanjang konteks kalimatnya tidak menentukan lain, istilah atau definisi dalam SKU memiliki arti sebagai berikut :</p>
					<ol style="text-align: justify;">
						<li>Website mengacu pada situs online dengan alamat https://edccash.com. Website ini dikelola oleh EDCCASH, dengan tidak terbatas pada para pemilik, investor, karyawan dan pihak-pihak yang terkait dengan EDCCASH. Tergantung pada konteks, &ldquo;Website&rdquo; dapat juga mengacu pada jasa, produk, situs, konten atau layanan lain yang disediakan oleh EDCCASH.</li>
					</ol>

					<ol style="text-align: justify;" start="2">
						<li>Aset Digital adalah komoditas digital yang menggunakan prinsip teknologi desentralisasi berbasiskan jaringan peer-to-peer (antar muka) atau disebut dengan Jaringan Blockchain yang diperdagangkan di dalam platform.</li>
					</ol>

					<ol style="text-align: justify;" start="3">
						<li>Blockchain adalah sebuah buku besar terdistribusi (distributed ledger) terbuka yang dapat mencatat transaksi antara dua pihak secara efisien dan dengan cara yang dapat diverifikasi secara permanen.</li>
					</ol>

					<ol style="text-align: justify;" start="4">
						<li>Registrasi adalah proses pendaftaran menjadi Member dalam platform EDCCASH yang merupakan proses verifikasi awal untuk memperoleh keterangan, pernyataan dalam penggunaan layanan platform.</li>
					</ol>

					<ol style="text-align: justify;" start="5">
						<li>Member adalah orang (perseorangan), badan usaha, maupun badan hukum yang telah melakukan registrasi pada platform EDCCASH, sehingga memperoleh otorisasi dari platform EDCCASH untuk melakukan kegiatan perdagangan Aset Digital.</li>
					</ol>

					<ol style="text-align: justify;" start="6">
						<li>Verifikasi adalah proses pemeriksaan terhadap member mengenai keterangan terkait member dan informasi pribadi yang dicantumkan dalam proses registrasi untuk divalidasi oleh EDCCASH guna mendapat layanan penuh platform.</li>
					</ol>

					<ol style="text-align: justify;" start="7">
						<li>Verified Member adalah Member yang telah melalui dan menyelesaikan tahapan Verifikasi yang dilakukan oleh EDCCASH.</li>
					</ol>

					<ol style="text-align: justify;" start="8">
						<li>Layanan adalah jasa yang disediakan oleh EDCCASH dalam memfasilitasi Verified Member untuk melakukan kegiatan membeli dan menjual Aset Digital.</li>
					</ol>

					<ol style="text-align: justify;" start="9">
						<li>Kegiatan Perdagangan Aset Digital adalah kegiatan transaksi jual-beli Aset Digital atas dasar adanya pencapaian titik nilai kesepakatan para Verified Member dalam platform yang disediakan oleh EDCCASH.</li>
					</ol>

					<ol style="text-align: justify;" start="10">
						<li>Akun Member adalah akses yang diberikan kepada Member/Verified Member untuk mendapatkan informasi dan untuk melakukan kegiatan perdagangan Aset Digital melalui platform.</li>
					</ol>

					<ol style="text-align: justify;" start="11">
						<li>Kata Sandi adalah kumpulan karakter yang terdiri dari rangkaian alfa-numerik atau kombinasi keduanya dan digunakan oleh Member/Verified Member untuk memverifikasi identitas dirinya kepada sistem keamanan pada platform EDCCASH.</li>
					</ol>

					<ol style="text-align: justify;" start="12">
						<li>Nomor Telepon adalah nomor telepon Member/Verified Member yang terdaftar sehingga memperoleh otorisasi untuk mendapatkan layanan. Perubahan nomor telepon dapat dilakukan dengan mengikuti peraturan pada laman bantuan yang tersedia di Website.</li>
					</ol>

					<ol style="text-align: justify;" start="13">
						<li>Konversi adalah perubahan nilai mata uang fiat atau kartal ke dalam bentuk atau format Aset Digital berdasarkan nilai tukar/rate yang berlaku dan sebaliknya.</li>
					</ol>

					<ol style="text-align: justify;" start="14">
						<li>Pembeli adalah Verified Member yang melakukan pembelian Aset Digital melalui platform di dalam mekanisme transaksinya pembeli dapat melakukan pembelian Aset Digital yang didasarkan dengan nilai tukar/rate mata uang Rupiah.</li>
					</ol>

					<ol style="text-align: justify;" start="15">
						<li>Penjual adalah Verified Member yang melakukan penjualan Aset Digital melalui platform di dalam mekanisme transaksinya penjual dapat melakukan penjualan Aset Digital yang didasarkan dengan nilai tukar/rate mata uang Rupiah.</li>
					</ol>

					<ol style="text-align: justify;" start="16">
						<li>Deposit adalah proses penyimpanan Rupiah/Aset Digital oleh Member/Verified Member yang merujuk pada proses atau mekanisme penambahan (top up) yang dilakukan melalui Akun Member/Verified Member.</li>
					</ol>

					<ol style="text-align: justify;" start="17">
						<li>Withdrawal adalah proses penarikan Rupiah/Aset Digital oleh Verified Member yang merujuk pada proses atau mekanisme penarikan (withdrawal) yang dilakukan melalui Akun Verified Member.</li>
					</ol>

					<ol style="text-align: justify;" start="18">
						<li>Harga Aset Digital adalah nilai tukar/rate Aset Digital dalam platform EDCCASH yang bersifat fluktuatif, dengan nilai sesuai permintaan (supply) dan persediaan (demand) pada market.</li>
					</ol>

					<ol style="text-align: justify;" start="19">
						<li>Alamat Aset Digital adalah alamat dompet Aset Digital milik Member/Verified Member, diciptakan khusus untuk Member/Verified Member dan dapat digunakan berkali-kali sebagai dompet Aset Digital yang disediakan di dalam platform Dalam faktor teknisnya, alamat Aset Digital memiliki peranan ataupun fungsi untuk menerima dan mengirim Aset Digital.</li>
					</ol>

					<ol style="text-align: justify;" start="20">
						<li>Limit Pengiriman Aset Digital adalah batas minimal dan maksimal dalam melakukan pengiriman Aset Digital ke dompet Aset Digital lain per-harinya. Perlu untuk dijelaskan bahwa setiap Akun Verified Member akan memiliki limit pengiriman yang berbeda dan disesuaikan dengan Syarat dan Ketentuan ini dengan Peraturan Perundang-Undangan yang berlaku.</li>
					</ol>

					<ol style="text-align: justify;" start="21">
						<li>Limit Penarikan Rupiah adalah batas minimal dan maksimal penarikan Rupiah per-harinya. Berkenaan dengan limit penarikan Rupiah. Perlu untuk dijelaskan bahwa setiap Akun Verified Member akan memiliki limit penarikan yang berbeda yang disesuaikan dengan Syarat dan Ketentuan dan Peraturan Perundang-Undangan yang berlaku.</li>
					</ol>

					<ol style="text-align: justify;" start="22">
						<li>Rekening Bank adalah rekening bank yang telah didaftarkan oleh Member dengan kewajiban kesamaan nama pemegang rekening dan nama Member.</li>
					</ol>

					<ol style="text-align: justify;" start="23">
						<li>Order Book adalah daftar harga jual dan harga beli yang tersedia pada Website. Verified Member dapat membeli atau menjual Aset Digital menggunakan harga yang tertera dan untuk memudahkan Verified Member Order Book dibagi menjadi dua bagian, yaitu :
							<ol>
								<li>Market Beli &ndash; Daftar permintaan pembelian Aset Digital lengkap dengan jumlah Aset Digital dan harga yang ditawarkan.</li>
								<li>Market Jual &ndash; Daftar Aset Digital yang dijual lengkap dengan jumlah Aset Digital dan harga yang diminta.</li>
							</ol>
						</li>
					</ol>

					<ol style="text-align: justify;" start="24">
						<li>Dompet Aset Digital adalah komponen perangkat lunak dan informasi untuk menyimpan dan menggunakan Aset Digital.</li>
					</ol>

					<ol style="text-align: justify;" start="25">
						<li>Voucher EDCCASH adalah produk yang dikeluarkan oleh platform EDCCASH berupa bukti kepemilikan Aset Digital dalam bentuk voucher elektronik untuk digunakan dalam kegiatan perdagangan Aset Digital.</li>
					</ol>

					<ol style="text-align: justify;" start="26">
						<li>Rupiah adalah mata uang Negara Kesatuan Republik Indonesia. Mata uang yang diperdagangkan terhadap Aset Digital pada platform.</li>
					</ol>

					<ol style="text-align: justify;" start="27">
						<li>KYC (Know Your Customer) Principles adalah proses penilaian terhadap calon Member dan Member untuk mengetahui latar belakang dan itikad baik terhadap perbuatan yang akan dilakukan dalam sebuah kegiatan perdagangan Aset Digital.</li>
					</ol>

					<ol style="text-align: justify;" start="28">
						<li>AML (Anti Money Laundering) adalah kegiatan untuk mengantisipasi dan menghentikan praktik pencucian uang.</li>
					</ol>

					<ol style="text-align: justify;" start="29">
						<li>GDPR (General Data Protection Regulation) adalah bentuk instrumen hukum berkenaan dengan Data Privacy yang diterapkan bagi seluruh perusahaan di dunia yang telah menyimpan, mengolah dan memproses data personal para penduduk Uni Eropa. Kebijakan ini memiliki untuk Memberikan perlindungan terhadap kerahasiaan data personal atau perseorangan. Pengaplikasian aturan ini mulai efektif pada tanggal 25 Mei 2018.</li>
					</ol>

					<ol style="text-align: justify;" start="30">
						<li>Sistem Keamanan 2 (dua) Langkah (Two Step Verification) adalah layanan yang diberikan platform EDCCASH sebagai opsi bagi Verified Member dalam Memberikan keamanan tambahan atas Akun Verified Member.</li>
					</ol>
					<hr>

					<p style="text-align: center;"><strong>PROSES REGISTRASI / PENDAFTARAN MEMBER (INFORMASI &amp; DATA MEMBER)</strong></p>
					<ol style="text-align: justify;">
						<li>Syarat menjadi Member&nbsp; adalah :
							<ol style="list-style-type: lower-alpha;">
								<li>Member dapat melakukan proses registrasi atau pendaftaran Member melalui platform EDCCASH;</li>
								<li>Setuju dan sepakat untuk tunduk pada Syarat dan Ketentuan Umum ini;</li>
								<li>Berusia minimal 18 (delapan belas) tahun, atau telah menikah; dan</li>
								<li>Memiliki identitas yang sah secara hukum.</li>
							</ol>
						</li>
					</ol>
					<p>&nbsp;</p>
					<ol style="text-align: justify;" start="2">
						<li>Atas setiap proses registrasi, calon Member wajib menunjukkan semua dan setiap data sesuai dengan identitas diri berupa :
							<ol style="list-style-type: lower-alpha;">
								<li>Nama (sesuai dengan Identitas diri yang dilampirkan);</li>
								<li>Alamat rumah sesuai identitas;Alamat tinggal saat ini;</li>
								<li>Nomor telepon atau Handphone (nomor harus aktif dan digunakan secara pribadi);</li>
								<li>Tempat dan tanggal lahir (sesuai dengan identitas diri yang dilampirkan);</li>
								<li>Kewarganegaraan;</li>
								<li>Jenis kelamin;</li>
								<li>Foto kartu identitas yang masih berlaku. Kartu identitas yang dapat digunakan adalah: Kartu Tanda Penduduk (KTP), Surat Ijin Mengemudi (SIM), Paspor, Suket ( Surat&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; keterangan dari kelurahan Pengganti sementara KTP Elektric )</li>
								<li>Pekerjaan;</li>
								<li>E-Mail (alamat surat elektronik) yang aktif;</li>
							</ol>
						</li>
					</ol>

					<ol style="text-align: justify;" start="3">
						<li>Dan/atau segala sesuatu yang diminta dan diperlukan berkenaan dengan syarat registrasi yang ditentukan, dan calon Member dengan ini menyatakan serta menjamin bahwa segala data/keterangan/dokumen/informasi/pernyataan apapun yang diberikan berkenaan dengan proses registrasi sebagai Member EDCCASH adalah lengkap, asli, benar dan sesuai dengan keadaan yang sebenarnya serta merupakan data/keterangan/dokumen/informasi /pernyataan terkini yang tidak/belum dilakukan perubahan dan masih berlaku/tidak daluarsa serta tidak/belum ada perubahan atau kondisi lainnya yang disetujui berdasarkan kebijakan dalam halaman registrasi pada Website.</li>
					</ol>

					<ol style="text-align: justify;" start="4">
						<li>Member dengan ini setuju bahwa proses menjadi Member EDCCASH hanya akan berlaku efektif setelah seluruh persyaratan EDCCASH dipenuhi oleh Member dan proses registrasi telah melalui proses verifikasi untuk disetujui EDCCASH. Segala resiko yang timbul sehubungan dengan penutupan/pemblokiran/pembekuan Akun yang diakibatkan oleh kesalahan dan/atau kelalaian Verified Member, akan menjadi tanggung jawab Verified Member dan EDCCASH tidak akan Memberikan ganti rugi kepada Verified Member atau Pihak manapun dalam bentuk apapun atas segala tuntutan/klaim dan ganti rugi dari Verified Member atau Pihak manapun sehubungan dengan penutupan Akun Verified Member.</li>
					</ol>

					<ol style="text-align: justify;" start="5">
						<li>Seluruh data, keterangan, informasi, pernyataan, dokumen yang diperoleh EDCCASH berkenaan dengan Member/Verified Member, akan menjadi milik EDCCASH dan EDCCASH berhak untuk melakukan verifikasi, mencocokkan, menilai, merahasiakan atau menggunakannya untuk kepentingan EDCCASH sesuai dengan ketentuan hukum yang berlaku tanpa adanya kewajiban EDCCASH untuk memberitahu atau meminta persetujuan, memberikan jaminan atau ganti rugi dan dengan alasan apapun kepada Member/Verified Member.</li>
					</ol>

					<ol style="text-align: justify;" start="6">
						<li>EDCCASH akan mengatur, mengelola dan melakukan pengawasan menurut tata cara/prosedur yang ditetapkan EDCCASH atas segala data, keterangan, informasi, pernyataan, dokumen atau segala sesuatu yang berkenaan dengan Member/Verified Member maupun kegiatan usaha atau transaksi Member/Verified Member yang terkait dengan Akun Member/Verified Member.</li>
					</ol>

					<ol style="text-align: justify;" start="7">
						<li>Member/Verified Member dengan ini memberikan persetujuan dan kuasa kepada EDCCASH untuk menggunakan semua data, keterangan dan informasi yang diperoleh EDCCASH mengenai Member/Verified Membertermasuk namun tidak terbatas pada penggunaan sarana komunikasi pribadi Member/Verified Member untuk segala keperluan lainnya sepanjang dimungkinkan dan diperkenankan oleh Perundang &ndash; Undangan yang berlaku, termasuk yang bertujuan untuk pemasaran bagi EDCCASH ataupun bagi pihak lain yang bekerjasama dengan EDCCASH. Untuk penggunaan data yang memerlukan persetujuan pihak lain, dengan ini Member/Verified Member menyatakan bahwa telah memberikan persetujuan tertulis kepada Pihak Ketiga manapun untuk penggunaan data, keterangan dan informasi tersebut, dan oleh karena itu EDCCASH dengan ini tidak akan memberikan ganti rugi dan/atau pertanggungjawaban dalam bentuk apapun kepada Member/Verified Member dan pihak manapun atas segala resiko, tuntutan, gugatan dan/atau ganti rugi yang mungkin timbul dikemudian hari sehubungan dengan penggunaan data, keterangan dan informasi yang telah memperoleh persetujuan tertulis tersebut oleh EDCCASH.</li>
					</ol>

					<hr>
					<p style="text-align: center;"><strong>IDENTIFIKASI DAN NAMA AKUN MEMBER/VERIFIED MEMBER</strong></p>
					<ol style="text-align: justify;">
						<li>Setiap Akun yang dibuka akan diadministrasikan oleh EDCCASH berdasarkan identifikasi khusus menurut nama Member/Verified Member yang akan berlaku juga sebagai nama/identitas Akun sesuai dengan yang tertera pada identitas Member/Verified Member. Member/Verified Member dilarang untuk menggunakan Akun Member/Verified Member selain Akun milik Member/Verified Member, atau mengakses Akun Member/Verified Member lain, atau membantu orang lain untuk mendapatkan akses tanpa izin ke dalam Akun tersebut. Seluruh penggunaan Akun Member/Verified Member adalah tanggung jawab sepenuhnya dari pemilik Akun yang terdata di dalam sistem Website.</li>
					</ol>

					<ol style="text-align: justify;" start="2">
						<li>Member/Verified Member wajib menggunakan dan mencantumkan email Member/Verified Member dan kata sandi yang telah diverifikasi EDCCASH pada saat registrasi. Sistem EDCCASH akan menolak secara otomatis proses layanan atas Akun, bilamana tidak disertai dengan email dan kata sandi yang benar. Member/Verified Member bertanggung jawab untuk menjaga kerahasiaan kata sandi, Akun, PIN, akses wallet Aset Digital, akses login email dan segala jenis aktivitas yang meliputi transaksi di dalam Akun Member/Verified Member. Member/Verified Member bertanggung jawab penuh atas penggunaan kata sandi dan Akun pada EDCCASH. Apabila terjadi penggunaan sandi dan/atau Akun tanpa seizin Member/Verified Member dan terjadi dugaan pelanggaran lain, Member/Verified Member wajib menghubungi EDCCASH dengan mengirimkan e-mail ke support@edccash.com disertai informasi pendukung. EDCCASH tidak bertanggung jawab atas kerugian yang ditimbulkan atas adanya penyalahgunaan Akun dan/atau kata sandi, dengan atau tanpa sepengetahuan Member/Verified Member.</li>
					</ol>

					<ol style="text-align: justify;" start="3">
						<li>Member/Verified Member setuju tidak akan menggunakan jasa yang disediakan oleh Website untuk melakukan tindakan kriminal dalam bentuk apapun, termasuk namun tidak terbatas pada, pencucian uang, perjudian, pembelian barang ilegal, kegiatan teroris atau kegiatan hacking. Setiap Member/Verified Member yang melanggar peraturan tersebut dapat diberhentikan dan harus bertanggung-jawab dengan kerugian yang diderita oleh EDCCASH atau para pengguna lain di dalam Website. EDCCASH berhak menutup Akun dan membekukan dana, Aset Digital dan transaksi di dalamnya apabila menemukan aktifitas yang mencurigakan di dalam Akun tersebut hingga waktu yang tidak ditentukan.</li>
					</ol>
					<hr>

					<p style="text-align: center;"><strong>MERUBAH INFORMASI AKUN MEMBER/VERIFIED MEMBER</strong></p>
					<p style="text-align: justify;">Member/Verified Member dapat memperbaharui atau merubah informasi Akun miliknya melalui layanan EDCCASH yang disediakan dan ditetapkan oleh EDCCASH, yaitu PERUBAHAN DATA MEMBER/VERIFIED MEMBER</p>
					<ol style="text-align: justify;">
						<li>Perubahan Nama Akun Member/Verified Member</li>
					</ol>
					<p style="padding-left: 30px;">Perubahan Nama Akun Member/Verified Member dapat dilakukan dengan mekanisme yang&nbsp; diwajibkan untuk mengirimkan nama lama dan nama baru pemilik Akun , username,&nbsp; e-mail, nomor telepon,&nbsp; dan nomor kartu identitas yang digunakan (KTP/SIM/Passport/Suket). EDCCASH akan melakukan proses pencocokan data dan akan melakukan konfirmasi ke nomor telepon yang terdaftar di Akun Member/Verified Member untuk menghindari terjadinya penipuan. Jika proses perubahan telah terlewati maka nama Akun akan berubah sesuai keinginan Member/Verified Member. Berkenaan dengan perubahan nama Akun ini, Contoh alasan yang diperbolehkan adalah: ejaan nama salah, ingin mengganti nama menjadi nama orang tua karena belum cukup umur atau menjadi nama suami/istri karena tidak memiliki rekening bank atas nama sendiri. Dalam perihal Apabila nama pemilik Akun masih terdapat hubungan saudara atau orang tua, calon Member/Verified Member diwajibkan untuk mengirimkan softcopy Kartu Keluarga ke support@edccash.com dengan subjek &lsquo;Data Kelengkapan Penggantian Nama Akun&rsquo;. Jika hubungan Member/Verified Member dengan pemilik nama tersebut adalah hubungan suami-istri, calon Member/Member/Verified Member diwajibkan untuk mengirimkan softcopy Akta Nikah.</p>
					<p style="text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp;2.&nbsp;Perubahan dan Pembaharuan Data&nbsp;</p>
					<p style="text-align: justify; padding-left: 30px;">Perubahan dan Pembaharuan Data Perubahan dan Pembaharuan Data Pendukung wajib dilakukan oleh Member/Verified Member terhadap data berupa nomor telepon, alamat e-mail dan data pendukung lainnya sesuai dengan kondisi terkini. Hal ini sesuai dengan prinsip KYC (Know Your Customer) Principles yang diterapkan oleh EDCCASH. Perubahan dan Pembaharuan Data dilakukan dengan melakukan pengiriman e-mail dengan subjek &lsquo;Perubahan Data&rsquo; ke support@edccash.com dengan menuliskan data apa yang ingin disesuaikan oleh Member/Verified Member disertai alasan perubahan. Proses perubahan wajib disertai dengan mencantumkan softcopy identitas diri, username, nama lengkap, alamat, e-mail, data lama yang ingin diubah dan data perubahannya. Untuk selanjutnya, EDCCASH akan memberikan notifikasi dengan menghubungi nomor telepon utama atau nomor telepon alternatif yang telah terdaftar.</p>
					<ol style="text-align: justify;" start="3">
						<li>Perubahan Password</li>
					</ol>
					<p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Perubahan Password dimungkinkan sebagai alasan keamanan dan mekanismenya telah tersedia dalam layanan.</p>

					<hr>
					<p style="text-align: center;"><strong>RUANG LINGKUP KEGIATAN PERDAGANGAN EDCCASH</strong></p>
					<p style="text-align: justify;">Website https://edccash.com memperkenankan Verified Member untuk melakukan kegiatan-kegiatan perdagangan yang meliputi :</p>
					<ol style="text-align: justify;">
						<li>Pembelian Aset Digital dengan mata uang Rupiah.</li>
					</ol>
					<p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
					<ol style="text-align: justify;" start="2">
						<li>Penjualan Aset Digital dengan mata uang Rupiah.</li>
					</ol>
					<p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
					<ol style="text-align: justify;" start="3">
						<li>Melakukan deposit uang dalam mata uang Rupiah.</li>
					</ol>
					<p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
					<ol style="text-align: justify;" start="4">
						<li>Melakukan penarikan dalam mata uang Rupiah.</li>
					</ol>
					<p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
					<ol style="text-align: justify;" start="5">
						<li>Melakukan produksi dan pelayanan pengiriman Voucher EDCCASH yang dapat dicairkan menjadi saldo rupiah didalam Akun EDCCASH lainnya.</li>
					</ol>
					<hr>

					<p style="text-align: center;"><strong>TATA CARA TRANSAKSI EDCCASH</strong></p>
					<ol>
						<li style="text-align: justify;">Metode Market Maker Merupakan metode dalam layanan dimana Verified Member dapat menentukan harga jual/beli dalam melakukan transaksi perdagangan Aset Digital baik menggunakan Rupiah maupun Aset Digital.</li>
						<li style="text-align: justify;">Metode Market Taker Merupakan metode dalam layanan dimana Verified Member dapat melakukan pembelian/penjualan Aset Digital dengan Rupiah, secara instan atau langsung dengan membeli pada titik kesepakatan yang terdapat dalam market place tanpa perlu menunggu harga menyentuh titik nominal yang diinginkan.</li>
					</ol>
					<p style="text-align: justify;">BIAYA TRANSAKSI</p>
					<p style="text-align: justify;">Biaya transaksi pada EDCCASH dapat dilihat secara online dan bisa berubah sewaktu-waktu berdasarkan kebijakan dari EDCCASH.</p>
					<hr>

					<p style="text-align: center;"><strong>PENOLAKAN, PENUNDAAN, DAN PEMBATALAN</strong></p>
					<ol style="text-align: justify;">
						<li>Edccash.com berhak untuk melakukan penundaan dan/atau penolakan transaksi apabila EDCCASH mengetahui atau berdasarkan pertimbangan, menduga bahwa kegiatan penipuan dan/atau aksi kejahatan telah dan/atau akan dilakukan</li>
					</ol>

					<ol style="text-align: justify;" start="2">
						<li>Member/Verified Member setuju dan mengakui bahwa sepanjang diperbolehkan oleh ketentuan Hukum yang berlaku, EDCCASH wajib menolak untuk memproses segala transaksi.</li>
					</ol>

					<ol style="text-align: justify;" start="3">
						<li>Member/Verified Member mengakui bahwa EDCCASH tunduk kepada Undang-Undang tentang kejahatan keuangan, termasuk namun tidak terbatas pada, Undang-Undang Pemberantasan Tindak Pidana Korupsi dan Undang-Undang Tindak Pidana Pencucian Uang yang berlaku di Indonesia dan secara internasional, segala peraturan perundang-undangan yang berlaku di Indonesia dan kebijakan internal EDCCASH. Untuk tujuan tersebut, Member/Verified Member dengan ini setuju untuk memberikan segala informasi yang diminta oleh EDCCASH guna memenuhi peraturan perundang-undangan tersebut termasuk namun tidak terbatas pada nama, alamat, usia, jenis kelamin, keterangan identitas pribadi, pendapatan, pekerjaan, harta kekayaan, hutang, sumber kekayaan, tujuan pembukaan Akun, tujuan investasi, segala rencana keuangan atau informasi keuangan terkait lainnya dari Member/Verified Member. Jika diperlukan oleh EDCCASH, Member/Verified Member juga setuju untuk menyediakan data terbaru tentang informasi tersebut kepada EDCCASH.</li>
					</ol>

					<ol style="text-align: justify;" start="4">
						<li>EDCCASH berkewajiban untuk mematuhi hukum, peraturan dan permintaan lembaga masyarakat dan pemerintah dalam yurisdiksi yang berbeda-beda yang berkaitan dengan pencegahan atas pembiayaan untuk, antara lain, teroris dan pihak yang terkena sanksi. Hal ini dapat menyebabkan EDCCASH untuk melakukan pencegahan dan menyelidiki segala perintah pembayaran dan informasi atau komunikasi lainnya yang dikirimkan kepada atau oleh Member/Verified Member, atau atas nama Member/Verified Member melalui sistem EDCCASH. Proses ini juga dapat melibatkan EDCCASH untuk melakukan penyelidikan lebih lanjut untuk menentukan apakah nama yang muncul dalam segala transaksi yang dilakukan atau akan dilakukan oleh Member/Verified Member melalui Akunnya adalah nama teroris.</li>
					</ol>

					<ol style="text-align: justify;" start="5">
						<li>EDCCASH tidak akan bertanggung jawab untuk setiap kerugian (baik secara langsung dan termasuk namun tidak terbatas pada kehilangan keuntungan atau bunga) atau kerugian yang diderita oleh pihak manapun yang timbul dari segala penundaan atau kelalaian dari EDCCASH untuk memproses segala perintah pembayaran tersebut atau informasi atau komunikasi lainnya atau untuk melaksanakan segala kewajiban lainnya, yang disebabkan secara keseluruhan atau sebagian oleh segala tindakan yang diambil berdasarkan angka 4 ketentuan Penolakan dan Penundaan Transaksi ini.</li>
					</ol>

					<ol style="text-align: justify;" start="6">
						<li>EDCCASH berwenang untuk melakukan pemantauan atas Akun Member/Verified Member dalam rangka pencegahan kejahatan keuangan.</li>
					</ol>

					<ol style="text-align: justify;" start="7">
						<li>Member/Verified Member mengerti, memahami dan setuju bahwa terhadap setiap transaksi yang telah dilakukan melalui EDCCASH bersifat final dan tidak dapat dilakukan pembatalan oleh Member/Verified Member.</li>
					</ol>
					<hr>

					<p style="text-align: center;"><strong>TRANSAKSI MENCURIGAKAN</strong></p>
					<ol style="text-align: justify;">
						<li>Dalam hal terjadinya transaksi mencurigakan yang dilakukan melalui layanan EDCCASH, maka EDCCASH berhak untuk menghentikan/menonaktifkan Akun EDCCASH&nbsp; pada Member/Verified Member dan memblokir dana transaksi serta melakukan penundaan transaksi kepada Member/Verified Member, sampai dengan adanya pemberitahuan dari EDCCASH.</li>
					</ol>

					<ol style="text-align: justify;" start="2">
						<li>Dalam hal terjadi transaksi mencurigakan dan/atau&nbsp; transaksi yang melebihi batasan volume transaksi yang ditetapkan oleh EDCCASH terhadap Member/Verified Member karena alasan apapun juga, maka EDCCASH berhak sewaktu-waktu menunda pengkreditan dana ke Akun EDCCASH Member/Verified Member dan/atau melakukan pemblokiran Akun Member/Verified Member sampai proses investigasi selesai dilakukan dalam jangka waktu yang ditentukan oleh EDCCASH.</li>
					</ol>

					<ol style="text-align: justify;" start="3">
						<li>Apabila terbukti bahwa transaksi tersebut pada angka 1 dan 2 tersebut diatas mengenai transaksi mencurigakan adalah transaksi yang melanggar SKU dan/atau peraturan perundang-undangan yang berlaku, maka Member/Verified Member dengan ini Memberi kuasa kepada EDCCASH untuk mendebet Aset Digital pada Dompet Digital EDCCASH untuk mengganti kerugian EDCCASH yang timbul akibat transaksi tersebut, tanpa mengurangi hak untuk melakukan tuntutan ganti rugi atas seluruh kerugian yang timbul akibat transaksi tersebut dan Member/Verified Member dengan ini setuju bahwa EDCCASH tidak wajib melakukan pengembalian atas dana yang ditunda pengkreditannya oleh EDCCASH atau dana yang diblokir sebagaimana dimaksud pada angka 2 ketentuan mengenai transaksi mencurigakan ini.</li>
					</ol>
					<hr>

					<p style="text-align: center;"><strong>BATAS PENARIKAN</strong></p>
					<ol style="text-align: justify;">
						<li>Member/Verified Member dengan ini menyatakan setuju untuk mematuhi batas penarikan baik terhadap Aset Digital maupun Rupiah yang berlaku terhadap Akun Member/Verified Member, dan EDCCASH yang dalam hal ini menerapkan prinsip Anti Money Laundering (AML) sesuai dengan regulasi Pemerintah Republik Indonesia diberi kuasa serta hak untuk tidak melakukan proses terhadap transaksi yang telah melebihi batas penarikan harian&nbsp; yaitu sebesar yang ditentukan oleh EDCCASH.</li>
					</ol>

					<ol style="text-align: justify;" start="2">
						<li>Batas penarikan direset ulang atau kembali pada angka 0 (nol) setiap pukul 00.00 Waktu Indonesia Barat (WIB).</li>
					</ol>

					<ol style="text-align: justify;" start="3">
						<li>Proses persetujuan atau penolakan kenaikan batas penarikan limit harian mutlak merupakan kewenangan EDCCASH dengan pertimbangan dari tim audit dan hukum sesuai permintaan, sejarah transaksi, sumber dana, dan tujuan penggunaan transaksi serta tidak dapat diintervensi. Member/Verified Member yang ditolak kenaikan limitnya baru dapat mengajukan permohonan kembali dengan jangka waktu 1&times;24 (satu kali dua puluh empat) jam.</li>
					</ol>
					<hr>

					<p style="text-align: center;"><strong>VOUCHER EDCCASH</strong></p>
					<ol style="text-align: justify;">
						<li>EDCCASH menyediakan layanan untuk melakukan kegiatan transaksi Aset Digital dalam bentuk voucher EDCCASH (selanjutnya disebut sebagai &ldquo;voucher&rdquo;), baik dalam bentuk pembuatan untuk mitra baru.&nbsp;</li>
					</ol>
					<hr>

					<p style="text-align: center;"><strong>LAYANAN PENDUKUNG EDCCASH</strong></p>
					<p style="text-align: justify;">EDCCASH menyediakan layanan dalam bentuk Mobile Application (selanjutnya disebut sebagai &ldquo;Aplikasi Seluler&rdquo;), dengan ketentuan sebagai berikut :</p>
					<ol style="text-align: justify;">
						<li>Dalam perihal penggunaan Aplikasi Seluler oleh Member/Verified Member dan pengguna, EDCCASH berhak untuk meminta dan mengumpulkan informasi berkenaan dengan perangkat seluler yang digunakan Member/Verified Memberuntuk mengakses Aplikasi Seluler yang disediakan termasuk namun tidak terbatas untuk perangkat keras, sistem operasi, pengenal perangkat unik, informasi jaringan seluler juga termasuk data pribadi seperti alamat surat elektronik, alamat, nomor telepon seluler, alias, kata sandi, kode PIN Sellerdan informasi lainnya yang diperlukan untuk menggunakan layanan aplikasi seluler ini;</li>
					</ol>

					<ol style="text-align: justify;" start="2">
						<li>Aplikasi Seluler ini telah diuji oleh para peneliti dan Pengembang EDCCASH dan didalam penggunaannya, EDCCASH menghimbau untuk berhati-hati didalam pemakaiannya dan EDCCASH tidak dapat menjamin performa dan Aplikasi Seluler ini selalu berjalan dengan hasil yang dikehendaki;</li>
					</ol>

					<ol style="text-align: justify;" start="3">
						<li>EDCCASH dan Pengembang tidak bertanggung jawab dan tidak terikat untuk segala bentuk keuntungan maupun kerugian yang dimungkinkan terjadi sebagai akibat dari penggunaan Aplikasi Seluler ini. Keuntungan yang dimaksud mengacu pada bertambahnya jumah saldo dalam bentuk format Aset Digital ataupun Rupiah. Sedangkan untuk kerugian yang dimaksud, hal tersebut termasuk namun tidak terbatas untuk: berkurangnya jumlah saldo dalam format Aset Digital dan/atau Rupiah , kegagalan untuk menjalankan Aplikasi Seluler dan segala perintahnya, masalah jaringan/sinyal, terjadinya error pada sistem atau error yang disebabkan karena faktor-faktor dalam bentuk lain;</li>
					</ol>

					<ol style="text-align: justify;" start="4">
						<li>Dalam pemakaian Aplikasi Seluler ini, Member/Verified Member ataupun Pengguna telah menyetujui bahwa dalam kondisi apapun, Member/Verified Member dilarang untuk: menggandakan, melakukan penyalinan, memproduksi ulang, menerjemahkan, mengganti sistem, memodifikasi, melepas pemasangan, melepas susunan atau mencoba untuk menderivasikan kode sumber dari produk perangkat lunak ini;</li>
					</ol>

					<ol style="text-align: justify;" start="5">
						<li>Segala keputusan didalam penggunaan Aplikasi Seluler ini adalah keputusan secara suka rela atau independen yang dibuat oleh Member/Verified Member ataupun Pengguna tanpa adanya paksaan dari EDCCASH dan Pengembang. Atas perihal ini, Member/Verified Member ataupun Pengguna melepaskankan EDCCASH dan Pengembang dari segala bentuk tuntutan, ganti rugi dan segala tanggung jawab dalam bentuk apapun;</li>
					</ol>

					<ol style="text-align: justify;" start="6">
						<li>Member/Verified Member atau Pengguna menyatakan telah mengerti batasan-batasan keamanan dan privasi namun tidak terbatas kepada:
							<ol style="list-style-type: lower-alpha;">
								<li>Batasan ukuran dan fitur keamanan, privasi, dan autentikasi dalam layanan;</li>
								<li>Segala data dan informasi di dalam layanan mungkin dapat mengarah ke penyadapan, pemalsuan, spam, sabotase, pembajakan kata sandi, gangguan, penipuan, penyalahgunaan data elektronik, peretasan, dan kontaminasi sistem, termasuk namun tanpa pembatasan, virus, worms, dan Trojan horses, yang menyebabkan ketidak absahan, kerusakan, maupun akses yang berbahaya, dan/atau pemulihan informasi atau data dalam komputer Member/Verified Member atau bahaya keamanan dan privasi lainnya. Apabila Member/Verified Member tidak menghendaki untuk dikenai resiko &ndash; resiko tersebut, Member/Verified Member disarankan untuk sangat berhati-hati di dalam penggunaan Aplikasi Seluler maupun layanan ini.</li>
							</ol>
						</li>
					</ol>
					<hr>

					<p style="text-align: center;"><strong>KERJASAMA LAYANAN</strong></p>
					<ol style="text-align: justify;">
						<li>EDCCASH tidak bekerjasama dalam hal apapun dengan perusahaan-perusahaan Arisan Berantai, cloud mining, MLM, Ponzi Scheme, Money Game dan HYIP yang menawarkan profit dari perdagangan atau penggunaan Aset Digital, dan tidak bekerjasama dengan Biclubnetwork, BTCPanda, MMM Global, MMM Indonesia, Onecoin, Binary, BITCOINTRUST2U, BTCPANDA, BITKINGDOM, BITCLUBNETWORK, EUROBIT, ILGAMOS, FUTURENET dan tidak bertanggung jawab atas penggunaan layanan tersebut diatas oleh Member/Verified Member;</li>
					</ol>

					<ol style="text-align: justify;" start="2">
						<li>Perusahaan yang tidak terdata didalam Website dapat diartikan sebagai tidak ataupun belum berkerjasama dengan EDCCASH. EDCCASH tidak merekomendasi perusahaan manapun termasuk perusahaan yang bekerjasama dengan EDCCASH. Segala keputusan untuk menggunakan layanan tersebut menjadi tanggung jawab masing-masing Pengguna.</li>
					</ol>

					<ol style="text-align: justify;" start="3">
						<li>EDCCASH dengan ini menjelaskan bahwa tidak memiliki afiliasi resmi dengan partner yang telah disebutkan pada ayat (3) diatas. Segala transaksi yang terjadi antara Member/Verified Member dengan perusahaan-perusahaan di atas bukan merupakan tanggung jawab EDCCASH.</li>
					</ol>
					<hr>

					<p style="text-align: center;"><strong>STANDAR PENANGANAN PENGADUAN</strong></p>
					<p style="text-align: justify;">Pengaduan Member/Verified Member disini terkait dengan pemberitahuan pelanggaran data dan/atau apabila terjadi permasalahan berkenaan dengan kepemilikan Aset Digital yang dimiliki oleh Member/Verified Member. Apabila terjadi permasalahan tersebut, berikut adalah mekanisme yang harus dilakukan oleh Member/Verified Member yaitu :</p>
					<ol style="text-align: justify;">
						<li>Berkenaan dengan pengaduan Member/Verified Member, Member/Verified Member memiliki hak untuk melakukan pemberitahuan kepada EDCCASH dengan kondisi sebagai berikut:
							<ol style="list-style-type: lower-alpha;">
								<li>Apabila Member/Verified Member menerima spam, segala bentuk iklan liar dan/atau surat elektronik yang mengatasnamakan nama selain EDCCASH yang meminta data pribadi dan/atau mengganggu kenyamanan para Member/Verified Member;</li>
								<li>Apabila terdapat praktik tindak kejahatan pencurian dan penipuan Aset Digital yang mengakibatkan hilangnya Aset Digital di Akun Member/Verified Member;</li>
								<li>Apabila terdapat dugaan aktivitas pelanggaran data Member/Verified Member oleh pihak lain yang bukan dijelaskan pada poin a dan b tersebut diatas.</li>
							</ol>
						</li>
					</ol>
					<p>&nbsp;</p>
					<ol style="text-align: justify;" start="2">
						<li>Member/Verified Member dapat mengajukan pengaduan dengan mengisi di menu pesan yang tersedia di aplikasi</li>
					</ol>
					<p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
					<ol style="text-align: justify;" start="3">
						<li>Berkenaan dengan praktek penyalahgunaan data Member/Verified Member oleh pihak lain yang mengakibatkan adanya spam atau praktek skimming, maka Member/Verified Member dimohon dapat melakukan pengaduan dengan mekanisme sebagai berikut:
							<ol>
								<li>Sebagaimana yang diisyaratkan pada poin 2, Member/Verified Member dapat melakukan pengaduan dengan mengisi di menu pesan yang tersedia di aplikasi.</li>
								<li>Laporan tersebut akan segera kami lakukan tindak lanjut dengan penanganan pengaduan dalam kurun waktu 3 x 24 jam;</li>
								<li>Apabila dalam kurun waktu tersebut, Member/Verified Member tidak mendapatkan pelayanan dari pihak kami, maka Member/Verified Member dapat mengirimkan kembali pengaduan tersebut ke email support@edccash.com dan/atau melakukan kontak langsung ke kantor representative EDCCASH;</li>
								<li>Berkenaan dengan hilangnya Aset Digital di Akun Member/Verified Member sebagai akibat adanya praktik tindak pidana kejahatan elektronik oleh pihak lain, maka Member/Verified Member dapat melakukan pengaduan dengan mekanisme sebagai berikut:</li>
								<li>Sebagaimana yang diisyaratkan pada poin 2, Member/Verified Member dapat melakukan pengaduan melalui pengisian pesan pengaduan yang telah disediakan.;</li>
								<li>Laporan tersebut akan dilaksanakan penangan awal dimana akan dilakukan pembekuan Akun oleh pihak terlapor (pihak terduga) yang menampung atau mengambil Aset Digital Member/Verified Membertersebut;</li>
								<li>Admin akan meneruskan laporan pengaduan anda kepada tim legal untuk memproses penanganan selanjutnya. Penanganan selanjutnya berupa klarifikasi dengan pihak terlapor (pihak terduga);</li>
								<li>Apabila tahap klarifikasi ini berhasil dimana pihak terlapor Memberikan respon maka akan dilakukan mediasi dengan pihak pelapor (dalam hal ini Member/Verified Member yang melapor);</li>
								<li>Apabila mediasi tidak berhasil maka akan dilanjutkan melalui laporan ke kepolisian setempat dan kami akan mempersiapkan data yang diminta.</li>
							</ol>
						</li>
					</ol>
					<hr>

					<p style="text-align: center;"><strong>PERNYATAAN DAN JAMINAN</strong></p>
					<ol style="text-align: justify;">
						<li>Semua layanan dalam Websitetidak Memberikan jaminan ataupun garansi apapun dan EDCCASH tidak menjamin bahwa Website akan selalu dapat diakses setiap waktu.</li>
					</ol>

					<ol style="text-align: justify;" start="2">
						<li>Member/Verified Member menyatakan dan menjamin akan menggunakan layananEDCCASH dengan baik dan penuh tanggung jawab serta tidak melakukan tindakan yang berlawanan dengan hukum, undang-undang serta peraturan yang berlaku di wilayah Republik Indonesia.</li>
					</ol>

					<ol style="text-align: justify;" start="3">
						<li>Member/Verified Member menyatakan dan menjamin tidak akan menggunakan layanan EDCCASH dalam hal penjualan barang dan/atau jasa yang berhubungan dengan :
							<ol style="list-style-type: lower-alpha;">
								<li>Narkotika, bahan-bahan dan/atau zat-zat kimia untuk penelitian,</li>
								<li>Uang dan apapun yang sejenis dengan uang, termasuk derivativenya,</li>
								<li>Barang dan/atau jasa yang melanggar Hak Kekayaan Intelektual,</li>
								<li>Amunisi, senjata api, bahan peledak, serta senjata tajam yang termasuk di dalam Ketentuan Hukum yang berlaku,</li>
								<li>Barang dan/atau jasa yang menunjukkan informasi pribadi dari Pihak Ketiga yang melanggar hukum,</li>
								<li>Dukungan terhadap skema Ponzi,</li>
								<li>Barang dan/atau jasa yang berhubungan dengan pembelian lotre (layaway),</li>
								<li>Jasa yang terkait dengan perbankan yang berada di luar wilayah Republik Indonesia,</li>
								<li>Dukungan terhadap organisasi terlarang atau dilarang oleh pemerintah.</li>
							</ol>
						</li>
					</ol>

					<ol style="text-align: justify;" start="4">
						<li>Member/Verified Member menyatakan dan menjamin untuk tidak menggunakan layanan EDCCASH dalam praktek perjudian dan/atau kegiatan lain yang mengenakan biaya masuk dan menjanjikan hadiah, termasuk namun tidak terbatas pada permainan kasino, perjudian dalam olahraga, usaha yang memfasilitasi perjudian dengan cara undian.</li>
					</ol>

					<ol style="text-align: justify;" start="5">
						<li>Member/Verified Member menyatakan dan menjamin bahwa seluruh data, informasi dan dokumen yang diberikan Member/Verified Member kepada EDCCASH merupakan data, informasi dan dokumen yang sebenar-benarnya, sah, jujur, transparan, lengkap dan akurat. Member/Verified Member menyatakan bersedia dituntut secara pidana maupun perdata apabila EDCCASH mengetahui atau memperoleh informasi dari pihak manapun bahwa data, informasi dan dokumen yang diberikan Member/Verified Member ternyata tidak benar/tidak sepenuhnya benar/palsu. Member bersedia untuk melakukan pembaharuan data/informasi (profile update) apabila sewaktu-waktu diminta oleh EDCCASH dan selanjutnya seluruh dokumen yang sudah diberikan menjadi sepenuhnya milik EDCCASH.</li>
					</ol>

					<ol style="text-align: justify;" start="6">
						<li>EDCCASH telah Memberikan keterangan dan penjelasan yang cukup mengenai layanan EDCCASH yang akan dipergunakan Member/Verified Member sesuai dengan ketentuan pada SKU dan Member/Verified Member telah mengerti dan memahami serta bersedia menanggung segala konsekuensi yang mungkin timbul sehubungan dengan penggunaan layanan EDCCASH termasuk manfaat, resiko dan biaya-biaya yang melekat layanan dan layanan.</li>
					</ol>

					<ol style="text-align: justify;" start="7">
						<li>Member/Verified Member dengan ini menyetujui dan memberi kuasa kepada EDCCASH untuk menggunakan semua data, keterangan dan informasi yang diperoleh EDCCASH mengenai Member/Verified Member termasuk namun tidak terbatas pada penggunaan sarana komunikasi pribadi Member/Verified Member untuk segala keperluan lainnya sepanjang dimungkinkan dan diperkenankan oleh perundang-undangan yang berlaku, termasuk yang bertujuan untuk pemasaran produk-produk EDCCASH ataupun pihak lain, yang bekerjasama dengan EDCCASH. Untuk penggunaan data yang memerlukan persetujuan pihak lain, dengan ini Member/Verified Member menyatakan bahwa telah memperoleh persetujuan tertulis dari pihak ketiga manapun untuk penggunaan data, keterangan dan informasi tersebut, dan karena itu Member/Verified Member menjamin dan menyetujui bahwa EDCCASH tidak akan Memberikan ganti rugi dan/atau pertanggungjawaban dalam bentuk apapun kepada Member/Verified Member atau pihak manapun atas segala resiko, kerugian, tuntutan dan/atau tanggungjawab yang mungkin timbul dikemudian hari sehubungan dengan penggunaan data, keterangan dan informasi yang telah memperoleh persetujuan tertulis tersebut oleh EDCCASH.</li>
					</ol>

					<ol style="text-align: justify;" start="8">
						<li>Member/Verified Member menyatakan dan menjamin bahwa transaksi yang dilakukan dengan menggunakan layanan EDCCASH adalah transaksi yang tidak melanggar ketentuan peraturan perundang-undangan yang berlaku dan ketentuan mengenai penerimaan pelaksanaan transaksi sebagaimana diatur dalam SKU. Dalam hal EDCCASH menemukan indikasi pelaksanaan transaksi yang tidak sesuai dengan ketentuan peraturan perundang-undangan yang berlaku dan atau ketentuan mengenai penerimaan pelaksanaan transaksi yang diatur dalam SKU, maka EDCCASH mempunyai hak penuh untuk menutup Akun Member/Verified Member dengan menonaktifkan layanan EDCCASH pada Member/Verified Member, dan Member/Verified Member dengan ini setuju bahwa EDCCASH dengan ini tidak akan Memberikan ganti rugi dan atau pertanggungjawaban dalam bentuk apapun kepada Member/Verified Member, atau pihak manapun atas segala klaim dan atau tuntutan yang timbul sehubungan dengan penonaktifan layanan EDCCASH pada Member/Verified Member.</li>
					</ol>

					<ol style="text-align: justify;" start="9">
						<li>Member/Verified Member menyatakan dan menjamin bahwa resiko terhadap penggunaan layanan, produk dan promosi Pihak Ketiga dengan Member/Verified Member (apabila ada), ditanggung oleh Member/Verified Member, dan Member/Verified Member menyatakan bahwa EDCCASH tidak bertanggung jawab atas layanan dan kinerja layanan Pihak Ketiga.</li>
					</ol>

					<ol style="text-align: justify;" start="10">
						<li>Member/Verified Member dengan ini bertanggung jawab sepenuhnya dan setuju bahwa EDCCASH tidak akan Memberikan ganti rugi dan atau pertanggungjawaban dalam bentuk apapun kepada Member/Verified Member atau pihak manapun atas segala kerugian dan atau klaim dan/atau tuntutan yang timbul atau mungkin dialami oleh EDCCASH sebagai akibat dari kelalaian atau kegagalan Member/Verified Member dalam menjalankan transaksi.</li>
					</ol>

					<ol style="text-align: justify;" start="11">
						<li>Member/Verified Member dengan ini Memberikan jaminan kepada EDCCASH bahwa Member/Verified Member beserta dengan seluruh karyawannya dan/atau pihak lain yang bekerja sama dengan Member/Verified Member tidak akan memperbanyak dan/atau membuat, memberikan, menyewakan, menjual, memindahkan, mengalihkan, dan/atau mengalih-fungsikan layanan EDCCASH baik sebagian atau seluruhnya kepada pihak lain dengan alasan apapun, termasuk namun tidak terbatas pada penyalahgunaan layanan edccash.com untuk melakukan transaksi selain dari yang telah ditentukan dalam SKU dengan maksud apapun, termasuk namun tidak terbatas untuk kejahatan/penipuan/kecurangan. Apabila Member/Verified Member melanggar ketentuan tersebut, maka Member/Verified Member wajib bertanggung jawab atas segala kerugian, tuntutan dan atau gugatan yang timbul akibat dari pelanggaran tersebut dan dengan ini setuju bahwa EDCCASH tidak akan Memberikan ganti rugi dan atau pertanggungjawaban dalam bentuk apapun kepada Member/Verified Member atau pihak manapun atas segala klaim, tuntutan dan/atau gugatan yang timbul akibat pelanggaran tersebut</li>
					</ol>

					<ol style="text-align: justify;" start="12">
						<li>Sebagai wujud komitmen dan bentuk kepatuhan kami terhadap GDPR (General Data Protection Regulation), maka bersama dengan Syarat dan Ketentuan Umum (SKU) ini EDCCASH menjamin bahwa :
							<ol style="list-style-type: lower-alpha;">
								<li>EDCCASH selalu berkomiten dan menjamin data personal Member/Verified Member kami dan akan menindak tegas apabila ada pihak lain yang telah menggunakan data informasi Member/Verified Member kami,</li>
								<li>EDCCASH menjamin transfer lintas batas Aset Digital,</li>
								<li>EDCCASH selalu menerapkan protokoler dan mekanisme berupa permintaan ijin dan persetujuan atau notifikasi kepada Member/Verified Member untuk segala bentuk pemrosesan data di marketplace didalam melakukan deposit, penarikan dan/atau pembaharuan data.</li>
							</ol>
						</li>
					</ol>
					<hr>

					<p style="text-align: center;"><strong>TANGGUNG JAWAB</strong></p>
					<p style="text-align: justify;">Member/Verified Member setuju untuk menanggung setiap resiko, kerugian atau akibat yang diderita Member/Verified Member yang disebabkan oleh, antara lain :</p>
					<ol style="text-align: justify;">
						<li>Kerusakan, keterlambatan, kehilangan atau kesalahan pengiriman perintah dan komunikasi, secara elektronik yang disebabkan oleh Member/Verified Member;</li>
					</ol>

					<ol style="text-align: justify;" start="2">
						<li>Laporan Akun EDCCASH atau pemberitahuan penggunaan layanan EDCCASH yang dikirim kepada Member/Verified Member diterima atau dibaca atau disalahgunakan oleh pihak yang tidak berwenang atas Akun EDCCASH,</li>
					</ol>

					<ol style="text-align: justify;" start="3">
						<li>Password Akun diketahui oleh orang/pihak lain atas kesalahan Member/Verified Member.</li>
					</ol>

					<p style="text-align: justify;">Member/Verified Member memahami dan setuju bahwa Member/Verified Member akan menggunakan Akun dan layanan EDCCASH untuk transaksi yang tidak bertentangan dengan ketentuan peraturan perundang-undangan dan/atau kebijakan internal EDCCASH yang berlaku dan/atau peraturan-peraturan lainnya yang berlaku secara nasional maupun internasional yang terkait dengan pelaksanaan transaksi tersebut baik secara langsung maupun tidak langsung, dan EDCCASH tidak akan Memberikan ganti rugi dan/atau pertanggungjawaban dalam bentuk apapun kepada Member/Verified Member atau pihak manapun atas segala klaim dan/atau tuntutan dan/atau kerugian yang timbul sehubungan dengan penggunaan layanan EDCCASH oleh Member/Verified Member untuk transaksi yang dikategorikan sebagai transaksi yang mencurigakan dan/atau transaksi yang dilarang oleh ketentuan peraturan perundang-undangan dan/atau kebijakan internal EDCCASH yang berlaku dan/atau peraturan-peraturan lainnya yang berlaku baik secara nasional maupun secara internasional yang terkait dengan kegiatan transaksi yang dilakukan oleh Member/Verified Member secara langsung maupun tidak langsung.</p>

					<p style="text-align: justify;">Dalam melakukan transaksi menggunakan layanan EDCCASH, Member/Verified Member mengerti dan menyetujui bahwa terdapat sanksi-sanksi tertentu yang dikenakan oleh pemerintah Indonesia, termasuk pemerintah Negara lain, dan/atau instansi berwenang lainnya terhadap beberapa negara, badan dan perorangan. Mengacu pada hal tersebut, EDCCASH berhak untuk tidak melaksanakan/memproses transaksi yang merupakan pelanggaran terhadap ketentuan tersebut, dan instansi berwenang dapat mensyaratkan pengungkapan informasi terkait. EDCCASH tidak bertanggung jawab apabila edccash.com atau pihak lain gagal atau menunda pelaksanaan transaksi, atau mengungkapkan informasi sebagai akibat pelanggaran langsung maupun tidak langsung atas ketentuan peraturan perundang-undangan tersebut.</p>
					<hr>

					<p style="text-align: center;"><strong>RESIKO</strong></p>
					<ol style="text-align: justify;">
						<li>Perdagangan Aset Digital merupakan aktifitas beresiko tinggi. Harga Aset Digital fluktuatif, di mana harga dapat berubah secara signifikan dari waktu ke waktu. Sehubungan dengan fluktuasi harga, nilai Aset Digital dapat bertambah maupun berkurang secara signifikan sewaktu-waktu. Semua Aset Digital berpotensi untuk mengalami perubahan nilai secara drastis atau bahkan menjadi tidak berarti. Terdapat resiko kehilangan yang tinggi sebagai dampak dari membeli, menjual, atau berdagang apapun di pasar dan EDCCASH tidak bertanggung jawab atas perubahan fluktuasi dari nilai tukar Aset Digital.</li>
					</ol>

					<ol style="text-align: justify;" start="2">
						<li>Perdagangan Aset Digital juga memiliki resiko tambahan yang tidak dialami oleh Aset Digital atau komoditas lain di pasar. Tidak seperti mata uang kebanyakan yang dijamin oleh pemerintah atau lembaga legal lainnya, atau emas dan perak, digital asset merupakan sebuah Aset Digital yang unik dan dijamin oleh teknologi dan rasa percaya. Tidak ada bank sentral yang dapat mengontrol, melindungi nilai Aset Digital dalam krisis, atau mencetak mata uang tersebut.</li>
					</ol>

					<ol style="text-align: justify;" start="3">
						<li>Member/Verified Member dihimbau untuk berhati-hati dalam mengukur situasi finansial dan memastikan bahwa Member/Verified Member bersedia menghadapi resiko yang ada dalam menjual, membeli, atau berdagang Aset Digital. Member/Verified Member disarankan dengan sangat untuk melakukan riset pribadi sebelum membuat keputusan untuk memperjual belikan Aset Digital. Semua keputusan perdagangan Aset Digital merupakan keputusan independen oleh pengguna secara sadar tanpa paksaan dan melepaskan EDCCASH atas akibat dari kegiatan perdagangan Aset Digital.</li>
					</ol>

					<ol style="text-align: justify;" start="4">
						<li>EDCCASH tidak menjamin kelangsungan jangka panjang dari Aset Digital yang diperdagangkan maupun ditukar di dalam marketplace</li>
					</ol>

					<ol style="text-align: justify;" start="5">
						<li>Berkenaan dengan kegiatan penambangan Aset Digital, perlu untuk diluruskan dan ditegaskan bahwa EDCCASH tidak melakukan kegiatan menambang, memproduksi atau mencetak Aset Digital. Aset Digital diciptakan dan ditambang menggunakan software khusus oleh para penambang (miner) yang tersebar secara acak di seluruh dunia dan saling terhubung dengan teknologi peer-to-peer di jaringan blockchain.</li>
					</ol>
					<hr>

					<p style="text-align: center;"><strong>LARANGAN</strong></p>
					<p style="text-align: justify;">Tanpa mengurangi maksud dan tujuan dari ketentuan mengenai larangan-larangan yang terdapat dalam SKU, maka Member/Verified Member dilarang untuk melakukan hal-hal sebagai berikut :</p>
					<ol style="text-align: justify;">
						<li>Member/Verified Member tidak diperbolehkan melakukan tindakan-tindakan yang dapat mengakibatkan kerugian bagi EDCCASH dan/atau yang bertentangan dengan SKU dan peraturan perundang-undangan yang berlaku.</li>
					</ol>

					<ol style="text-align: justify;" start="2">
						<li>Apabila Member/Verified Member melanggar salah satu atau beberapa ketentuan dalam ketentuan ini, maka Member/Verified Member akan bertanggung jawab sepenuhnya dan dengan ini setuju bahwa atas pelanggaran tersebut EDCCASH berhak untuk membatasi fitur penggunaan layanan EDCCASH dan Member/Verified Member mengetahui dan setuju bahwa EDCCASH tidak akan Memberikan ganti rugi dan atau pertanggungjawaban dalam bentuk apapun kepada Member/Verified Member atau pihak manapun atas segala resiko atau akibat yang timbul atas pembatasan penggunaan layanan tersebut. Member/Verified Memberselanjutnya berkewajiban untuk membayar ganti rugi kepada EDCCASH sebesar nilai kerugian yang mungkin dialami EDCCASH atas pelanggaran tersebut. Member/Verified Member dengan ini Memberikan kuasa kepada EDCCASH untuk melakukan pendebetan Akun Member/Verified Member untuk pembayaran ganti rugi tersebut. Dalam hal dana pada Akun Member/Verified Member tidak tersedia dan/atau tidak mencukupi, maka Member wajib mengembalikan seluruh dana tersebut secara tunai kepada EDCCASH dalam waktu selambat-lambatnya 7 (tujuh) hari kerja sejak EDCCASH mengajukan klaim yang dimaksud.</li>
					</ol>
					<hr>

					<p style="text-align: center;"><strong>KERAHASIAAN</strong></p>
					<p style="text-align: justify;">Selama bekerjasama dengan EDCCASH dan pada setiap waktu sesudahnya, maka :</p>
					<ol style="text-align: justify;">
						<li>Setiap informasi dan atau data yang diberikan oleh EDCCASH kepada Member/Verified Member dan atau data yang diperoleh Member/Verified Member sebagai pelaksanaan dari SKU baik yang diberikan atau disampaikan secara lisan, tertulis, grafik atau yang disampaikan melalui media elektronik atau informasi dan/atau data dalam bentuk lainnya selama berlangsungnya pembicaraan atau selama pekerjaan lain adalah bersifat rahasia (selanjutnya disebut sebagai &ldquo;Informasi Rahasia&rdquo;).</li>
					</ol>

					<ol style="text-align: justify;" start="2">
						<li>Member/Verified Member setuju dan sepakat bahwa setiap saat akan merahasiakan informasi rahasia yang diperoleh sebagai pelaksanaan dari kerjasama kepada siapapun atau tidak akan menggunakannya untuk kepentingan Member/Verified Member atau kepentingan pihak lainnya, tanpa terlebih dahulu memperoleh persetujuan tertulis dari pejabat yang berwenang dari EDCCASH atau pihak yang berwenang lainnya sesuai dengan ketentuan hukum yang berlaku.</li>
					</ol>

					<ol style="text-align: justify;" start="3">
						<li>Apabila Member/Verified Member melanggar ketentuan sebagaimana dimaksud dalam angka 1 dan 2 ketentutan mengenai kerahasiaan ini, maka segala kerugian, tuntutan dan atau gugatan yang dialami EDCCASH merupakan tanggung jawab Member/Verified Member sepenuhnya, dan atas permintaan pertama dari EDCCASH, Member/Verified Member berkewajiban untuk menyelesaikannya sesuai dengan ketentuan hukum dan perundang-undangan yang berlaku dan memberikan ganti rugi yang mungkin timbul akibat pelanggaran tersebut kepada EDCCASH. Member/Verified Member dengan ini setuju bahwa EDCCASH tidak akan Memberikan ganti rugi dan/atau pertanggungjawaban dalam bentuk apapun kepada Member/Verified Member atau pihak manapun atas segala tuntutan dan atau gugatan yang mungkin timbul dikemudian hari sehubungan dengan pelanggaran tersebut.</li>
					</ol>

					<ol style="text-align: justify;" start="4">
						<li>Kewajiban untuk menyimpan informasi rahasia sebagaimana dimaksud dalam angka 1 dan 2 ketentutan mengenai kerahasiaan menjadi tidak berlaku, apabila;
							<ol style="list-style-type: lower-alpha;">
								<li>Informasi rahasia tersebut menjadi tersedia untuk masyarakat umum,</li>
								<li>Informasi rahasia tersebut diperintahkan untuk dibuka untuk memenuhi perintah pengadilan atau badan pemerintah lain yang berwenang,</li>
								<li>Informasi rahasia tersebut diberikan sesuai dengan ketentuan hukum yang berlaku.</li>
							</ol>
						</li>
					</ol>

					<ol style="text-align: justify;" start="5">
						<li>Member/Verified Member selanjutnya menyetujui untuk melakukan segenap upaya dan mengambil setiap tindakan yang diperlukan untuk menghindari pihak-pihak ketiga dalam memperoleh akses terhadap dan/atau mengakibatkan terjadinya pengungkapan atas informasi rahasia.</li>
					</ol>

					<ol style="text-align: justify;" start="6">
						<li>Dalam hal kerjasama telah berakhir, Member/Verified Member sepakat bahwa kewajiban untuk merahasiakan dokumen dan materi yang merupakan informasi rahasia sebagaimana diatur dalam ketentuan ini akan tetap berlaku.</li>
					</ol>
					<hr>

					<p style="text-align: center;"><strong>KELALAIAN</strong></p>
					<ol style="text-align: justify;">
						<li>Member/Verified Member sepakat bahwa yang dimaksud dengan Kelalaian (Wanprestasi) adalah hal atau peristiwa sebagai berikut :
							<ol style="list-style-type: lower-alpha;">
								<li>Melakukan ingkar janji atau tidak menepati perjanjian ,</li>
								<li>Apabila Member/Verified Member lalai dalam melaksanakan suatu kewajiban atau melanggar ketentuan dalam SKU,</li>
								<li>Membuat pernyataan tidak benar,</li>
								<li>Bilamana ternyata bahwa dalam suatu pernyataan atau jaminan yang diberikan oleh Member/Verified Member tidak benar atau tidak sesuai dengan kenyataannya.</li>
							</ol>
						</li>
						<li>Dalam hal terjadi suatu kejadian kelalaian berdasarkan angka 1 ketentuan kelalaian ini oleh Member/Verified Member, maka EDCCASH dapat memilih apakah tetap meneruskan atau menutup Akun Member/Verified Member. Apabila EDCCASH berkehendak untuk menutup Akun Member/Verified Member, maka kehendak tersebut harus diberitahukan kepada Member/Verified Member dalam waktu yang wajar menurut EDCCASH.</li>
					</ol>
					<ol style="text-align: justify;" start="3">
						<li>Dalam hal terjadi kejadian kelalaian oleh Member/Verified Membe rsebagaimana dimaksud, maka edccash.com berhak dengan seketika melakukan penonaktifan Akun Member/Verified Member pada EDCCASH tanpa harus melakukan pemberitahuan terlebih dahulu kepada Member/Verified Member, dan Member/Verified Member dengan ini setuju bahwa EDCCASH tidak akan Memberikan ganti rugi dan/atau pertanggungjawaban dalam bentuk apapun kepada Member/Verified Member atau pihak manapun atas segala tuntutan dan/atau gugatan, klaim, permintaan ganti kerugian dari pihak manapun yang mungkin timbul sehubungan dengan terjadinya kelalaian tersebut.</li>
					</ol>
					<hr>

					<p style="text-align: center;"><strong>HAK KEKAYAAN INTELEKTUAL</strong></p>
					<ol style="text-align: justify;">
						<li>Member/Verified Member menyatakan dan menyetujui EDCCASH sebagai pemegang hak kepemilikan atas layanan, perangkat lunak, teknologi, konten, situs, dan alat pendukung lainnya termasuk dalam Hak Kekayaan Intelektual yang terkait dengan fasilitas EDCCASH.</li>
					</ol>

					<ol style="text-align: justify;" start="2">
						<li>Member/Verified Member hanya diperbolehkan untuk melihat, mencetak dan/atau mengunduh salinan material dari Website untuk penggunaan pribadi dan non-komersial. Seluruh penggunaan komersial perlu mendapatkan ijin dari EDCCASH. Setiap kegiatan komersil tanpa seijin EDCCASH diartikan sebagai pelanggaran atas Hak Kekayaan Intelektual EDCCASH dan dapat mengakibatkan pemberhentian Akun EDCCASH pada Member/Verified Member.</li>
					</ol>
					<hr>

					<p style="text-align: right;"><strong>PEMBLOKIRAN DAN PEMBEKUAN AKUN MEMBER/ERIFIED MEMBER</strong></p>
					<ol style="text-align: justify;">
						<li>Dalam rangka menjalankan prinsip kehati-hatian, EDCCASH berhak dan Member/Verified Member dengan ini memberi kuasa kepada EDCCASH untuk memblokir baik sebagian atau seluruh saldo Member/Verified Member (hold amount) dan/atau mendebetnya serta melakukan pemberhentian Akun, apabila terjadi hal berikut :
							<ol style="list-style-type: lower-alpha;">
								<li>Adanya permintaan dari pihak perbankan dikarenakan adanya kesalahan pengiriman dana dan pihak perbankan tersebut meminta dilakukan pemblokiran;</li>
								<li>Menurut pendapat dan pertimbangan EDCCASH terdapat kesalahan penerimaan transaksi;</li>
								<li>EDCCASH digunakan sebagai tempat&nbsp; penampungan yang diindikasikan sebagai hasil kejahatan termasuk namun tidak terbatas pada tindak pidana korupsi, penyuapan, jual beli narkotika, psikotropika, penyelundupan tenaga kerja, penyelundupan manusia, bidang perbankan, bidang pasar modal, bidang perasuransian, kepabeanan, cukai, perdagangan manusia, perdagangan senjata gelap, terorisme, penculikan, pencurian, penggelapan, penipuan, pemalsuan, perjudian, prostitusi, bidang perpajakan, dan terorisme;</li>
								<li>Member/Verified Member dinilai lalai dalam melakukan kewajiban berdasarkan SKU;</li>
								<li>Kebijakan EDCCASH atau oleh suatu ketetapan pemerintah atau instansi yang berwenang atau peraturan yang berlaku, sehingga EDCCASH diharuskan melakukan pemblokiran dan/atau pembekuan Akun EDCCASH tersebut.</li>
							</ol>
						</li>
					</ol>

					<ol style="text-align: justify;" start="2">
						<li>Apabila terjadi pemberhentian Akun, Member/Verified Member setuju dan menyatakan bersedia untuk tetap terikat dengan SKU menghentikan penggunaan layanan EDCCASH, memberikan hak kepada edccash.com untuk menghapus semua informasi dan data dalam server EDCCASH, dan menyatakan EDCCASH tidak bertanggung jawab kepada Member/Verified Member atau Pihak Ketiga atas penghentian akses dan penghapusan informasi serta data dalam Akun Member/Verified Member.</li>
					</ol>
					<hr>

					<p style="text-align: center;"><strong>PAJAK</strong></p>
					<p style="text-align: justify;">Bahwa pajak atas aktivitas perdagangan Aset Digital adalah pajak yang ditanggung oleh masing-masing pelaku kegiatan, dalam hal ini Member/Verified Member dan EDCCASH. Member/Verified Member dapat mengkonsultasikan pembayaran pajak kepada Konsultan Pajak Pribadi, dan Edccash tidak menanggung pajak Member/Verified Member kecuali ditentukan lain dalam Syarat dan Ketentuan ini. KEAMANAN, EDCCASH telah menerapkan tindakan kemanan sebagai jaringan pengaman informasi terhadap akses yang tidak sah dalam penggunaan, perubahan dan/atau pengungkapan Akun, dengan standar keamanan yang telah sesuai dengan Ketentuan Peraturan Perundang-undangan yang berlaku. Masuknya pihak bertanggung jawab terhadap akses dalam penggunaan, perubahan dan/atau pengungkapan Akun dari pihak ketiga akibat kelalaian dan/atau kesalahan Member/Verified Member berakibat ditanggungnya resiko oleh Member/Verified Member, maka EDCCASH tidak akan Memberikan ganti rugi dan/atau pertanggungjawaban dalam bentuk apapun kepada Member/Verified Member atau pihak lain manapun atas segala resiko, tanggung jawab dan tuntutan apapun yang mungkin timbul sehubungan dengan adanya kelalaian/kesengajaan/kesalahan Member/Verified Member dalam memberikan informasi.</p>
					<hr>

					<p style="text-align: center;"><strong>KEADAAN KAHAR/FORCE MAJEURE</strong></p>
					<ol style="text-align: justify;">
						<li>Yang dimaksud dengan Force Majeure adalah kejadian-kejadian yang terjadi di luar kemampuan dan kekuasaan EDCCASH sehingga mempengaruhi pelaksanaan transaksi antara lain namun tidak terbatas pada :
							<ol style="list-style-type: lower-alpha;">
								<li>Gempa bumi, angin topan, banjir, tanah longsor, gunung meletus dan bencana alam lainnya;</li>
								<li>Perang, demonstrasi, huru-hara, terorisme, sabotase, embargo, dan pemogokan massal;</li>
								<li>Kebijakan ekonomi dari Pemerintah yang mempengaruhi secara langsung;</li>
							</ol>
						</li>
					</ol>
					<ol style="text-align: justify;" start="2">
						<li>Sepanjang EDCCASH telah melaksanakan segala kewajibannya sesuai dengan peraturan perundang-undangan yang berlaku sehubungan dengan terjadinya Force Majeure tersebut, maka EDCCASH tidak akan memberikan ganti rugi dan/atau pertanggungjawaban dalam bentuk apapun kepada Member/Verified Member atau pihak lain manapun atas segala resiko, tanggungjawab dan tuntutan apapun yang mungkin timbul sehubungan dengan keterlambatan maupun tidak dapat dilaksanakannya kewajiban akibat Force Majeure.</li>
					</ol>
					<hr>

					<p style="text-align: center;"><strong>PEMBERITAHUAN</strong></p>
					<ol style="text-align: justify;">
						<li>Member/Verified Member menyatakan setuju untuk berkomunikasi dengan EDCCASH dalam format elektronik, dan menyetujui bahwa semua syarat, kondisi, perjanjian, pemberitahuan, pengungkapan atau segala bentuk komunikasi lainnya yang disediakan oleh EDCCASH kepada Member/Verified Member secara elektronik dianggap sebagai tertulis.</li>
					</ol>

					<ol style="text-align: justify;" start="2">
						<li>Member/Verified Member menyatakan setuju untuk menerima email dari Website. E-Mail yang dikirim dapat berisi informasi seputar Akun, transaksi, sistem, promosi dan lain sebagainya.</li>
					</ol>
					<hr>

					<p style="text-align: center;"><strong>PENYELESAIAN PERSELISIHAN</strong></p>
					<p style="text-align: justify;">Setiap perselisihan, sengketa atau perbedaan pendapat (selanjutnya disebut sebagai &ldquo;Perselisihan&rdquo;) yang timbul sehubungan dengan pelaksanaan kerjasama akan diselesaikan dengan cara-cara sebagai berikut :</p>
					<ol style="text-align: justify;">
						<li>Bahwa setiap Perselisihan, sepanjang memungkinkan, akan diselesaikan dengan cara musyawarah untuk mufakat.</li>
					</ol>

					<ol style="text-align: justify;" start="2">
						<li>Setiap Perselisihan yang tidak dapat diselesaikan secara musyawarah, akan diselesaikan melalui Pengadilan Negeri Jakarta.</li>
					</ol>
					<hr>

					<p style="text-align: center;"><strong>DOMISILI HUKUM</strong></p>
					<p style="text-align: justify;">SKU dibuat, ditafsirkan dan diberlakukan berdasarkan hukum negara Republik Indonesia.&nbsp; Edccash.com dan Member/Verified Member telah sepakat untuk memilih tempat kediaman hukum yang umum dan tidak berubah pada Kantor Kepaniteraan Pengadilan Negeri Jakarta. KETENTUAN LAIN-LAIN :</p>
					<ol style="text-align: justify;">
						<li>Untuk hal-hal yang belum diatur dalam SKU, maka akan berlaku seluruh ketentuan dalam Kitab Undang-Undang Hukum Perdata serta ketentuan-ketentuan peraturan perundang-undangan lainnya yang terkait.</li>
					</ol>

					<ol style="text-align: justify;" start="2">
						<li>Jika EDCCASH melakukan perubahan terhadap isi SKU ini maka EDCCASH akan memberitahukan perubahannya kepada Member/Verified Member sesuai dengan peraturan perundang-undangan yang berlaku melalui media pemberitahuan yang dianggap baik oleh EDCCASH dan selanjutnya Member/Verified Member akan tunduk pada perubahan SKU tersebut. Perubahan setiap lampiran dari SKU akan disepakati dan untuk selanjutnya merupakan satu kesatuan dengan dan merupakan bagian yang tidak terpisahkan dari SKU.</li>
					</ol>

					<ol style="text-align: justify;" start="3">
						<li>Apabila Member/Verified Member melakukan tindakan-tindakan di luar ketentuan SKU, maka Member/Verified Member akan bertanggung jawab sepenuhnya dan dengan ini setuju bahwa EDCCASH tidak akan memberikan ganti rugi dan/atau pertanggungjawaban dalam bentuk apapun kepada Member/Verified Member, atau pihak manapun atas segala tuntutan dan/atau gugatan dan/atau klaim yang diajukan pihak lain sehubungan dengan tindakan-tindakan yang dilakukan Member/Verified Member.</li>
					</ol>

					<ol style="text-align: justify;" start="4">
						<li>Member/Verified Member wajib mematuhi seluruh persyaratan yang dicantumkan di dalam SKU. Kelalaian Member/Verified Member didalam mentaati atau melaksanakan isi dari SKU pada satu atau beberapa kali kejadian, tidak akan menghilangkan kewajiban Member/Verified Member untuk tetap memenuhi segala persyaratan yang terdapat di dalam SKU.</li>
					</ol>

					<ol style="text-align: justify;" start="5">
						<li>Pertanyaan seputar Ketentuan dan Persyaratan atau perihal lain, dilakukan melalui support@edccash.com.</li>
					</ol>

					<hr>
					<p style="text-align: center;"><strong>SYARAT DAN KETENTUAN UMUM MEMBER/VERIFIED MEMBER EDCCASH.COM INI TELAH DISESUAIKAN DENGAN KETENTUAN PERATURAN PERUNDANG-UNDANGAN YANG BERLAKU.</strong></p>
					<hr>
					<hr>
					<p style="text-align: center;"><strong>TINGKATKAN KEAMANAN AKUN EDCCASH</strong></p>

					<p style="text-align: justify;">Jika Anda menemukan aktivitas yang mencurigakan (tidak dikenali dan tidak wajar) di akun Edccash Anda, terdapat kemungkinan bahwa ada orang lain sedang menggunakannya tanpa seizin Anda.</p>

					<hr>
					<p style="text-align: center;"><strong>PENYEBAB AKUN ANDA DAPAT DIRETAS</strong></p>
					<ol>
						<li style="text-align: justify;">&nbsp;Melakukan akses dan login pada website phishing yang menyerupai website resmi www.edccash.com.</li>
						<li style="text-align: justify;">&nbsp;Password terlalu mudah untuk ditebak (nama, tanggal lahir, angka berurutan, nomor telpon)</li>
						<li style="text-align: justify;">&nbsp;Menggunakan aplikasi tidak resmi (non-official) dari Edccash.</li>
						<li style="text-align: justify;">&nbsp;Menggunakan e-mail dan password yang sama antar website.</li>
						<li style="text-align: justify;">&nbsp;Menyimpan data e-mail dan password dalam aplikasi cloud/drive online.</li>
						<li style="text-align: justify;">&nbsp;Terdapat malware yang menginfeksi perangkat Anda. Contoh: Keylogger, Virus.</li>
					</ol>
					<hr>

					<p style="text-align: center;"><strong>INDIKASI AKUN ANDA TIDAK AMAN</strong></p>
					<ol>
						<li style="text-align: justify;">Adanya aktivitas transaksi keuangan dan aset digital yang mencurigakan (tidak dikenal dan tidak wajar) pada riwayat transaksi Anda.</li>
						<li style="text-align: justify;">Perubahan data pada akun seperti e-mail dan no handphone tanpa sepengetahuan Anda.</li>
					</ol>
					<hr>

					<p style="text-align: center;"><strong>APA YANG HARUS DILAKUKAN JIKA AKUN ANDA TELAH DIRETAS</strong></p>
					<ol>
						<li style="text-align: justify;">Segera ganti password di menu lupa password di aplikasi EDCCASH.COM</li>
						<li style="text-align: justify;">Anda dapat mengunci akun melalui e-mail konfirmasi login yang dikirimkan dan akun akan dikunci selama 24 jam.</li>
						<li style="text-align: justify;">Segera hubungi tim support Edccash melalui e-mail pada alamat support@edccash.com dengan mencantumkan kronologinya.</li>
					</ol>
					<hr>

					<p style="text-align: center;"><strong>CARA MENJAGA KEMANAN AKUN ANDA</strong></p>
					<ol>
						<li>Pastikan Anda login hanya pada www.edccash.com (bukan dari halaman website phishing).</li>
						<li>Buatlah password yang menggunakan kombinasi unik (angka, huruf besar, huruf kecil, dan simbol).</li>
						<li>Pastikan semua e-mail terkait akun Edccash hanya dari domain &ldquo;@edccash.com&rdquo; bukan yang lain.</li>
						<li>Lakukan pemeriksaan secara berkala pada riwayat transaksi akun.</li>
						<li>Pastikan menggunakan aplikasi resmi dari Edccash saja;</li>
						<li>Android Edccash trading platform Dompet Edccash Indonesia;</li>
						<li>iOS Edccash trading platform&nbsp; Dompet Edccash Indonesia;</li>
						<li>Jangan pernah menggunakan sandi Akun Edccash Anda di situs lain.</li>
						<li>Bookmark www.edccash.com pada browser untuk mengantisipasi akses situs phishing.</li>
						<li>Update Operating System dan browser secara berkala.</li>
					</ol>
					<hr>
					<p style="text-align: center;"><strong>Dengan menekan tombol Setuju, Anda dianggap sudah membaca dan menyetujui Kebijakan Privasi dan Syarat &amp; Ketentuan website ini.</strong></p>
					<hr>
					<div class="form-group form-check text-center">
						<input type="checkbox" class="form-check-input checkbox" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">I Agree and Accept The Terms and Conditions</label>
					</div>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal" id="yes" aria-label="Close">
						<span aria-hidden="true">Understood</span>
					</button>
				</div>
			</div>
		</div>
	</div>

	<!-- BACKGROUND-IMAGE -->
	<div class="login-img">

		<!-- GLOABAL LOADER -->
		<div id="global-loader">
			<img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /GLOABAL LOADER -->

		<!-- PAGE -->
		<div class="page">
			<div class="">
				<!-- CONTAINER OPEN -->
				<div class="col col-login mx-auto">
					<div class="text-center">
						<img src="../assets/images/brand/logo.png" alt="logo">
					</div>
				</div>
				<div class="container-login100">
					<div class="wrap-login100 p-6">
						<form action="regadd.php" method="post" enctype="multipart/form-data" class="login100-form validate-form">
							<span class="login100-form-title">
								Pendaftaran Anggota
							</span>
							<?php
							if (isset($_SESSION['info'])) {
								echo $_SESSION['info'];
								unset($_SESSION['info']);
							}
							?>
							<div class="form-group">
								<label for="sponsor">Username Sponsor </label><i class="text-danger">*</i>
								<input name="sponsor" value="<?= $_GET[referral] ?>" type="text" class="form-control" id="sponsor" placeholder="Username Sponsor" required>
								<small id="error_sponsor"></small>
							</div>
							<div class="form-group">
								<label for="email">email </label><i class="text-danger">*</i>
								<input name="email" type="email" class="form-control" id="email" placeholder="email address" required>
								<small id="error_email"></small>
							</div>
							<div class="form-group">
								<label for="username">Username </label><i class="text-danger">*</i>
								<input name="username" type="text" class="form-control" id="username" placeholder="Username Member Baru" required>
								<small id="error_username" class="text-danger"></small>
							</div>
							<div class="form-group">
								<label for="password1">Password </label><i class="text-danger">*</i>
								<input name="password1" type="password" class="form-control" id="password1" placeholder="Password" required>
							</div>
							<div class="form-group">
								<label for="password2">Ulangi Password </label><i class="text-danger">*</i>
								<input name="password2" type="password" class="form-control" id="password2" placeholder="Ulangi Password Anda" required>
								<small id="error_pass"></small>
							</div>
							<div class="container-login100-form-btn">
								<button type="submit" class="login100-form-btn btn-primary">Daftar</button>
							</div>
						</form>
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
		</div>
		<!-- END PAGE -->

	</div>
	<!-- BACKGROUND-IMAGE CLOSED -->

	<!-- JQUERY JS -->
	<script src="../assets/js/jquery-3.4.1.min.js"></script>

	<!-- BOOTSTRAP JS -->
	<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../assets/plugins/bootstrap/js/popper.min.js"></script>

	<!-- CHART-CIRCLE JS -->
	<script src="../assets/js/circle-progress.min.js"></script>

	<!-- RATING STAR JS -->
	<script src="../assets/plugins/rating/jquery.rating-stars.js"></script>

	<!-- INPUT MASK JS -->
	<script src="../assets/plugins/input-mask/jquery.mask.min.js"></script>

	<!-- CUSTOM SCROLL BAR JS-->
	<script src="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

	<!-- CUSTOM JS-->
	<script src="../assets/js/custom.js"></script>

</body>

</html>

</script>
<script type="text/javascript">
	$(window).on('load', function() {
		$('#yes').hide();

		$('#terms').modal('show');


	});
</script>
<script>
	$('#exampleCheck1').change(function() {
		if (this.checked) {
			$('#yes').show();
		} else {
			$('#yes').hide();

		}
	})
</script>

<script>
	$(document).ready(() => {
		$("#sponsor").keyup(() => {
			var sponsor = $('#sponsor').val();
			if (sponsor == "") {
				$("#error_sponsor").html("");
			} else {
				$.ajax({
					url: "cek_sponsor.php",
					type: "POST",
					data: "sponsor=" + sponsor,
					success: (res) => {
						if (res > 0) {
							$("#error_sponsor").html(`<p class="text-success">Sponsor Terdaftar</p>`);
						} else {
							$("#error_sponsor").html(`<p class="text-danger">Sponsor Tidak terdaftar</p>`);
						}
					}
				});
			}
		});
	});

	$(document).ready(() => {
		$("#email").keyup(() => {
			var email = $('#email').val();
			if (email == "") {
				$("#error_email").html("");
			} else {
				$.ajax({
					url: "cek_email.php",
					type: "POST",
					data: "email=" + email,
					success: (res) => {
						if (res > 0) {
							$("#error_email").html(`<p class="text-danger">Email sudah terdaftar, silahkan cari email lain.</p>`);
						} else {
							$("#error_email").html(`<p class="text-success">Email bisa digunakan.</p>`);
						}
					}
				});
			}
		});
	});

	$(document).ready(() => {
		$("#username").keyup(() => {
			var username = $('#username').val();
			if (username == "") {
				$("#error_username").html("");
			} else {
				$.ajax({
					url: "cek_username.php",
					type: "POST",
					data: "username=" + username,
					success: (res) => {
						if (res > 0) {
							$("#error_username").html(`<p class="text-danger">Username sudah terdaftar, silahkan cari email lain.</p>`);
						} else {
							$("#error_username").html(`<p class="text-success">Username bisa digunakan</p>`);
						}
					}
				});
			}
		});
	});
</script>

<script>
	// CEK PASSWORD
	let pass1 = document.getElementById("password1");
	let pass2 = document.getElementById("password2");
	pass2.addEventListener('keyup', () => {
		if (pass1.value !== "" && pass2.value !== "") {
			if (pass1.value != pass2.value) {
				document.getElementById("error_pass").innerHTML = `<p class="text-danger">Password tidak cocok</p>`;
			} else {
				document.getElementById("error_pass").innerHTML = `<p class="text-success">Password cocok</p>`;
			}
		} else {
			document.getElementById("error_pass").innerHTML = "";
		}
	});
</script>

<script>
	setTimeout(() => {
		// let alert = document.querySelector(".alert");
		let alert = $(".alert");
		alert.remove();
	}, 4000);
</script>