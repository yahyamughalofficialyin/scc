<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searchable Icon Dropdown</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="form-group">
        <label for="iconDropdown">Icon</label>
        <select name="icon" id="iconDropdown" class="form-control"></select>
    </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>
<script>
$(document).ready(function () {
    const iconDropdown = $('#iconDropdown');

    // Fetch Bootstrap Icons List
    fetch('https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.json')
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json(); // Parse JSON response
        })
        .then(data => {
            if (typeof data === 'object') {
                // Loop through the object keys and create dropdown options
                Object.keys(data).forEach(icon => {
                    iconDropdown.append(
                        `<option value="${icon}" data-icon="${icon}"><i class="bi bi-${icon}"></i> ${icon}</option>`
                    );
                });

                // Initialize Select2 with custom templates
                iconDropdown.select2({
                    placeholder: 'Select an icon',
                    templateResult: formatIcon, // Format dropdown options
                    templateSelection: formatIcon // Format selected item
                });
            } else {
                console.error('Expected an object, but got:', data);
            }
        })
        .catch(error => {
            console.error('Error fetching icons:', error);
        });

    // Function to format dropdown options with icons
    function formatIcon(icon) {
        if (!icon.id) {
            return icon.text; // Return text for placeholders
        }
        return $(`<span><i class="bi bi-${icon.element.dataset.icon}"></i> ${icon.text}</span>`);
    }
});
</script>
</body>
</html>
