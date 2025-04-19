document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.getElementById('logo-sidebar');
    const toggleButton = document.querySelector('[data-drawer-toggle]');

    // Fungsi untuk membuka/tutup sidebar
    function toggleSidebar() {
        sidebar.classList.toggle('-translate-x-full');
    }

    // Ketika tombol toggle diklik
    toggleButton.addEventListener('click', function (e) {
        e.stopPropagation(); // Cegah bubbling supaya sidebar tidak langsung tertutup
        toggleSidebar();
    });

    // Menutup sidebar jika klik di luar sidebar dan tombol toggle
    document.addEventListener('click', function (e) {
        if (!sidebar.contains(e.target) && !toggleButton.contains(e.target)) {
            if (!sidebar.classList.contains('-translate-x-full')) {
                sidebar.classList.add('-translate-x-full');
            }
        }
    });
});