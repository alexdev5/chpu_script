jQuery(document).ready(function($){var e,t,n,l=function(){$(".map-link").hover(function(){e=$(this).data("id");var t=document.getElementById("map"),l=t.getElementById(e);n=document.defaultView.getComputedStyle(l,null).getPropertyValue("fill"),l.setAttribute("style","fill: #c88c75;"),s(e),u(e)},function(){var t=document.getElementById("map"),l=t.getElementById(e);l.setAttribute("style","fill:"+n),o(e),c(e)})},i=function(){$(".legend-items li p").hover(function(){$(this).hasClass("legend-item")&&(t=$(this).data("name"),$(this).addClass("legend-map-link"),a(t),u(t))},function(){$(this).hasClass("legend-item")&&($(this).removeClass("legend-map-link"),d(t),c(t))})},a=function(e){var t=document.getElementById("map"),l=t.getElementById(e);n=document.defaultView.getComputedStyle(l,null).getPropertyValue("fill"),l.setAttribute("style","fill: #c88c75;")},d=function(e){var t=document.getElementById("map"),l=t.getElementById(e);l.setAttribute("style","fill:"+n)},s=function(e){var t=$("#legend-ul").find("[data-name='"+e+"']");t.addClass("legend-map-link")},o=function(e){var t=$("#legend-ul").find("[data-name='"+e+"']");t.removeClass("legend-map-link")},u=function(e){e+="-tt";var t=$("#map").find("."+e);t.css({display:"block",opacity:"100"}),t.hover(function(){$(this).css({display:"block",opacity:"100"})},function(){$(this).css({display:"none",opacity:"0"})})},c=function(e){e+="-tt";var t=$("#map").find("."+e);t.css({display:"none",opacity:"0"})};l(),i()});