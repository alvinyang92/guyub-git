console.log("js work")






// $('li').each(function(){
//   if($(this).attr("style") == "list-style-type: none;"){
//       $(this).addClass("indent");
//   }
// });

//expand text
const Utils = {

  addClass: function (element, theClass) {
    element.classList.add(theClass);
  },

  removeClass: function (element, theClass) {
    element.classList.remove(theClass);
  },

  showMore: function (element, excerpt) {
    element.addEventListener("click", event => {
      const linkText = event.target.textContent.toLowerCase();
      event.preventDefault();

      console.log(this);
      if (linkText == "show more") {
        element.textContent = "Show less";
        this.removeClass(excerpt, "excerpt-hidden");
        this.addClass(excerpt, "excerpt-visible");
      } else {
        element.textContent = "Show more";
        this.removeClass(excerpt, "excerpt-visible");
        this.addClass(excerpt, "excerpt-hidden");
      }
    });
  }
};

const ExcerptWidget = {
  showMore: function (showMoreLinksTarget, excerptTarget) {
    const showMoreLinks = document.querySelectorAll(showMoreLinksTarget);

    showMoreLinks.forEach(function (link) {
      const excerpt = link.previousElementSibling.querySelector(excerptTarget);
      Utils.showMore(link, excerpt);
    });
  }
};
ExcerptWidget.showMore('.js-show-more', '.js-excerpt');

// owl carousel
$(document).ready(function () {
  var owl = $('.owl-1');
  var owlone = $('.owl-2');
  var owlonetwo = $('.owl-2-1');
  var owltwo = $('.owl-3');
  var owlthree = $('.owl-4');
  var owlfour = $('.owl-5');
  var owlfive = $('.owl-6');
  var owlsix = $('.owl-7');
  var owlseven = $('.owl-8');
  var owleight = $('.owl-9');



  owl.owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    items: 4,

    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        margin: 20,
        autoWidth: true,
        nav: false
        // mergeFit:true
      },
      600: {
        items: 2,
        margin: 30,
        autoWidth: true,
        nav: false
      },
      900: {
        items: 2,
        margin: 40,
        autoWidth: true,
        nav: false
      },
      1025: {
        items: 4,
        nav: false,

      },

    }
    
  });

  owlone.owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: true,
    items: 1,
  });

  owlonetwo.owlCarousel({
    loop: false,
    margin: 0,
    nav: false,
    dots: false,
    items: 1,
    onChanged: function (event) {
      if (!event.namespace) {
        return;
      }
      var slides = event.relatedTarget;
      $('.slider-counter').text(slides.relative(slides.current()) + 1 + '/' + slides.items().length);
      console.log(slides.relative((slides.current())+1) +'/'+ (slides.items().length));
    }
  });

  owltwo.owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    lazyLoad: true,
    // items: 1,

    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      360: {
        items: 1,
        nav: false
      },
      600: {
        items: 2,
        nav: false
      },
      1025: {
        items: 3,
        nav: false,

      },
      1360: {
        items: 4,
        nav: false,

      },
    }
  });

  owlthree.owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    // items: 1,

    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      700: {
        items: 2,
        nav: false
      },
      900: {
        items: 2,
        nav: false
      },
      1025: {
        items: 3,
        nav: false,

      },

    }
  });

  owlfour.owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    items: 1,
  });

  owlfive.owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: true,
    items: 1,
  });

  owlsix.owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,

    // items: 1,

    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        margin: 10,
        autoWidth: false,
        nav: false
        // mergeFit:true
      },
      600: {
        items: 2,
        autoWidth: false,
        nav: false
      },
      900: {
        items: 2,
        nav: false
      },
      1025: {
        items: 3,
        nav: false,

      },

    }
  });

  owlseven.owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,

    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        margin: 10,
        nav: false
        // mergeFit:true
      },
      300: {
        items: 3,
        autoWidth: true,
        nav: false
      },
      750: {
        items: 3,
        autoWidth: true,
        nav: false
      },

      800: {
        items: 6,
        autoWidth: true,
        margin: 10,
      },

    }

  });

  owleight.owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    items: 1
  });


  // Add this code - remove between item width
  // var widthItem = $(".owl-item").width();
  // $(".owl-item .item").css("width", widthItem +1)


  // owl Custom Button hide of only 1
  // if ($('.owl-carousel .item ').length === 1) {
  //   //There is one image
  //   $('.related-next-btn, .related-prev-btn').hide();
  // }


  // owl Custom Button
  $('.slider1-next-btn').click(function () {
    owl.trigger('next.owl.carousel');
  });
  $('.slider1-prev-btn').click(function () {
    owl.trigger('prev.owl.carousel');
  });

  $('.slider2-next-btn').click(function () {
    owlone.trigger('next.owl.carousel');
  });
  $('.slider2-prev-btn').click(function () {
    owlone.trigger('prev.owl.carousel');
  });

  $('.slider2-1-next-btn').click(function () {
    owlonetwo.trigger('next.owl.carousel');
  });
  $('.slider2-1-prev-btn').click(function () {
    owlonetwo.trigger('prev.owl.carousel');
  });

  $('.slider3-next-btn').click(function () {
    owltwo.trigger('next.owl.carousel');
  });
  $('.slider3-prev-btn').click(function () {
    owltwo.trigger('prev.owl.carousel');
  });

  $('.slider4-next-btn').click(function () {
    owlthree.trigger('next.owl.carousel');
  });
  $('.slider4-prev-btn').click(function () {
    owlthree.trigger('prev.owl.carousel');
  });

  $('.slider5-next-btn').click(function () {
    owlfour.trigger('next.owl.carousel');
  });
  $('.slider5-prev-btn').click(function () {
    owlfour.trigger('prev.owl.carousel');
  });

  $('.slider6-next-btn').click(function () {
    owlfive.trigger('next.owl.carousel');
  });
  $('.slider6-prev-btn').click(function () {
    owlfive.trigger('prev.owl.carousel');
  });

  $('.slider7-next-btn').click(function () {
    owlsix.trigger('next.owl.carousel');
  });
  $('.slider7-prev-btn').click(function () {
    owlsix.trigger('prev.owl.carousel');
  });

  $('.slider8-next-btn').click(function () {
    owleight.trigger('next.owl.carousel');
  });
  $('.slider8-prev-btn').click(function () {
    owleight.trigger('prev.owl.carousel');
  });

});

