require('../../../../../../resources/js/app');

// Load sweetAlert
window.Swal = require('sweetalert2');

// Load Select2
window.select2 = require('select2/dist/js/select2.full');
require('select2/dist/js/i18n/fa');

// Load alertify
window.alertify = require('alertifyjs/build/alertify.min');

// Load croppie
require('croppie/croppie');

// Load dateTimePicker
require('md.bootstrappersiandatetimepicker/src/jquery.md.bootstrap.datetimepicker');

window['initialize_datepicker'] = function( target ){
    var textSelector = '#' + target.find('.dp_text').attr('id'); //display only
    var dateSelector = '#' + target.find('.dp_date').attr('id'); //actual date
    var options = {
        targetTextSelector: textSelector,
        targetDateSelector: dateSelector,
        dateFormat: 'yyyy-MM-dd',
    };

    if( typeof target.data('has-time') != 'undefined' ){
        options.enableTimePicker = true;
        options.dateFormat = 'yyyy-MM-dd HH:mm:ss';
    }
    if( target.find('.dp_date').val() != '' ){
        options.selectedDate = new Date( target.find('.dp_date').val() );
    }

    target.find('.dp_handle').MdPersianDateTimePicker(options);
}

$('.datepicker').each(function() {
    initialize_datepicker( $(this) );
});

// Sidebar Tree View Menu
(function () {
	"use strict";

	var treeviewMenu = $('.app-menu');

	// Toggle Sidebar
	$('[data-toggle="sidebar"]').click(function(event) {
		event.preventDefault();
		$('.app').toggleClass('sidenav-toggled');
	});

	// Activate sidebar treeview toggle
	$("[data-toggle='treeview']").click(function(event) {
		event.preventDefault();
		if(!$(this).parent().hasClass('is-expanded')) {
			treeviewMenu.find("[data-toggle='treeview']").parent().removeClass('is-expanded');
		}
		$(this).parent().toggleClass('is-expanded');
	});

	// Set initial active toggle
	$("[data-toggle='treeview.'].is-expanded").parent().toggleClass('is-expanded');

	//Activate bootstrip tooltips
	$("[data-toggle='tooltip']").tooltip();

})();
