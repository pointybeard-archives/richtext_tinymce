/*
	Implements tinyMCE for available textareas. The tinyMCE.init call can be
	extended with further buttons/configuration options. For details, see:

	http://wiki.moxiecode.com/index.php/TinyMCE:Configuration
*/

tinyMCE.init({
	mode                           : "textareas",
	theme                          : "advanced",
	editor_selector                : "tinymce",
	theme_advanced_toolbar_location: "top",
	theme_advanced_toolbar_align   : "left",
	theme_advanced_buttons1        : "bold,italic,underline,|,formatselect,|,bullist,numlist,|,blockquote,sub,sup,|,link,unlink,image,|,code,cleanup",
	theme_advanced_buttons2        : "",
	theme_advanced_buttons3        : "",
	entities                       : ""
});