//gallery pop up
$(document).ready(function () {
  //open pup up
  $(".open-white-gallery").click(function () {
    // currentLocation = $(document).scrollTop();
    $(".popup").show();
    $(".content_holder").hide();
    $(".content_holder").addClass("openPopup");
  });

  //close pup up
  $(".close-white-gallery").click(function () {
    // currentLocation = $(document).scrollTop();
    $(".popup").hide();
    $(".content_holder").show();
    $(".content_holder").removeClass("openPopup");
  });

  //close form pup up
  $(".close-form").click(function () {
    // currentLocation = $(document).scrollTop();
    $(".popupform").hide();
 
  });

   //open form pup up
   $(".open-form").click(function () {
    // currentLocation = $(document).scrollTop();
    $(".popupform").show();
    // $(".content_holder_black").show();
  });

  //open pup up
  $(".open-black-gallery").click(function () {
    // currentLocation = $(document).scrollTop();
    $(".popupblack").show();
    $(".content_holder_black").hide();
    $(".content_holder_black").addClass("openPopupblack");
  });

  //close pup up
  $(".close-black-gallery").click(function () {
    // currentLocation = $(document).scrollTop();
    $(".popupblack").hide();
    $(".content_holder_black").show();
    $(".content_holder_black").removeClass("openPopupblack");
  });

  


});

//price range
function range() {

  return {
    minprice: 100,
    maxprice: 7000,
    min: 100,
    max: 7000,
    minthumb: 0,
    maxthumb: 0,

    mintrigger() {
      this.minprice = Math.min(this.minprice, this.maxprice - 500);
      this.minthumb = ((this.minprice - this.min) / (this.max - this.min)) * 100;
    },

    maxtrigger() {
      this.maxprice = Math.max(this.maxprice, this.minprice + 500);
      this.maxthumb = 100 - (((this.maxprice - this.min) / (this.max - this.min)) * 100);
    },
  }
}

//accordian
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active-acc");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

//popup
function myFunctionMobile() {
  console.log("clickblack1")
  var xy = document.getElementById("black-overlay-1");
  if (xy.style.display === "block") {
    xy.style.display = "none";
  } else {
    xy.style.display = "block";
  }
}

function myFunctionPop() {
  console.log("clickblack2")
  var xy = document.getElementById("black-overlay-2");
  if (xy.style.display === "block") {
    xy.style.display = "none";
  } else {
    xy.style.display = "block";
  }

}

function closePopBlack() {
  console.log("clickblack2")
  var xy = document.getElementById("black-overlay-2");
  if (xy.style.display === "block") {
    xy.style.display = "none";
  } else {
    xy.style.display = "block";
  }

}

function closeBlack() {
  console.log("clickblack2")
  var xy = document.getElementById("black-overlay-2");
  if (xy.style.display === "block") {
    xy.style.display = "none";
  } else {
    xy.style.display = "block";
  }

}

function closeBlackForm() {
  console.log("clickblack2")
  var xy = document.getElementById("black-overlay-2");
  if (xy.style.display === "block") {
    xy.style.display = "none";
  } else {
    xy.style.display = "block";
  }

}

//mobile
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");
const navLink = document.querySelectorAll(".nav-link");
navLink.forEach(n => n.addEventListener("click", closeMenu));
hamburger.addEventListener("click", mobileMenu);


//mobile open
function mobileMenu() {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
}

//mobile close
function closeMenu() {
  hamburger.classList.remove("active");
  navMenu.classList.remove("active");

}







































