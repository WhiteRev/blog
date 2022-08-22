"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.map.js */ "./node_modules/core-js/modules/es.array.map.js");
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_symbol_async_iterator_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.symbol.async-iterator.js */ "./node_modules/core-js/modules/es.symbol.async-iterator.js");
/* harmony import */ var core_js_modules_es_symbol_async_iterator_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_async_iterator_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_symbol_to_string_tag_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.symbol.to-string-tag.js */ "./node_modules/core-js/modules/es.symbol.to-string-tag.js");
/* harmony import */ var core_js_modules_es_symbol_to_string_tag_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_to_string_tag_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_json_to_string_tag_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.json.to-string-tag.js */ "./node_modules/core-js/modules/es.json.to-string-tag.js");
/* harmony import */ var core_js_modules_es_json_to_string_tag_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_json_to_string_tag_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_math_to_string_tag_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.math.to-string-tag.js */ "./node_modules/core-js/modules/es.math.to-string-tag.js");
/* harmony import */ var core_js_modules_es_math_to_string_tag_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_math_to_string_tag_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_19___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_19__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_20___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_20__);
/* harmony import */ var core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! core-js/modules/es.array.reverse.js */ "./node_modules/core-js/modules/es.array.reverse.js");
/* harmony import */ var core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_21___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_21__);
/* harmony import */ var _css_app_scss__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! ./css/app.scss */ "./assets/css/app.scss");
/* harmony import */ var _styles_app_css__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! ./styles/app.css */ "./assets/styles/app.css");
/* harmony import */ var bootstrap__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.esm.js");
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }

