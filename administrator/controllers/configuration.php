<?php
/**
 * @version     1.0.0
 * @package     com_kindLMS
 * @copyright   Copyright (C) 2012. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      KindFinch <admin@kindfinch.com> - 
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

/**
 * Configuration controller class.
 */
class KindLMSControllerConfiguration extends JControllerForm
{

    function __construct() {
        $this->view_list = 'configurations';
        parent::__construct();
    }

}