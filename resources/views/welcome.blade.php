<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Brewly Coffee — Tempat terbaik untuk menikmati kopi premium di kota Anda. Kami menyajikan biji kopi pilihan dari seluruh Nusantara." />
  <meta property="og:title" content="Brewly Coffee" />
  <meta property="og:description" content="Kopi premium dengan rasa autentik Nusantara." />
  <title>Brewly Coffee — Premium Coffee Experience</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="stylesheet" href="/css/cafe.css" />
</head>
<body>

  <!-- ========================
       NAVBAR
  ======================== -->
  <nav class="navbar" id="navbar" role="navigation" aria-label="Navigasi utama">
    <a href="#home" class="navbar__logo" aria-label="Brewly Coffee - Kembali ke halaman utama">
      <svg viewBox="0 0 32 32" aria-hidden="true">
        <path d="M6 10h14a8 8 0 0 1 0 16H6V10zm14 12a4 4 0 0 0 0-8H10v8h10zm6-10h1a3 3 0 0 1 0 6h-1V12z"/>
      </svg>
      Brewly
    </a>

    <ul class="navbar__links" id="nav-links" role="list">
      <li><a href="#home">Beranda</a></li>
      <li><a href="#about">Tentang</a></li>
      <li><a href="#menu">Menu</a></li>
      <li><a href="#testimonials">Ulasan</a></li>
      <li><a href="#visit">Kunjungi</a></li>
    </ul>

    <a href="#visit" class="navbar__links navbar__cta" id="nav-cta">Reservasi</a>

    <button class="navbar__hamburger" id="hamburger" aria-label="Buka menu navigasi" aria-expanded="false" aria-controls="nav-links">
      <span></span><span></span><span></span>
    </button>
  </nav>

  <!-- ========================
       HERO
  ======================== -->
  <section class="hero" id="home" aria-labelledby="hero-title">
    <div class="hero__bg" id="hero-bg" role="img" aria-label="Interior kafe yang nyaman dan hangat"></div>
    <div class="hero__overlay" aria-hidden="true"></div>

    <div class="hero__content">
      <div class="hero__badge" role="text">Specialty Coffee Jakarta</div>

      <h1 class="hero__title" id="hero-title">
        Setiap Tegukan<br/>
        Adalah <span>Cerita</span><br/>
        yang Indah
      </h1>

      <p class="hero__subtitle">
        Kami menyajikan kopi pilihan dari perkebunan terbaik Nusantara,
        diseduh dengan penuh cinta oleh barista berpengalaman kami.
      </p>

      <div class="hero__actions">
        <a href="#menu" class="btn btn--primary" id="btn-lihat-menu">
          ☕ Lihat Menu
        </a>
        <a href="#visit" class="btn btn--outline" id="btn-reservasi-hero">
          📍 Kunjungi Kami
        </a>
      </div>
    </div>

    <div class="hero__stats" aria-label="Statistik Brewly Coffee">
      <div class="hero__stat">
        <div class="hero__stat-num" id="stat-menu">30+</div>
        <div class="hero__stat-label">Varian Menu</div>
      </div>
      <div class="hero__stat">
        <div class="hero__stat-num" id="stat-customer">5K+</div>
        <div class="hero__stat-label">Pelanggan</div>
      </div>
      <div class="hero__stat">
        <div class="hero__stat-num" id="stat-tahun">7</div>
        <div class="hero__stat-label">Tahun Berdiri</div>
      </div>
    </div>
  </section>

  <!-- ========================
       ABOUT
  ======================== -->
  <section class="about" id="about" aria-labelledby="about-title">
    <div class="about__grid">
      <div class="about__image-wrap reveal">
        <!-- SVG placeholder for the about image -->
        <svg class="about__image" viewBox="0 0 600 480" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Barista sedang menyeduh kopi">
          <rect width="600" height="480" fill="#1a1108"/>
          <rect x="160" y="160" width="280" height="180" rx="16" fill="#2a1f12"/>
          <ellipse cx="300" cy="200" rx="60" ry="10" fill="#c8893a" opacity=".3"/>
          <rect x="240" y="190" width="120" height="80" rx="8" fill="#3a2818"/>
          <rect x="260" y="210" width="80" height="12" rx="4" fill="#c8893a" opacity=".5"/>
          <rect x="270" y="232" width="60" height="10" rx="4" fill="#c8893a" opacity=".3"/>
          <!-- Coffee steam -->
          <path d="M285 170 Q282 155 285 140" stroke="#c8893a" stroke-width="3" fill="none" opacity=".4" stroke-linecap="round"/>
          <path d="M300 165 Q297 148 300 132" stroke="#c8893a" stroke-width="3" fill="none" opacity=".4" stroke-linecap="round"/>
          <path d="M315 170 Q312 155 315 140" stroke="#c8893a" stroke-width="3" fill="none" opacity=".4" stroke-linecap="round"/>
          <!-- Coffee beans -->
          <ellipse cx="120" cy="350" rx="20" ry="12" fill="#5a3820" transform="rotate(-20,120,350)"/>
          <ellipse cx="160" cy="370" rx="18" ry="11" fill="#4a2e18" transform="rotate(15,160,370)"/>
          <ellipse cx="440" cy="340" rx="20" ry="12" fill="#5a3820" transform="rotate(30,440,340)"/>
          <text x="300" y="440" text-anchor="middle" font-size="16" fill="#9a8878" font-family="serif">Brewly Coffee Roastery</text>
        </svg>
        <div class="about__image-badge" aria-label="Berdiri sejak 2017">
          7
          <small>Tahun<br/>Berdiri</small>
        </div>
      </div>

      <div class="about__text reveal">
        <p class="section__label">Tentang Kami</p>
        <h2 class="section__title" id="about-title">
          Kopi Bukan Sekadar<br/>Minuman, Ini Ritual
        </h2>
        <p class="section__sub" style="margin-bottom: 1.5rem;">
          Sejak 2017, Brewly Coffee telah menjadi rumah kedua bagi para pecinta kopi
          di Jakarta. Kami percaya bahwa secangkir kopi yang sempurna dimulai dari
          biji pilihan, teknik yang tepat, dan hati yang tulus.
        </p>
        <p class="section__sub">
          Biji kopi kami dipilih langsung dari petani lokal di Aceh, Toraja, Flores, dan
          Kintamani — memastikan kesegaran dan kualitas terbaik sampai di cangkir Anda.
        </p>

        <div class="about__features">
          <article class="about__feature" id="feature-single-origin">
            <div class="about__feature-icon" aria-hidden="true">🌿</div>
            <h4>Single Origin</h4>
            <p>Biji kopi traceable dari petani lokal Nusantara</p>
          </article>
          <article class="about__feature" id="feature-fresh-roast">
            <div class="about__feature-icon" aria-hidden="true">🔥</div>
            <h4>Fresh Roasted</h4>
            <p>Disangrai setiap minggu untuk kesegaran optimal</p>
          </article>
          <article class="about__feature" id="feature-expert-barista">
            <div class="about__feature-icon" aria-hidden="true">🏆</div>
            <h4>Expert Barista</h4>
            <p>Tim barista bersertifikasi SCA internasional</p>
          </article>
          <article class="about__feature" id="feature-cozy-space">
            <div class="about__feature-icon" aria-hidden="true">☁️</div>
            <h4>Cozy Space</h4>
            <p>Ruang nyaman untuk bekerja atau bersantai</p>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================
       MENU
  ======================== -->
  <section class="menu" id="menu" aria-labelledby="menu-title">
    <div class="menu__header">
      <div>
        <p class="section__label">Menu Pilihan</p>
        <h2 class="section__title" id="menu-title">Temukan Favoritmu</h2>
        <div class="menu__tabs" role="tablist" aria-label="Kategori menu">
          <button class="menu__tab active" id="tab-semua" role="tab" aria-selected="true" data-filter="all">Semua</button>
          <button class="menu__tab" id="tab-espresso" role="tab" aria-selected="false" data-filter="espresso">Espresso</button>
          <button class="menu__tab" id="tab-manual" role="tab" aria-selected="false" data-filter="manual">Manual Brew</button>
          <button class="menu__tab" id="tab-nonkopi" role="tab" aria-selected="false" data-filter="nonkopi">Non-Kopi</button>
          <button class="menu__tab" id="tab-food" role="tab" aria-selected="false" data-filter="food">Makanan</button>
        </div>
      </div>
    </div>

    <div class="menu__grid" id="menu-grid" role="list" aria-live="polite">
      <!-- Cards rendered by JS -->
    </div>
  </section>

  <!-- ========================
       TESTIMONIALS
  ======================== -->
  <section class="testimonials" id="testimonials" aria-labelledby="testimonials-title">
    <div style="text-align:center;">
      <p class="section__label">Ulasan Pelanggan</p>
      <h2 class="section__title reveal" id="testimonials-title">Apa Kata Mereka?</h2>
    </div>
    <div class="testimonials__grid">
      <article class="testimonial__card reveal" id="testimonial-budi">
        <div class="testimonial__quote" aria-hidden="true">"</div>
        <div class="testimonial__stars" aria-label="Rating 5 dari 5 bintang">★★★★★</div>
        <p class="testimonial__text">
          "Kopi Aceh Gayo-nya luar biasa! Aromanya sampai ke meja sebelah. Tempatnya juga
          nyaman banget buat nugas. Udah jadi langganan tetap sejak 2 tahun lalu."
        </p>
        <div class="testimonial__author">
          <div class="testimonial__avatar" aria-hidden="true">BA</div>
          <div>
            <div class="testimonial__author-name">Budi Andika</div>
            <div class="testimonial__author-loc">📍 Jakarta Selatan</div>
          </div>
        </div>
      </article>

      <article class="testimonial__card reveal" id="testimonial-sari">
        <div class="testimonial__quote" aria-hidden="true">"</div>
        <div class="testimonial__stars" aria-label="Rating 5 dari 5 bintang">★★★★★</div>
        <p class="testimonial__text">
          "Menu non-kopi-nya juga worth it banget! Matcha latte-nya smooth dan tidak terlalu
          manis. Pastry-nya fresh setiap hari. Highly recommended!"
        </p>
        <div class="testimonial__author">
          <div class="testimonial__avatar" aria-hidden="true">SP</div>
          <div>
            <div class="testimonial__author-name">Sari Putri</div>
            <div class="testimonial__author-loc">📍 BSD Tangerang</div>
          </div>
        </div>
      </article>

      <article class="testimonial__card reveal" id="testimonial-rian">
        <div class="testimonial__quote" aria-hidden="true">"</div>
        <div class="testimonial__stars" aria-label="Rating 5 dari 5 bintang">★★★★★</div>
        <p class="testimonial__text">
          "V60 Flores-nya bikin nagih. Barista di sini ramah-ramah dan mau jelasin proses
          brewing-nya. Tempat favorit untuk weekend coffee ritual saya."
        </p>
        <div class="testimonial__author">
          <div class="testimonial__avatar" aria-hidden="true">RM</div>
          <div>
            <div class="testimonial__author-name">Rian Maulana</div>
            <div class="testimonial__author-loc">📍 Depok</div>
          </div>
        </div>
      </article>
    </div>
  </section>

  <!-- ========================
       VISIT / CONTACT
  ======================== -->
  <section class="visit" id="visit" aria-labelledby="visit-title">
    <div style="text-align:center; margin-bottom:0;">
      <p class="section__label">Kunjungi Kami</p>
      <h2 class="section__title reveal" id="visit-title">Kami Menunggu Anda</h2>
    </div>

    <div class="visit__grid">
      <div class="reveal">
        <div class="visit__info-item">
          <div class="visit__info-icon" aria-hidden="true">📍</div>
          <div>
            <div class="visit__info-label">Alamat</div>
            <div class="visit__info-value">
              Jl. Kemang Raya No. 88
              <span>Jakarta Selatan, DKI Jakarta 12730</span>
            </div>
          </div>
        </div>

        <div class="visit__info-item">
          <div class="visit__info-icon" aria-hidden="true">🕐</div>
          <div>
            <div class="visit__info-label">Jam Buka</div>
            <div class="visit__info-value">
              Senin – Jumat: 07.00 – 22.00
              <span>Sabtu – Minggu: 08.00 – 23.00</span>
            </div>
          </div>
        </div>

        <div class="visit__info-item">
          <div class="visit__info-icon" aria-hidden="true">📞</div>
          <div>
            <div class="visit__info-label">Telepon</div>
            <div class="visit__info-value">
              <a href="tel:+6221-2234-5678" style="color:var(--clr-primary)">+62 21-2234-5678</a>
              <span>WhatsApp tersedia</span>
            </div>
          </div>
        </div>

        <div class="visit__info-item">
          <div class="visit__info-icon" aria-hidden="true">📧</div>
          <div>
            <div class="visit__info-label">Email</div>
            <div class="visit__info-value">
              <a href="mailto:hello@brewly.coffee" style="color:var(--clr-primary)">hello@brewly.coffee</a>
              <span>Respon dalam 24 jam</span>
            </div>
          </div>
        </div>
      </div>

      <div class="reveal">
        <form class="contact-form" id="contact-form" novalidate aria-label="Form reservasi dan pesan">
          <h3 style="font-family:var(--ff-serif);font-size:1.4rem;margin-bottom:.5rem;">Kirim Pesan</h3>
          <p style="font-size:.85rem;color:var(--clr-muted);margin-bottom:.5rem;">Reservasi meja atau tanya apa pun tentang kami.</p>

          <div class="form-group">
            <label for="form-nama">Nama Lengkap</label>
            <input type="text" id="form-nama" name="nama" placeholder="Contoh: Budi Santoso" required autocomplete="name" />
          </div>

          <div class="form-group">
            <label for="form-email">Email</label>
            <input type="email" id="form-email" name="email" placeholder="nama@email.com" required autocomplete="email" />
          </div>

          <div class="form-group">
            <label for="form-pesan">Pesan</label>
            <textarea id="form-pesan" name="pesan" placeholder="Tulis pesan, reservasi, atau pertanyaan Anda di sini..." required></textarea>
          </div>

          <button type="submit" class="btn btn--primary" id="btn-kirim-pesan" style="border:none;cursor:pointer;width:100%;justify-content:center;">
            ✉️ Kirim Pesan
          </button>
        </form>
      </div>
    </div>
  </section>

  <!-- ========================
       FOOTER
  ======================== -->
  <footer class="footer" role="contentinfo">
    <div class="footer__top">
      <div>
        <div class="footer__brand-name">☕ Brewly Coffee</div>
        <p class="footer__brand-desc">
          Menyajikan kopi premium pilihan Nusantara sejak 2017.
          Setiap cangkir adalah perjalanan rasa yang tak terlupakan.
        </p>
        <div class="footer__socials" role="list" aria-label="Media sosial Brewly Coffee">
          <a href="#" class="footer__social" role="listitem" aria-label="Instagram Brewly Coffee">📸</a>
          <a href="#" class="footer__social" role="listitem" aria-label="Twitter Brewly Coffee">🐦</a>
          <a href="#" class="footer__social" role="listitem" aria-label="TikTok Brewly Coffee">🎵</a>
          <a href="#" class="footer__social" role="listitem" aria-label="YouTube Brewly Coffee">▶️</a>
        </div>
      </div>

      <div>
        <div class="footer__col-title">Navigasi</div>
        <nav class="footer__col-links" aria-label="Navigasi footer">
          <a href="#home">Beranda</a>
          <a href="#about">Tentang</a>
          <a href="#menu">Menu</a>
          <a href="#testimonials">Ulasan</a>
          <a href="#visit">Kunjungi</a>
        </nav>
      </div>

      <div>
        <div class="footer__col-title">Menu Populer</div>
        <div class="footer__col-links">
          <a href="#menu">Espresso Nusantara</a>
          <a href="#menu">V60 Single Origin</a>
          <a href="#menu">Kopi Susu Aren</a>
          <a href="#menu">Matcha Latte</a>
          <a href="#menu">Cold Brew</a>
        </div>
      </div>

      <div>
        <div class="footer__col-title">Informasi</div>
        <div class="footer__col-links">
          <a href="#">Karir</a>
          <a href="#">Franchise</a>
          <a href="#">Blog Kopi</a>
          <a href="#">Kebijakan Privasi</a>
          <a href="#">Syarat & Ketentuan</a>
        </div>
      </div>
    </div>

    <div class="footer__bottom">
      <p class="footer__copy">
        &copy; 2024 <span>Brewly Coffee</span>. Dibuat dengan ❤️ untuk para pecinta kopi.
      </p>
      <p class="footer__copy" id="footer-cicd-badge">
        🚀 Deployed via <span>GitHub Actions CI/CD</span> · Self-Hosted Runner
      </p>
    </div>
  </footer>

  <!-- Toast Notification -->
  <div class="toast" id="toast" role="alert" aria-live="assertive" aria-atomic="true"></div>

  <!-- ========================
       JAVASCRIPT
  ======================== -->
  <script>
    'use strict';

    /* ---- Menu Data ---- */
    const menuItems = [
      {
        id: 'espresso-nusantara',
        category: 'espresso',
        tag: 'Best Seller',
        name: 'Espresso Nusantara',
        desc: 'Single shot espresso dari biji Aceh Gayo dengan body penuh dan aftertaste cokelat.',
        price: 'Rp 28.000',
        emoji: '☕',
        color: '#3a2010'
      },
      {
        id: 'kopi-susu-aren',
        category: 'espresso',
        tag: 'Favorit',
        name: 'Kopi Susu Aren',
        desc: 'Espresso lembut berpadu susu segar dan gula aren Bali yang autentik.',
        price: 'Rp 35.000',
        emoji: '🥛',
        color: '#2e1a0e'
      },
      {
        id: 'cappuccino-toraja',
        category: 'espresso',
        tag: 'Espresso',
        name: 'Cappuccino Toraja',
        desc: 'Cappuccino klasik dengan biji Toraja Sapan, microfoam susu yang sempurna.',
        price: 'Rp 38.000',
        emoji: '🫧',
        color: '#251508'
      },
      {
        id: 'v60-flores',
        category: 'manual',
        tag: 'Manual Brew',
        name: 'V60 Flores Bajawa',
        desc: 'Pour over dengan biji Flores Bajawa — floral, jeruk manis, dan aftertaste panjang.',
        price: 'Rp 45.000',
        emoji: '🌸',
        color: '#1a1505'
      },
      {
        id: 'aeropress-kintamani',
        category: 'manual',
        tag: 'Manual Brew',
        name: 'Aeropress Kintamani',
        desc: 'Biji Kintamani Bali diseduh Aeropress — asam jeruk cerah dengan body ringan.',
        price: 'Rp 42.000',
        emoji: '🍊',
        color: '#201508'
      },
      {
        id: 'cold-brew',
        category: 'espresso',
        tag: 'Dingin',
        name: 'Cold Brew 24H',
        desc: 'Diseduh 24 jam dalam air dingin, menghasilkan kopi smooth dan rendah asam.',
        price: 'Rp 40.000',
        emoji: '🧊',
        color: '#0a1520'
      },
      {
        id: 'matcha-latte',
        category: 'nonkopi',
        tag: 'Non-Kopi',
        name: 'Matcha Latte Premium',
        desc: 'Matcha ceremonial grade Uji, Jepang berpadu susu oat yang creamy dan manis natural.',
        price: 'Rp 38.000',
        emoji: '🍵',
        color: '#0f1a0a'
      },
      {
        id: 'taro-latte',
        category: 'nonkopi',
        tag: 'Non-Kopi',
        name: 'Taro Latte',
        desc: 'Latte ungu menawan dari talas asli, creamy dan manis alami. Instagrammable!',
        price: 'Rp 35.000',
        emoji: '💜',
        color: '#150e20'
      },
      {
        id: 'croissant-almond',
        category: 'food',
        tag: 'Makanan',
        name: 'Almond Croissant',
        desc: 'Croissant butter berlapis krim almond, dipanggang segar setiap pagi.',
        price: 'Rp 32.000',
        emoji: '🥐',
        color: '#201508'
      },
      {
        id: 'avocado-toast',
        category: 'food',
        tag: 'Makanan',
        name: 'Avocado Toast',
        desc: 'Roti sourdough panggang dengan alpukat Malang, telur poached, dan sriracha.',
        price: 'Rp 55.000',
        emoji: '🥑',
        color: '#0a1505'
      },
      {
        id: 'cheesecake',
        category: 'food',
        tag: 'Dessert',
        name: 'NY Cheesecake',
        desc: 'New York style cheesecake lembut dengan topping berry segar pilihan.',
        price: 'Rp 45.000',
        emoji: '🍰',
        color: '#20100a'
      },
      {
        id: 'tiramisu',
        category: 'food',
        tag: 'Dessert',
        name: 'Tiramisu Espresso',
        desc: 'Tiramisu klasik Italia dengan espresso Aceh Gayo dan mascarpone premium.',
        price: 'Rp 48.000',
        emoji: '🎂',
        color: '#201508'
      }
    ];

    /* ---- Render Menu ---- */
    let activeFilter = 'all';

    function createMenuCard(item) {
      return `
        <article class="menu__card reveal" id="menu-${item.id}" role="listitem" data-category="${item.category}">
          <div class="menu__card-img-wrap">
            <svg class="menu__card-img" viewBox="0 0 400 200" xmlns="http://www.w3.org/2000/svg"
              role="img" aria-label="${item.name}">
              <rect width="400" height="200" fill="${item.color}"/>
              <text x="200" y="115" text-anchor="middle" font-size="64" dominant-baseline="middle">${item.emoji}</text>
              <rect x="0" y="160" width="400" height="40" fill="rgba(0,0,0,0.3)"/>
              <text x="200" y="185" text-anchor="middle" font-size="13" fill="#c8893a" font-family="serif">${item.name}</text>
            </svg>
          </div>
          <div class="menu__card-body">
            <div class="menu__card-tag">${item.tag}</div>
            <h3 class="menu__card-name">${item.name}</h3>
            <p class="menu__card-desc">${item.desc}</p>
            <div class="menu__card-footer">
              <span class="menu__card-price">${item.price}</span>
              <button class="menu__card-btn" id="btn-add-${item.id}"
                aria-label="Tambah ${item.name} ke keranjang"
                onclick="addToCart('${item.name}')">+</button>
            </div>
          </div>
        </article>
      `;
    }

    function renderMenu(filter) {
      const grid = document.getElementById('menu-grid');
      const filtered = filter === 'all'
        ? menuItems
        : menuItems.filter(i => i.category === filter);

      grid.style.opacity = '0';
      grid.style.transform = 'translateY(10px)';

      setTimeout(() => {
        grid.innerHTML = filtered.map(createMenuCard).join('');
        grid.style.transition = 'opacity .3s ease, transform .3s ease';
        grid.style.opacity = '1';
        grid.style.transform = 'translateY(0)';
        observeReveal();
      }, 180);
    }

    /* ---- Tab Filtering ---- */
    document.querySelectorAll('.menu__tab').forEach(tab => {
      tab.addEventListener('click', function () {
        document.querySelectorAll('.menu__tab').forEach(t => {
          t.classList.remove('active');
          t.setAttribute('aria-selected', 'false');
        });
        this.classList.add('active');
        this.setAttribute('aria-selected', 'true');
        activeFilter = this.dataset.filter;
        renderMenu(activeFilter);
      });
    });

    /* ---- Cart Toast ---- */
    function addToCart(name) {
      showToast(`✅ "${name}" ditambahkan!`);
    }

    function showToast(msg, duration = 3000) {
      const toast = document.getElementById('toast');
      toast.textContent = msg;
      toast.classList.add('show');
      setTimeout(() => toast.classList.remove('show'), duration);
    }

    /* ---- Scroll Reveal ---- */
    function observeReveal() {
      const els = document.querySelectorAll('.reveal');
      const io = new IntersectionObserver((entries) => {
        entries.forEach((e, i) => {
          if (e.isIntersecting) {
            setTimeout(() => e.target.classList.add('visible'), i * 80);
            io.unobserve(e.target);
          }
        });
      }, { threshold: 0.1 });
      els.forEach(el => io.observe(el));
    }

    /* ---- Navbar Scroll ---- */
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
      navbar.classList.toggle('scrolled', window.scrollY > 60);
    }, { passive: true });

    /* ---- Hamburger ---- */
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('nav-links');

    hamburger.addEventListener('click', () => {
      const isOpen = navLinks.classList.toggle('open');
      hamburger.setAttribute('aria-expanded', isOpen);
    });

    /* Close menu on link click */
    navLinks.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        navLinks.classList.remove('open');
        hamburger.setAttribute('aria-expanded', 'false');
      });
    });

    /* ---- Hero BG Parallax ---- */
    const heroBg = document.getElementById('hero-bg');
    heroBg.classList.add('loaded');

    window.addEventListener('scroll', () => {
      const y = window.scrollY;
      if (y < window.innerHeight) {
        heroBg.style.transform = `translateY(${y * 0.25}px)`;
      }
    }, { passive: true });

    /* ---- Contact Form ---- */
    document.getElementById('contact-form').addEventListener('submit', function (e) {
      e.preventDefault();
      const nama = document.getElementById('form-nama').value.trim();
      const email = document.getElementById('form-email').value.trim();
      const pesan = document.getElementById('form-pesan').value.trim();

      if (!nama || !email || !pesan) {
        showToast('⚠️ Mohon lengkapi semua field!');
        return;
      }

      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        showToast('⚠️ Format email tidak valid!');
        return;
      }

      showToast(`☕ Terima kasih, ${nama}! Pesan Anda telah terkirim.`);
      this.reset();
    });

    /* ---- Counter Animation ---- */
    function animateCounter(el, target, suffix) {
      let current = 0;
      const step = Math.ceil(target / 40);
      const timer = setInterval(() => {
        current = Math.min(current + step, target);
        el.textContent = current + suffix;
        if (current >= target) clearInterval(timer);
      }, 35);
    }

    const counterIO = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          animateCounter(document.getElementById('stat-menu'), 30, '+');
          animateCounter(document.getElementById('stat-customer'), 5, 'K+');
          animateCounter(document.getElementById('stat-tahun'), 7, '');
          counterIO.disconnect();
        }
      });
    });
    counterIO.observe(document.querySelector('.hero__stats'));

    /* ---- Init ---- */
    renderMenu('all');
    observeReveal();
  </script>
</body>
</html>
