/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
(self["webpackChunkcodefresh"] = self["webpackChunkcodefresh"] || []).push([["/js/case-studies"],{

/***/ "./resources/assets/js/pages/case-studies.js":
/*!***************************************************!*\
  !*** ./resources/assets/js/pages/case-studies.js ***!
  \***************************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var video_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! video.js */ \"./node_modules/video.js/dist/video.es.js\");\n\njQuery(document).ready(function () {\n  // Video Player\n  var opt = {\n    autoplay: true,\n    muted: true,\n    fluid: true,\n    preload: 'auto',\n    loop: true\n  };\n  (0,video_js__WEBPACK_IMPORTED_MODULE_0__.default)('cs-video--short', opt).ready(function () {\n    var player = this;\n    player.play();\n  });\n  (0,video_js__WEBPACK_IMPORTED_MODULE_0__.default)('cs-video--full', {\n    fluid: true,\n    controls: true\n  });\n  jQuery('.cf-video-btn').on('click', function () {\n    (0,video_js__WEBPACK_IMPORTED_MODULE_0__.default)('cs-video--short').pause();\n    (0,video_js__WEBPACK_IMPORTED_MODULE_0__.default)('cs-video--full').play();\n    jQuery('.fbx-instance').on('foobox.close', function () {\n      (0,video_js__WEBPACK_IMPORTED_MODULE_0__.default)('cs-video--short').play();\n      (0,video_js__WEBPACK_IMPORTED_MODULE_0__.default)('cs-video--full').pause();\n    });\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9jb2RlZnJlc2gvLi9yZXNvdXJjZXMvYXNzZXRzL2pzL3BhZ2VzL2Nhc2Utc3R1ZGllcy5qcz9hYzI4Il0sIm5hbWVzIjpbImpRdWVyeSIsImRvY3VtZW50IiwicmVhZHkiLCJvcHQiLCJhdXRvcGxheSIsIm11dGVkIiwiZmx1aWQiLCJwcmVsb2FkIiwibG9vcCIsInZpZGVvanMiLCJwbGF5ZXIiLCJwbGF5IiwiY29udHJvbHMiLCJvbiIsInBhdXNlIl0sIm1hcHBpbmdzIjoiOztBQUFBO0FBRUFBLE1BQU0sQ0FBRUMsUUFBRixDQUFOLENBQW1CQyxLQUFuQixDQUEwQixZQUFNO0FBRTlCO0FBQ0EsTUFBSUMsR0FBRyxHQUFHO0FBQ1JDLFlBQVEsRUFBRSxJQURGO0FBRVJDLFNBQUssRUFBRSxJQUZDO0FBR1JDLFNBQUssRUFBRSxJQUhDO0FBSVJDLFdBQU8sRUFBRSxNQUpEO0FBS1JDLFFBQUksRUFBRTtBQUxFLEdBQVY7QUFRQUMsbURBQU8sQ0FBRSxpQkFBRixFQUFxQk4sR0FBckIsQ0FBUCxDQUFrQ0QsS0FBbEMsQ0FBeUMsWUFBWTtBQUNuRCxRQUFNUSxNQUFNLEdBQUcsSUFBZjtBQUNBQSxVQUFNLENBQUNDLElBQVA7QUFDRCxHQUhEO0FBS0FGLG1EQUFPLENBQUUsZ0JBQUYsRUFBb0I7QUFBRUgsU0FBSyxFQUFFLElBQVQ7QUFBZU0sWUFBUSxFQUFFO0FBQXpCLEdBQXBCLENBQVA7QUFFQVosUUFBTSxDQUFFLGVBQUYsQ0FBTixDQUEwQmEsRUFBMUIsQ0FBOEIsT0FBOUIsRUFBdUMsWUFBTTtBQUMzQ0oscURBQU8sQ0FBRSxpQkFBRixDQUFQLENBQTZCSyxLQUE3QjtBQUNBTCxxREFBTyxDQUFFLGdCQUFGLENBQVAsQ0FBNEJFLElBQTVCO0FBRUFYLFVBQU0sQ0FBRSxlQUFGLENBQU4sQ0FBMEJhLEVBQTFCLENBQThCLGNBQTlCLEVBQThDLFlBQU07QUFDbERKLHVEQUFPLENBQUUsaUJBQUYsQ0FBUCxDQUE2QkUsSUFBN0I7QUFDQUYsdURBQU8sQ0FBRSxnQkFBRixDQUFQLENBQTRCSyxLQUE1QjtBQUNELEtBSEQ7QUFJRCxHQVJEO0FBU0QsQ0EzQkQiLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2pzL3BhZ2VzL2Nhc2Utc3R1ZGllcy5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCB2aWRlb2pzIGZyb20gJ3ZpZGVvLmpzJztcblxualF1ZXJ5KCBkb2N1bWVudCApLnJlYWR5KCAoKSA9PiB7XG5cbiAgLy8gVmlkZW8gUGxheWVyXG4gIHZhciBvcHQgPSB7XG4gICAgYXV0b3BsYXk6IHRydWUsXG4gICAgbXV0ZWQ6IHRydWUsXG4gICAgZmx1aWQ6IHRydWUsXG4gICAgcHJlbG9hZDogJ2F1dG8nLFxuICAgIGxvb3A6IHRydWUsXG4gIH07XG5cbiAgdmlkZW9qcyggJ2NzLXZpZGVvLS1zaG9ydCcsIG9wdCApLnJlYWR5KCBmdW5jdGlvbiAoKSB7XG4gICAgY29uc3QgcGxheWVyID0gdGhpcztcbiAgICBwbGF5ZXIucGxheSgpO1xuICB9ICk7XG5cbiAgdmlkZW9qcyggJ2NzLXZpZGVvLS1mdWxsJywgeyBmbHVpZDogdHJ1ZSwgY29udHJvbHM6IHRydWUgfSApO1xuXG4gIGpRdWVyeSggJy5jZi12aWRlby1idG4nICkub24oICdjbGljaycsICgpID0+IHtcbiAgICB2aWRlb2pzKCAnY3MtdmlkZW8tLXNob3J0JyApLnBhdXNlKCk7XG4gICAgdmlkZW9qcyggJ2NzLXZpZGVvLS1mdWxsJyApLnBsYXkoKTtcblxuICAgIGpRdWVyeSggJy5mYngtaW5zdGFuY2UnICkub24oICdmb29ib3guY2xvc2UnLCAoKSA9PiB7XG4gICAgICB2aWRlb2pzKCAnY3MtdmlkZW8tLXNob3J0JyApLnBsYXkoKTtcbiAgICAgIHZpZGVvanMoICdjcy12aWRlby0tZnVsbCcgKS5wYXVzZSgpO1xuICAgIH0gKTtcbiAgfSApO1xufSApOyJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/assets/js/pages/case-studies.js\n");

/***/ }),

/***/ "?34aa":
/*!******************************!*\
  !*** min-document (ignored) ***!
  \******************************/
/***/ (function() {

/* (ignored) */

/***/ }),

/***/ "?b126":
/*!******************************!*\
  !*** min-document (ignored) ***!
  \******************************/
/***/ (function() {

/* (ignored) */

/***/ })

},
/******/ function(__webpack_require__) { // webpackRuntimeModules
/******/ "use strict";
/******/ 
/******/ var __webpack_exec__ = function(moduleId) { return __webpack_require__(__webpack_require__.s = moduleId); }
/******/ __webpack_require__.O(0, ["/js/vendor"], function() { return __webpack_exec__("./resources/assets/js/pages/case-studies.js"); });
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);