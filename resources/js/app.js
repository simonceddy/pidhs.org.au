
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

const { $ } = window;

$(document).ready(() => {
  $('#toggle-menu-button').click(() => {
    console.log('toggle menu');
    $('#main-menu').toggle(220);
  });
});