function _regeneratorRuntime() { "use strict"; /*! regenerator-runtime -- Copyright (c) 2014-present, Facebook, Inc. -- license (MIT): https://github.com/facebook/regenerator/blob/main/LICENSE */ _regeneratorRuntime = function _regeneratorRuntime() { return exports; }; var exports = {}, Op = Object.prototype, hasOwn = Op.hasOwnProperty, $Symbol = "function" == typeof Symbol ? Symbol : {}, iteratorSymbol = $Symbol.iterator || "@@iterator", asyncIteratorSymbol = $Symbol.asyncIterator || "@@asyncIterator", toStringTagSymbol = $Symbol.toStringTag || "@@toStringTag"; function define(obj, key, value) { return Object.defineProperty(obj, key, { value: value, enumerable: !0, configurable: !0, writable: !0 }), obj[key]; } try { define({}, ""); } catch (err) { define = function define(obj, key, value) { return obj[key] = value; }; } function wrap(innerFn, outerFn, self, tryLocsList) { var protoGenerator = outerFn && outerFn.prototype instanceof Generator ? outerFn : Generator, generator = Object.create(protoGenerator.prototype), context = new Context(tryLocsList || []); return generator._invoke = function (innerFn, self, context) { var state = "suspendedStart"; return function (method, arg) { if ("executing" === state) throw new Error("Generator is already running"); if ("completed" === state) { if ("throw" === method) throw arg; return doneResult(); } for (context.method = method, context.arg = arg;;) { var delegate = context.delegate; if (delegate) { var delegateResult = maybeInvokeDelegate(delegate, context); if (delegateResult) { if (delegateResult === ContinueSentinel) continue; return delegateResult; } } if ("next" === context.method) context.sent = context._sent = context.arg;else if ("throw" === context.method) { if ("suspendedStart" === state) throw state = "completed", context.arg; context.dispatchException(context.arg); } else "return" === context.method && context.abrupt("return", context.arg); state = "executing"; var record = tryCatch(innerFn, self, context); if ("normal" === record.type) { if (state = context.done ? "completed" : "suspendedYield", record.arg === ContinueSentinel) continue; return { value: record.arg, done: context.done }; } "throw" === record.type && (state = "completed", context.method = "throw", context.arg = record.arg); } }; }(innerFn, self, context), generator; } function tryCatch(fn, obj, arg) { try { return { type: "normal", arg: fn.call(obj, arg) }; } catch (err) { return { type: "throw", arg: err }; } } exports.wrap = wrap; var ContinueSentinel = {}; function Generator() {} function GeneratorFunction() {} function GeneratorFunctionPrototype() {} var IteratorPrototype = {}; define(IteratorPrototype, iteratorSymbol, function () { return this; }); var getProto = Object.getPrototypeOf, NativeIteratorPrototype = getProto && getProto(getProto(values([]))); NativeIteratorPrototype && NativeIteratorPrototype !== Op && hasOwn.call(NativeIteratorPrototype, iteratorSymbol) && (IteratorPrototype = NativeIteratorPrototype); var Gp = GeneratorFunctionPrototype.prototype = Generator.prototype = Object.create(IteratorPrototype); function defineIteratorMethods(prototype) { ["next", "throw", "return"].forEach(function (method) { define(prototype, method, function (arg) { return this._invoke(method, arg); }); }); } function AsyncIterator(generator, PromiseImpl) { function invoke(method, arg, resolve, reject) { var record = tryCatch(generator[method], generator, arg); if ("throw" !== record.type) { var result = record.arg, value = result.value; return value && "object" == _typeof(value) && hasOwn.call(value, "__await") ? PromiseImpl.resolve(value.__await).then(function (value) { invoke("next", value, resolve, reject); }, function (err) { invoke("throw", err, resolve, reject); }) : PromiseImpl.resolve(value).then(function (unwrapped) { result.value = unwrapped, resolve(result); }, function (error) { return invoke("throw", error, resolve, reject); }); } reject(record.arg); } var previousPromise; this._invoke = function (method, arg) { function callInvokeWithMethodAndArg() { return new PromiseImpl(function (resolve, reject) { invoke(method, arg, resolve, reject); }); } return previousPromise = previousPromise ? previousPromise.then(callInvokeWithMethodAndArg, callInvokeWithMethodAndArg) : callInvokeWithMethodAndArg(); }; } function maybeInvokeDelegate(delegate, context) { var method = delegate.iterator[context.method]; if (undefined === method) { if (context.delegate = null, "throw" === context.method) { if (delegate.iterator["return"] && (context.method = "return", context.arg = undefined, maybeInvokeDelegate(delegate, context), "throw" === context.method)) return ContinueSentinel; context.method = "throw", context.arg = new TypeError("The iterator does not provide a 'throw' method"); } return ContinueSentinel; } var record = tryCatch(method, delegate.iterator, context.arg); if ("throw" === record.type) return context.method = "throw", context.arg = record.arg, context.delegate = null, ContinueSentinel; var info = record.arg; return info ? info.done ? (context[delegate.resultName] = info.value, context.next = delegate.nextLoc, "return" !== context.method && (context.method = "next", context.arg = undefined), context.delegate = null, ContinueSentinel) : info : (context.method = "throw", context.arg = new TypeError("iterator result is not an object"), context.delegate = null, ContinueSentinel); } function pushTryEntry(locs) { var entry = { tryLoc: locs[0] }; 1 in locs && (entry.catchLoc = locs[1]), 2 in locs && (entry.finallyLoc = locs[2], entry.afterLoc = locs[3]), this.tryEntries.push(entry); } function resetTryEntry(entry) { var record = entry.completion || {}; record.type = "normal", delete record.arg, entry.completion = record; } function Context(tryLocsList) { this.tryEntries = [{ tryLoc: "root" }], tryLocsList.forEach(pushTryEntry, this), this.reset(!0); } function values(iterable) { if (iterable) { var iteratorMethod = iterable[iteratorSymbol]; if (iteratorMethod) return iteratorMethod.call(iterable); if ("function" == typeof iterable.next) return iterable; if (!isNaN(iterable.length)) { var i = -1, next = function next() { for (; ++i < iterable.length;) { if (hasOwn.call(iterable, i)) return next.value = iterable[i], next.done = !1, next; } return next.value = undefined, next.done = !0, next; }; return next.next = next; } } return { next: doneResult }; } function doneResult() { return { value: undefined, done: !0 }; } return GeneratorFunction.prototype = GeneratorFunctionPrototype, define(Gp, "constructor", GeneratorFunctionPrototype), define(GeneratorFunctionPrototype, "constructor", GeneratorFunction), GeneratorFunction.displayName = define(GeneratorFunctionPrototype, toStringTagSymbol, "GeneratorFunction"), exports.isGeneratorFunction = function (genFun) { var ctor = "function" == typeof genFun && genFun.constructor; return !!ctor && (ctor === GeneratorFunction || "GeneratorFunction" === (ctor.displayName || ctor.name)); }, exports.mark = function (genFun) { return Object.setPrototypeOf ? Object.setPrototypeOf(genFun, GeneratorFunctionPrototype) : (genFun.__proto__ = GeneratorFunctionPrototype, define(genFun, toStringTagSymbol, "GeneratorFunction")), genFun.prototype = Object.create(Gp), genFun; }, exports.awrap = function (arg) { return { __await: arg }; }, defineIteratorMethods(AsyncIterator.prototype), define(AsyncIterator.prototype, asyncIteratorSymbol, function () { return this; }), exports.AsyncIterator = AsyncIterator, exports.async = function (innerFn, outerFn, self, tryLocsList, PromiseImpl) { void 0 === PromiseImpl && (PromiseImpl = Promise); var iter = new AsyncIterator(wrap(innerFn, outerFn, self, tryLocsList), PromiseImpl); return exports.isGeneratorFunction(outerFn) ? iter : iter.next().then(function (result) { return result.done ? result.value : iter.next(); }); }, defineIteratorMethods(Gp), define(Gp, toStringTagSymbol, "Generator"), define(Gp, iteratorSymbol, function () { return this; }), define(Gp, "toString", function () { return "[object Generator]"; }), exports.keys = function (object) { var keys = []; for (var key in object) { keys.push(key); } return keys.reverse(), function next() { for (; keys.length;) { var key = keys.pop(); if (key in object) return next.value = key, next.done = !1, next; } return next.done = !0, next; }; }, exports.values = values, Context.prototype = { constructor: Context, reset: function reset(skipTempReset) { if (this.prev = 0, this.next = 0, this.sent = this._sent = undefined, this.done = !1, this.delegate = null, this.method = "next", this.arg = undefined, this.tryEntries.forEach(resetTryEntry), !skipTempReset) for (var name in this) { "t" === name.charAt(0) && hasOwn.call(this, name) && !isNaN(+name.slice(1)) && (this[name] = undefined); } }, stop: function stop() { this.done = !0; var rootRecord = this.tryEntries[0].completion; if ("throw" === rootRecord.type) throw rootRecord.arg; return this.rval; }, dispatchException: function dispatchException(exception) { if (this.done) throw exception; var context = this; function handle(loc, caught) { return record.type = "throw", record.arg = exception, context.next = loc, caught && (context.method = "next", context.arg = undefined), !!caught; } for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i], record = entry.completion; if ("root" === entry.tryLoc) return handle("end"); if (entry.tryLoc <= this.prev) { var hasCatch = hasOwn.call(entry, "catchLoc"), hasFinally = hasOwn.call(entry, "finallyLoc"); if (hasCatch && hasFinally) { if (this.prev < entry.catchLoc) return handle(entry.catchLoc, !0); if (this.prev < entry.finallyLoc) return handle(entry.finallyLoc); } else if (hasCatch) { if (this.prev < entry.catchLoc) return handle(entry.catchLoc, !0); } else { if (!hasFinally) throw new Error("try statement without catch or finally"); if (this.prev < entry.finallyLoc) return handle(entry.finallyLoc); } } } }, abrupt: function abrupt(type, arg) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.tryLoc <= this.prev && hasOwn.call(entry, "finallyLoc") && this.prev < entry.finallyLoc) { var finallyEntry = entry; break; } } finallyEntry && ("break" === type || "continue" === type) && finallyEntry.tryLoc <= arg && arg <= finallyEntry.finallyLoc && (finallyEntry = null); var record = finallyEntry ? finallyEntry.completion : {}; return record.type = type, record.arg = arg, finallyEntry ? (this.method = "next", this.next = finallyEntry.finallyLoc, ContinueSentinel) : this.complete(record); }, complete: function complete(record, afterLoc) { if ("throw" === record.type) throw record.arg; return "break" === record.type || "continue" === record.type ? this.next = record.arg : "return" === record.type ? (this.rval = this.arg = record.arg, this.method = "return", this.next = "end") : "normal" === record.type && afterLoc && (this.next = afterLoc), ContinueSentinel; }, finish: function finish(finallyLoc) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.finallyLoc === finallyLoc) return this.complete(entry.completion, entry.afterLoc), resetTryEntry(entry), ContinueSentinel; } }, "catch": function _catch(tryLoc) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.tryLoc === tryLoc) { var record = entry.completion; if ("throw" === record.type) { var thrown = record.arg; resetTryEntry(entry); } return thrown; } } throw new Error("illegal catch attempt"); }, delegateYield: function delegateYield(iterable, resultName, nextLoc) { return this.delegate = { iterator: values(iterable), resultName: resultName, nextLoc: nextLoc }, "next" === this.method && (this.arg = undefined), ContinueSentinel; } }, exports; }

