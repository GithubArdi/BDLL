<?php 
class Validation
{
	private $config = [], $errors = [];

	public function __construct($configs){
		foreach ($configs as $key => $attribute) {
			foreach ($attribute as $config => $value) {
				switch ($config) {
					case 'min':
						if(strlen(Input::post($key)) < $value){
							array_push($this->errors, $key.' kurang dari '.$value.' karakter');
						}
						break;
					case 'max':
						if(strlen(Input::post($key)) > $value){
							array_push($this->errors, $key.' lebih dari '.$value.' karakter');
						}
						break;

					case 'integer':
						if(is_numeric(Input::post($key)) != $value){
							array_push($this->errors, $key.' harus angka');
						}
						break;
					case 'required':
						if(empty(Input::post($key))){
							array_push($this->errors, $key.' harus di isi');
						}
						break;
                    case 'email':
                        if(!filter_var(Input::post($key), FILTER_VALIDATE_EMAIL)){
                            array_push($this->errors, $key.' harus menggunakan email valid');
                        }
                        break;
					default:
						break;
				}
			}
		}

		return $this->errors;
	}

	public function run(){
		if(count($this->errors) > 0) 
			return false;
		else {
		    foreach ($_SESSION as $key => $value){
		        $check = strtolower($key);
		        if(strpos($check, '_old_')){
                    unset($_SESSION[$key]);
                }
            }
		    return true;
		};
	}


	public function getErrors(){
		$data = "<ul style='list-style-type: disc;margin-left: 20px;'>";
		foreach ($this->errors as $value) {
			$data .= "<li>".$value."</li>";
		}
		$data .= "</ul>";
		$this->errors = [];
		return $data;
	}
	
}