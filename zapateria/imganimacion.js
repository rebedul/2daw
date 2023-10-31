        function ampliarImagen(imagen) {
            var imagenAmpliada = document.getElementById('imagen-ampliada');
            imagenAmpliada.src = imagen.src;
            document.querySelector('.imagen-ampliada').style.display = 'flex';
        }

        // Función para cerrar la imagen ampliada
        function cerrarImagen() {
            document.querySelector('.imagen-ampliada').style.display = 'none';
        }
