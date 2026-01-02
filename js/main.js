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
