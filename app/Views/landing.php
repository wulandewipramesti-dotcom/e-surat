<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to E-Surat Kampus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* RESET */
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
        
        body { 
            background-color: #f4f7f6;
            color: #1e293b;
            line-height: 1.5;
        }

        /* NAVBAR BERWARNA (SOLID) */
        header {
            background-color: #1E3A8A; /* Biru Navy Kuat */
            padding: 15px 6%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        header .logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        header .logo img { 
            height: 50px; 
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
        }

        header .logo span { 
            font-weight: 700; 
            font-size: 1.3rem; 
            color: #ffffff; 
            letter-spacing: 0.5px;
        }

        header nav ul { list-style: none; }
        header nav ul li a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 600;
            padding: 10px 25px;
            border: 2px solid rgba(255,255,255,0.3);
            border-radius: 8px;
            transition: all 0.3s;
        }

        header nav ul li a:hover {
            background: #ffffff;
            color: #1E3A8A;
            border-color: #ffffff;
        }

        /* HERO SECTION DENGAN BACKGROUND IMAGE */
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 100px 20px 40px;
            /* Background Image Mahasiswa */
            background: linear-gradient(rgba(175, 177, 184, 0.85), rgba(30, 58, 138, 0.85)), 
                        url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #ffffff;
        }

        .hero-content {
            max-width: 900px;
            width: 100%;
        }

        .hero img.logo-hero {
            width: 250px; /* Diperbesar */
            margin-bottom: 30px;
            filter: drop-shadow(0 10px 20px rgba(0,0,0,0.2));
        }

        /* CONTAINER TEKS AGAR TIDAK MENIMPA (MOBILE FRIENDLY) */
        .title-container {
            min-height: 120px; /* Menjaga ruang agar teks bawah tidak lompat */
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-bottom: 10px;
        }

        .hero h1 {
            font-size: clamp(2.2rem, 6vw, 4rem);
            font-weight: 800;
            line-height: 1.2;
            margin: 0;
        }

        #typing-text {
            color: #1476eeff; /* Biru muda agar kontras di bg gelap */
            border-right: 4px solid #1476eeff;
            padding-right: 8px;
            animation: blink 0.7s infinite;
        }

        @keyframes blink {
            50% { border-color: transparent; }
        }

        .hero p {
            font-size: clamp(1rem, 2vw, 1.25rem);
            color: rgba(255, 255, 255, 0.9);
            max-width: 650px;
            margin: 20px auto 40px;
            font-weight: 400;
        }

        /* TOMBOL */
        .btn-get-started {
            background-color: #ffffff;
            color: #1e3a8a;
            padding: 18px 50px;
            font-size: 1.1rem;
            font-weight: 700;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            display: inline-block;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .btn-get-started:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 40px rgba(0,0,0,0.3);
            background-color: #f8fafc;
        }

        /* RESPONSIVE PERBANTUAN */
        @media (max-width: 768px) {
            header { padding: 10px 5%; }
            header .logo span { font-size: 1rem; }
            header .logo img { height: 40px; }
            .title-container { min-height: 100px; }
            .hero img.logo-hero { width: 180px; }
        }
    </style>
</head>
<body>

<header>
    <div class="logo">
        <img src="/images/logo_kampus.png" alt="Logo Kampus">
        <span>E-Surat Alfa Prima</span>
    </div>
    <nav>
        <ul>
            <li><a href="<?= base_url('login'); ?>">Login</a></li>
        </ul>
    </nav>
</header>

<section class="hero">
    <div class="hero-content">
        <img src="/images/logo-kampus2.png" alt="Logo Kampus" class="logo-hero">
        
        <div class="title-container">
            <h1>Welcome to <br> <span id="typing-text"></span></h1>
        </div>

        <p>Solusi digitalisasi persuratan kampus yang efisien, aman, dan terstruktur untuk masa depan akademik yang lebih baik.</p>
        
        <a href="/login" class="btn-get-started">Get Started Now</a>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if(session()->getFlashdata('success')): ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Berhasil',
    text: '<?= session()->getFlashdata('success') ?>',
    timer: 2500,
    showConfirmButton: false,
    borderRadus: '15px'
});
</script>
<?php endif; ?>

<script>
    const textElement = document.getElementById('typing-text');
    const phrases = [
        "E-Surat System",
        "Digital Archive",
        "Paperless Campus"
    ];
    
    let phraseIndex = 0;
    let characterIndex = 0;
    let isDeleting = false;
    let typingSpeed = 100;

    function type() {
        const currentPhrase = phrases[phraseIndex];
        
        if (isDeleting) {
            textElement.textContent = currentPhrase.substring(0, characterIndex - 1);
            characterIndex--;
            typingSpeed = 50;
        } else {
            textElement.textContent = currentPhrase.substring(0, characterIndex + 1);
            characterIndex++;
            typingSpeed = 150;
        }

        if (!isDeleting && characterIndex === currentPhrase.length) {
            isDeleting = true;
            typingSpeed = 2500; // Jeda saat teks lengkap
        } else if (isDeleting && characterIndex === 0) {
            isDeleting = false;
            phraseIndex = (phraseIndex + 1) % phrases.length;
            typingSpeed = 500;
        }

        setTimeout(type, typingSpeed);
    }

    document.addEventListener('DOMContentLoaded', () => {
        setTimeout(type, 800);
    });
</script>

</body>
</html>