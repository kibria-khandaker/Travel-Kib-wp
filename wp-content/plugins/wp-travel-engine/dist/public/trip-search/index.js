!function(a,t,e,s){jQuery((function(a){const e=t.getElementById("sform-duration-slider-range");if(e){let s=e.dataset.range;s?(s=JSON.parse(s),s=[s?.min_duration||0,s?.max_duration||0]):s=[0,0],a(e).slider({range:!0,min:e.dataset.min||+s[0],max:e.dataset.max||+s[1],values:s.map((a=>parseInt(a))),slide:function(s,r){if(a("#min-duration").text(r.values[0]+` ${e.dataset.suffix||""}`),a("#max-duration").text(r.values[1]+` ${e.dataset.suffix||""}`),a("#min-duration-value").val(r.values[0]),a("#max-duration-value").val(r.values[1]),s.target.dataset.targetShow){var n=t.querySelector(s.target.dataset.targetShow);n&&(n.innerHTML=r.values.map((a=>`${a} ${e.dataset.suffix||""}`)).join("-"))}}})}const s=t.getElementById("sform-cost-slider-range");if(s){let e=s.dataset.range;e?(e=JSON.parse(e),e=[e?.min_price||0,e?.max_price||0]):e=[0,0],a(s).slider({range:!0,min:+e[0],max:+e[1],values:e.map((a=>parseInt(a))),slide:function(e,s){a("#min-cost").text(s.values[0]),a("#max-cost").text(s.values[1]);var r=s.values[0],n=s.values[1];if("undefined"!=typeof WTE_CC_convData&&WTE_CC_convData.reverse_rate){var i=parseFloat(WTE_CC_convData.reverse_rate);r=Math.round(r*i),n=Math.round(n*i)}if(a("#min-cost-value").val(r),a("#max-cost-value").val(n),e.target.dataset.targetShow){var o=t.querySelector(e.target.dataset.targetShow);o&&(o.innerHTML=[r,n].join("-"))}}})}a(t).on("click",".trip-duration strong",(function(t){a(this).siblings(".search-dur").toggleClass("show")})),a(t).on("click",".trip-cost strong",(function(t){a(this).siblings(".search-price").toggleClass("show")}))}))}(window,document,jQuery);