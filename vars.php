<?php
$js_custom_vars = array(
	'google_conversion_id' => 970727982,
	'google_custom_params' => 'window.google_tag_params',
	'google_remarketing_only' => true
);

$javascript = array(
	'head' => array(

		'external' => array(
            "https://code.jquery.com/jquery-3.6.0.min.js",
			"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js",
			"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js",
            "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js",
		),
		'inline' => array()
	),
	'bottom' => array(
		'external' => array(
			"/assets/js/header_blu.js",
		),
		'inline' => array()
	)
);

$stylesheets = array(

	'external' => array(
		// "/assets/css/search.css",
		"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css",
		"/assets/css/header_blu.css",
		"/assets/css/mainbody_blu.css",
		"/assets/css/footer_blu.css",
		"https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap",
        "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css",
	),
	'inline' => array(
	)
);