(self.webpackChunkcodefresh=self.webpackChunkcodefresh||[]).push([[522,917],{8097:function(e,n,r){"use strict";r(9755),r(3342),r(7090),r(2077),r(2442),r(3002),r(980),r(1052),r(2223)},2223:function(e,n,r){"use strict";r(334);var t=r(2077),i=r.n(t),o="body.pricing";document.addEventListener("DOMContentLoaded",(function(){if(document.querySelector(o)){var e=document.querySelector("#basic .plan__price"),n=document.querySelector("#pro .plan__price"),r=document.querySelector("#basicPrice"),t=document.querySelectorAll(".plan__input--basic"),a=document.querySelector("#totalSteps-basic"),u=jQuery("#basicSteps-sm"),c=jQuery("#basicSteps-md"),d=jQuery("#basicSteps-lg"),f=jQuery("#basicRunner"),s=document.querySelector("#proPrice"),m=document.querySelectorAll(".plan__input--pro"),p=document.querySelector("#totalSteps-pro"),l=jQuery("#proRunner"),v=jQuery("#proSteps-sm"),g=jQuery("#proSteps-md"),S=jQuery("#proSteps-lg"),h=function(e){return parseInt(e.attr("data-price"))*e.prop("value")},L=function(e){return parseInt(e.attr("data-price"))*(e.prop("value")-1)},b=function(e){return parseInt(e.attr("data-price"))},_=function(e,n,r,t){var i=parseInt(e),o=parseInt(n.data("ionRangeSlider").old_from),a=parseInt(r.data("ionRangeSlider").old_from);t.innerHTML=i+o+a},y=function(e,n){return n>0?(e.classList.contains("is-free")&&e.classList.remove("is-free"),i()(n).format("0,0")):(e.classList.contains("is-free")||e.classList.add("is-free"),"FREE")},x=function(e){return i()(e).format("0,0")},R=function(){var t=b(u)*(u.prop("value")-1),i=b(c)*c.prop("value"),o=b(d)*d.prop("value"),a=b(v)*v.prop("value"),f=b(g)*g.prop("value"),m=b(S)*S.prop("value");r.innerHTML=y(e,t+i+o),s.innerHTML=y(n,a+f+m)},k=document.querySelector(".switch-button-case.right"),M=document.querySelector(".switch-button-case.left"),H=document.querySelector(".active--billed");M.addEventListener("click",(function(){return k.classList.remove("active-case"),M.classList.add("active-case"),H.style.left="1px",function(e){for(var n=0;n<e.length;n++){var r=e[n];0===n&&r.setAttribute("data-price",19),1===n&&r.setAttribute("data-price",49),2===n&&r.setAttribute("data-price",139)}}(t),function(e){for(var n=0;n<e.length;n++){var r=e[n];0===n&&r.setAttribute("data-price",34),1===n&&r.setAttribute("data-price",89),2===n&&r.setAttribute("data-price",269)}}(m),void R()}),!1),k.addEventListener("click",(function(){return k.classList.add("active-case"),M.classList.remove("active-case"),H.style.left="50.3%",function(e){for(var n=0;n<e.length;n++){var r=e[n];0===n&&r.setAttribute("data-price",29),1===n&&r.setAttribute("data-price",69),2===n&&r.setAttribute("data-price",199)}}(t),function(e){for(var n=0;n<e.length;n++){var r=e[n];0===n&&r.setAttribute("data-price",49),1===n&&r.setAttribute("data-price",129),2===n&&r.setAttribute("data-price",389)}}(m),void R()}),!1),u.ionRangeSlider({min:0,max:20,from:0,hide_min_max:!0,skin:"round",onChange:function(e){return _(e.from,c,d,a)},onFinish:function(n){var t=u.data("ionRangeSlider"),i=h(c),o=h(d),a=b(u)*(n.from-1);r.innerHTML=y(e,a+i+o),0!==n.from?r.innerHTML=y(e,a+i+o):(r.innerHTML=y(e,i+o),t.update({from:0}))},onUpdate:function(e){return _(e.from,c,d,a)}}),c.ionRangeSlider({min:0,max:20,from:0,hide_min_max:!0,skin:"round",onChange:function(e){return _(e.from,u,d,a)},onFinish:function(n){var t=c.data("ionRangeSlider"),i=u.prop("value"),o=d.prop("value"),a=L(u),f=h(d),s=b(c),m=s*n.from;r.innerHTML=y(e,m+a+f),0==i&&0==o&&0==n.from&&(t.update({from:1}),r.innerHTML=y(e,s+a+f))},onUpdate:function(e){return _(e.from,u,d,a)}}),d.ionRangeSlider({min:0,max:20,from:0,hide_min_max:!0,skin:"round",onChange:function(e){return _(e.from,u,c,a)},onFinish:function(n){var t=d.data("ionRangeSlider"),i=u.prop("value"),o=c.prop("value"),a=L(u),f=h(c),s=b(d),m=s*n.from;r.innerHTML=y(e,m+a+f),0==i&&0==o&&0==n.from&&(t.update({from:1}),r.innerHTML=y(e,s+a+f))},onUpdate:function(e){return _(e.from,u,c,a)}}),f.ionRangeSlider({min:0,max:1,from:1,hide_min_max:!0,from_fixed:!0,to_fixed:!0,skin:"round"}),v.ionRangeSlider({min:0,max:20,from:1,hide_min_max:!0,skin:"round",onChange:function(e){return _(e.from,g,S,p)},onFinish:function(e){var n=v.data("ionRangeSlider"),r=g.prop("value"),t=S.prop("value"),i=h(g),o=h(S),a=b(v),u=a*e.from;s.innerHTML=x(u+i+o),0==r&&0==t&&0==e.from&&(n.update({from:1}),s.innerHTML=x(a+i+o))},onUpdate:function(e){return _(e.from,g,S,p)}}),g.ionRangeSlider({min:0,max:20,from:0,hide_min_max:!0,skin:"round",onChange:function(e){return _(e.from,v,S,p)},onFinish:function(e){var n=g.data("ionRangeSlider"),r=v.prop("value"),t=S.prop("value"),i=h(v),o=h(S),a=b(g),u=a*e.from;s.innerHTML=x(u+i+o),0==r&&0==t&&0==e.from&&(n.update({from:1}),s.innerHTML=x(a+i+o))},onUpdate:function(e){return _(e.from,g,S,p)}}),S.ionRangeSlider({min:0,max:20,from:0,hide_min_max:!0,skin:"round",onChange:function(e){return _(e.from,v,g,p)},onFinish:function(e){var n=S.data("ionRangeSlider"),r=v.prop("value"),t=g.prop("value"),i=h(v),o=h(g),a=b(S),u=a*e.from;s.innerHTML=x(u+i+o),0==r&&0==t&&0==e.from&&(n.update({from:1}),s.innerHTML=x(a+i+o))},onUpdate:function(e){return _(e.from,g,S,p)}}),l.ionRangeSlider({min:0,max:1,from:1,hide_min_max:!0,from_fixed:!0,to_fixed:!0,skin:"round"});var T=document.getElementById("chatLink");T&&T.addEventListener("click",(function(e){Intercom("show"),e.preventDefault()}))}}))},3342:function(){document.addEventListener("lazybeforeunveil",(function(e){var n=e.target.getAttribute("data-bg");n&&(e.target.style.backgroundImage="url("+n+")")}))},4455:function(){},9086:function(){},1930:function(){}},function(e){"use strict";var n=function(n){return e(e.s=n)};e.O(0,[880,999,431,898],(function(){return n(8097),n(4455),n(9086),n(1930)}));e.O()}]);
//# sourceMappingURL=main.js.map