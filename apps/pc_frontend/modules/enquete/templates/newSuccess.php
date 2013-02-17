<?php
$options = array();
$options['title'] = __('Create a new enquete');
$options['url'] = url_for('enquete_create', $enquete);
$options['isMultipart'] = true;
op_include_form('enquete_form', $form, $options);
?>
