<?php
namespace App\Controller;

use Cake\Event\EventInterface;
use Cake\Http\Response;

class UserController extends AppController
{
    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->allowUnauthenticated(['login']);
    }

    public function login()
    {
        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();

        if ($this->request->is('post') && $result && $result->isValid()) {
            $user = $this->Authentication->getIdentity();

            if ($user->username === 'admin') {
                return $this->redirect(['prefix' => 'Admin', 'controller' => 'Dashboard', 'action' => 'index']);
            } else {
                $redirect = $this->request->getQuery('redirect', ['controller' => 'Users', 'action' => 'profile']);
                return $this->redirect($redirect);
            }
        }

        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Usuario o contraseña incorrectos.'));
        }
    }

}
