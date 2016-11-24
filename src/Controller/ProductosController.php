<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Productos Controller
 *
 * @property \App\Model\Table\ProductosTable $Productos
 */
class ProductosController extends AppController
{

	 public function isAuthorized($user)
  {
    if(isset($user['role']) and $user['role'] == 'user')
    {
      if(in_array($this->request->action, ['index', 'view']))
      {
        return true;
      }
    }
    return parent::isAuthorized($user);
  }
  



	public function index()
	{
		//$productos = $this->paginate($this->Productos);
		//$this->set('productos', $productos);


		$productos = $this->paginate($this->Productos->find()
		->contain('Categorias'));

		$this->set(compact('productos'));



	}

	public function view($id)
	{
		
		 $producto = $this->Productos->get($id);
    	$this->set('producto', $producto);
	}

	public function add()
	{

		$this->loadModel('Categorias');
		$producto = $this->Productos->newEntity();

		if($this->request->is('post'))
		{
			$producto = $this->Productos->patchEntity($producto, $this->request->data);

			if($this->Productos->save($producto))
			{
				$this->Flash->success('El producto se creó correctamente.');
				return $this->redirect(['controller' => 'Productos', 'action' => 'index']);
			}
			else
			{
				$this->Flash->error('El producto no pudo ser creado, intente nuevamente');
			}
		}

		/*$categorias = $this->Productos->Categorias->find('list');
		$this->set('categorias', $categorias);
		$this->set(compact('producto'));*/
		$categorias = $this->Productos->Categorias->find('list');

		$this->set(compact('producto', 'categorias'));
	}


	public function edit($id = null)
	{
		$producto = $this->Productos->get($id);

		if($this->request->is(['patch', 'post', 'put']))
		{
			$producto = $this->Productos->patchEntity($producto, $this->request->data);
			if ($this->Productos->save($producto))
			{
				$this->Flash->success('El producto ha sido modificado');
				return $this->redirect(['action' => 'index']);
			}
			else
			{
				$this->Flash->error('El producto no pudo ser modificado, intente nuevamente');				
			}
		}
		$categorias = $this->Productos->Categorias->find('list');

		$this->set(compact('producto', 'categorias'));
		//$this->set(compact('producto'));
	}

	public function delete($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$producto = $this->Productos->get($id);

		if($this->Productos->delete($producto))
		{
			$this->Flash->success('El producto ha sido eliminado');
		}
		else
		{
		$this->Flash->error('El producto no pudo ser eliminado, intente nuevamente');
		}

		return $this->redirect(['action' => 'index']);
	}

}
