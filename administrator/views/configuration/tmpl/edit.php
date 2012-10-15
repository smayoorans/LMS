<?php
/**
 * @version     1.0.0
 * @package     com_kindLMS
 * @copyright   Copyright (C) 2012. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      KindFinch <admin@kindfinch.com> - 
 */

// no direct access
defined('_JEXEC') or die;

JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
// Import CSS
$document = JFactory::getDocument();
$document->addStyleSheet('components/com_kindLMS/assets/css/kindLMS.css');
?>
<script type="text/javascript">
	Joomla.submitbutton = function(task)
	{
		if (task == 'configuration.cancel' || document.formvalidator.isValid(document.id('configuration-form'))) {
			Joomla.submitform(task, document.getElementById('configuration-form'));
		}
		else {
			alert('<?php echo $this->escape(JText::_('JGLOBAL_VALIDATION_FORM_FAILED'));?>');
		}
	}
</script>

<form action="<?php echo JRoute::_('index.php?option=com_kindLMS&layout=edit&id='.(int) $this->item->id); ?>" method="post" name="adminForm" id="configuration-form" class="form-validate">
	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend><?php echo JText::_('COM_KINDLMS_LEGEND_CONFIGURATION'); ?></legend>
			<ul class="adminformlist">

            
			<li><?php echo $this->form->getLabel('systemname'); ?>
			<?php echo $this->form->getInput('systemname'); ?></li>

            
			<li><?php echo $this->form->getLabel('systemdescription'); ?>
			<?php echo $this->form->getInput('systemdescription'); ?></li>

            

            

            </ul>
		</fieldset>
	</div>


	<input type="hidden" name="task" value="" />
	<?php echo JHtml::_('form.token'); ?>
	<div class="clr"></div>

    <style type="text/css">
        /* Temporary fix for drifting editor fields */
        .adminformlist li {
            clear: both;
        }
    </style>
</form>