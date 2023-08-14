// assets/script.js
document.addEventListener("DOMContentLoaded", function () {
  const addToCartButtons = document.querySelectorAll(".add-to-cart");

  addToCartButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const productId = button.getAttribute("data-id");
      alert(`Added product ${productId} to cart!`);
    });
  });
});
