// function filterProduct(subcategory) {
//     var productCards = document.querySelectorAll('.product-card');

//     // Show all products by default
//     if (subcategory === 'all') {
//         productCards.forEach(function(card) {
//             card.style.display = 'block';
//         });
//     } else {
//         // Hide products that don't match the selected subcategory
//         productCards.forEach(function(card) {
//             var dataSubcategory = card.getAttribute('data-subcategory');
//             if (dataSubcategory !== subcategory) {
//                 card.style.display = 'none';
//             } else {
//                 card.style.display = 'block';
//             }
//         });
//     }
// }

function filterProduct(subcategory) {
    var productCards = document.querySelectorAll('.product-card');
    var categoryButtons = document.querySelectorAll('.category-btn');

    // Remove 'active' class from all buttons
    categoryButtons.forEach(function(button) {
        button.classList.remove('active');
    });

    // Show all products by default
    if (subcategory === 'all') {
        productCards.forEach(function(card) {
            card.style.display = 'block';
        });
    } else {
        // Hide products that don't match the selected subcategory
        productCards.forEach(function(card) {
            var dataSubcategory = card.getAttribute('data-subcategory');
            if (dataSubcategory !== subcategory) {
                card.style.display = 'none';
            } else {
                card.style.display = 'block';
            }
        });
    }

    // Add 'active' class to the clicked button
    var activeButton = document.querySelector('.category-btn[data-subcategory="' + subcategory + '"]');
    activeButton.classList.add('active');
}
