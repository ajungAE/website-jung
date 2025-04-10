# Website Jung – PHP & Twig Projekt

Ein kleines Webprojekt zur Übung mit PHP, [Twig](https://twig.symfony.com/), Apache und automatischem Live-Reload via [BrowserSync](https://browsersync.io/).

## 🔧 Projektstruktur

```bash
website-jung/
├── cache/
├── config/
│   └── twig.php
├── css/
│   └── styles.css
├── images/
│   └── blume.jpg
├── templates/
│   ├── pages/
│   │   ├── kontakt.html.twig
│   │   ├── startseite.html.twig
│   │   └── ueberuns.html.twig
│   └── partials/
│       ├── footer.html.twig
│       ├── header.html.twig
│       └── layout.html.twig
├── vendor/                 # von Composer verwaltet
├── kontakt.php
├── startseite.php
├── ueberuns.php
├── .gitignore
├── composer.json
├── composer.lock
└── README.md
```

---

## 🚀 Entwicklung starten

### Voraussetzungen

- Apache2 (läuft auf deiner VM `ajubuntu`)
- Node.js & npm
- PHP installiert
- Hostname `ajubuntu` ist auf dem Host erreichbar (z. B. via `/etc/hosts`)

### 🔁 Live-Reload starten

```bash
startlivereload
```

> Alias, der folgendes ausführt:

```bash
browser-sync start --proxy "ajubuntu" --files "**/*.php" "**/*.twig" "**/*.css" "**/*.html" "**/*.js"
```

> Alternativ über `npm`:

```bash
npm run dev
```

### Seite öffnen

```
http://localhost:3001/website-jung/startseite.php
```

Oder extern (aktueller Fall mit ubuntu VM):

```
http://ajubuntu/website-jung/startseite.php
```

---

## 🧪 Features

- ✔️ Twig-Templating
- ✔️ Modulstruktur: Header, Footer, Layout
- ✔️ PHP-Controller für jede Seite
- ✔️ Live-Reload bei Dateiänderungen (Twig, PHP, CSS, HTML, JS)
- ✔️ Cleanes Layout, responsive, anpassbar

---

## 📚 Nützliche Befehle

```bash
# PHP-Entwicklungsserver (optional)
php -S localhost:8000

# Apache neustarten
sudo systemctl restart apache2

# Status prüfen
sudo systemctl status apache2
```

---

## 👨‍💻 Entwickler

Alexander Jung  
Stand: April 2025

---

> Viel Spaß beim Weiterentwickeln & Lernen!