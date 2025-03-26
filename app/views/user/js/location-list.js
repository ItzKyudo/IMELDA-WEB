$(document).ready(function() {
    let barangaylist = ["Balugo", "Balungisan", "Baluyan", "Cana-an", "Dumpoc", 
        "Gandiangan", "Israel", "La Victoria", "Little Baguio", "Lower Baluran",
        "Lumbog", "Lumpanac", "Mali Little Baguio", "Poblacion (Sta. Fe)",
        "Pulawan (Mt. View)", "San Jose", "Santa Barbara", "Upper Baluran"];

    $.each(barangaylist, function(index, barangay) {
        $("#addr-brgy").append(`<option value="${barangay}">${barangay}</option>`);
    });
});
