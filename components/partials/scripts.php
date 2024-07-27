<!-- Tailwind.css Core Script -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Tailwind.css Default Config -->
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    gray: '#757575',
                    navy: '#1B2E57',
                    red: '#E95144',
                    yellow: '#FFBB49',
                    grayRating: '#D9D9D9',
                    yellowRating: '#FACC15',
                    info: '#0D6eFD',
                    success: '#198754',
                    danger: '#DC3545',
                    warning: '#FFC107',
                }
            }
        }
    }

    function toggleDropdown(id, arrowId) {
        var content = document.getElementById(id);
        var arrow = document.getElementById(arrowId);

        if (content.style.display === "block") {
            content.style.display = "none";
            arrow.classList.add('-rotate-90');
            arrow.classList.remove('rotate-0');
        } else {
            content.style.display = "block";
            arrow.classList.add('rotate-0');
            arrow.classList.remove('-rotate-90');
        }
    }
</script>

<!-- Custom JS -->
<script src="./assets/js/scripts.js"></script>