function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }
























function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }





var $ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js"); // this "modifies" the jquery module: adding behavior to it
// the bootstrap module doesn't export/return anything


__webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.esm.js");

document.addEventListener('DOMContentLoaded', function () {
  new App();
});

var App = /*#__PURE__*/function () {
  function App() {
    _classCallCheck(this, App);

    _defineProperty(this, "colorSchemeLocalStorageKey", void 0);

    this.colorSchemeLocalStorageKey = 'blog/colorScheme';
    this.createColorSchemeSelector();
    this.enableDropdowns();
    this.handleCommentForm();
  }

  _createClass(App, [{
    key: "createColorSchemeSelector",
    value: function createColorSchemeSelector() {
      var _this = this;

      if (null === document.querySelector('.dropdown-appearance')) {
        return;
      }

      var currentScheme = localStorage.getItem(this.colorSchemeLocalStorageKey) || 'auto';
      var colorSchemeSelectors = document.querySelectorAll('.dropdown-appearance a[data-color-scheme]');
      var activeColorSchemeSelector = document.querySelector(".dropdown-appearance a[data-color-scheme=\"".concat(currentScheme, "\"]"));
      colorSchemeSelectors.forEach(function (selector) {
        selector.classList.remove('active');
      });
      activeColorSchemeSelector.classList.add('active');
      colorSchemeSelectors.forEach(function (selector) {
        selector.addEventListener('click', function () {
          var selectedColorScheme = selector.getAttribute('data-color-scheme');
          var resolvedColorScheme = 'auto' === selectedColorScheme ? matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light' : selectedColorScheme;
          document.body.classList.remove('light-scheme', 'dark-scheme');
          document.body.classList.add('light' === resolvedColorScheme ? 'light-scheme' : 'dark-scheme');
          document.body.style.colorScheme = resolvedColorScheme;
          localStorage.setItem(_this.colorSchemeLocalStorageKey, selectedColorScheme);
          colorSchemeSelectors.forEach(function (otherSelector) {
            otherSelector.classList.remove('active');
          });
          selector.classList.add('active');
        });
      });
    }
  }, {
    key: "enableDropdowns",
    value: function enableDropdowns() {
      var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
      dropdownElementList.map(function (dropdownToggleEl) {
        return new bootstrap__WEBPACK_IMPORTED_MODULE_24__.Dropdown(dropdownToggleEl);
      });
    }
  }, {
    key: "handleCommentForm",
    value: function handleCommentForm() {
      var commentForm = document.querySelector('form.comment-form');

      if (null === commentForm) {
        return;
      }

      commentForm.addEventListener('submit', /*#__PURE__*/function () {
        var _ref = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee(e) {
          var response, json, commentList, commentCount, commentContent;
          return _regeneratorRuntime().wrap(function _callee$(_context) {
            while (1) {
              switch (_context.prev = _context.next) {
                case 0:
                  e.preventDefault();
                  _context.next = 3;
                  return fetch('/ajax/comments', {
                    method: 'POST',
                    body: new FormData(e.target)
                  });

                case 3:
                  response = _context.sent;

                  if (response.ok) {
                    _context.next = 6;
                    break;
                  }

                  return _context.abrupt("return");

                case 6:
                  _context.next = 8;
                  return response.json();

                case 8:
                  json = _context.sent;

                  if (json.code === 'COMMENT_ADDED_SUCCESSFULLY') {
                    console.log("Hi");
                    commentList = document.querySelector('.comment-list');
                    commentCount = document.querySelector('.comment-count');
                    commentContent = document.querySelector('#comment_content');
                    commentList.insertAdjacentHTML('afterbegin', json.message);
                    commentCount.innerText = json.numberOfComments;
                    commentContent.value = '';
                  }

                case 10:
                case "end":
                  return _context.stop();
              }
            }
          }, _callee);
        }));

        return function (_x) {
          return _ref.apply(this, arguments);
        };
      }());
    }
  }]);

  return App;
}();

