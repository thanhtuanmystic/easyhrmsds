$(document).ready(function () {
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    console.log(scroll);
    if (scroll >= 300) {
      $(".sticky-menu").slideDown();
      $(".sticky-li").removeClass("orangered");
      $(".sticky-premium").removeClass("orangered");
      $(".sticky-hsns").addClass("orangered");
      $(".sticky-pre-hsns").addClass("orangered");
      $(".seperate_part").css("display", "block");
      $(".backtotop").css("display", "flex");
    } else {
      $(".sticky-menu").hide();
      $(".seperate_part").css("display", "none");
      $(".backtotop").css("display", "none");
    }
    console.log(scroll);
    // Standard: 2728: bhxh, 4628: thong tin nhan vien, 6728: bao gia
    if (scroll >= 2728) {
      $(".sticky-li").removeClass("orangered");
      $(".sticky-bhxh").addClass("orangered");
    }
    if (scroll >= 4628) {
      $(".sticky-li").removeClass("orangered");
      $(".sticky-ttnv").addClass("orangered");
    }
    if (scroll >= 6728) {
      $(".sticky-li").removeClass("orangered");
      $(".sticky-bg").addClass("orangered");
    }
    // Premium:
    if (scroll >= 2821) {
      $(".sticky-premium").removeClass("orangered");
      $(".sticky-pre-cc").addClass("orangered");
    }
    if (scroll >= 5821) {
      $(".sticky-premium").removeClass("orangered");
      $(".sticky-pre-tl").addClass("orangered");
    }
    if (scroll >= 7221) {
      $(".sticky-premium").removeClass("orangered");
      $(".sticky-pre-bhxh").addClass("orangered");
    }
    if (scroll >= 9121) {
      $(".sticky-premium").removeClass("orangered");
      $(".sticky-pre-ttnv").addClass("orangered");
    }
  });
  $(".backtotop").click(function () {
    // Sử dụng animate để tạo hiệu ứng cuộn mượt
    $("html, body").animate({
      scrollTop: 0,
    });
  });
  $(".click-question").click(function () {
    if (
      $(this).closest(".question-row").find(".the-answer").is(":hidden") == true
    ) {
      $(this).closest(".question-row").find(".the-answer").slideDown("slow");
      $(this)
        .closest(".question-row")
        .find(".openclose img")
        .attr(
          "src",
          "https://easyhrm.vn/wp-content/uploads/2023/08/tabler_caret-down-filled.png"
        );
    } else {
      $(this).closest(".question-row").find(".the-answer").slideUp("slow");
      $(this)
        .closest(".question-row")
        .find(".openclose img")
        .attr(
          "src",
          "https://easyhrm.vn/wp-content/uploads/2023/08/tabler_caret-down-filled-1.png"
        );
    }
  });
  $(".openclose").click(function () {
    if (
      $(this).closest(".question-row").find(".the-answer").is(":hidden") == true
    ) {
      $(this).closest(".question-row").find(".the-answer").slideDown("slow");
      $(this)
        .closest(".question-row")
        .find(".openclose img")
        .attr(
          "src",
          "https://easyhrm.vn/wp-content/uploads/2023/08/tabler_caret-down-filled.png"
        );
    } else {
      $(this).closest(".question-row").find(".the-answer").slideUp("slow");
      $(this)
        .closest(".question-row")
        .find(".openclose img")
        .attr(
          "src",
          "https://easyhrm.vn/wp-content/uploads/2023/08/tabler_caret-down-filled-1.png"
        );
    }
  });

  // Customer Stories
  $(".avt-click").click(function () {
    var index2 = $(this).closest(".avt-click").index();
    index2 = index2 - 1;
    $(".customer-box").hide();
    if (index2 == 0 || (index2 == 1) | (index2 == 2)) {
      $(".customer-box:eq( 0 )").css("display", "block");
      $(".customer-box:eq( 1 )").css("display", "block");
      $(".customer-box:eq( 2 )").css("display", "block");
    }
    $(".customer-box:eq( 0 )").css("display", "block");
    $(".customer-box:eq( 1 )").css("display", "block");
    $(".customer-box:eq(" + index2 + ")").css("display", "block");
  });

  // Personal Information
  $(".pi_click-question").click(function () {
    if (
      $(this)
        .closest(".pi_question-row")
        .find(".pi_the-answer")
        .is(":hidden") == true
    ) {
      $(this).closest(".pi_question-row").find(".pi_the-answer").slideDown();
      $(this)
        .closest(".pi_question-row")
        .find(".openclose img")
        .attr(
          "src",
          "https://easyhrm.vn/wp-content/uploads/2023/08/tabler_caret-down-filled.png"
        );
    } else {
      $(this).closest(".pi_question-row").find(".pi_the-answer").slideUp();
      $(this)
        .closest(".pi_question-row")
        .find(".openclose img")
        .attr(
          "src",
          "https://easyhrm.vn/wp-content/uploads/2023/08/tabler_caret-down-filled-1.png"
        );
    }
  });
  $(".openclose").click(function () {
    if (
      $(this)
        .closest(".pi_question-row")
        .find(".pi_the-answer")
        .is(":hidden") == true
    ) {
      $(this)
        .closest(".pi_question-row")
        .find(".pi_the-answer")
        .slideDown("slow");
      $(this)
        .closest(".pi_question-row")
        .find(".openclose img")
        .attr(
          "src",
          "https://easyhrm.vn/wp-content/uploads/2023/08/tabler_caret-down-filled.png"
        );
    } else {
      $(this)
        .closest(".pi_question-row")
        .find(".pi_the-answer")
        .slideUp("slow");
      $(this)
        .closest(".pi_question-row")
        .find(".openclose img")
        .attr(
          "src",
          "https://easyhrm.vn/wp-content/uploads/2023/08/tabler_caret-down-filled-1.png"
        );
    }
  });

  // easyhrm standard
});
$(document).ready(function() {
  // Bắt sự kiện click cho các liên kết có lớp "scroll-link"
  $('.scroll-link').on('click', function(e) {
      e.preventDefault();
      // Lấy vị trí của phần tử cần scroll đến
      const targetId = $(this).attr('href').substring(1);
      const targetElement = $('#' + targetId);
      // Scroll đến vị trí của phần tử
      $('html, body').animate({
          scrollTop: targetElement.offset().top - $('header').outerHeight() - 150
      }, 500); 
  });
});

