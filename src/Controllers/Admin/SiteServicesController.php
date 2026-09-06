<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteLanding\Controllers\Admin;

use App\Controllers\Admin\BaseController;
use BasicApp\SiteLanding\Entities\SiteServices;

class SiteServicesController extends BaseController
{
    public function index()
    {
        $entity = new SiteServices;

        if ($this->request->is('post')) 
        {
            if ($this->validateData($this->request->getPost(), $entity->rules())) 
            {
                $entity->fill($this->validator->getValidated());

                $entity->save();

                $this->session->setFlashdata('success', lang($this->messageSaved));
                    
                return redirect()->to('admin/site-services');
            }
            else
            {
                $errors = $this->validator->getErrors();
            }
        }

        return view('BasicApp\SiteLanding\admin/site-services', [
            'data' => $entity,
            'labels' => $entity->labels(),
            'errors' => $errors ?? []
        ]);
    }
}