/***/ }),

/***/ "./assets/styles/app.css":
/*!*******************************!*\
  !*** ./assets/styles/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./assets/css/app.scss":
/*!*****************************!*\
  !*** ./assets/css/app.scss ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_bootstrap_dist_js_bootstrap_esm_js-node_modules_core-js_modules_es_array-4a3694"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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SyxLQUFmLEdBQXVCLEVBQXZCO2tCQUVIOztnQkF4QmtDO2dCQUFBO2tCQUFBO2NBQUE7WUFBQTtVQUFBO1FBQUEsQ0FBdkM7O1FBQUE7VUFBQTtRQUFBO01BQUE7SUEyQkg7Ozs7Ozs7Ozs7Ozs7OztBQzlGTDs7Ozs7Ozs7Ozs7O0FDQUEiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvYXBwLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9zdHlsZXMvYXBwLmNzcz8zZmJhIiwid2VicGFjazovLy8uL2Fzc2V0cy9jc3MvYXBwLnNjc3M/ZGQyOCJdLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgJy4vY3NzL2FwcC5zY3NzJztcbmltcG9ydCAnLi9zdHlsZXMvYXBwLmNzcyc7XG5pbXBvcnQge0Ryb3Bkb3dufSBmcm9tICdib290c3RyYXAnO1xuXG5jb25zdCAkID0gcmVxdWlyZSgnanF1ZXJ5Jyk7XG4vLyB0aGlzIFwibW9kaWZpZXNcIiB0aGUganF1ZXJ5IG1vZHVsZTogYWRkaW5nIGJlaGF2aW9yIHRvIGl0XG4vLyB0aGUgYm9vdHN0cmFwIG1vZHVsZSBkb2Vzbid0IGV4cG9ydC9yZXR1cm4gYW55dGhpbmdcbnJlcXVpcmUoJ2Jvb3RzdHJhcCcpO1xuZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignRE9NQ29udGVudExvYWRlZCcsICgpID0+IHtcbiAgICBuZXcgQXBwKCk7XG59KTtcblxuY2xhc3MgQXBwIHtcbiAgICBcbiAgICBjb2xvclNjaGVtZUxvY2FsU3RvcmFnZUtleTtcblxuICAgIGNvbnN0cnVjdG9yKCkge1xuICAgICAgICB0aGlzLmNvbG9yU2NoZW1lTG9jYWxTdG9yYWdlS2V5ID0gJ2Jsb2cvY29sb3JTY2hlbWUnO1xuXG4gICAgICAgIHRoaXMuY3JlYXRlQ29sb3JTY2hlbWVTZWxlY3RvcigpO1xuICAgICAgICB0aGlzLmVuYWJsZURyb3Bkb3ducygpO1xuICAgICAgICB0aGlzLmhhbmRsZUNvbW1lbnRGb3JtKCk7XG4gICAgfVxuXG4gICAgY3JlYXRlQ29sb3JTY2hlbWVTZWxlY3RvcigpIHtcbiAgICAgICAgaWYgKG51bGwgPT09IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5kcm9wZG93bi1hcHBlYXJhbmNlJykpIHtcbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIGNvbnN0IGN1cnJlbnRTY2hlbWUgPSBsb2NhbFN0b3JhZ2UuZ2V0SXRlbSh0aGlzLmNvbG9yU2NoZW1lTG9jYWxTdG9yYWdlS2V5KSB8fCAnYXV0byc7XG4gICAgICAgIGNvbnN0IGNvbG9yU2NoZW1lU2VsZWN0b3JzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLmRyb3Bkb3duLWFwcGVhcmFuY2UgYVtkYXRhLWNvbG9yLXNjaGVtZV0nKTtcbiAgICAgICAgY29uc3QgYWN0aXZlQ29sb3JTY2hlbWVTZWxlY3RvciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoYC5kcm9wZG93bi1hcHBlYXJhbmNlIGFbZGF0YS1jb2xvci1zY2hlbWU9XCIke2N1cnJlbnRTY2hlbWV9XCJdYCk7XG5cbiAgICAgICAgY29sb3JTY2hlbWVTZWxlY3RvcnMuZm9yRWFjaCgoc2VsZWN0b3IpID0+IHsgc2VsZWN0b3IuY2xhc3NMaXN0LnJlbW92ZSgnYWN0aXZlJykgfSk7XG4gICAgICAgIGFjdGl2ZUNvbG9yU2NoZW1lU2VsZWN0b3IuY2xhc3NMaXN0LmFkZCgnYWN0aXZlJyk7XG5cbiAgICAgICAgY29sb3JTY2hlbWVTZWxlY3RvcnMuZm9yRWFjaCgoc2VsZWN0b3IpID0+IHtcbiAgICAgICAgICAgIHNlbGVjdG9yLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKCkgPT4ge1xuICAgICAgICAgICAgICAgIGNvbnN0IHNlbGVjdGVkQ29sb3JTY2hlbWUgPSBzZWxlY3Rvci5nZXRBdHRyaWJ1dGUoJ2RhdGEtY29sb3Itc2NoZW1lJyk7XG4gICAgICAgICAgICAgICAgY29uc3QgcmVzb2x2ZWRDb2xvclNjaGVtZSA9ICdhdXRvJyA9PT0gc2VsZWN0ZWRDb2xvclNjaGVtZVxuICAgICAgICAgICAgICAgICAgICA/IG1hdGNoTWVkaWEoJyhwcmVmZXJzLWNvbG9yLXNjaGVtZTogZGFyayknKS5tYXRjaGVzID8gJ2RhcmsnIDogJ2xpZ2h0J1xuICAgICAgICAgICAgICAgICAgICA6IHNlbGVjdGVkQ29sb3JTY2hlbWU7XG5cbiAgICAgICAgICAgICAgICBkb2N1bWVudC5ib2R5LmNsYXNzTGlzdC5yZW1vdmUoJ2xpZ2h0LXNjaGVtZScsICdkYXJrLXNjaGVtZScpO1xuICAgICAgICAgICAgICAgIGRvY3VtZW50LmJvZHkuY2xhc3NMaXN0LmFkZCgnbGlnaHQnID09PSByZXNvbHZlZENvbG9yU2NoZW1lID8gJ2xpZ2h0LXNjaGVtZScgOiAnZGFyay1zY2hlbWUnKTtcbiAgICAgICAgICAgICAgICBkb2N1bWVudC5ib2R5LnN0eWxlLmNvbG9yU2NoZW1lID0gcmVzb2x2ZWRDb2xvclNjaGVtZTtcbiAgICAgICAgICAgICAgICBsb2NhbFN0b3JhZ2Uuc2V0SXRlbSh0aGlzLmNvbG9yU2NoZW1lTG9jYWxTdG9yYWdlS2V5LCBzZWxlY3RlZENvbG9yU2NoZW1lKTtcblxuICAgICAgICAgICAgICAgIGNvbG9yU2NoZW1lU2VsZWN0b3JzLmZvckVhY2goKG90aGVyU2VsZWN0b3IpID0+IHsgb3RoZXJTZWxlY3Rvci5jbGFzc0xpc3QucmVtb3ZlKCdhY3RpdmUnKSB9KTtcbiAgICAgICAgICAgICAgICBzZWxlY3Rvci5jbGFzc0xpc3QuYWRkKCdhY3RpdmUnKTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBlbmFibGVEcm9wZG93bnMoKSB7XG4gICAgICAgIGNvbnN0IGRyb3Bkb3duRWxlbWVudExpc3QgPSBbXS5zbGljZS5jYWxsKGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5kcm9wZG93bi10b2dnbGUnKSk7XG4gICAgICAgIGRyb3Bkb3duRWxlbWVudExpc3QubWFwKGZ1bmN0aW9uIChkcm9wZG93blRvZ2dsZUVsKSB7XG4gICAgICAgICAgICByZXR1cm4gbmV3IERyb3Bkb3duKGRyb3Bkb3duVG9nZ2xlRWwpO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBoYW5kbGVDb21tZW50Rm9ybSgpIHtcbiAgICAgICAgY29uc3QgY29tbWVudEZvcm0gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCdmb3JtLmNvbW1lbnQtZm9ybScpXG5cbiAgICAgICAgaWYgKG51bGwgPT09IGNvbW1lbnRGb3JtKSAge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG4gICAgICAgIGNvbW1lbnRGb3JtLmFkZEV2ZW50TGlzdGVuZXIoJ3N1Ym1pdCcsIGFzeW5jIChlKSA9PiB7XG5cbiAgICAgICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcblxuICAgICAgICAgICAgY29uc3QgcmVzcG9uc2UgPSBhd2FpdCBmZXRjaCgnL2FqYXgvY29tbWVudHMnLCB7XG4gICAgICAgICAgICAgICAgbWV0aG9kOiAnUE9TVCcsXG4gICAgICAgICAgICAgICAgYm9keTogbmV3IEZvcm1EYXRhKGUudGFyZ2V0KVxuICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgIGlmICghcmVzcG9uc2Uub2spIHtcbiAgICAgICAgICAgICAgICByZXR1cm47XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgICAgIGNvbnN0IGpzb24gPSBhd2FpdCByZXNwb25zZS5qc29uKCk7XG5cbiAgICAgICAgICAgIGlmIChqc29uLmNvZGUgPT09ICdDT01NRU5UX0FEREVEX1NVQ0NFU1NGVUxMWScpe1xuICAgICAgICAgICAgICAgIGNvbnNvbGUubG9nKFwiSGlcIik7XG4gICAgICAgICAgICAgICAgY29uc3QgY29tbWVudExpc3QgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuY29tbWVudC1saXN0Jyk7XG4gICAgICAgICAgICAgICAgY29uc3QgY29tbWVudENvdW50ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLmNvbW1lbnQtY291bnQnKTtcbiAgICAgICAgICAgICAgICBjb25zdCBjb21tZW50Q29udGVudCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNjb21tZW50X2NvbnRlbnQnKTtcbiAgICAgICAgICAgICAgICBjb21tZW50TGlzdC5pbnNlcnRBZGphY2VudEhUTUwoJ2FmdGVyYmVnaW4nLCBqc29uLm1lc3NhZ2UpO1xuICAgICAgICAgICAgICAgIGNvbW1lbnRDb3VudC5pbm5lclRleHQgPSBqc29uLm51bWJlck9mQ29tbWVudHM7XG4gICAgICAgICAgICAgICAgY29tbWVudENvbnRlbnQudmFsdWUgPSAnJztcbiAgICAgICAgICAgICAgICBcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG5cbiAgICB9XG59IiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307IiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbIkRyb3Bkb3duIiwiJCIsInJlcXVpcmUiLCJkb2N1bWVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJBcHAiLCJjb2xvclNjaGVtZUxvY2FsU3RvcmFnZUtleSIsImNyZWF0ZUNvbG9yU2NoZW1lU2VsZWN0b3IiLCJlbmFibGVEcm9wZG93bnMiLCJoYW5kbGVDb21tZW50Rm9ybSIsInF1ZXJ5U2VsZWN0b3IiLCJjdXJyZW50U2NoZW1lIiwibG9jYWxTdG9yYWdlIiwiZ2V0SXRlbSIsImNvbG9yU2NoZW1lU2VsZWN0b3JzIiwicXVlcnlTZWxlY3RvckFsbCIsImFjdGl2ZUNvbG9yU2NoZW1lU2VsZWN0b3IiLCJmb3JFYWNoIiwic2VsZWN0b3IiLCJjbGFzc0xpc3QiLCJyZW1vdmUiLCJhZGQiLCJzZWxlY3RlZENvbG9yU2NoZW1lIiwiZ2V0QXR0cmlidXRlIiwicmVzb2x2ZWRDb2xvclNjaGVtZSIsIm1hdGNoTWVkaWEiLCJtYXRjaGVzIiwiYm9keSIsInN0eWxlIiwiY29sb3JTY2hlbWUiLCJzZXRJdGVtIiwib3RoZXJTZWxlY3RvciIsImRyb3Bkb3duRWxlbWVudExpc3QiLCJzbGljZSIsImNhbGwiLCJtYXAiLCJkcm9wZG93blRvZ2dsZUVsIiwiY29tbWVudEZvcm0iLCJlIiwicHJldmVudERlZmF1bHQiLCJmZXRjaCIsIm1ldGhvZCIsIkZvcm1EYXRhIiwidGFyZ2V0IiwicmVzcG9uc2UiLCJvayIsImpzb24iLCJjb2RlIiwiY29uc29sZSIsImxvZyIsImNvbW1lbnRMaXN0IiwiY29tbWVudENvdW50IiwiY29tbWVudENvbnRlbnQiLCJpbnNlcnRBZGphY2VudEhUTUwiLCJtZXNzYWdlIiwiaW5uZXJUZXh0IiwibnVtYmVyT2ZDb21tZW50cyIsInZhbHVlIl0sInNvdXJjZVJvb3QiOiIifQ==