function scrollMouse(classFirst, nameClassAdd) {
  $(classFirst).addClass("hidden");
  $(classFirst).each(function () {
    var spaceTop = $(this).offset().top;
    var chieucao = $(this).height();
    var spaceBottom = $(document).height() - $(this).offset().top - chieucao;
    var scrollBottom =
      $(document).height() + $(window).height() - $(window).scrollTop();
    var scrollSpaceTop = $(window).scrollTop();
    if (
      spaceBottom < scrollBottom - $(window).height() &&
      spaceTop < scrollSpaceTop + $(window).height()
    ) {
      $(this).addClass(nameClassAdd);
    } else {
      $(this).removeClass(nameClassAdd);
    }
  });
}
function scrollMouse1(classFirst, nameClassAdd) {
  $(classFirst).addClass("hidden");
  $(classFirst).each(function () {
    var spaceTop = $(this).offset().top;
    var chieucao = $(this).height();
    var spaceBottom = $(document).height() - $(this).offset().top - chieucao;
    var scrollBottom =
      $(document).height() + $(window).height() - $(window).scrollTop();
    var scrollSpaceTop = $(window).scrollTop();
    if (
      spaceBottom < scrollBottom - $(window).height() &&
      spaceTop < scrollSpaceTop + $(window).height()
    ) {
      $(this).addClass(nameClassAdd);
    }
  });
}
var width = $(window).width();

if (width > 767) {
  $(window).scroll(function () {
    scrollMouse1(".featured-box", "slide-right");
    scrollMouse1(".animation_img_right", "slide-right");
    scrollMouse1(".animation_img_left", "slide-left");
    scrollMouse1(".animation_slide_bottom_to_show", "slide-bottom-to-show");
  });
}

function animateValue(obj, start, end, duration) {
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    obj.innerHTML = Math.floor(progress * (end - start) + start);
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
}

const count2000 = document.getElementById("count2000");
const count10 = document.getElementById("count10");
const count200000 = document.getElementById("count200000");
const count50 = document.getElementById("count50");
animateValue(count2000, 0, 2000, 2000);
animateValue(count10, 0, 10, 2000);
animateValue(count200000, 0, 200000, 2000);
animateValue(count50, 0, 50, 2000);

