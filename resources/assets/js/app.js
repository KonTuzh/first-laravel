
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

let	searchBtn      = document.getElementById('search-header-btn'),
		searchWrapper  = document.querySelector('.search-wrapper'),
		header         = document.getElementById("header"),
		sticky         = header.offsetTop;


window.addEventListener('DOMContentLoaded', function () {
	window.onscroll = function() {scrollPage()};

	searchBtn.addEventListener('click', () => {
		searchBtn.classList.toggle('mdi-magnify');
		searchBtn.classList.toggle('mdi-close');
		searchWrapper.classList.toggle('active');
	});
});

function scrollPage() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

/**
 * VUE
 */

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

import homepageFirstSlider from './components/slider_basic'
import popularWeekSlider from './components/slider_popularWeek'

new Vue(homepageFirstSlider)
new Vue(popularWeekSlider)
