// Preload
const preload = document.querySelector(".preload");

window.addEventListener("load", function () {
    setTimeout(() => {
        window.scrollTo(0, 0);
        preload.classList.add("hidden");
        this.document.body.classList.replace(
            "overflow-hidden",
            "overflow-x-hidden"
        );
    }, 1200);
});

// NavLink Active or Not
let path = window.location.pathname;
if (path != "/") {
    if (path.startsWith("/")) {
        path = path.substring(1);
    }
    if (path.endsWith("/")) {
        path = path.slice(0, -1);
    }
}
const navLinks = document.querySelectorAll(".nav-link");
const navLinksFooter = document.querySelectorAll(".nav-link-footer");
const navLinksdesktop = document.querySelectorAll(".nav-link-desktop");

navLinksdesktop.forEach((navLink) => {
    const dataLink = navLink.getAttribute("data-link");
    if (path == dataLink) {
        navLink.classList.add(
            "text-yellow-dark",
            "hover:text-yellow-dark",
            "bg-transparent"
        );
    }
});
navLinks.forEach((navLink) => {
    const dataLink = navLink.getAttribute("data-link");
    if (path == dataLink) {
        navLink.classList.add("text-yellow-dark", "bg-white");
    }
});
navLinksFooter.forEach((navLink) => {
    const dataLink = navLink.getAttribute("data-link");
    if (path == dataLink) {
        navLink.classList.replace("text-white", "text-yellow-dark");
    }
});

// Sidebar CMS
// const sidebarLinks = document.querySelectorAll(".sidebar-links");
// sidebarLinks.forEach((sidebarLink) => {
//     const dataLink = sidebarLink.getAttribute("data-link");
//     if (path == dataLink) {
//         sidebarLink.classList.replace("text-white", "text-yellow-dark");
//     }
// });

// Mobile Menu
const openMenu = document.getElementById("openMenu");
const closeMenu = document.getElementById("closeMenu");
const menuMobile = document.querySelector(".menuMobile");
const menuMobileItem = document.querySelector(".menuMobileItem");

openMenu.addEventListener("click", () => {
    document.body.style.overflow = "hidden";
    menuMobile.classList.replace("-translate-x-full", "translate-x-0");
    menuMobileItem.classList.replace("-translate-x-full", "translate-x-0");
    setTimeout(() => {
        menuMobile.classList.add("delay-300");
        menuMobileItem.classList.remove("delay-300");
    }, 500);
});
closeMenu.addEventListener("click", () => {
    menuMobile.classList.replace("translate-x-0", "-translate-x-full");
    menuMobileItem.classList.replace("translate-x-0", "-translate-x-full");
    setTimeout(() => {
        menuMobile.classList.remove("delay-300");
        menuMobileItem.classList.add("delay-300");
    }, 500);
    document.body.style.overflow = "unset";
});

// Navbar Sticky
const navbar = document.querySelector("#navbar");

window.addEventListener("scroll", () => {
    if (document.documentElement.scrollTop > 150) {
        navbar.classList.replace("-top-20", "top-0");
        navbar.classList.add(
            "shadow-md",
            "border-b-[5px]",
            "border-yellow-dark"
        );
    } else {
        navbar.classList.replace("top-0", "-top-20");
        navbar.classList.remove(
            "shadow-md",
            "border-b-[5px]",
            "border-yellow-dark"
        );
    }
});

// Button Back To Top
const btnBackToTop = document.querySelector("#backToTop");
window.addEventListener("scroll", () => {
    if (document.documentElement.scrollTop > 500) {
        btnBackToTop.classList.replace("-bottom-10", "bottom-4");
    } else {
        btnBackToTop.classList.replace("bottom-4", "-bottom-10");
    }

    if (
        document.documentElement.scrollTop >=
        document.documentElement.scrollHeight -
            document.documentElement.clientHeight
    ) {
        btnBackToTop.classList.replace("bottom-4", "bottom-20");
    } else {
        btnBackToTop.classList.replace("bottom-20", "bottom-4");
    }
});

// Search
// const openSearch = document.getElementById("open-search");
// const closeSearch = document.getElementById("close-search");
// const searchBox = document.getElementById("search-box");

// openSearch.addEventListener("click", () => {
//     searchBox.classList.replace("hidden", "block");
//     document.body.classList.replace("overflow-x-hidden", "overflow-hidden");
// });
// closeSearch.addEventListener("click", () => {
//     searchBox.classList.replace("block", "hidden");
//     document.body.classList.replace("overflow-hidden", "overflow-x-hidden");
// });

// Category Filter
const categoryFilter = document.querySelector("#category-filter");
const categoryFilterItem = document.querySelector("#category-filter-item");
const openCategoryFilter = document.querySelector("#open-category-filter");
const closeCategoryFilter = document.querySelector("#close-category-filter");

openCategoryFilter.addEventListener("click", () => {
    categoryFilter.classList.replace("invisible", "visible");
    categoryFilter.classList.replace("opacity-0", "opacity-100");
    categoryFilterItem.classList.replace("-translate-x-full", "translate-x-0");
    document.body.style.overflow = "hidden";
});
closeCategoryFilter.addEventListener("click", () => {
    categoryFilter.classList.replace("visible", "invisible");
    categoryFilter.classList.replace("opacity-100", "opacity-0");
    categoryFilterItem.classList.replace("translate-x-0", "-translate-x-full");
    document.body.style.overflow = "unset";
});
