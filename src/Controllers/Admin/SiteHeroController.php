<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteLanding\Controllers\Admin;

use App\Controllers\Admin\BaseResourcePresenter;
use BasicApp\SiteLanding\Entities\SiteHero;

class SiteHeroController extends BaseResourcePresenter
{
    public function index()
    {
        $entity = new SiteHero;

        if ($this->request->is('post')) 
        {
            if ($this->validateData($this->request->getPost(), $entity->rules())) 
            {
                $entity->fill(array_merge($this->validator->getValidated(), [
                    'background_image' => $this->request->getFile('background_image')
                ]));

                $entity->save();

                $this->session->setFlashdata('success', lang($this->messageSaved));
                    
                return redirect()->to('admin/site-hero');
            }
            else
            {
                $errors = $this->validator->getErrors();
            }
        }

        return view('BasicApp\SiteLanding\admin/site-hero', [
            'data' => $entity,
            'labels' => $entity->labels(),
            'errors' => $errors ?? []
        ]);
    }
}