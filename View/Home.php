<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zone Rental PS - Futuristic</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;700&family=Space+Grotesk:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-color: #030014;
            --neon-cyan: #00f3ff;
            --neon-magenta: #ff003c;
            --glass-bg: rgba(0, 0, 0, 0.5);
            --glass-border: rgba(0, 243, 255, 0.2);
            --text-main: #e2e8f0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: 'Space Grotesk', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
            overflow-x: hidden;
        }

        h1, h2, h3, .brand {
            font-family: 'Rajdhani', sans-serif;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        nav {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(3, 0, 20, 0.8);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-bottom: 1px solid var(--glass-border);
            padding: 20px 0;
            z-index: 1000;
            display: flex;
            justify-content: center;
            gap: 50px;
        }

        nav a {
            color: var(--text-main);
            text-decoration: none;
            font-weight: 700;
            font-size: 1.1rem;
            letter-spacing: 1.5px;
            position: relative;
            transition: color 0.3s ease;
        }

        nav a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--neon-cyan);
            transition: width 0.3s ease;
            box-shadow: 0 0 10px var(--neon-cyan);
        }

        nav a:hover {
            color: var(--neon-cyan);
        }

        nav a:hover::after {
            width: 100%;
        }

        section {
            min-height: 100vh;
            padding: 100px 20px 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        #home {
            background-image: linear-gradient(rgba(3, 0, 20, 0.7), rgba(3, 0, 20, 0.9)), url('background.jpeg');
        }

        #fasilitas {
            background-image: linear-gradient(rgba(3, 0, 20, 0.85), rgba(3, 0, 20, 0.85)), url('background2.avif');
        }

        #harga {
            background-image: linear-gradient(rgba(3, 0, 20, 0.8), rgba(3, 0, 20, 0.9)), url('background3.avif');
        }

        #kontak {
            background-image: linear-gradient(rgba(3, 0, 20, 0.9), rgba(3, 0, 20, 0.95)), url('background4.avif');
        }

        h1 {
            font-size: 5.5rem;
            margin: 0 0 20px 0;
            background: linear-gradient(45deg, var(--neon-cyan), #ffffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 0 40px rgba(0, 243, 255, 0.5);
        }

        h2 {
            font-size: 3rem;
            margin-bottom: 50px;
            color: #ffffff;
            position: relative;
            text-shadow: 0 0 15px rgba(255, 0, 60, 0.5);
        }

        h2::before {
            content: '[ ';
            color: var(--neon-magenta);
        }

        h2::after {
            content: ' ]';
            color: var(--neon-magenta);
        }

        p {
            font-size: 1.1rem;
            max-width: 600px;
            line-height: 1.8;
            color: #cbd5e1;
            text-shadow: 0 2px 4px rgba(0,0,0,0.8);
        }

        .btn {
            display: inline-block;
            margin-top: 30px;
            padding: 15px 40px;
            background: rgba(0, 243, 255, 0.1);
            color: var(--neon-cyan);
            text-decoration: none;
            font-family: 'Rajdhani', sans-serif;
            font-weight: 700;
            font-size: 1.2rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            border: 1px solid var(--neon-cyan);
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
        }

        .btn:hover {
            background: var(--neon-cyan);
            color: var(--bg-color);
            box-shadow: 0 0 30px rgba(0, 243, 255, 0.8);
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            width: 100%;
            max-width: 1100px;
        }

        .glass-card {
            background: var(--glass-bg);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid var(--glass-border);
            padding: 30px;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .glass-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, transparent, var(--neon-cyan), transparent);
            transform: translateX(-100%);
            transition: transform 0.5s ease;
        }

        .glass-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 243, 255, 0.2);
            border-color: var(--neon-cyan);
        }

        .glass-card:hover::before {
            transform: translateX(100%);
        }

        .card-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: transform 0.4s ease, border-color 0.4s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.5);
        }

        .glass-card:hover .card-img {
            transform: scale(1.03);
            border-color: rgba(0, 243, 255, 0.5);
        }

        .glass-card h3 {
            font-size: 1.8rem;
            color: #ffffff;
            margin-top: 0;
            margin-bottom: 10px;
            width: 100%;
            text-align: center;
        }

        .glass-card .price {
            font-size: 2rem;
            font-family: 'Rajdhani', sans-serif;
            color: var(--neon-cyan);
            font-weight: 700;
            margin: 0;
            text-shadow: 0 0 15px rgba(0, 243, 255, 0.4);
        }

        .fasilitas-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            max-width: 800px;
        }

        .fasilitas-item {
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 0, 60, 0.4);
            padding: 12px 25px;
            border-radius: 50px;
            color: #ffffff;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .fasilitas-item:hover {
            background: rgba(255, 0, 60, 0.2);
            border-color: var(--neon-magenta);
            box-shadow: 0 0 20px rgba(255, 0, 60, 0.4);
            transform: scale(1.05);
        }

        .contact-box {
            background: var(--glass-bg);
            backdrop-filter: blur(12px);
            border: 1px solid var(--glass-border);
            padding: 50px;
            border-radius: 15px;
            width: 100%;
            max-width: 600px;
            text-align: left;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .contact-item {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
            border-bottom: 1px solid rgba(255,255,255,0.05);
            padding-bottom: 10px;
        }

        .contact-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .contact-label {
            font-family: 'Rajdhani', sans-serif;
            color: var(--neon-magenta);
            font-weight: 700;
            font-size: 1.2rem;
            min-width: 120px;
            text-shadow: 0 0 5px rgba(255, 0, 60, 0.3);
        }

        .contact-value {
            color: #ffffff;
            font-size: 1.1rem;
        }

        footer {
            text-align: center;
            padding: 30px;
            background-color: #01000a;
            border-top: 1px solid var(--glass-border);
            font-size: 0.9rem;
            color: #64748b;
            font-family: 'Rajdhani', sans-serif;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>

    <nav>
        <a href="#home">HOME</a>
        <a href="#fasilitas">SYSTEM_SPECS</a>
        <a href="#harga">PRICING_TIER</a>
        <a href="#kontak">UPLINK</a>
    </nav>

    <section id="home">
        <h1>ZONE RENTAL PS</h1>
        <p>Akses dimensi hiburan tanpa batas. Mainkan mahakarya gaming dengan rig konsol generasi terbaru, layar resolusi 4K HDR, dan atmosfer imersif.</p>
        <a href="#harga" class="btn">INITIALIZE CONNECTION</a>
    </section>

    <section id="fasilitas">
        <h2>SYSTEM_SPECS</h2>
        <div class="fasilitas-list">
            <div class="fasilitas-item">Kabin Full AC</div>
            <div class="fasilitas-item">Smart TV 4K HDR 50"</div>
            <div class="fasilitas-item">Fiber Optic Network</div>
            <div class="fasilitas-item">Razer Headset Available</div>
            <div class="fasilitas-item">Library Auto-Update</div>
            <div class="fasilitas-item">Energy Drink & Snacks</div>
        </div>
    </section>

    <section id="harga">
        <h2>PRICING_TIER</h2>
        <div class="grid-container">
            <?php foreach ($prices as $item): ?>
                <div class="glass-card">
                    <img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['ps_type']) ?>" class="card-img">
                    <h3><?= htmlspecialchars($item['ps_type']) ?></h3>
                    <p class="price"><?= htmlspecialchars($item['price']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="kontak">
        <h2>UPLINK_DATA</h2>
        <div class="contact-box">
            <div class="contact-item">
                <span class="contact-label">KOORDINAT</span>
                <span class="contact-value">Jl. Merdeka Raya No. 45, Jakarta</span>
            </div>
            <div class="contact-item">
                <span class="contact-label">COMMLINK</span>
                <span class="contact-value">0812-3456-7890 (WA)</span>
            </div>
            <div class="contact-item">
                <span class="contact-label">NETWORK</span>
                <span class="contact-value">@zonerentalps</span>
            </div>
            <div class="contact-item">
                <span class="contact-label">UPTIME</span>
                <span class="contact-value">09:00 - 02:00 WIB</span>
            </div>
        </div>
    </section>

    <footer>
        &copy; <?= date('Y') ?> ZONE RENTAL PS // ALL SYSTEMS NOMINAL
    </footer>

</body>
</html>
