# Laravel Starter Core

Starter template Laravel ottimizzato per sviluppo locale con stack completo e configurazione pronta all’uso.

Progettato per ridurre il tempo di bootstrap e standardizzare l’avvio di nuovi progetti.

---

## 🚀 Stack Tecnologico

- Laravel 11+
- PHP 8.2+
- MySQL
- Laravel Fortify (autenticazione)
- Livewire (predisposto per pannelli admin)
- Vite
- Bootstrap 5
- Seeder admin automatico
- Layout base con navbar e footer

---

## 📁 Struttura del Progetto


app/
bootstrap/
config/
database/
resources/
│
├── views/
│ ├── layouts/
│ │ └── app.blade.php
│ │
│ ├── components/
│ │ ├── navbar.blade.php
│ │ └── footer.blade.php
│ │
│ └── pages/
│ └── home.blade.php
│
routes/
setup.sh
.env.example


### Componenti principali

- **Layout globale** → `resources/views/layouts/app.blade.php`
- **Navbar** → `resources/views/components/navbar.blade.php`
- **Footer** → `resources/views/components/footer.blade.php`
- **Homepage** → `resources/views/pages/home.blade.php`
- **Controller base** → `PageController`
- **Seeder admin** → `AdminUserSeeder`

---

## 🗄 Configurazione Database

Configurazione MySQL preimpostata nel `.env.example`:


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db
DB_USERNAME=root
DB_PASSWORD=root


Assicurati che il database `db` esista prima di eseguire il setup.

Creazione database:

```sql
CREATE DATABASE db;
⚙️ Installazione
1️⃣ Clona il repository
git clone git@github.com:BiagioTrotta/laravel-starter-core.git
cd laravel-starter-core
2️⃣ Esegui setup automatico
./setup.sh

Lo script esegue automaticamente:

Copia .env

composer install

Generazione chiave applicazione

Migrazioni con seed

Installazione dipendenze Node

Build Vite

3️⃣ Avvia il server
php artisan serve

Apri nel browser:

http://127.0.0.1:8000
🔐 Credenziali Admin

Il seeder crea automaticamente un utente admin:

Email: admin@example.com

Password: 12345678

🛠 Installazione Manuale (senza script)

Se non vuoi usare setup.sh:

cp .env.example .env
composer install
php artisan key:generate
php artisan migrate --seed
npm install
npm run build
🧩 Autenticazione

Laravel Fortify è già installato e configurato.

Funzionalità incluse:

Login

Registrazione

Logout

Reset password

Email verification (configurabile)

Le view possono essere personalizzate usando il layout globale.

⚡ Livewire

Livewire è installato e pronto per:

Dashboard amministrazione

CRUD dinamici

Componenti interattivi

Nessuna configurazione aggiuntiva necessaria.

🎨 Frontend

Bootstrap 5 integrato

Vite configurato

Struttura layout centralizzata

Modifica:

resources/css/app.css
resources/js/app.js

Per avviare ambiente sviluppo:

npm run dev
🧠 Filosofia del Template

Questo starter kit nasce per:

Standardizzare l’avvio progetto

Ridurre configurazioni ripetitive

Fornire una base coerente

Velocizzare lo sviluppo freelance

Predisporre pannelli amministrazione

Il progetto può essere distrutto e ricreato da zero in pochi secondi.
Questo garantisce riproducibilità e coerenza.

📦 Requisiti

PHP 8.2+

Composer

Node.js 18+

MySQL 8+

Git

🔮 Possibili Estensioni Future

Sistema ruoli (Admin/User)

Middleware IsAdmin

Dashboard admin preconfigurata

Struttura cartella /Admin

Configurazione SEO base

Testing setup predefinito

📜 Licenza

Uso personale e professionale.

👤 Autore

Biagio Trotta
