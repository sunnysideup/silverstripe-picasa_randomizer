<?php


/**
*@author Nicolaas [at] sunnysideup.co.nz
*
**/
Director::addRules(50, array(
	'randompicassaimage//$Action/$ID/$Batch' => 'PicasaRandomImage_Controller'
));
//copy the lines between the START AND END line to your /mysite/_config.php file and choose the right settings
//===================---------------- START picasarandomizer MODULE ----------------===================
// MUST SET
//PicasaRandomImage::set_google_username("mygoogleusername");

//OPTIONAL
//PicasaRandomImage::set_number_of_folders(3);
//PicasaRandomImage::set_number_of_images_per_folder(2);
//===================---------------- END picasarandomizer MODULE ----------------===================
