<?php
    // Construção da classe Paciente, para instanciar um objeto e manipular facilmente os dados
    class Paciente{
        private $data_extracao;
        private $id_usuario;
        private $situacao;
        private $central_regulacao_origem;
        private $data_solicitacao;
        private $sexo;
        private $idade;
        private $municipio_residencia;
        private $solicitante;
        private $municipio_solicitante;
        private $codigo_cid;
        private $carater;
        private $tipo_internacao;
        private $tipo_leito;
        private $data_autorizacao;
        private $data_internacao;
        private $data_alta;
        private $executante;
        private $horas_na_fila;

        // ---------------------------   CONSTRUTOR ---------------------------

        public function __construct($data_extracao,$id_usuario,$situacao,$central_regulacao_origem,$data_solicitacao,$sexo,$idade,
        $municipio_residencia,$solicitante,$municipio_solicitante,$codigo_cid,$carater,$tipo_internacao,$tipo_leito,$data_autorizacao,
        $data_internacao,$data_alta,$executante,$horas_na_fila){
            $this->data_extracao = $data_extracao;
            $this->id_usuario = $id_usuario;
            $this->situacao = $situacao;
            $this->central_regulacao_origem = $central_regulacao_origem;
            $this->data_solicitacao = $data_solicitacao;
            $this->sexo = $sexo;
            $this->idade = $idade;
            $this->municipio_residencia = $municipio_residencia;
            $this->solicitante = $solicitante;
            $this->municipio_solicitante = $municipio_solicitante;
            $this->codigo_cid = $codigo_cid;
            $this->carater = $carater;
            $this->tipo_internacao = $tipo_internacao;
            $this->tipo_leito = $tipo_leito;
            $this->data_autorizacao = $data_autorizacao;
            $this->data_internacao = $data_internacao;
            $this->data_alta = $data_alta;
            $this->executante = $executante;
            $this->horas_na_fila = $horas_na_fila;
        }

        // --------------------------- SETTERS ---------------------------

        public function setData_extracao($data_extracao){
            $this->data_extracao = $data_extracao;
        }
        public function setId_usuario($id_usuario){
            $this->id_usuario = $id_usuario;;
        }
        public function setSituacao($situacao){
            $this->situacao = $situacao;
        }
        public function setCentral_regulacao_origem($central_regulacao_origem){
            $this->central_regulacao_origem = $central_regulacao_origem;
        }
        public function setData_solicitacao($data_solicitacao){
            $this->data_solicitacao = $data_solicitacao;
        }
        public function setSexo($sexo){
            $this->sexo = $sexo;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        }
        public function setMunicipio_residencia($municipio_residencia){
            $this->municipio_residencia = $municipio_residencia;
        }
        public function setSolicitante($solicitante){
            $this->solicitante = $solicitante;
        }
        public function setMunicio_solicitante($municipio_solicitante){
            $this->municipio_solicitante = $municipio_solicitante;
        }
        public function setCodigo_cid($codigo_cid){
            $this->codigo_cid = $codigo_cid;
        }
        public function setCarater($carater){
            $this->carater = $carater;
        }
        public function setTipo_internacao($tipo_internacao){
            $this->tipo_internacao = $tipo_internacao;
        }
        public function setTipo_leito($tipo_leito){
            $this->tipo_leito = $tipo_leito;
        }
        public function setData_autorizacao($data_autorizacao){
            $this->data_autorizacao = $data_autorizacao;
        }
        public function setData_internacao($data_internacao){
            $this->data_internacao = $data_internacao;
        }
        public function setData_alta($data_alta){
            $this->data_alta = $data_alta;
        }
        public function setExecutante($executante){
            $this->executante = $executante;
        }
        public function setHoras_na_fila($horas_na_fila){
            $this->horas_na_fila = $horas_na_fila;
        }

        // --------------------------- GETTERS ---------------------------

        public function getData_extracao(){
            return $this->data_extracao;
        }
        public function getId_usuario(){
            return $this->id_usuario;
        }
        public function getSituacao(){
            return $this->situacao;
        }
        public function getCentral_regulacao_origem(){
            return $this->central_regulacao_origem;
        }
        public function getData_solicitacao(){
            return $this->data_solicitacao;
        }
        public function getSexo(){
            return $this->sexo;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function getMunicipio_residencia(){
            return $this->municipio_residencia;
        }
        public function getSolicitante(){
            return $this->solicitante;
        }
        public function getMunicio_solicitante(){
            return $this->municipio_solicitante;
        }
        public function getCodigo_cid(){
            return $this->codigo_cid;
        }
        public function getCarater(){
            return $this->carater;
        }
        public function getTipo_internacao(){
            return $this->tipo_internacao;
        }
        public function getTipo_leito(){
            return $this->tipo_leito;
        }
        public function getData_autorizacao(){
            return $this->data_autorizacao;
        }
        public function getData_internacao(){
            return $this->data_internacao;
        }
        public function getData_alta(){
            return $this->data_alta;
        }
        public function getExecutante(){
            return $this->executante;
        }
        public function getHoras_na_fila(){
            return $this->horas_na_fila;
        }

    }
?>