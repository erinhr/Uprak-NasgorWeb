@extends('layout/template')	

@section('judul', 'Home')

	
@section('container')
	
    <div class="container maincontent">
      <div class="row">
        <div class="col bg2 artikel">
          <h3 class="mt-4 txt2">Artikel Nasi Goreng</h3>
          <h5 class= "mt-2">Kenapa Orang Indonesia Suka Nasi Goreng? Ini Alasannya!</h5>
          <p>Rata-rata orang Indonesia menyukai nasi goreng. Selain enak, nasi goreng juga mudah dibuat, cepat disajikan, dan bahan-bahannya pasti tersedia di rumah.
          Pada dasarnya, nasi goreng terdiri dari nasi, kecap, telur dan bumbu-bumbu penyedap rasa yang digoreng hingga matang dan hangat. Setelah itu, nasi goreng disajikan dengan irisan mentimun, tomat, dan kerupuk.
          Seiring dengan perkembangan zaman, kini nasi goreng memiliki banyak variasi. Ada nasi goreng ayam, nasi goreng gila, nasi goreng seafood, atau nasi goreng spesial yang menggabungkan banyak topping.
          Segala kemudahan itulah yang besar kemungkinan membuat orang Indonesia mengemari nasio goreng, baik masak sendiri atau membeli. 
          </p>

        </div>

        <div class="col-9 bg3"> 
          <h3 class="mt-4 ml-1 txt4">Tutorial Pembuatan Nasi Goreng</h3>
          <video height="360" width="640" controls="">
	      	<source src="./img/tutorialnasgor.mp4" type="video/mp4">
        	</video>
          <h3 class="mt-4 ml-1 txt4">Sejarah Nasi Goreng</h3>
          <div class="sejarah">
          <img src="./img/nasgor3.jpg" alt="" "ml-200" width="400">
          </div><br>
         <p>Dilansir dari The Spruce Eats ( 17/7) diperkirakan pada tahun 4000 Sebelum Masehi, masyarakat China sudah menjadikan nasi sebagai makanan pokok. Saat itu nasi mulai dikreasikan menjadi berbagai hidangan, bumbunya masih sangat sederhana.
             Masyarakat China terbiasa membuat nasi goreng karena mayoritas orang tidak suka menyantap makanan dingin. Nasi goreng adalah alternatif sajian hangat yang bisa diolah dari makanan yang ada.
             Agar rasanya semakin enak, nasi goreng kemudian ditambahkan berbagai bumbu. Lambat laun semakin banyak yang melakukan cara ini, alhasil nasi goreng seolah jadi kreasi makanan baru yang banyak disantap.</p>
        </div>
      </div>
    </div>



@endsection
