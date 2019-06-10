<?php 


    //includes
    define ("INCLUDES_PATH", realpath('../../includes/'));
    define ("INCLUDES_USERPROFILE_PATH", realpath('../../includes/userProfile'));
    define ("INCLUDES_EXPERIENCE_PATH", realpath('../../includes/experience'));
    define ("INCLUDES_EDUCATION_PATH", realpath('../../includes/education'));
    define ("INCLUDES_DEVELOPER_PATH", realpath('../../includes/developers'));
    define ("INCLUDES_LOGIN_PATH", realpath('../../includes/login'));
    define ("INCLUDES_FRIENDS_PATH", realpath('../../includes/friendslist'));
    define ("INCLUDES_VALIDATION_PATH", realpath('../../includes/validation'));
    define ("INCLUDES_STATUS_PATH", realpath('../../includes/status'));
    
    //models
    define ("MODELS_PATH", realpath('../../models/'));
    define ("MODELS_PROFILE_PATH", realpath('../../models/profile'));
    define ("MODELS_EXPERIENCE_PATH", realpath('../../models/experience'));
    define ("MODELS_EDUCATION_PATH", realpath('../../models/education'));
    define ("MODELS_LOGIN_PATH", realpath('../../models/login'));
    define ("MODELS_FRIENDS_PATH", realpath('../../models/friendsList'));
    define ("MODELS_STATUS_PATH", realpath('../../models/status'));
    define ("MODELS_COMMENT_PATH", realpath('../../models/comment'));
    //css
    define ("CSS_PATH", realpath('../../css/'));
    define ("CSS_PATH1", realpath('../css/'));
    define ("CSS_BOOTSTRAP_PATH", realpath('../../css/bootstrap-4.3.1'));
	
	define("ROOTPATH", "../../");

	$csspath = ROOTPATH. "css/";


	//images
	define ("IMAGES_PATH", realpath('../../images/'));

	//js files
	define ("JS_PATH", realpath('../../js/'));
    
    $paths = array(INCLUDES_PATH, MODELS_PATH, CSS_PATH, CSS_BOOTSTRAP_PATH, IMAGES_PATH, JS_PATH);
    set_include_path(implode($paths, PATH_SEPARATOR));

