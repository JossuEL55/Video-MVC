# Minicore Laravel – Cálculo de Comisiones

Una aplicación MVC en Laravel (v12) con PostgreSQL que filtra ventas por rango de fechas y calcula la comisión acumulada de cada vendedor según reglas.

---

## Video Explicativo  
**Minicore Laravel – Filtrado y Cálculo de Comisiones**  
https://loom.com/share/XXXXXXXXXXXX  
*(Explica migraciones, seeders, controlador, vistas Blade/Tailwind y lógica de comisiones.)*

---

## Instalación Local

1. Clona el repositorio  
   ```bash
   git clone https://github.com/tu-usuario/minicore-laravel.git
   cd minicore-laravel
Instala dependencias

bash
Copiar
Editar
composer install
Configura entorno

bash
Copiar
Editar
cp .env.example .env
php artisan key:generate
Ajusta .env para PostgreSQL:

ini
Copiar
Editar
DB_CONNECTION=pgsql
DB_HOST=...
DB_PORT=5432
DB_DATABASE=...
DB_USERNAME=...
DB_PASSWORD=...
Migra y seed

bash
Copiar
Editar
php artisan migrate --seed
Levanta el servidor

bash
Copiar
Editar
php artisan serve
Abre en el navegador

arduino
Copiar
Editar
http://127.0.0.1:8000/comisiones
🚀 Deploy en Render
Conecta tu repo en Render → New Web Service.

Build Command

css
Copiar
Editar
composer install && php artisan migrate --seed
Start Command

nginx
Copiar
Editar
php artisan serve --host=0.0.0.0 --port=$PORT
Define variables de entorno en el panel de Render según tu PostgreSQL.

Render migrará y servirá tu app automáticamente.

📝 Uso
Ingresa Fecha Inicio y Fecha Fin.

Haz clic en Filtrar y Calcular.

Verás:

Comisión total por vendedor.

Listado de vendedores (nombre + email).

Tabla de reglas (umbral monto + porcentaje).

