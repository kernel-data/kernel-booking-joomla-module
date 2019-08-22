<?php
/**
 * @version 1.0.0
 *
 * @package Kernel_Booking_Joomla_Plugin
 *
 * @author Kernel Data Limited <info@kernel.co.uk>
 *
 * @copyright Copyright (C) 2019 Kernel Data Limited. All rights reserved.
 *
 * @license GNU General Public License version 3 or later; see LICENSE.txt
 *
 */

defined('_JEXEC') or die;

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_kernelbooking', $params->get('layout', 'default'));
