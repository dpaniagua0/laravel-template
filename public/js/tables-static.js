/*! light-blue - v3.2.1 - 2016-01-13 */$(function(){function a(){$(".widget").widgster(),$(".sparkline").each(function(){$(this).sparkline("html",$(this).data())}),$(".js-progress-animate").animateProgressBar()}a(),PjaxApp.onPageLoad(a)});