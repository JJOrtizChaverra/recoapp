export const fadeInScroll = function () {

    // Selecciona todos los elementos con la clase 'fade-in'
    const fadeIns = document.querySelectorAll('.fade-in');

    // Función para aplicar el efecto de desvanecimiento
    function fadeElements() {
        // Itera sobre cada elemento 'fade-in'
        fadeIns.forEach(function (fadeIn) {
            // Obtiene la posición del elemento respecto a la parte superior del viewport
            const fadeInPosition = fadeIn.getBoundingClientRect().top;
            // Calcula la posición del centro del viewport
            const screenCenter = window.innerHeight / 4;
            // Calcula la distancia del elemento al centro del viewport
            const distanceFromCenter = Math.abs(fadeInPosition - screenCenter);
            // Establece la distancia máxima desde el centro del viewport para la opacidad máxima
            const maxDistance = screenCenter * 5;

            // Si la distancia del elemento al centro es menor que la distancia máxima
            if (distanceFromCenter < maxDistance) {
                // Calcula la opacidad basada en la distancia desde el centro
                const opacity = 1 - distanceFromCenter / maxDistance;
                // Aplica la opacidad al elemento
                fadeIn.style.opacity = opacity;
            } else {
                // Si la distancia excede la distancia máxima, establece la opacidad en 0
                fadeIn.style.opacity = 0;
            }
        });
    }

    // Agrega un evento de scroll para llamar a la función de desvanecimiento
    window.addEventListener('scroll', fadeElements);

    // Aplica el efecto de desvanecimiento inicialmente
    fadeElements();
};


export const sidebarMenu = function () {
    const hamBurger = document.querySelector(".toggle-btn");
    const main = document.getElementsByTagName("main")[0];
    const footer = document.getElementsByTagName("footer")[0];

    console.log(main);

    hamBurger.addEventListener("click", function () {
        document.querySelector("#sidebar").classList.toggle("expand");

        main.classList.toggle("main-expand");
        footer.classList.toggle("main-expand");
    });
}