<?php

namespace App\Repositories;

use App\Lancamento;

class LancamentoRepository
{
	private $model;

	public function __construct(Lancamento $model)
	{
		$this->model = $model;
	}

	public function findAll()
	{
		return $this->model->orderby('data')->paginate(10);
	}

	public function getLancamentos($tipo)
	{
	
		return $this->model::where('tipo', 2)->orderby('data')
               ->get();
	}

  public function findById($id)
  {
    return $this->model->find($id);
  }

  public function create(array $data)
  {
      return $this->model->create($data);
  }

  public function update(array $data, $id)
  {
    return $this->model->find($id)->update($data);
  }

  public function delete($id)
    {
        return $this->model->find($id)->delete();
    }


}
