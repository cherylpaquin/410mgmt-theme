jQuery(function ($) {
  $('a').on('click', function (e) {
    // get anchor tag hash
    const hash = this.hash;
    //check if hash is present and consider urls ending with # like the back to top button and home button link
    const hasHash = !!hash || this.href?.endsWith('#');
    // check if hash exists and if it is a link to an element on the page
    if (hasHash && location.hostname === this.hostname) {
      e.preventDefault();
      // get navbar height
      const navHeight = $('#nav-main').innerHeight();
      // animate to the element
      $('html, body').animate(
        {
          scrollTop: (hash ? $(hash).offset().top : 0) - navHeight,
        },
        800,
        function () {
          // add hash to url
          history.replaceState(null, null, hash || '#');
        }
      );
    }
  });

  $('#content').scrollspy({
    target: '#bootscore-navbar',
  });

  var TxtType = function (el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
  };

  TxtType.prototype.tick = function () {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) {
      delta /= 2;
    }

    if (!this.isDeleting && this.txt === fullTxt) {
      delta = this.period;
      this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      this.loopNum++;
      delta = 500;
    }

    setTimeout(function () {
      that.tick();
    }, delta);
  };

  window.onload = function () {
    var elements = document.getElementsByClassName('typewrite');
    for (var i = 0; i < elements.length; i++) {
      var toRotate = elements[i].getAttribute('data-type');
      var period = elements[i].getAttribute('data-period');
      if (toRotate) {
        new TxtType(elements[i], JSON.parse(toRotate), period);
      }
    }
    // INJECT CSS
    var css = document.createElement('style');
    css.type = 'text/css';
    css.innerHTML = '.typewrite > .wrap { border-right: 0.08em solid #02498E}';
    document.body.appendChild(css);
  };
}); // jQuery End

new Swiper('.artist-group', {
  slidesPerView: 7,
  breakpoints: {
    768: {
      slidesPerView: 8,
    },
  },
  height: 456,
  direction: 'vertical',
  freeMode: true,
  vertical: true,
  speed: 1000,
  loop: true,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
    pauseOnMouseEnter: true,
  },
  mousewheel: true,
  keyboard: {
    enabled: true,
  },
});
