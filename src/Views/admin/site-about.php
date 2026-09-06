<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
$this->setVar('title', lang('Admin.Cells') . ' / ' . lang('Admin.Site About'));
$this->setVar('h1', lang('Admin.Cells'));
$this->setVar('description', lang('Admin.Site About'));
$this->setVar('activeMenu', 'site-about');

helper(['form']);

?>
<?php $this->extend('BasicApp\Admin\layout');?>
<?php $this->section('content');?>

<?= form_open('admin/site-about');?>

<?= view_cell('AdminInput', [
    'label' => $labels['title'] ?? 'title',
    'error' => $errors['title'] ?? null,
    'attributes' => [
        'name' => 'title',
        'value' => set_value('title', $data->title)
    ]
]);?>

<?= view_cell('AdminInputEditor', [
    'label' => $labels['content_html'] ?? 'content_html',
    'error' => $errors['content_html'] ?? null,
    'attributes' => [
        'name' => 'content_html',
        'rows' => 10
    ],
    'slot' => set_value('content_html', $data->content_html)
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