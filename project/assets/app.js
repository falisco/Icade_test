/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/global.scss';

// start the Stimulus application
import './bootstrap';

const $ = require('jquery');
const bootstrap = require("bootstrap");



$(document).ready(function () {
    $(document).on('change', '.genre.form-check-input', function (e) {
        var ids = [];
        $('.genre.form-check-input').each(function (i) {
            if ($(this).is(':checked')) {
                ids.push($(this).attr('id'));
            }
        });
        ids = 'ids=' + ids.join(',');

        $.get(route_genre + '?' + ids, function (data) {
            $('.movies-container').html(data);
        });
    });

    $(document).on('click', '.show-details', function (e) {
        var base_url = window.location.origin;
        var url = $(this).attr('data-url');

        $.get(base_url + url, function (data) {
            $('#movie-details .modal-body').html(data);
            var myModal = new bootstrap.Modal(document.getElementById('movie-details'));
            myModal.show();
        });
    });
});
