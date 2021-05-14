// Load tinyMce
require('tinymce/tinymce');
require('tinymce/themes/silver');
require('tinymce/plugins/paste');
require('tinymce/plugins/advlist');
require('tinymce/plugins/autolink');
require('tinymce/plugins/lists');
require('tinymce/plugins/link');
require('tinymce/plugins/image');
require('tinymce/plugins/charmap');
require('tinymce/plugins/print');
require('tinymce/plugins/preview');
require('tinymce/plugins/anchor');
require('tinymce/plugins/textcolor');
require('tinymce/plugins/searchreplace');
require('tinymce/plugins/visualblocks');
require('tinymce/plugins/code');
require('tinymce/plugins/fullscreen');
require('tinymce/plugins/insertdatetime');
require('tinymce/plugins/media');
require('tinymce/plugins/table');
require('tinymce/plugins/contextmenu');
require('tinymce/plugins/code');
require('tinymce/plugins/help');
require('tinymce/plugins/wordcount');
require('tinymce/plugins/autoresize');
require('tinymce/plugins/directionality');

tinymce.init({
    directionality : 'rtl',
    convert_urls: false,
    selector: '.tinymce',
    height: "300",
    images_upload_url: baseUrl + '/panel/tinymce',
    plugins: ['code', 'paste', 'link', 'image', 'lists', 'directionality', 'table'],
    branding: false,
    toolbar: [
        'alignleft aligncenter alignright alignjustify alignnone | bold italic underline strikethrough |' +
        'subscript superscript | undo redo | cut copy | anchor ltr rtl | image link unlink | table tabledelete |' +
        'bullist numlist | code'
    ],
});
