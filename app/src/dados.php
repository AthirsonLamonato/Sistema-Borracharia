<?php
	namespace App\Entity;

	require_once 'app/Db/Database.php';


	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

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

		public static function getTarefas($where = null, $order = null, $limit = null){
				return (new Database('tarefas'))->select($where,$order,$limit)->fetchAll(PDO::FETCH_CLASS);
		}

		public static function getTarefa($id){
			return (new Database('tarefas'))->select('id = '.$id)->fetchObject(self::class);
		}
		
	}

	class Vendas{
		public $id;
		public $placa;
		public $cor;
		public $tarefa;
		public $tipo_pagamento;
		public $data_pagamento;
		public $data_servico;
		public $total_servico;

		public function cadastrar(){

			//inserir projeto no db
			$objDatabase = new Database('vendas');

			$this->id = $objDatabase->insert([
				'placa' => $this->placa,
				'cor' => $this->cor,
				'tarefa' => $this->tarefa,	
				'tipo_pagamento' => $this->tipo_pagamento,
				'data_pagamento' => $this->data_pagamento,
				'data_servico' => $this->data_servico,
				'total_servico' => $this->data_servico,
			]);
			return true;

		}

		public function atualizar(){
			return (new Database('vendas'))->update('id = '.$this->id, [
				'placa' => $this->placa,
				'cor' => $this->cor,
				'tarefa' => $this->tarefa,	
				'tipo_pagamento' => $this->tipo_pagamento,
				'data_pagamento' => $this->data_pagamento,
				'data_servico' => $this->data_servico,
				'total_servico' => $this->data_servico,
			]);
		}

		public function excluir(){
			return (new Database('vendas'))->delete('id = '.$this->id);
		}

		public static function AllTarefas(){
			return (new Database('tarefas'))->selectTarefas()->fetchAll(PDO::FETCH_CLASS);
		}

		public static function getVendas(){
				return (new Database('vendas'))->selectVendas()->fetchAll(PDO::FETCH_CLASS);
		}

		public static function getVenda($id){
			return (new Database('vendas'))->select('id = '.$id)->fetchObject(self::class);
		}
		
	}