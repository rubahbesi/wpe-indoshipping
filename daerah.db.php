<?php
/* Daftar Harga Pengiriman JNE Reguler dari Denpasar.
 * Daftar harga diperoleh dari JNE secara langsung yang saya hubungi lewat email, tanpa melakukkan perubahan sedikitpun pada harganya.
 * Daftar harga ini efektif mulai tanggal 1 Agustus 2008 dari info yang saya terima.
 * JNE berhak melakukkan perubahan harga sewaktu-waktu tanpa pemberitahuan terlebih dahulu.
 * Saya tidak bertanggung jawab atas perbedaan harga disini dengan yang ada di website resmi JNE.
*/
$daerah = array(
	'Nanggroe Aceh Darusalam'=>array(
									'Kota Banda Aceh'=>35000,
									'Kab. Bireuen'=>39000,
									'Kab. Gayo Lues'=>39000,
									'Kab. Aceh Barat Daya'=>39000,
									'Kab. Aceh Timur'=>45500,
									'Kab. Aceh Besar'=>39000,
									'Kab. Aceh Tamiang'=>39000,
									'Kab. Aceh Tenggara'=>39000,
									'Kab. Aceh Jaya'=>45500,
									'Kota Langsa'=>39000,
									'Kota Lhokseumawe'=>39000,
									'Kab. Aceh Utara'=>39000,
									'Kab. Aceh Barat'=>39000,
									'Kab. Pidie Jaya'=>45500,
									'Kota Sabang'=>39000,
									'Kab. Pidie'=>39000,
									'Kab. Bener Meriah'=>45500,
									'Kab. Simeulue'=>39000,
									'Kab. Aceh Singkil'=>39000,
									'Kota Subulussalam'=>39000,
									'Kab. Nagan Raya'=>39000,
									'Kab. Aceh Tengah'=>39000,
									'Kab. Aceh Selatan'=>39000,
									'Calang'=>39000),
	'Sumatera Utara'=>array(
									'Kab. Toba Samosir'=>45000,
									'Kota Binjai'=>40000,
									'Kab. Humbang Hasudutan'=>45500,
									'Kab. Nias'=>45500,
									'Kab. Padang Lawas Utara'=>44000,
									'Kab. Karo'=>40000,
									'Kab. Asahan'=>41500,
									'Kab. Batubara'=>42000,
									'Kab. Deli Serdang'=>37000,
									'Kota Medan'=>26000,
									'Kota Padang Sidempuan'=>43000,
									'Kab. Samosir'=>45500,
									'Kab. Mandailing Natal'=>45500,
									'Kab. Simalungun'=>41500,
									'Kab. Labuhan Batu'=>44000,
									'Kab. Pakpak Bharat'=>45500,
									'Kab. Serdang Bedagai'=>44000,
									'Kab. Tapanuli Tengah'=>44000,
									'Kab. Padang Lawas'=>44000,
									'Kab. Dairi'=>45500,
									'Kab. Tapanuli Selatan'=>45500,
									'Kab. Langkat'=>44000,
									'Kota Tanjung Balai'=>44000,
									'Kab. Tapanuli Utara'=>45000,
									'Kota Tebing Tinggi'=>41000,
									'Kab. Nias Selatan'=>45500,
									'Pangkalan Brandan'=>45500,
									'Laguboti'=>45000,
									'Belawan'=>38000,
									'Siborong Borong'=>45500,
									'Tanjung Morawa'=>39000),

	'Riau'=>array(
									'Kab. Rokan Hilir'=>45500,
									'Kab. Kampar'=>45500,
									'Kab. Bengkalis'=>43000,
									'Kota Dumai'=>30000,
									'Kab. Palalawan'=>45500,
									'Kab. Rokan Hulu'=>43500,
									'Kota Pekanbaru'=>26000,
									'Kab. Indragiri Hulu'=>45500,
									'Kab. Siak'=>45500,
									'Kab. Kuantan Singingi'=>46000,
									'Kab. Indragiri Hilir'=>46000,
									'Minas'=>41000,
									'Rumbai'=>37000,
									'Marpoyan'=>37000,
									'Ujung Batu'=>46000,
									'Duri'=>38000),
	'Kepulauan Riau'=>array(
									'Kab. Bintan'=>45500,
									'Kota Batam'=>26000,
									'Kab. Lingga'=>45500,
									'Kab. Natuna'=>45500,
									'Kab. Karimun'=>43000,
									'Kota Tanjung Pinang'=>26000,
									'Nongsa'=>34500,
									'Kabil'=>34500,
									'Dabo Singkep'=>45500),

	'Sumatera Barat'=>array(
									'Kab. Solok'=>31000,
									'Kab. Tanah Datar'=>39500,
									'Kota Bukittinggi'=>26000,
									'Kab. Agam'=>45500,
									'Kab. Pasaman'=>45500,
									'Kab. Sijunjung'=>45500,
									'Kota Padang'=>26000,
									'Kota Padang Panjang'=>38000,
									'Kab. Pesisir Selatan'=>41000,
									'Kab. Padang Pariaman'=>38000,
									'Kota Pariaman'=>38000,
									'Kota Payakumbuh'=>38000,
									'Kab. Dharmasraya'=>45500,
									'Kota Sawahlunto'=>45500,
									'Kota Solok'=>38000,
									'Kab. Kepulaun Mentawai'=>45500,
									'Kab. Lima Puluh Kota'=>36000,
									'Solok Selatan'=>45500,
									'Kep Pagai'=>45500,
									'Lubuk Alung'=>38000),

	'Jambi'=>array(
									'Kab. Merangin'=>38000,
									'Kota Jambi'=>26000,
									'Kab. Tanjung Jabung Barat'=>38500,
									'Kab. Batang Hari'=>33000,
									'Kab. Bungo'=>39000,
									'Kab. Tebo'=>39000,
									'Kab. Tanjung Jabung Timur'=>45500,
									'Kab. Sarolangun'=>39000,
									'Kab. Muaro Jambi'=>45000,
									'Kab. Kerinci'=>39000,
									'Ramba'=>45500),

	'Sumatera Selatan'=>array(
									'Kab. Ogan Komering Ulu'=>38000,
									'Kab. Ogan Ilir'=>31000,
									'Kab. Ogan Komering Ilir'=>36000,
									'Kab. Lahat'=>38000,
									'Kab. Ogan Komering Ulu Timur'=>38000,
									'Kab. Musi Rawas'=>38000,
									'Kab. Muara Enim'=>38000,
									'Kab. Organ Komering Ulu Selatan'=>38000,
									'Kota Lubuk Linggau'=>38000,
									'Kota Pagar Alam'=>38000,
									'Kota Palembang'=>25000,
									'Kab. Banyuasin'=>36000,
									'Kota Prabumulih'=>38000,
									'Kab. Musi Banyuasin'=>38000,
									'Empat Lawang'=>38000,
									'Sungai Lilin'=>38000,
									'Sungai Gerong / Plaju'=>37000),

	'Bangka Belitung'=>array(
									'Kab. Bangka Tengah'=>38000,
									'Kab. Belitung Timur'=>38000,
									'Kab. Bangka Barat'=>38000,
									'Kota Pangkal Pinang'=>26000,
									'Kab. Bangka'=>34000,
									'Kab. Belitung'=>35000,
									'Kab. Bangka Selatan'=>38000,
									'Belinyu'=>38000,
									'Jebus'=>38000,
									'Kelapa'=>38000),
	'Bengkulu'=>array(
									'Kab. Bengkulu Utara'=>32000,
									'Kota Bengkulu'=>26000,
									'Kab. Rejang Lebong'=>38000,
									'Kab. Kaur'=>38000,
									'Kab. Kepahiang'=>38000,
									'Kab. Lebong'=>38000,
									'Kab. Bengkulu Selatan'=>38000,
									'Kab. Muko-muko'=>38000,
									'Kab. Seluma'=>38000),
	'Lampung'=>array(
									'Kota Bandar Lampung'=>26000,
									'Kab. Way Kanan'=>38000,
									'Kab. Pesawaran'=>36000,
									'kab. Lampung Tengah'=>35000,
									'Kab. Lampung Selatan'=>37500,
									'Kab. Tanggamus'=>34000,
									'Kab. Lampung Utara'=>34000,
									'Kab. Lampung Barat'=>34000,
									'kab. Tulang Bawang'=>38000,
									'Kota Metro'=>35000,
									'Kab. Lampung Timur'=>34000,
									'Bakauheuni'=>37000,
									'Krui/Pesisir Tengah'=>38000,
									'Sumber Jaya'=>38000,
									'Talang Padang'=>37000,
									'Pringsewu'=>35000,
									'Bukit Kemuning'=>37000),

	'DKI Jakarta'=>array(
									'Jakarta Barat'=>19000,
									'Jakarta Pusat'=>19000,
									'Jakarta Selatan'=>19000,
									'Jakarta Timur'=>19000,
									'Jakarta Utara'=>19000),
	'Banten'=>array(
									'Kab. Serang'=>21000,
									'Kota Cilegon'=>22000,
									'Kab. Pandeglang'=>22000,
									'Kab. Lebak'=>23000,
									'Kota Serang'=>21000,
									'Kota Tangerang'=>20000,
									'Kab. Tangerang'=>21000,
									'Anyer'=>22000,
									'Merak'=>22000,
									'Balaraja'=>21000,
									'Serpong / BSD'=>21000),
	'Jawa Barat'=>array(
									'Kota Bandung'=>20000,
									'Kota Banjar'=>24000,
									'Kota Bekasi'=>20000,
									'Kota Bogor'=>20000,
									'Kab. Ciamis'=>22000,
									'Kab. Cianjur'=>22000,
									'Kab. Bogor'=>20000,
									'Kab. Bekasi'=>20000,
									'Kota Cimahi'=>22000,
									'Kota Cirebon'=>20000,
									'Kota Depok'=>20000,
									'Kab. Garut'=>22000,
									'Kab. Indramayu'=>24500,
									'Kab. Karawang'=>20000,
									'Kab. Kuningan'=>24500,
									'Kab. Majalengka'=>24500,
									'Kab. Bandung Barat'=>22000,
									'Kab. Purwakarta'=>20000,
									'Kab. Tasikmalaya'=>22000,
									'Kab. Bandung'=>22000,
									'Kab. Subang'=>22000,
									'Kab. Sukabumi'=>20000,
									'Kab. Cirebon'=>21500,
									'Kab. Sumedang'=>22000,
									'Kota Tasikmalaya'=>22000,
									'Majalaya'=>22000,
									'Jatinangor'=>22000,
									'Lembang'=>22000,
									'Rancaekek'=>22000,
									'Jatibarang'=>22000,
									'Kadipaten'=>22000,
									'Losari'=>28000,
									'Palimanan'=>22000,
									'Jatiwangi'=>22000),
	'Jawa Tengah'=>array(
									'Kab. Banjarnegara'=>32000,
									'Kab. Batang'=>31000,
									'Kab. Blora'=>35000,
									'Kab. Boyolali'=>28500,
									'Kab. Brebes'=>35000,
									'Kab. Cilacap'=>21000,
									'Kab. Demak'=>33000,
									'Kab. Jepara'=>28000,
									'Kab. Karanganyar'=>29000,
									'Kab. Kebumen'=>37000,
									'Kab. Kendal'=>30000,
									'kab. Klaten'=>28500,
									'Kab. Magelang'=>33000,
									'Kab. Kudus'=>22500,
									'Kota Magelang'=>23000,
									'Kab. Pati'=>29000,
									'Kota Pekalongan'=>31500,
									'Kab. Pemalang'=>32000,
									'Kab. Purbalingga'=>30000,
									'Kab. Banyumas'=>32000,
									'Kab. Grobogan'=>30000,
									'Kab. Purworejo'=>36000,
									'Kab. Rembang'=>34000,
									'Kota Salatiga'=>28000,
									'Kota Semarang'=>22000,
									'Kab. Tegal'=>35000,
									'Kab. Sragen'=>28500,
									'Kab. Sukoharjo'=>29000,
									'Kota Surakarta'=>21000,
									'Kota Tegal'=>32000,
									'Kab. Temanggung'=>36000,
									'Kab. Semarang'=>26500,
									'Kab. Wonogiri'=>30500,
									'Kab. Wonosobo'=>37000,
									'Ambarawa'=>29000,
									'Cepu'=>33000,
									'Bojonegoro'=>36000,
									'Majenang'=>29000,
									'Ajibarang'=>29000,
									'Kartosuro'=>29000,
									'Bumi Ayu'=>30000),
	'DI Yogyakarta'=>array(
									'Kab. Bantul'=>19000,
									'Kab. Sleman'=>19000,
									'Kab. Kulon Progo'=>19000,
									'Kab. Gunung Kidul'=>22000,
									'Kota Yogyakarta'=>18000,
									'Prambanan'=>19000),
	'Jawa Timur'=>array(
									'Kab. Bangkalan'=>27000,
									'Kab. Banyuwangi'=>22500,
									'Kota Batu'=>19000,
									'Kota Blitar'=>21000,
									'Kab. Bojonegoro'=>36000,
									'Kab. Bondowoso'=>21000,
									'Kab. Madiun'=>20000,
									'Kab. Gresik'=>18000,
									'Kab. Jember'=>19000,
									'Kab. Jombang'=>19000,
									'Kota Kediri'=>20000,
									'Kab. Malang'=>19000,
									'Kab. Trenggalek'=>23000,
									'Kab. Probolinggo'=>19000,
									'Kab. Lamongan'=>19000,
									'Kab. Lumajang'=>19000,
									'Kota Madiun'=>18000,
									'Kab. Magetan'=>19000,
									'Kota Malang'=>18000,
									'Kota Mojokerto'=>18000,
									'Kab. Nganjuk'=>19000,
									'Kab. Ngawi'=>20000,
									'Kab. Pacitan'=>28000,
									'Kab. Pamekasan'=>28000,
									'Kab. Pasuruan'=>21000,
									'Kota Pasuruan'=>18000,
									'Kab. Ponorogo'=>19000,
									'Kota Probolinggo'=>19000,
									'Kab. Sampang'=>28000,
									'Kab. Sidoarjo'=>18000,
									'Kab. Situbondo'=>21000,
									'Kab. Sumenep'=>28000,
									'Kota Surabaya'=>15000,
									'Kab. Tuban'=>18000,
									'Kab. Tulungagung'=>21000,
									'Paiton'=>27500),
	'Bali'=>array(
									'Kab. Karangasem'=>22000,
									'Kab. Bangli'=>19000,
									'Kota Denpasar'=>6000,
									'Kab. Gianyar'=>8000,
									'Kab. Badung'=>19000,
									'Kab. Jembrana'=>22000,
									'Kab. Klungkung'=>19000,
									'Kab. Buleleng'=>15000,
									'Kab. Tabanan'=>11000,
									'Kuta'=>6000,
									'Nusa Dua'=>6000,
									'Sanur'=>6000,
									'Gilimanuk'=>22000,
									'Ngurahrai'=>6000,
									'Jimbaran'=>6000),
	'Kalimantan Barat'=>array(
									'Kab. Bengkayang'=>42000,
									'Kab. Ketapang'=>45000,
									'Kab. Pontianak'=>40000,
									'Kab. Melawi'=>45000,
									'Kab. Landak'=>43000,
									'Kota Pontianak'=>30000,
									'Kab. Kapuas Hulu'=>45000,
									'Kab. Sambas'=>45000,
									'Kab. Sanggau'=>45000,
									'Kab. Sekadau'=>45000,
									'Kota Singkawang'=>41000,
									'Kab. Sintang'=>45000,
									'Kab. Kubu Raya'=>45000,
									'Kab. Kayong Utara'=>45000,
									'Wajok'=>45000),
	'Kalimantan Selatan'=>array(
									'Kab. Hulu Sungai Utara'=>41500,
									'Kota Banjarbaru'=>39000,
									'Kota Banjarmasin'=>26000,
									'Kab. Hulu Sungai Tengah'=>41500,
									'Kab. Tanah Bambu'=>41500,
									'Kab. Hulu Sungai Selatan'=>41500,
									'Kab. Kota Baru'=>41500,
									'Kab. Barito Kuala'=>41500,
									'Kab. Banjar'=>39000,
									'Kab. Balangan'=>41500,
									'Kab. Tanah Laut'=>41500,
									'Kab. Tampir'=>41500,
									'Kab. Tabalong'=>41500,
									'Sungai Danau'=>41500),
	'Kalimantan Tengah'=>array(
									'Kab. Barito Selatan'=>41500,
									'Kab. Katingan'=>41500,
									'Kab. Barito Utara'=>41500,
									'Kab. Murung Raya'=>45000,
									'Kab. Barito Timur'=>45000,
									'Kab. Kapuas'=>48000,
									'Kab. Gunung Mas'=>48000,
									'Kab. Seruyan'=>51000,
									'Kota Palangka Raya'=>30000,
									'Kab. Kotawaringin Barat'=>48000,
									'Kab. Pulang Pisau'=>51000,
									'Kab. Kotawaringin Timur'=>48000,
									'Kab. Sukamara'=>58000,
									'Kab. Barito Timur'=>56000),
	'Kalimantan Timur'=>array(
									'Kota Balikpapan'=>26000,
									'Kota Bontang'=>33000,
									'Kab. Malinau'=>48000,
									'Kab. Nunukan'=>48000,
									'Kab. Penajam Paser Utara'=>48000,
									'Kota Samarinda'=>33000,
									'Kab. Kutai Timur'=>48000,
									'Kab. Kutai Barat'=>48000,
									'Kab. Paser'=>48000,
									'Kab. Berau'=>48000,
									'Kab. Bulungan'=>48000,
									'Kota Tarakan'=>33000,
									'Kab. Kutai Kartanegara'=>48000,
									'Teluk Pandan'=>48000,
									'Sebatik'=>48000,
									'Palaran'=>48000,
									'Sanga Sanga'=>48000,
									'Muara Badak'=>48000,
									'Loa Kulu'=>48000),
	'Sulawesi Tengah'=>array(
									'Kab. Tojo Una-Una'=>56000,
									'Kab. Donggala'=>50000,
									'Kab. Banggai Kepulauan'=>59000,
									'Kab. Morowali'=>59000,
									'Kab. Buol'=>59000,
									'Kab. Toli-Toli'=>56000,
									'Kab. Banggai'=>59000,
									'Kota Palu'=>33000,
									'Kab. Parigi Moutong'=>51000,
									'Kab. Poso'=>55000),
	'Sulawesi Selatan'=>array(
									'Kab. Bantaeng'=>36500,
									'Kab. Baru'=>34500,
									'Kab. Luwu Utara'=>39000,
									'Kab. Selayar'=>34500,
									'Kab. Bulukumba'=>34500,
									'Kab. Enrekang'=>41500,
									'Kab. Jeneponto'=>34500,
									'Kab. Takalar'=>29500,
									'Kab. Tana Toraja'=>41500,
									'Kota Makassar'=>24000,
									'Kab. Luwu Timur'=>39000,
									'Kab. Maros'=>29500,
									'Kab. Luwu Utara'=>48500,
									'Kota Palopo'=>42500,
									'Kab. Pangkajene Kepulauan'=>48500,
									'Kab. Sidenreng Rappang'=>36500,
									'Kota Pare-Pare'=>36500,
									'Kab. Pinrang'=>36500,
									'Kab. Wajo'=>36000,
									'Kab. Sinjai'=>39000,
									'Kab. Goa'=>28500,
									'Kab. Bone'=>38000,
									'Kab. Soppeng'=>37500,
									'Soroako'=>41500),
	'Sulawesi Tenggara'=>array(
									'Kota Bau-Bau'=>60000,
									'Kota Kendari'=>28500,
									'Kab. Kolaka'=>60000,
									'Kab. Kolaka Utara'=>60000,
									'Kab. Buton & Buton Utara'=>60000,
									'Kab. Muna'=>60000,
									'Kab. Bombana'=>60000,
									'Kab. Konawe'=>60000,
									'Kab. Konawe Utara/Selatan'=>60000,
									'Kab. Wakatobi'=>60000),
	'Sulawesi Utara'=>array(
									'Kab. Minahasa Utara'=>60000,
									'Kab. Minahasa Selatan'=>60000,
									'Kota Bitung'=>60000,
									'Kab. Bolaang Mongondow Utara'=>60000,
									'Kab. Bolaang Mongondow'=>60000,
									'Kota Manado'=>29500,
									'Kab. Minahasa Tenggara'=>60000,
									'Kab. Kepulauan Sangihe'=>60000,
									'Kota Tomohon'=>55000,
									'Kab. Minahasa'=>50000),
	'Sulawesi Barat'=>array(
									'Kab. Majene'=>60000,
									'Kab. Mamasa'=>60000,
									'Kab. Mamuju'=>60000,
									'Kab. Mamuju Utara'=>60000,
									'Kab. Polewali Mandar'=>60000),
	'Maluku'=>array(
									'Kota Ambon'=>46000,
									'Kab. Seram Bagian Timur'=>56000,
									'Kab. Kepulauan Aru'=>56000,
									'Kab. Maluku Tengah'=>56000,
									'Kab. Buru'=>56000,
									'Kab. Seram Bagian Barat'=>56000,
									'Kab. Maluku Tenggara Barat'=>56000,
									'Kab. Maluku Tenggara'=>56000),
	'Maluku Utara'=>array(
									'Kab. Halmahera Barat'=>60000,
									'Kab. Halmahera Selatan'=>81000,
									'Kab. Halmahera Timur'=>81000,
									'Kab. Kepulauan Sula'=>81000,
									'Kota Ternate'=>31000,
									'Kota Tidore'=>55000,
									'Kab. Halmahera Utara'=>65000,
									'Kab. Halmahera Tengah'=>65000),
	'NTB - Nusa Tenggara Barat'=>array(
									'Kota Bima'=>31500,
									'Kab. Dompu'=>27000,
									'Kab. Lombok Barat'=>19000,
									'Kota Mataram'=>17000,
									'Kab. Lombok Tengah'=>19500,
									'Kab. Lombok Timur'=>19500,
									'Kab. Sumbawa'=>27500,
									'Kab. Sumbawa Barat'=>27500,
									'Kab. Bima'=>35000,
									'Batu Hijau'=>27000),
	'NTT - Nusa tenggara Timur'=>array(
									'Kab. Belu'=>42000,
									'Kab. Ngada'=>56000,
									'Kab. Manggarai timur'=>56000,
									'Kab. Ende'=>53000,
									'Kab.TimorTengahUtara'=>42000,
									'Kab. Alor'=>53500,
									'Kota Kupang'=>22000,
									'Kab. Manggarai Barat'=>56000,
									'Kab. Flores Timur'=>53500,
									'Kab. Lembata'=>53500,
									'Kab. Sikka'=>53500,
									'Kab. Nagekeo'=>40000,
									'Kab. Kupang'=>54500,
									'Kab. Timor Tengah Selatan'=>42000,
									'Kab. Sumba Barat Daya'=>56000,
									'Kab. Sumba Tengah'=>54500,
									'Kab. Sumba Barat'=>56000,
									'Kab. Sumba Timur'=>53500,
									'Kab. Rote Ndao'=>53500,
									'Kab. Manggarai'=>53500),
	'Gorontalo'=>array(
									'Kota Gorontalo'=>35000,
									'Kab. Gorontalo Utara'=>60000,
									'Kab. Gorontalo'=>60000,
									'Kab. Pahuwato'=>60000,
									'Kab. Bone Bolango'=>57000,
									'Kab. Boalemo'=>60000),
	'Papua Barat'=>array(
									'Kab. Teluk Bintuni'=>74000,
									'Kab. Fak-Fak'=>74000,
									'Kab. Kaimana'=>74000,
									'Kab. Manokwari'=>74000,
									'Kab. Teluk Wondama'=>74000,
									'Kab. Sorong'=>74000,
									'Kab. Sorong Selatan'=>74000,
									'Kab. Mimika'=>74000,
									'Kab. Raja Ampat'=>74000,
									'Tembaga Pura'=>74000),
	'Papua'=>array(
									'Kab. Asmat'=>74000,
									'Kab. Biak Numfor'=>53000,
									'Kab. Waropen'=>74000,
									'Kab. Jayapura'=>53000,
									'Kab. Puncak Jaya'=>74000,
									'Kab. Merauke'=>74000,
									'Kab. Nabire'=>74000,
									'Kab. Pegunungan Bintang'=>74000,
									'Kab. Sarmi'=>74000,
									'Kab. Supiori'=>74000,
									'Kab. Yahukimo'=>74000,
									'Kab. Jayawijaya'=>74000,
									'Kab. Keerom'=>74000,
									'Kab. Maapi'=>74000,
									'Kab. Enarotari'=>74000,
									'Kab. Yapen Waropen'=>74000,
									'Kab. Jayapura'=>74000,
									'Kab. Mamberamo Raya'=>74000,
									'Kab. Boven Digul'=>74000),
									);
?>