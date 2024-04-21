const cloud = document.getElementById("cloud");
const barraLateral = document.querySelector(".barra-lateral");
const spans = document.querySelectorAll("span");

cloud.addEventListener("click", () => {
    barraLateral.classList.toggle("mini-barra-lateral");
    //Aqui solo era para uno pero lo imprementaremos para mas de uno por eso usaremos forEach
    //span.classList.toggle("oculto"); /*Esto hace que se le quite o ponga la clase asignada */
    spans.forEach((span) => {
        span.classList.toggle("oculto");
    });
});
