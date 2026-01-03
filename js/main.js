$(".add-to-cart").click(function (e) {
  e.stopPropagation(); // stops product redirect

  const alertBox = $("#alert");
  alertBox.text("Added to cart ✓");
  alertBox.addClass("show");

  setTimeout(() => {
    alertBox.removeClass("show");
  }, 2500);
});


const year = new Date().getFullYear();
document.getElementById("year").innerText = "© " + year + " Glow Beauty";


$(document).ready(function () {

  $(".product").hover(
    function () {
      $(this).fadeTo(200, 0.85);
    },
    function () {
      $(this).fadeTo(200, 1);
    }
  );

  $("#page-header h4")
    .css({
      opacity: 0,
      position: "relative",
      top: "20px"
    })
    .animate(
      {
        opacity: 1,
        top: "0px"
      },
      800
    );

});

$("#page-header p")
  .css({
    opacity: 0,
    position: "relative",
    top: "20px"
  })
  .animate(
    {
      opacity: 1,
      top: "0px"
    },
    800
  );

$(document).ready(function () {

  function revealBlogPosts() {
    $("#blog .blog-box").each(function () {
      const boxTop = $(this).offset().top;
      const windowBottom = $(window).scrollTop() + $(window).height();

      if (windowBottom > boxTop + 100) {
        $(this).addClass("show");
      }
    });
  }

  $(window).on("scroll", revealBlogPosts);
  revealBlogPosts(); 

});

$(".read-more").click(function (e) {
  e.preventDefault();

  const btn = $(this);
  const moreText = btn.prev("p").find(".more-text");

  if (btn.hasClass("open")) {
    moreText.slideUp(300);
    btn.removeClass("open").text("CONTINUE READING");
  } else {
    moreText.slideDown(300);
    btn.addClass("open").text("SHOW LESS");
  }
});

$('#contactForm').on('submit', function(e) {
        const name = $('#name').val().trim();
        const email = $('#email').val().trim();
        const message = $('#message').val().trim();

        if (name === '' || email === '' || message === '') {
            e.preventDefault(); // ndalon dërgimin
            alert('Ploteso te gjitha fushat e detyrueshme!');
        } else if (!validateEmail(email)) {
            e.preventDefault();
            alert('Email i gabuar!');
        }
    });

    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    //a
    const cards = document.querySelectorAll('.cards .card');

// Për secilën kartë, shtojmë eventet për hover
cards.forEach(card => {
    // Kur kalon mausin mbi kartë
    card.addEventListener('mouseenter', () => {
        card.style.backgroundColor = '#d8cfc7'; // ngjyrë e lehtë blu
        card.style.transform = 'scale(1.05)'; // pak enlarge efekt
        card.style.transition = 'all 0.3s ease'; // tranzicion i butë
    });

    // Kur largohet mausi
    card.addEventListener('mouseleave', () => {
        card.style.backgroundColor = ''; // rikthen ngjyrën origjinale
        card.style.transform = 'scale(1)'; // rikthehet madhësia normale
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".add-to-cart");
    const cartIcon = document.querySelector(".bx-shopping-bag");

    // badge
    const badge = document.createElement("span");
    badge.className = "cart-count";
    cartIcon.parentElement.style.position = "relative";
    cartIcon.parentElement.appendChild(badge);

    function normalize(name) {
        return name.replace(/\s+/g, "_").toLowerCase();
    }

    function updateBadge() {
        let total = 0;
        for (let i = 0; i < localStorage.length; i++) {
            const key = localStorage.key(i);
            if (key.startsWith("cart_")) {
                total += Number(localStorage.getItem(key));
            }
        }
        badge.textContent = total;
        badge.style.display = total > 0 ? "inline-block" : "none";
    }

    buttons.forEach(btn => {
        btn.addEventListener("click", () => {
            const product = btn.closest(".product");
            const name = product.querySelector("h3").innerText;
            const key = "cart_" + normalize(name);

            let qty = localStorage.getItem(key);
            qty = qty ? Number(qty) + 1 : 1;

            localStorage.setItem(key, qty);
            updateBadge();
        });
    });

    updateBadge();
});

