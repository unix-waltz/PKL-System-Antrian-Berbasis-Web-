    // Function to toggle the sidebar
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('active');
    }
    function printPage() {
        window.print();
    }

    // Mengaitkan fungsi ke tombol "Print"
    document.getElementById("printButton").addEventListener("click", printPage);

    function printPage() {
        window.print();
    }

    // Mengaitkan fungsi ke tombol "Print"
    document.getElementById("printButton").addEventListener("click", function () {
        printPage();
    });

    // Fungsi untuk mencetak halaman secara otomatis setelah halaman dimuat
  
