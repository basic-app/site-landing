<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteLanding\Controllers\Admin;

use App\Controllers\Admin\BaseController;
use BasicApp\SiteLanding\Entities\SiteAbout;

class SiteAboutController extends BaseController
{
    public function index()
    {
        $entity = new SiteAbout;

        if ($this->request->is('post')) 
        {
            if ($this->validateData($this->request->getPost(), $entity->rules())) 
            {
                $entity->fill($this->validator->getValidated());

                $entity->save();

                $this->session->setFlashdata('success', lang($this->messageSaved));
                    
                return redirect()->to('admin/site-about');
            }
            else
            {
                $errors = $this->validator->getErrors();
            }
        }

        return view('BasicApp\SiteLanding\admin/site-about', [
            'data' => $entity,
            'labels' => $entity->labels(),
            'errors' => $errors ?? []
        ]);
    }
}