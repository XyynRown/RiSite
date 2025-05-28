const navbar = document.getElementById("navbar"); // navbar pertama
const navbarSecondary = document.getElementById("navbar-secondary"); // navbar kedua
const mainContent = document.getElementById("main-content"); // konten utama
let lastScrollTop = 0;

window.addEventListener("scroll", function () {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop === 0) {
        // posisi awal, semua navbar tampil
        navbar.style.top = "0";
        navbarSecondary.style.top = "56px";
        mainContent.style.paddingTop = "112px";
    } else if (scrollTop > lastScrollTop) {
        // scroll ke bawah
        navbar.style.top = "-80px"; // hilangkan navbar pertama
        navbarSecondary.style.top = "0"; // naikkan navbar kedua
        mainContent.style.paddingTop = "56px"; // hanya navbar kedua yang terlihat
    } else {
        // scroll ke atas
        navbar.style.top = "0"; // tampilkan navbar pertama
        navbarSecondary.style.top = "56px"; // turun lagi navbar kedua
        mainContent.style.paddingTop = "112px"; // sesuaikan ruangnya
    }

    lastScrollTop = scrollTop;
});
