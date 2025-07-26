<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
</head>
<body>
    <header>
        <div class="logo"><h2>HalloPutz</h2></div>
        <div class="navbar">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('myhobby') }}">My Hobby</a></li>
            </ul>
        </div>
        <div class="button">
            <button class="btn">FV</button>
        </div>
    </header>
    <!-- Hero Section -->
    <div class="hero">
        <div class="right">
            <h1>Motivasi hidup</h1>
            <p>Kegigihan dalam berusaha menjadi kunci utama untuk mencapai tujuan, 
               karena tanpa ketekunan, kita mudah menyerah di tengah jalan ketika menghadapi tantangan.
               Setiap langkah kecil yang kita ambil dengan tekad yang kuat, meskipun penuh rintangan, 
               akan membawa kita lebih dekat pada impian kita. Terkadang, jalan menuju kesuksesan tidak selalu mulus, 
               namun dengan kegigihan, kita mampu mengatasi setiap hambatan yang ada dan terus maju. 
               Mungkin pada awalnya hasilnya tidak segera terlihat, tetapi ingatlah bahwa usaha yang konsisten dan gigih 
               akan membuahkan hasil yang luar biasa pada waktunya. Jadi, tetaplah bersemangat dan terus berusaha, 
               karena di balik setiap perjuangan, ada keberhasilan yang menanti.
            </p>
         <div class="social-media">
            <li><a href="https://www.facebook.com/profile.php?id=61558524899268&mibextid=ZbWKwL"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="https://www.instagram.com/syhptraaaaaaaaa?igsh=MXd2YnYxYmQzNWtqcg=="><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com/in/syahputra-tirta-wijaya-95ab3a285?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fa-brands fa-linkedin-in"></i></a></li>
        </div>
        </div>

        <div class="left">
            <div class="image">
                <img src="{{ URL('images/putra.jpg') }}" alt=""/>
            </div>
        </div>
    </div>
</body>
</html>