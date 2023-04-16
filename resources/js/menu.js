document.addEventListener('DOMContentLoaded', () => {
    const menuWrapper = document.querySelector(".menu-wrapper");

    document.querySelector('.menu-toggler').addEventListener('click', () => {

        if (menuWrapper.style.display === "block") {
            menuWrapper.style.display = "none";
            document.body.style.overflow = "";
        } else {
            menuWrapper.style.display = "block";
            document.body.style.overflow = "hidden";
        }
    });

    document.addEventListener("click", function (event) {
        const target = event.target;

        if (!target.closest(".menu") && !target.closest(".menu-toggler")) {
            menuWrapper.style.display = "none";
            document.body.style.overflow = "";
        }
    });
});