$(document).ready(function () {
  "use strict";
  triggers.anchorScroll();
  triggers.classToggler();
  
  var thisYear = new Date().getFullYear();
  $('.year-current').text(thisYear);
});
