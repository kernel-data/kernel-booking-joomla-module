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

?>

<div id="kernel-booking" style="width: 100%; max-width: 100%"></div>
<script src="https://account.kernelbooking.co.uk/embed.js"></script>
<script>
    kernel.init({
        client: '<?php echo $params->get('client'); ?>',
        el: '#kernel-booking',
        page: '<?php echo $params->get('page'); ?>',
        detailid: '<?php echo $params->get('category_id'); ?>',
        category: '<?php echo $params->get('detail_id'); ?>'
    })
</script>




