(()=>{"use strict";const t=(t,e)=>{let l,s;t?(l=t?.target.closest(".gkit-nav-link"),s=l?.closest(".gkit-tab-nav")):(l=e.querySelector(".gkit-nav-link.active"),s=l?.closest(".gkit-tab-nav")),(()=>{const{offsetWidth:t,offsetLeft:e,offsetHeight:a,offsetTop:o}=l;s.style.setProperty("--left",`${e}px`),s.style.setProperty("--width",`${t}px`),s.style.setProperty("--top",`${o}px`),s.style.setProperty("--height",`${a}px`)})()};window.addEventListener("load",(()=>{const e=document.querySelectorAll(".background_slide_style"),l=document.querySelectorAll(".gkit-tab-wraper");for(let s=0;s<l.length;s++){const a=l[s],o=a.getAttribute("data-event"),i=a.getAttribute("data-url"),r=window.location.hash,c=a.querySelectorAll(".gkit-tab-pane");if(""===r)for(let t=0;t<c.length;t++){const e=c[t];0!==t?e.classList.remove("active"):e.classList.add("active")}if("true"===i&&""!==r){const t=a.querySelectorAll(".active");for(let e=0;e<t.length;e++)t[e].classList.remove("active");let e=-1;const l=a.querySelectorAll("a");for(let t=0;t<l.length;t++){const s=l[t];s.dataset.hash===r&&(s.classList.add("active"),e=t)}c[e].classList.add("active")}const n=a.querySelectorAll(".gkit-nav-link");for(let l=0;l<n.length;l++)n[l].addEventListener(o,(s=>{const a=s.target.closest(".gkit-nav-link"),o=a.closest(".gkit-tab-wraper"),i=o.getAttribute("data-url"),r=a.closest(".gkit-tab-nav").querySelectorAll(".gkit-nav-link");if(Array.from(r).filter((t=>t.nodeType===Node.ELEMENT_NODE&&t!==a)).map((t=>t.classList.remove("active"))),a.classList.add("active"),"true"===i){const t=a.getAttribute("data-hash");window.location.hash=t}const c=o.querySelectorAll(".gkit-tab-pane");for(let t=0;t<c.length;t++){const e=c[t];e.classList.remove("active"),t===l&&e.classList.add("active")}null!==e&&t(s,document)}))}if(null!==e)for(let l=0;l<e.length;l++){const s=e[l];t(null,s)}}))})();