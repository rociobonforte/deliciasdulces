<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Compras Controller
 *
 * @property \App\Model\Table\ComprasTable $Compras
 */
class ComprasController extends AppController
{



	 public function isAuthorized($user)
  {
    if(isset($user['role']) and $user['role'] == 'user')
    {
      if(in_array($this->request->action, ['agregar', 'index', 'delete', 'edit', 'view']))
      {
        return true;
      }
    }
    return parent::isAuthorized($user);
  }

	public function index()
	{
		
        $this->paginate = [
            'conditions' => ['id_user' => $this->Auth->user('id')],
            'order' => ['id' => 'desc']
        ];
   

		 $compras = $this->paginate($this->Compras->find()
			->contain('Productos')
			->contain('Users'));

			$this->set(compact('compras'));

	}

	public function indexAdm()
	{
		
		/*$compras = $this->paginate($this->Compras);
		$this->set('compras', $compras);*/


		 $compras = $this->paginate($this->Compras->find()
			->contain('Productos')
			->contain('Users'));

			$this->set(compact('compras'));

	}


	public function view($id)
	{
		 $compra = $this->Compras->get($id);
    	$this->set('compra', $compra);
	}

	public function add()
	{
		$compra = $this->Compras->newEntity();

		if($this->request->is('post'))
		{
			$compra = $this->Compras->patchEntity($compra, $this->request->data);

			if($this->Compras->save($compra))
			{
				$this->Flash->success('La compra se creó correctamente.');
				return $this->redirect(['controller' => 'Compras', 'action' => 'index']);
			}
			else
			{
				$this->Flash->error('La compra no pudo ser creado, intente nuevamente');
			}
		}
		$this->set(compact('compra'));
	}


	public function edit($id = null)
	{
		$compra = $this->Compras->get($id);

		if($this->request->is(['patch', 'post', 'put']))
		{
			$compra = $this->Compras->patchEntity($compra, $this->request->data);
			if ($this->Compras->save($compra))
			{
				$this->Flash->success('La compra  ha sido modificado');
				return $this->redirect(['action' => 'index']);
			}
			else
			{
				$this->Flash->error('La compra no pudo ser modificado, intente nuevamente');				
			}
		}

		$this->set(compact('compra'));
	}

	public function delete($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$compra = $this->Compras->get($id);

		if($this->Compras->delete($compra))
		{
			$this->Flash->success('La compra ha sido eliminado');
		}
		else
		{
		$this->Flash->error('La compra no pudo ser eliminado, intente nuevamente');
		}

		return $this->redirect(['action' => 'indexAdm']);
	}




	public function agregar($id = null)

	{
		

		$this->loadModel('Productos');
	$this->loadModel('Users');

	$compras = $this->Compras->newEntity();

	$user = $this->Auth->user('id');

	$producto = $this->Productos->get($id);

	

	$compras = $this->Compras->patchEntity($compras ,$this->request->data);
	$compras->id_user = $user;
	$compras->id_producto = $producto['id'];

//rodri
	//$compras->cantidad = 1;
	$this->request->data['cantidad'];
	$compras->precio = $producto['precio_actual'] * $compras->cantidad;
	$compras->pedido = date("Y-m-d H:i:s");

	if ($this->Compras->save($compras)) 
	{
	$this->Flash->success('La compra se ha realizado con exito');
	return $this->redirect(['controller' => 'productos', 'action' => 'index']); 
	}
	else
	{
	$this->Flash->error('La compra no se ha podido realizar, por favor intente nuevamente');
	return $this->redirect(['controller' => 'productos', 'action' => 'index']); 
	}

}
}

