

document.addEventListener('DOMContentLoaded', function() {
  var likeButton = document.getElementById('like-button');
  var likeCount = document.getElementById('like-count');

  // Variable para almacenar el conteo
  var count = 0;

  // Función para manejar el evento de clic en el botón
  likeButton.addEventListener('click', function() {
    if (likeButton.classList.contains('liked')) {
      // Restar si ya está seleccionado
      count--;
    } else {
      // Sumar si no está seleccionado
      count++;
    }

    // Actualizar el conteo y el estado del botón
    likeCount.textContent = count;
    likeButton.classList.toggle('liked');
  });
});
