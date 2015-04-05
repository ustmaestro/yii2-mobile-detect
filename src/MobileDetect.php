<?php
namespace ustmaestro\mobiledetect;
 
 
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;

$basePath = dirname(__FILE__);
require_once($basePath . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'Mobile_Detect.php');
 
class MobileDetect extends Component
{
	private $_mobileDetect;
	
    public function init()
    {
        $this->_mobileDetect = new \Mobile_Detect();
    }
	
    public function __call($name, $parameters)
    {
        return call_user_func_array(array($this->_mobileDetect, $name), $parameters);
    }

}