<?php

return array(


/**
* If you have a different user model
* please specific it here
*/
'model' => 'User',

/**
* If you need to extend the model class of 
* Notifynder you just need to change this line
* With the path / NameSpace of your model and extend it
* to Fenos\Notifynder\Models\Notification
*/
'notification_model' => 'Fenos\Notifynder\Models\Notification',

/**
* If you wish to have the translation file in another path
* rather then config file of the package, you can just switch
* the path on this line with the path of your file
*/
'translation_file'	 => Config::get('notifynder::translations')

);