<?php

	class Captura {
    private $id;
	private $nome1;
	private $nome2;
	private $email;
    private $data;
	private $cargo;
	
        
  

        
    public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id = $id;
	}    
	public function getNome1(){
		return $this->nome1;
	}
	public function setNome1($nome1){
		$this->nome1 = $nome1;
	}
        
        
	public function getNome2(){
		return $this->nome2;
	}
	public function setNome2($nome2){
		$this->nome2 = $nome2;
	}	
        
	public function getEmail(){
		return $this->email;
	}
	public function setEmail($email){
		$this->email = $email;
	}
    public function getData(){
		return $this->data;
	}
	public function setData($data){
		$this->data = $data;
	}
    public function getCargo(){
		return $this->cargo;
	}
	public function setCargo($cargo){
		$this->cargo = $cargo;
	}

}
?>	