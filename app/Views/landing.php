<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to E-Surat Kampus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* RESET */
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { background-color: #ffffff; color: #333; line-height: 1.6; }

        /* HEADER */
        header {
            background-color: #1E3A8A; 
            color: #fff;
            padding: 15px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        header .logo img {
            height: 50px; /* ukuran logo */
        }
        header nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }
        header nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        header nav ul li a:hover {
            color: #2563EB; /* biru lebih gelap saat hover */
        }

        /* HERO SECTION */
.hero {
    display: flex;
    flex-direction: column;
    justify-content: center; /* vertikal di tengah */
    align-items: center; /* horizontal di tengah */
    min-height: calc(100vh - 80px); /* tinggi full viewport minus header */
    text-align: center;
    background-color: #ffffff;
    color: #000;
}

.hero img.logo-hero {
    width: 300px; /* ukuran logo bisa diatur */
    margin-bottom: 20px; /* jarak ke tulisan welcome */
}

.hero h1 {
    font-size: 3rem;
    margin-bottom: 20px;
}

.hero p {
    font-size: 1.2rem;
    margin-bottom: 30px;
}


        /* TOMBOL GET STARTED */
        .btn-get-started {
            background-color: #1E3A8A; 
            color: #ffffff;
            padding: 12px 30px;
            font-size: 1.2rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .btn-get-started:hover {
            background-color: #2563EB; /* biru lebih gelap saat hover */
        }

        @media (max-width: 768px) {
            header { flex-direction: column; text-align: center; gap: 15px; }
            .hero h1 { font-size: 2.2rem; }
        }
    </style>
</head>
<body>

<!-- HEADER -->
<header>
    <div class="logo">
        <img src="/images/logo_kampus.png" alt="Logo Kampus">
        <span>E-Surat Kampus</span>
    </div>
    <nav>
     <ul>
    <li><a href="<?= base_url('login'); ?>">Login</a></li>
</ul>

    </nav>
</header>

<!-- HERO SECTION -->
<section class="hero">
    <img src="/images/logo-kampus2.png" alt="Logo Kampus" class="logo-hero">
    <h1>Welcome to E-Surat</h1>
    <p>Manage your campus letters digitally with ease and speed.</p>
    <a href="/login" class="btn-get-started">Get Started</a>
</section>

</body>
</html>
