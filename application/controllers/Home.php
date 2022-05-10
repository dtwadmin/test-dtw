<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
	    parent::__construct();
	}
	
	public function index()
	{	    
		$data['file_js']  = array('assets/site/js/recaptcha.js');

		$data['page'] = "home";
		$data['menu'] = true;

		$this->form_validation->set_rules('nome', 'Nome', 'trim|required');
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email');
		$this->form_validation->set_rules('telefone', 'Telefone', 'trim|required');	
		$this->form_validation->set_rules('empresa', 'Empresa', 'trim');		
		$this->form_validation->set_rules('mensagem', 'Mensagem', 'trim');
		$this->form_validation->set_rules('g-recaptcha-response', 'Não sou um robô', 'trim|required');
		
		if ($this->form_validation->run()) {			
			$dados = $this->input->post();

			$url       = "https://www.google.com/recaptcha/api/siteverify";
			$secret    = "6LeZJbUfAAAAAE89xv27EJadPuyGazl6O3H0DavL";
			$response  = $dados['g-recaptcha-response'];
			$variaveis = "secret=".$secret."&response=".$response;

			$call = curl_init($url);
			curl_setopt($call, CURLOPT_POST, 1);
			curl_setopt($call, CURLOPT_POSTFIELDS, $variaveis);
			curl_setopt($call, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($call, CURLOPT_HEADER, 0);
			curl_setopt($call, CURLOPT_RETURNTRANSFER, 1);
			$resposta = curl_exec($call);

			$resultado = json_decode($resposta);

			if($resultado->success == 1){
				date_default_timezone_set('America/Sao_Paulo');
				$dados['data_envio'] = date('d/m/Y H:i');
				$sendEmail = $this->sendEmail($dados);
				if($sendEmail == TRUE){
				redirect('resultado');
				}else{
					$data['result'] = "Erro ao enviar o e-mail";
				}
			}else{
				$data['result'] = "Erro na validação do Eu não sou um robô.";
			}			
		} else {			
			$data['result'] = validation_errors();
		}	
	    
		$this->load->view('site/theme/index',$data);
	}

	public function sendEmail($dados) 
    {       
		$config['protocol']     = 'smtp';
		$config['mailpath']     = '/usr/sbin/smtp';
		$config['smtp_host']    = 'ssl://smtp.googlemail.com';
		$config['smtp_port']    = '465';
		$config['smtp_timeout'] = '5';
		$config['smtp_user']    = 'contato.dtecweb@gmail.com';
		$config['smtp_pass']    = 'dtw@852456';
		$config['mailtype']     = 'html';
		$config['charset']      = 'utf-8';
		$config['newline']      = "\r\n";
		$config['mailtype']     = 'html';
		$config['validation']   = FALSE;
		$this->load->library('email');
		$this->email->initialize($config);
		$this->email->from('contato.dtecweb@gmail.com','Dtecweb');
		$this->email->to('ricardoluis.contato@gmail.com');
		$this->email->subject('Tenho interesse no seu perfil - enviado através do site dtecweb.com.br');
        $msg = "Nome: ".$dados['nome']."<br>";
        $msg .= "E-mail: ".$dados['email']."<br>";
        $msg .= "Telefone: ".$dados['telefone']."<br>";
		$msg .= "Empresa: ".$dados['empresa']."<br>";
        $msg .= "Data: ".$dados['data_envio']."<br>";
        $msg .= "Mensagem: ".$dados['mensagem'];
		$this->email->message($msg); 
        if($this->email->send()===true){
            return TRUE;}
        else{
            return FALSE;}       
    }	
	
	public function resultado()
	{	    
		$data['file_js']  = array();
		 
		$data['page'] = "resultado";
	    
		$this->load->view('site/theme/index',$data);
	}
	
	/*public function sendMail($dados){		
		$config['protocol']    = 'smtp';
		$config['smtp_host']    = 'ssl://smtp.googlemail.com';
		$config['smtp_port']    = '465';
		$config['smtp_timeout'] = '5';
		$config['smtp_user']    = 'contato.dtecweb@gmail.com';
		$config['smtp_pass']    = 'dtw@852456';
		$config['mailtype'] = 'html';
		$config['charset']    = 'utf-8';
		$config['newline']    = "\r\n";
		$config['mailtype'] = 'html';
		$config['validation'] = FALSE;
		$this->load->library('email');
		$this->email->initialize($config);
		$this->email->from($dados['email'],$dados['nome']);
		$this->email->to('ricardoluis.contato@gmail.com');
		$this->email->subject('Tenho interesse no seu perfil');
		$this->email->message($dados['mensagem']);

		if($this->email->send()){
			redirect('resultado');
		}else{
			echo $this->email->print_debugger();
		}
	}*/

	/*public function sendEmail($dados) 
    {
        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';
        $this->load->library('email');
		$this->email->initialize($config);
        $this->email->from('contato.dtecweb@gmail.com', "Dtecweb");
        $this->email->to('ricardoluis.contato@gmail.com');
        $this->email->subject('Tenho interesse no seu perfil - enviado através do site dtecweb.com.br');
        $msg = "Nome: ".$dados['nome']."<br>";
        $msg .= "E-mail: ".$dados['email']."<br>";
        $msg .= "Telefone: ".$dados['telefone']."<br>";
        $msg .= "Data: ".$dados['data_envio']."<br>";
        $msg .= "Mensagem: ".$dados['mensagem'];
        $this->email->message($msg); 
        if ($this->email->send()===true)
        {
            return TRUE;
        }
        else{
			echo $this->email->print_debugger();
            return FALSE;
        }       
    }*/
}