$(document).ready(function () {
  setTimeout(function () {
    $(count2000).html("2.000");
    $(count200000).html("200.000");
  }, 2000);
});

// Send Mail

$(document).ready(function () {
  //khai báo nút submit form
  var submit = $("#hrm_form_register").find("button[type='submit']");

  //khi thực hiện kích vào nút submit
  submit.click(function () {
    //khai báo các biến
    var hoten = $("input[name='hoten']").val();
    var email = $("input[name='email']").val();
    var phonenumber = $("input[name='phonenumber']").val();
    var taxcode = $("input[name='taxcode']").val();
    //
    if (hoten == "") {
      alert("Vui lòng nhập tên");
      return false;
    }
    if (email == "") {
      alert("Vui lòng nhập mã số thuế");
      return false;
    }

    if (phonenumber == "") {
      alert("Vui lòng nhập điện thoại");
      return false;
    }
    if (taxcode == "") {
      alert("Vui lòng nhập mã số thuế");
      return false;
    }
    if (phonenumber.length < 10) {
      alert("Vui lòng số điện thoại chính xác!");
      return false;
    }
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email) == false) {
      alert("Địa chỉ Email không hợp lệ, hãy nhập lại");
      return false;
    }

    // $("#formdkdt img").css("display", "block");

    var data = $("form#hrm_form_register").serialize();

    $.ajax({
      type: "POST",
      url: "../wp-content/themes/NewEasyHRM/sendmail.php",
      data: data,
      success: function (data) {
        console.log(data);
        $("#hrm_form_register").html(data);
        // $("#formdkdt img").css("display", "none");
      },
    });
    return false;
  });
});
$(document).ready(function () {
  //khai báo nút submit form
  var submitt = $("#esi-form-register").find("button[type='submit']");

  //khi thực hiện kích vào nút submit
  submitt.click(function () {
    //khai báo các biến
    var hoten = $("input[name='hoten']").val();
    var email = $("input[name='email']").val();
    var phonenumber = $("input[name='phonenumber']").val();
    var taxcode = $("input[name='taxcode']").val();
    //
    if (hoten == "") {
      alert("Vui lòng nhập tên");
      return false;
    }
    if (email == "") {
      alert("Vui lòng nhập mã số thuế");
      return false;
    }

    if (phonenumber == "") {
      alert("Vui lòng nhập điện thoại");
      return false;
    }
    if (taxcode == "") {
      alert("Vui lòng nhập mã số thuế");
      return false;
    }
    if (phonenumber.length < 10) {
      alert("Vui lòng số điện thoại chính xác!");
      return false;
    }
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email) == false) {
      alert("Địa chỉ Email không hợp lệ, hãy nhập lại");
      return false;
    }

    // $("#formdkdt img").css("display", "block");

    var data = $("form#esi-form-register").serialize();

    $.ajax({
      type: "POST",
      url: "../wp-content/themes/NewEasyHRM/sendmail.php",
      data: data,
      success: function (data) {
        console.log(data);
        $("#esi-form-register").html(data);
      },
    });
    return false;    
  });
});
// search-box open close js code
let navbar = document.querySelector(".navbar");
// let searchBox = document.querySelector(".search-box .bx-search");
// let searchBoxCancel = document.querySelector(".search-box .bx-x");

// sidebar open close js code
let navLinks = document.querySelector(".nav-links");
let menuOpenBtn = document.querySelector(".navbar .bx-menu");
let menuCloseBtn = document.querySelector(".nav-links .bx-x");
menuOpenBtn.onclick = function () {
  navLinks.style.left = "0";
};
menuCloseBtn.onclick = function () {
  navLinks.style.left = "-100%";
};


// sidebar submenu open close js code
let htmlcssArrow = document.querySelector(".htmlcss-arrow");
htmlcssArrow.onclick = function () {
  navLinks.classList.toggle("show1");
};
let moreArrow = document.querySelector(".more-arrow");
moreArrow.onclick = function () {
  navLinks.classList.toggle("show2");
};
let jsArrow = document.querySelector(".js-arrow");
jsArrow.onclick = function () {
  navLinks.classList.toggle("show3");
};
