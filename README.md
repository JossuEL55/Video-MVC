# Comisiones Vendedores 
Este proyecto es una pequeña aplicación en **Laravel 12** que calcula las comisiones de ventas de los vendedores en base a rangos de fecha y reglas predefinidas. Incluye:

- **Migraciones** para crear las tablas `vendedores`, `ventas` y `reglas`.
- **Seeders** con datos de ejemplo (vendedores, ventas y reglas).
- **Controlador** para filtrar ventas por fecha, calcular comisiones según la regla aplicable, y pasar resultados a la vista.
- **Vista** única con diseño responsivo usando Tailwind CSS, que muestra:
  - Formulario de filtro por rango de fechas.
  - Tabla de vendedores.
  - Tabla de reglas de comisión.
  - Resultado de comisiones por vendedor en el rango seleccionado.
- **Layout** base que incluye logo de la UDLA y pie de página con crédito a la Universidad de las Américas.

## Requerimientos

- PHP 8.1 o superior  
- Composer  
- PostgreSQL+
- Extensiones PHP: `pdo`, `pdo_pgsql`, `mbstring`  

## Instalación

1. Clonar el repositorio  
   ```bash
   git clone https://github.com/TU_USUARIO/tu-repo-comisiones.git
   cd tu-repo-comisiones
Copiar y configurar .env

bash
Copiar
Editar
cp .env.example .env
Ajusta las variables DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD.

Instalar dependencias PHP

Uso
Ingresar fecha de inicio y fecha de fin.

Hacer clic en Filtrar y Calcular.

Ver las comisiones totales por vendedor dentro del rango.

Consultar el listado de vendedores y las reglas de comisión vigentes.

Enlaces

Video explicativo: https://youtu.be/ICz5vPndHkQ

Documentación de Laravel: https://laravel.com/docs

Contacto
Correo institucional: jossue.ayala@udla.edu.ec

Correo personal: jossue_ayala@hotmail.com
