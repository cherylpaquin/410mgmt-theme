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

//Management Types Animation
// List of sentences
var _CONTENT = [ 
  "410",
  "TOUR",
  "PRODUCTION", 
  "TRAVEL", 
  "PROJECT"
];

// Current sentence being processed
var _PART = 0;

// Character number of the current sentence being processed 
var _PART_INDEX = 0;

// Holds the handle returned from setInterval
var _INTERVAL_VAL;

// Element that holds the text
var _ELEMENT = document.querySelector("#text");

// Cursor element 
var _CURSOR = document.querySelector("#cursor");

// Implements typing effect
function Type() { 
  // Get substring with 1 characater added
  var text =  _CONTENT[_PART].substring(0, _PART_INDEX + 1);
  _ELEMENT.innerHTML = text;
  _PART_INDEX++;

  // If full sentence has been displayed then start to delete the sentence after some time
  if(text === _CONTENT[_PART]) {
    // Hide the cursor
    _CURSOR.style.display = 'none';

    clearInterval(_INTERVAL_VAL);
    setTimeout(function() {
      _INTERVAL_VAL = setInterval(Delete, 10);
    }, 1000);
  }
}

// Implements deleting effect
function Delete() {
  // Get substring with 1 characater deleted
  var text =  _CONTENT[_PART].substring(0, _PART_INDEX - 1);
  _ELEMENT.innerHTML = text;
  _PART_INDEX--;

  // If sentence has been deleted then start to display the next sentence
  if(text === '') {
    clearInterval(_INTERVAL_VAL);

    // If current sentence was last then display the first one, else move to the next
    if(_PART == (_CONTENT.length - 1))
      _PART = 0;
    else
      _PART++;
    
    _PART_INDEX = 0;

    // Start to display the next sentence after some time
    setTimeout(function() {
      _CURSOR.style.display = 'inline-block';
      _INTERVAL_VAL = setInterval(Type, 10);
    }, 200);
  }
}

// Start the typing effect on load
_INTERVAL_VAL = setInterval(Type, 10);
