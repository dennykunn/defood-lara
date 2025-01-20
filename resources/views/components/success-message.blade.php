@if ($message = Session::get('success'))
    <div id="successMessage"
        class="fixed top-2 right-2 bg-green-500 text-white rounded-xl p-4 w-fit flex justify-between items-center gap-10 z-[100]">
        {{ $message }}
        <button id="closeMessage" class="text-white">
            <i class="icon-close"></i>
        </button>
    </div>
@endif

<script>
    const successMessage = document.getElementById("successMessage");
    const closeMessage = document.getElementById("closeMessage");

    closeMessage.addEventListener("click", () => {
        successMessage.classList.add("hidden");
    });
    setTimeout(() => {
        successMessage.classList.add("hidden");
    }, 5000);
</script>
