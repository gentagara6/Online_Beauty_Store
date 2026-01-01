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

