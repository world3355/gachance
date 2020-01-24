<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Home Controller
 *
 *
 * @method \App\Model\Entity\Home[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HomeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->set(compact('home'));
    }

}
