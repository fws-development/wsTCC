<?php
    class Condominium extends Model {
        protected static $tableName = 'condominiums';
        protected static $columns = ['id', 
                                     'cnpj_cpf', 
                                     'name', 
                                     'logradouro', 
                                     'bairro', 
                                     'cep', 
                                     'cidade', 
                                     'uf', 
                                     'email'
	
        ];
        
        public static function getActiveCondominiumsCount() {
            return static::getCount();
        }

        public function insert() {
            $this->validate();
            return parent::insert();
        }

        public function update() {
            $this->validate();
            return parent::update();
        }
    
        private function validate() {
            $errors = [];
    
            if(!$this->cnpj_cpf) {
                $errors['cnpj_cpf'] = 'CNPJ é um campo obrigatório.';
            }

            if(!$this->name) {
                $errors['name'] = 'Nome é um campo obrigatório.';
            }

            if(!$this->logradouro) {
                $errors['logradouro'] = 'Logradouro é um campo obrigatório.';
            }

            if(!$this->bairro) {
                $errors['bairro'] = 'Bairro é um campo obrigatório.';
            }

            if(!$this->cep) {
                $errors['cep'] = 'CEP é um campo obrigatório.';
            }

            if(!$this->cidade) {
                $errors['cidade'] = 'Cidade é um campo obrigatório.';
            }
            
            if(!$this->uf) {
                $errors['uf'] = 'UF é um campo obrigatório.';
            }
    
            if($this->email) { 
                 if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                    $errors['email'] = 'Email inválido.';
                }
            }    
            if(count($errors) > 0) {
                throw new ValidationException($errors);
            }
        }
    

    }

?>