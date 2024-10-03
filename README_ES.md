
# OpenLabs 🧪

**OpenLabs** es un repositorio que proporciona laboratorios de ciberseguridad fácilmente desplegables utilizando Docker Compose. Cada laboratorio consiste en contenedores Docker diseñados para simular escenarios de seguridad del mundo real, ofreciendo un entorno práctico para el estudio y pruebas.

## Funcionalidades

- **Docker Compose**: Inicia fácilmente los laboratorios con `docker-compose up -d`.
- **Entorno Aislado**: Cada laboratorio se ejecuta en contenedores Docker, garantizando un entorno de prueba seguro y aislado.
- **Configuración Personalizable**: Puedes personalizar las plantillas de los laboratorios según tus necesidades.
- **Acceso Rápido al Terminal**: Acceso rápido al terminal para cada contenedor.
- **Transferencia Fácil de Archivos**: Transferencia rápida de archivos entre tu máquina y el contenedor.
- **Contenedores Editables**: Edita fácilmente archivos dentro de los contenedores.
- **Ejecución con Tiempo Limitado**: Define un límite de tiempo de ejecución para los laboratorios.

## Comenzando

1. Clona el repositorio:
   ```bash
   git clone https://github.com/and0x00/openlabs.git
   ```
2. Navega al directorio específico del laboratorio:
   ```bash
   cd openlabs/<lab-directory>
   ```
3. Inicia el laboratorio utilizando Docker Compose:
   ```bash
   docker-compose up -d
   ```

Accede al terminal o interfaz web del laboratorio según sea necesario.

## Requisitos

- Docker
- Docker Compose

## Personalización

Puedes modificar los archivos Docker Compose y las plantillas según tus necesidades. Cada laboratorio está diseñado para ser fácilmente configurable.

## Contribuir
Siéntete libre de hacer un fork de este repositorio y enviar pull requests con mejoras o nuevos laboratorios.

## Licencia
Este proyecto está licenciado bajo la Licencia MIT. Consulta el archivo [LICENSE](LICENSE) para más detalles.

___

<a href="https://donate.stripe.com/7sI29z9js2draModQR">
    <img src="https://github.com/and0x00/and0x00/raw/main/buy_me_a_coffee.gif" alt="Buy Me A Coffee" width="150" />
</a>
