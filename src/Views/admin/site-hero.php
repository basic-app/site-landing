<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
$this->setVar('title', lang('Admin.Cells') . ' / ' . lang('Admin.Site Hero'));
$this->setVar('h1', lang('Admin.Cells'));
$this->setVar('description', lang('Admin.Site Hero'));
$this->setVar('activeMenu', 'site-hero');

helper(['form']);

?>
<?php $this->extend('BasicApp\Admin\layout');?>
<?php $this->section('content');?>

<?= form_open_multipart('admin/site-hero');?>

<?= view_cell('AdminInput', [
    'label' => $labels['title'] ?? 'title',
    'error' => $errors['title'] ?? null,
    'attributes' => [
        'name' => 'title',
        'value' => set_value('title', $data->title)
    ]
]);?>

<?= view_cell('AdminInputImage', [
    'label' => $labels['background_image'] ?? 'background_image',
    'error' => $errors['background_image'] ?? null,
    'attributes' => [
        'name' => 'background_image',
        'value' => $data->background_image_original_name
    ],
    'url' => !empty($data->background_image_path) ? base_url($data->background_image_path) : null
]);?>

<?= view_cell('AdminValidationErrors', [
    'errors' => $errors
]);?>

<?= view_cell('AdminFormButton', [
    'label' => lang('Admin.Save'),
    'attributes' => [
        'type' => 'submit'
    ]
]);?>

<?= form_close();?>

<?php $this->endSection();?>