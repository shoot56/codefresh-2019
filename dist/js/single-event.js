/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
(self["webpackChunkcodefresh"] = self["webpackChunkcodefresh"] || []).push([["/js/single-event"],{

/***/ "./resources/assets/js/pages/single-event.js":
/*!***************************************************!*\
  !*** ./resources/assets/js/pages/single-event.js ***!
  \***************************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var downloadjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! downloadjs */ \"./node_modules/downloadjs/download.js\");\n/* harmony import */ var downloadjs__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(downloadjs__WEBPACK_IMPORTED_MODULE_0__);\n\nvar isVideoOn = document.querySelector('.webinar-main');\njQuery(document).ready(function () {\n  if (isVideoOn) {\n    // Download resources\n    var downloadButton = document.getElementById('webinarDownloadResources'),\n        fileUrl = downloadButton.getAttribute('data-file');\n    if (downloadButton) downloadButton.addEventListener('click', function () {\n      return downloadjs__WEBPACK_IMPORTED_MODULE_0___default()(fileUrl);\n    });\n    /* eslint-disable */\n    // Google Analytics events / goals\n\n    var player = false,\n        hasPlayed = false,\n        playing = false,\n        hasLoaded = false;\n    jQuery(function () {\n      try {\n        if (hasLoaded === false) {\n          ga('send', 'event', 'Webinar', 'View', 'Thankyou', 1);\n          hasLoaded = true;\n        }\n      } catch (err) {\n        console.log('ga load err');\n      }\n    });\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9jb2RlZnJlc2gvLi9yZXNvdXJjZXMvYXNzZXRzL2pzL3BhZ2VzL3NpbmdsZS1ldmVudC5qcz82MDU2Il0sIm5hbWVzIjpbImlzVmlkZW9PbiIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvciIsImpRdWVyeSIsInJlYWR5IiwiZG93bmxvYWRCdXR0b24iLCJnZXRFbGVtZW50QnlJZCIsImZpbGVVcmwiLCJnZXRBdHRyaWJ1dGUiLCJhZGRFdmVudExpc3RlbmVyIiwiZG93bmxvYWQiLCJwbGF5ZXIiLCJoYXNQbGF5ZWQiLCJwbGF5aW5nIiwiaGFzTG9hZGVkIiwiZ2EiLCJlcnIiLCJjb25zb2xlIiwibG9nIl0sIm1hcHBpbmdzIjoiOzs7QUFBQTtBQUVBLElBQU1BLFNBQVMsR0FBR0MsUUFBUSxDQUFDQyxhQUFULENBQXdCLGVBQXhCLENBQWxCO0FBRUFDLE1BQU0sQ0FBRUYsUUFBRixDQUFOLENBQW1CRyxLQUFuQixDQUEwQixZQUFNO0FBQzlCLE1BQUtKLFNBQUwsRUFBaUI7QUFFZjtBQUNBLFFBQU1LLGNBQWMsR0FBR0osUUFBUSxDQUFDSyxjQUFULENBQXlCLDBCQUF6QixDQUF2QjtBQUFBLFFBQ0VDLE9BQU8sR0FBR0YsY0FBYyxDQUFDRyxZQUFmLENBQTZCLFdBQTdCLENBRFo7QUFHQSxRQUFLSCxjQUFMLEVBQXNCQSxjQUFjLENBQUNJLGdCQUFmLENBQWlDLE9BQWpDLEVBQTBDO0FBQUEsYUFBTUMsaURBQVEsQ0FBRUgsT0FBRixDQUFkO0FBQUEsS0FBMUM7QUFFdEI7QUFDQTs7QUFDQSxRQUFJSSxNQUFNLEdBQUcsS0FBYjtBQUFBLFFBQ0VDLFNBQVMsR0FBRyxLQURkO0FBQUEsUUFFRUMsT0FBTyxHQUFHLEtBRlo7QUFBQSxRQUdFQyxTQUFTLEdBQUcsS0FIZDtBQUtBWCxVQUFNLENBQUUsWUFBWTtBQUNsQixVQUFJO0FBQ0YsWUFBS1csU0FBUyxLQUFLLEtBQW5CLEVBQTJCO0FBQ3pCQyxZQUFFLENBQUUsTUFBRixFQUFVLE9BQVYsRUFBbUIsU0FBbkIsRUFBOEIsTUFBOUIsRUFBc0MsVUFBdEMsRUFBa0QsQ0FBbEQsQ0FBRjtBQUNBRCxtQkFBUyxHQUFHLElBQVo7QUFDRDtBQUNGLE9BTEQsQ0FLRSxPQUFRRSxHQUFSLEVBQWM7QUFDZEMsZUFBTyxDQUFDQyxHQUFSLENBQWEsYUFBYjtBQUNEO0FBQ0YsS0FUSyxDQUFOO0FBVUQ7QUFDRixDQTNCRCIsImZpbGUiOiIuL3Jlc291cmNlcy9hc3NldHMvanMvcGFnZXMvc2luZ2xlLWV2ZW50LmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IGRvd25sb2FkIGZyb20gJ2Rvd25sb2FkanMnO1xuXG5jb25zdCBpc1ZpZGVvT24gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCAnLndlYmluYXItbWFpbicgKTtcblxualF1ZXJ5KCBkb2N1bWVudCApLnJlYWR5KCAoKSA9PiB7XG4gIGlmICggaXNWaWRlb09uICkge1xuXG4gICAgLy8gRG93bmxvYWQgcmVzb3VyY2VzXG4gICAgY29uc3QgZG93bmxvYWRCdXR0b24gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCggJ3dlYmluYXJEb3dubG9hZFJlc291cmNlcycgKSxcbiAgICAgIGZpbGVVcmwgPSBkb3dubG9hZEJ1dHRvbi5nZXRBdHRyaWJ1dGUoICdkYXRhLWZpbGUnICk7XG5cbiAgICBpZiAoIGRvd25sb2FkQnV0dG9uICkgZG93bmxvYWRCdXR0b24uYWRkRXZlbnRMaXN0ZW5lciggJ2NsaWNrJywgKCkgPT4gZG93bmxvYWQoIGZpbGVVcmwgKSApO1xuXG4gICAgLyogZXNsaW50LWRpc2FibGUgKi9cbiAgICAvLyBHb29nbGUgQW5hbHl0aWNzIGV2ZW50cyAvIGdvYWxzXG4gICAgdmFyIHBsYXllciA9IGZhbHNlLFxuICAgICAgaGFzUGxheWVkID0gZmFsc2UsXG4gICAgICBwbGF5aW5nID0gZmFsc2UsXG4gICAgICBoYXNMb2FkZWQgPSBmYWxzZTtcblxuICAgIGpRdWVyeSggZnVuY3Rpb24gKCkge1xuICAgICAgdHJ5IHtcbiAgICAgICAgaWYgKCBoYXNMb2FkZWQgPT09IGZhbHNlICkge1xuICAgICAgICAgIGdhKCAnc2VuZCcsICdldmVudCcsICdXZWJpbmFyJywgJ1ZpZXcnLCAnVGhhbmt5b3UnLCAxICk7XG4gICAgICAgICAgaGFzTG9hZGVkID0gdHJ1ZTtcbiAgICAgICAgfVxuICAgICAgfSBjYXRjaCAoIGVyciApIHtcbiAgICAgICAgY29uc29sZS5sb2coICdnYSBsb2FkIGVycicgKTtcbiAgICAgIH1cbiAgICB9ICk7XG4gIH1cbn0gKTtcbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/assets/js/pages/single-event.js\n");

/***/ })

},
/******/ function(__webpack_require__) { // webpackRuntimeModules
/******/ "use strict";
/******/ 
/******/ var __webpack_exec__ = function(moduleId) { return __webpack_require__(__webpack_require__.s = moduleId); }
/******/ __webpack_require__.O(0, ["/js/vendor"], function() { return __webpack_exec__("./resources/assets/js/pages/single-event.js"); });
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);