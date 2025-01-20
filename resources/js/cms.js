const openSidebar = document.querySelector("#openSidebar");
const sidebar = document.querySelector("#sidebar");
const bgSidebar = document.querySelector("#bgSidebar");

openSidebar.addEventListener("click", () => {
    document.body.classList.add("overflow-hidden");
    sidebar.classList.replace("-translate-x-full", "translate-x-0");
    bgSidebar.classList.replace("invisible", "visible");
    bgSidebar.classList.replace("opacity-0", "opacity-100");
});

bgSidebar.addEventListener("click", (event) => {
    document.body.classList.remove("overflow-hidden");
    sidebar.classList.replace("translate-x-0", "-translate-x-full");
    bgSidebar.classList.replace("visible", "invisible");
    bgSidebar.classList.replace("opacity-100", "opacity-0");
});

function handleScreenWidthChange() {
    if (window.innerWidth > 1024) {
        document.body.classList.remove("overflow-hidden");
        sidebar.classList.replace("translate-x-0", "-translate-x-full");
        bgSidebar.classList.replace("visible", "invisible");
        bgSidebar.classList.replace("opacity-100", "opacity-0");
    }
}

window.addEventListener("resize", handleScreenWidthChange);

handleScreenWidthChange();

// Mengambil semua tombol "Delete" dan popup delete
const btnDeleteList = document.querySelectorAll("[id^='btnDelete-']");
const popupDeleteList = document.querySelectorAll("[id^='popup-delete-']");

// Menambahkan event listener untuk setiap tombol "Delete"
btnDeleteList.forEach((btnDelete, index) => {
    btnDelete.addEventListener("click", () => {
        // Menampilkan popup delete yang sesuai
        popupDeleteList[index].classList.replace("hidden", "flex");
    });

    // Menambahkan event listener untuk tombol "Cancel" pada setiap popup delete
    const btnCancelDelete =
        popupDeleteList[index].querySelector(".cancelDelete");
    btnCancelDelete.addEventListener("click", () => {
        // Menyembunyikan popup delete saat tombol "Cancel" ditekan
        popupDeleteList[index].classList.replace("flex", "hidden");
    });
});

const btnAdd = document.querySelector("#btn-add");
const popupAdd = document.querySelector("#popup-add");
const cancelAdd = document.querySelector("#cancel-add");

btnAdd.addEventListener("click", () => {
    popupAdd.classList.replace("hidden", "flex");
});
cancelAdd.addEventListener("click", () => {
    popupAdd.classList.replace("flex", "hidden");
});

const btnEditList = document.querySelectorAll("[id^='btnEdit-']");
const popupEditList = document.querySelectorAll("[id^='popup-edit-']");

// Menambahkan event listener untuk setiap tombol "Edit"
btnEditList.forEach((btnEdit, index) => {
    btnEdit.addEventListener("click", () => {
        // Menampilkan popup Edit yang sesuai
        popupEditList[index].classList.replace("hidden", "flex");
    });

    // Menambahkan event listener untuk tombol "Cancel" pada setiap popup Edit
    const btnCancelEdit = popupEditList[index].querySelector("#cancel-edit");
    btnCancelEdit.addEventListener("click", () => {
        // Menyembunyikan popup Edit saat tombol "Cancel" ditekan
        popupEditList[index].classList.replace("flex", "hidden");
    });
});
