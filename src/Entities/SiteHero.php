<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteLanding\Entities;

use BasicApp\Core\SettingsEntity;
use CodeIgniter\HTTP\Files\UploadedFile;

class SiteHero extends SettingsEntity
{
    protected $attributes = [
        'title' => null,
        'description' => null,
        'background_image_path' => null,
        'background_image_original_name' => null
    ];

    public function rules() : array
    {
        return [
            'title' => [
                'label' => 'Admin.Site Hero Title',
                'rules' => ['max_length[255]', 'required']
            ],
            'description' => [
                'label' => 'Admin.Site Hero Description',
                'rules' => ['max_length[255]', 'required']
            ],
            'background_image' => [
                'label' => 'Admin.Site Hero Background Image',
                'rules' => ['uploaded', 'is_image', 'permit_empty']
            ],
            'background_image_clear' => [
                'rules' => ['permit_empty']
            ]
        ];
    }

    public function setBackgroundImage(UploadedFile $image)
    {
        if ($image->isValid())
        {
            $this->background_image_path = $this->upload($image, 'uploads/site-hero');
            $this->background_image_original_name = $image->getClientName();
        }
    }

    public function setBackgroundImageClear($value)
    {
        if ($value == 1)
        {
            $this->background_image_path = null;
            $this->background_image_original_name = null;
        }
    }

    public function save(?string $class = null) : bool
    {
        $return = parent::save($class);

        if ($return)
        {
            $this->unlinkChanged(['background_image_path']);
        }

        return $return;
    }
}