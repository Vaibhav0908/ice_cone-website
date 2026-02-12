// contact form submission message
function submitform() {
    a = document.getElementById("firstname").value;
    b = document.getElementById("lastname").value;
    c = document.getElementById("mail").value;
    if (a != "" && b != "" && c != "") {
        alert(
            "Cantact Form Submitted...Our Team will Reach Out Through Your Given Mail ID",
        );
    }
}

// Forgot password form reset message
function set_pass() {
    a = document.getElementById("pass").value;
    b = document.getElementById("conf_pass").value;

    if (a == b) {
        alert("Your Password Reset Successfuly...");
    }
}

// function mode(){
//     document.getElementById('fa_sun').classList.toggle('fa-moon');
//     document.getElementById('boddy').classList.toggle("dark");
// }

//  dark mode light mode changes

// Toggle theme
document.getElementById("fa_mode").addEventListener("click", function () {
    document.body.classList.toggle("dark-mode");
    document.getElementById("fa_mode").classList.toggle("fa-toggle-on");
    document.getElementById("lightmode").classList.toggle("hidemode");
    document.getElementById("darkmode").classList.toggle("hidemode");

    // Save preference
    if (document.body.classList.contains("dark-mode")) {
        localStorage.setItem("theme", "dark-mode");
        localStorage.setItem("mode", "fa-toggle-on");
    } else {
        localStorage.setItem("theme", "light");
        localStorage.setItem("mode", "fa-toggle-off");
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const theme = localStorage.getItem("theme");
    const mode = localStorage.getItem("mode");
    if (theme === "dark-mode") {
        document.body.classList.add("dark-mode");
    }

    if (mode === "fa-toggle-off") {
        document.getElementById("fa_mode").classList.add("fa-toggle-off");
        document.getElementById("lightmode").classList.remove("hidemode");
        document.getElementById("darkmode").classList.add("hidemode");
    } else {
        document.getElementById("fa_mode").classList.add("fa-toggle-on");
        document.getElementById("lightmode").classList.add("hidemode");
        document.getElementById("darkmode").classList.remove("hidemode");
    }
});

// shows remaining all items when i clicked on view all items button

document.getElementById("viewBtn").addEventListener("click", function () {
    document.querySelectorAll(".extra-category").forEach(function (items) {
        items.classList.toggle("d-none");
    });

    this.innerText =
        this.innerText === "View All Products..."
            ? "Show Less Products..."
            : "View All Products...";
});

// gives alert when payment is done
document.getElementById("buy_product").addEventListener("click", function () {
    amount = document.getElementById("amount").value;
    if (amount != "") {
        alert("Payment Successfull.....");
    }
});



let cartCount = 0;
const cartBadge = document.getElementById("cart-count");
document.querySelectorAll(".add-to-cart").forEach(button => {
    button.addEventListener("click", function () {

        // Increase count
        cartCount++;

        // Update badge
        cartBadge.innerText = cartCount;

    });
});