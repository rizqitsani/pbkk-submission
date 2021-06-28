<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Niagahoster</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
</head>

<body>
    <header id="header">
        <div class="container" id="header-container">
            <div class="company-logo">
                <img src="{{ asset('img/logo.png') }}" alt="Company Logo" id="header-img" />
            </div>
            <nav id="nav-bar">
                <ul>
                    <li><a href="#feature" class="nav-link">Feature</a></li>
                    <li><a href="#support" class="nav-link">Support</a></li>
                    <li><a href="#pricing" class="nav-link">Pricing</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="jumbotron">
        <div class="container" id="jumbotron-container">
            <div class="jumbotron-text">
                <h1>Web Hosting Terbaik Indonesia</h1>
                <p>
                    Selangkah lebih dekat dengan kesuksesan online Anda layanan web
                    hosting terbaik Indonesia!
                </p>
            </div>
        </div>
    </section>

    <section id="newsletter">
        <div class="container" id="newsletter-container">
            <h1>Subscribe To Our Newsletter</h1>
            <form id="form" action="https://www.freecodecamp.com/email-submit">
                <input type="email" id="email" placeholder="Enter Your Email" />
                <button type="submit" id="submit">Subscribe</button>
            </form>
        </div>
    </section>

    <section id="feature">
        <div class="main-container">
            <h1>Garansi performa website<br />bisnis Anda</h1>
            <p>
                Web hosting yang cepat dan aman adalah jaminan untuk performa website
                yang optimal. Kami menawarkan web hosting terbaik Indonesia dengan
                keamanan data dan kecepatan akses terbaik untuk performa website
                bisnis Anda yang lebih maksimal.
            </p>
            <div class="feature-container">
                <div class="feature-list">
                    <h3>Fitur Keamanan</h3>
                    <ul>
                        <li>CloudLinux OS</li>
                        <li>CageFS</li>
                        <li>WanGuard</li>
                        <li>BitNinja</li>
                        <li>Latest cPanel</li>
                    </ul>
                </div>
                <div class="feature-list">
                    <h3>Fitur Kecepatan</h3>
                    <ul>
                        <li>Litespeed Web Server</li>
                        <li>WordPress Accelerator</li>
                        <li>Cloudflare CDN</li>
                        <li>HTTP/2</li>
                        <li>Superfast SSD</li>
                    </ul>
                </div>
                <div class="feature-list">
                    <h3>Fitur Reliable Hosting</h3>
                    <ul>
                        <li>Jet Backup different server</li>
                        <li>Self Healing Network</li>
                        <li>Garansi 30 Hari Uang Kembali</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="support">
        <div class="main-container">
            <h1>Punya pertanyaan tengah malam? Kami siap membantu Anda!</h1>
            <p>
                Kami memahami Anda ingin kemudahan mencari bantuan bisa didapatkan
                kapanpun masalah terjadi tanpa diduga. Tim Customer Success kami siap
                membantu Anda secara online 24 jam nonstop. Dedikasi penuh tim kami
                telah terbukti dengan 93% pelanggan merasa puas atas layanan bantuan
                yang mereka dapatkan. Sudah saatnya Anda menikmati layanan hosting
                terbaik Indonesia tanpa rasa khawatir!
            </p>
            <div class="iframe-container">
                <iframe id="video" src="https://www.youtube.com/embed/Uf3-eC48mi0" frameborder="0"></iframe>
            </div>
        </div>
    </section>

    <hr />

    <section id="pricing">
        <div class="main-container">
            <h1>Paket Web Hosting Terbaik Indonesia yang Tepat</h1>
            <p>
                Web hosting Indonesia terbaik dengan data center uptime 99,999%,
                support 24/7 hingga berbagai fitur yang menunjang performa website
                Anda tersedia di layanan hosting terbaik kami. Tidak hanya itu, kami
                menghadirkan paket web hosting dengan harga terjangkau dan diskon
                setiap harinya. Pilih paket hosting terbaik Indonesia untuk website
                Anda sekarang!
            </p>
            <div class="pricing-list-container">
                <div class="pricing-list">
                    <div class="pricing-list-title">
                        <h4>Bayi</h4>
                    </div>
                    <div class="pricing-list-price">
                        <h3>10.000<span class="small">/bulan</span></h3>
                    </div>
                    <div class="pricing-list-detail">
                        <ul>
                            <li><strong>500 MB</strong> Disk Space</li>
                            <li><strong>Unlimited</strong> Bandwidth</li>
                            <li><strong>Unlimited</strong> Databases</li>
                            <li><strong>1</strong> Domain</li>
                        </ul>
                    </div>
                </div>
                <div class="pricing-list">
                    <div class="pricing-list-title">
                        <h4>Pelajar</h4>
                    </div>
                    <div class="pricing-list-price">
                        <h3>60.000<span class="small">/bulan</span></h3>
                    </div>
                    <div class="pricing-list-detail">
                        <ul>
                            <li><strong>Unlimited</strong> Disk Space</li>
                            <li><strong>Unlimited</strong> Bandwidth</li>
                            <li><strong>Unlimited</strong> Databases</li>
                            <li><strong>10</strong> Addon Domains</li>
                        </ul>
                    </div>
                </div>
                <div class="pricing-list">
                    <div class="pricing-list-title">
                        <h4>Personal</h4>
                    </div>
                    <div class="pricing-list-price">
                        <h3>106.250<span class="small">/bulan</span></h3>
                    </div>
                    <div class="pricing-list-detail">
                        <ul>
                            <li><strong>Unlimited</strong> Disk Space</li>
                            <li><strong>Unlimited</strong> Bandwidth</li>
                            <li><strong>Unlimited</strong> Databases</li>
                            <li><strong>Unlimited</strong> Addon Domains</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>Muhammad Rizqi Tsani</p>
    </footer>
</body>

</html>