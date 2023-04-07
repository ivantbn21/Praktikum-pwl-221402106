@extends('admin/layout')

@section('content')

<!DOCTYPE html>
<html>
<head>
  <title>Daisuke Aizawa</title>
  <style>
    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .gambar {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="gambar">
        <img src="{{ asset('img/daisukeaizawa.jpeg') }}" alt="Responsive Image" class="img-fluid img-responsive">
    </div>
    <p>
        Daisuke Aizawa adalah salah satu karakter dalam serial anime/manga "Kage no Jitsuryokusha ni Naritakute" yang ditulis oleh Zappon. Daisuke Aizawa adalah seorang karakter pendukung dalam cerita dan merupakan teman sekelas dan teman baik dari tokoh utama, Cid Kagenou.
        
        Daisuke Aizawa digambarkan sebagai seorang pemuda yang ceria, penuh semangat, dan bersemangat. Dia memiliki kepribadian yang ramah dan suka bergaul dengan orang lain. Daisuke juga sangat setia kepada Cid dan selalu mendukungnya dalam perjalanan menuju impiannya menjadi seorang "Bayangan".
        
        Sebagai karakter pendukung, Daisuke Aizawa tidak memiliki kekuatan fisik atau kemampuan khusus seperti Cid, namun dia memiliki peran penting dalam cerita sebagai teman yang setia dan dukungan moral bagi Cid. Dia juga berperan dalam memberikan dukungan dan bantuan kepada Cid dalam menghadapi berbagai rintangan dan tantangan dalam perjalanan mereka.
        
        Daisuke Aizawa memiliki hubungan dekat dengan Cid, dan dia sering memberikan semangat, saran, dan dukungan kepada Cid dalam menghadapi berbagai situasi. Dia juga merupakan karakter yang humoris, dengan komentar-komentar lucu dan tingkah laku yang menghibur dalam cerita.
        
        Secara keseluruhan, Daisuke Aizawa adalah karakter yang ceria, bersemangat, dan setia dalam "Kage no Jitsuryokusha ni Naritakute", yang menambah warna dan dinamika dalam cerita.</p>
  </div>
</body>
</html>


@endsection('content')