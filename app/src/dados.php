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
		public $cor;
		public $placa;
		public $tarefa;
    public $observacao;
		public $data_servico;
		public $total_servico;
		public $tipo_pagamento;
		public $data_pagamento;

		public function cadastrar(){

			//inserir projeto no db
			$objDatabase = new Database('vendas');

			$this->id = $objDatabase->insert([
				'cor' => $this->cor,
				'placa' => $this->placa,
				'tarefa' => $this->tarefa,	
				'observacao' => $this->observacao,
				'data_servico' => $this->data_servico,
				'total_servico' => $this->total_servico,
				'tipo_pagamento' => $this->tipo_pagamento,
				'data_pagamento' => $this->data_pagamento
			]);
			return true;

		}

		public function atualizar(){
			return (new Database('vendas'))->update('id = '.$this->id, [
				'cor' => $this->cor,
				'placa' => $this->placa,
				'tarefa' => $this->tarefa,
				'observacao' => $this->observacao,
				'data_servico' => $this->data_servico,
				'total_servico' => $this->total_servico,
				'tipo_pagamento' => $this->tipo_pagamento,
				'data_pagamento' => $this->data_pagamento
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
