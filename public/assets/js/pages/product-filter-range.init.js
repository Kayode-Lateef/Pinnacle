/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************************************!*\
  !*** ./resources/js/pages/product-filter-range.init.js ***!
  \*********************************************************/

$(document).ready(function () {
  $("#pricerange").ionRangeSlider({
    skin: "round",
    type: "double",
    grid: true,
    min: 0,
    max: 1000,
    from: 200,
    to: 800,
    prefix: "$"
  });
});
/******/ })()
;
