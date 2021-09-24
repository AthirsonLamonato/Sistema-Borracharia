<?php
	namespace App\Entity;

	require_once 'app/Db/Database.php';

	use \App\Db\Database;
	use \PDO;
	
	class Tarefas{
		public $id;
		public $nome;
		public $valor;
		public $descricao;

		public function cadastrar(){

			//inserir projeto no db
			$objDatabase = new Database('tarefas');

			$this->id = $objDatabase->insert([
				'nome' => $this->nome,
				'valor' => $this->valor,	
				'descricao' => $this->descricao,
			]);
			return true;
		}

		public function atualizar(){
			return (new Database('tarefas'))->update('id = '.$this->id, [
				'nome' => $this->nome,
				'valor' => $this->valor,
				'descricao' => $this->descricao,
			]);
		}

		public function excluir(){
			return (new Database('tarefas'))->delete('id = '.$this->id);
		}

		public static function getTarefas(){
				return (new Database('tarefas'))->selectTarefas()->fetchAll(PDO::FETCH_CLASS);
		}

		public static function getTarefa($id){
			return (new Database('tarefas'))->selectTarefas($id)->fetchObject(self::class);
		}
		
	}

	class Vendas{
		public $id;
		public $placa;
		public $cor;
		public $tarefaid;
		public $tipo_pagamento;
		public $data_pagamento;
		public $data_servico;
		public $total_servico;
    public $observacao;

		public function cadastrar(){

			//inserir projeto no db
			$objDatabase = new Database('vendas');

			$this->id = $objDatabase->insert([
				'placa' => $this->placa,
				'cor' => $this->cor,
				'tarefaid' => $this->tarefaid,	
				'tipo_pagamento' => $this->tipo_pagamento,
				'data_pagamento' => $this->data_pagamento,
				'data_servico' => $this->data_servico,
				'total_servico' => $this->total_servico,
				'observacao' => $this->observacao
			]);
			return true;

		}

		public function atualizar(){
			return (new Database('vendas'))->update('id = '.$this->id, [
				'placa' => $this->placa,
				'cor' => $this->cor,
				'tarefaid' => $this->tarefaid,	
				'tipo_pagamento' => $this->tipo_pagamento,
				'data_pagamento' => $this->data_pagamento,
				'data_servico' => $this->data_servico,
				'total_servico' => $this->total_servico,
				'observacao' => $this->observacao
			]);
		}

		public function excluir(){
			return (new Database('vendas'))->delete('id = '.$this->id);
		}

		public static function AllTarefas(){
			return (new Database('tarefas'))->selectTarefas()->fetchAll(PDO::FETCH_CLASS);
		}

    public static function AllVendas(){
      return (new Database('vendas'))->selectVendasMensais()->fetchAll(PDO::FETCH_CLASS);
    }

		public static function getVendas(){
      return (new Database('vendas'))->selectVendas()->fetchAll(PDO::FETCH_CLASS);
    }

    public static function getVenda($id){
      return (new Database('vendas'))->selectVendas($id)->fetchObject(self::class);
    }
		
	}
