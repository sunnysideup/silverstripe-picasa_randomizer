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
//===================---------------- END picasarandomizer MODULE ----------------===================
