var jsOne = "Modify markup only without touching JavaScript so the click on each of the buttons present in the hero ([CSS],[JS],[Backend/PHP]) will scroll the page down to their respective targets in 1.2 seconds.",
  jsTwo = "Clicking the arrow button will throw a console error. Fix the error without touching markup or breaking other functionalities",
  jsThree = "(bonus round): use ScrollMagic plugin so when the arrow button is clicked it will start scrolling along while the page is scrolling down and it should continue continue scrolling in case the page reaches the end and stops too soon. When it aligns with the row of squares at the bottom of JS test section, it should stop scrolling and both row and the button should dissapear, sort of like Tetris simulation",
  triggers = {
    classToggler: function () {
      'use strict';
      var toggleTrigger = $('[data-toggle-trigger]');

      toggleTrigger.each(function () {
        var toggleAction = $(this).data('toggle-action'),
          toggleClasses = $(this).data('toggle-class'),
          toggleIdentifier = $(this).data('toggle-trigger'),
          toggleTarget = $('[data-toggle-target="' + toggleIdentifier + '"]');

        if (toggleAction === undefined) {
          toggleAction = 'click';
        }

        if (toggleClasses === undefined) {
          toggleClasses = 'is-active';
        }

        $(this).on(toggleAction, function (e) {
          e.stopImmediatePropagation();
          toggleTarget.toggleClass(toggleClasses);
        });
      });
    },
    anchorScroll: function () {
      'use strict';
      $('[href^="#"]').unbind('click').click(function (event) {
        event.preventDefault();
        var speed = 100,
          easing = 'swing',
          scrollTarget = this.hash;
        speed = parseInt($(this).attr('data-scroll-speed'), 10);
        easing = $(this).attr('data-easing-type');
        if ($(scrollTarget).length) {
          $('html,body').animate({ scrollTop: $(scrollTarget).offset().top }, speed, easing);
        }
        else {
          while(!$(scrollTarget).length && scrollTarget.length > 1) {
            scrollTarget = scrollTarget.split('-');
            scrollTarget.splice(0, 1);
            scrollTarget = scrollTarget.join('-');
            scrollTarget = '#' + scrollTarget;
          }
          if($(scrollTarget).length) {
            $('html,body').animate({ scrollTop: $(scrollTarget).offset().top }, speed, easing);
          }
          else {
            console.log('Scroll target ' + this.hash + ' not found!');
          }
        }
      });
    }
  };
