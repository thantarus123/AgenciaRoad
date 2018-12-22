<?php

	class Modelo {
	private $nome;
	private $assunto;
	private $conteudo;
    private $codigo;
            
  
    public function getCodigo(){
		return $this->codigo;
	}
    
    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
        
	public function getNome(){
		return $this->nome;
	}        
	public function setNome($nome){
		$this->nome = $nome;
    }        
	public function getAssunto(){
		return $this->assunto;
	}
	public function setAssunto($assunto){
		$this->assunto = $assunto;
	}	
        
	public function getConteudo(){
		return $this->conteudo;
	}
	public function setConteudo($conteudo){
		$this->conteudo = $conteudo;
	}
    

    }
?>	