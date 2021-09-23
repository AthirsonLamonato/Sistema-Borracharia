<?php
	namespace App\Db;

	use \PDO;

	class Database{
		const HOST = 'localhost';
		const NAME = 'borracharia';
		const USER = 'root';
		const PASS = '';

		private $table;
		private $connection;

		function __construct($table = null){
			$this->table = $table;
			$this->setConnection();
		}

		private function setConnection(){
			try{
				$this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME, self::USER, self::PASS);
				$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}catch(PDOException $e){
				die('ERROR: '.$e->setMessage());
			}
		}

		public function execute($query, $params = []){
			try{
				$statement = $this->connection->prepare($query);
				$statement->execute($params);
				return $statement;
			}catch(PDOException $e){
				die('ERROR: '.$e->setMessage());
			}
		}

		public function insert($values){			
			$fields = array_keys($values);
			$binds = array_pad([], count($values), '?');
			
			$query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',', $binds).')';


			$this->execute($query, array_values($values));

			return $this->connection->lastInsertId();
		}

		public function delete($where){
			//monta a query
			$query = 'DELETE FROM '.$this->table.' WHERE '.$where;

			//executa a query
			$this->execute($query);

			return true;
		}
		
		public function selectVendas($id = 0){
      $valor = $id;
      $valor = str_replace(' ', '%', strtoupper($valor));
      //monta a query
      $query = 'SELECT
                  v.id,
                  v.placa,
                  v.cor,
                  v.tarefaid,
                  t.nome tarefa,
                  v.tipo_pagamento,
                  v.data_pagamento,
                  v.data_servico,
                  v.total_servico,
                  v.observacao
              FROM
                  vendas v
              INNER JOIN tarefas t ON (t.id = v.tarefaid)
              WHERE v.id = :ID or :ID = 0';			

      return $this->execute($query,[':ID' => $valor]);
    }
      
    public function selectVendasMensais(){
      
      $query = 'SELECT
                  v.id,
                  v.placa,
                  v.cor,
                  v.tarefaid,
                  t.nome tarefa,
                  v.tipo_pagamento,
                  v.data_pagamento,
                  v.data_servico,
                  v.total_servico,
                  v.observacao,
                  sum(v.total_servico) total_mensal
                FROM
                  vendas v
                  INNER JOIN tarefas t ON(t.id = v.tarefaid)
                WHERE v.data_servico BETWEEN DATE_SUB(CURRENT_DATE,INTERVAL DAYOFMONTH(CURRENT_DATE)-1 DAY) AND LAST_DAY(CURRENT_DATE)
                  ORDER BY data_servico DESC';
                  
                  
      return $this->execute($query);
    }
      
    public function selectTarefas(){
      
      $query = 'SELECT t.id, t.nome FROM tarefas t ORDER BY nome ASC';			
      
      return $this->execute($query);
    }
      
    public function select($where = null, $fields){
      //dados da query
      $where = strlen($where) ? 'WHERE '.$where : '';
      
      //monta a query
      $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where.'';			
      return $this->execute($query);
    }
      
    public function update($where, $values){
      //dados da query
      $fields = array_keys($values);
      
      //monta a query
      $query = 'UPDATE '.$this->table.' SET '.implode('=?,', $fields).'=? WHERE '.$where;
      
      //executa a query
      $this->execute($query, array_values($values));
      
      return true;
      }
      
    }

?>