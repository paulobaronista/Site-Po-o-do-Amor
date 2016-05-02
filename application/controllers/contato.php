<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['title'] = 'Contato | Poção do Amor S2 Carinho, Sabor e Magia';
		$data['description'] = 'A MAIOR TENDÊNCIA GOURMET DE SÃO PAULO. Poção do Amor, e seus deliciosos Bolos e Conservas em Pote são a pedida certa para inovar e trazer mais encanto para o nosso dia a dia, festas e eventos. Pitadas de Carinho, Sabor e Magia para você curtir com as pessoas que mais ama. Entre no site e experimente!';
		$data['keywords'] = 'Delicioso, Bolo em pote, Poção do Amor, Poção, Magia, Amor, Sabor, Carinho, Bolos Caseiros, Conservas, Pote, Saboroso, Gostoso, Eventos, Presentes, Gourmet, Cotidiano, Sobremesa, Quitute, Chocolate, Kit Black Kat, Ganache, M&Magia, Doce de Leite, Bolo de Churros, Sedução, Delícia de Maracujá, Bolo dos Sonhos, Bolo da Lua, Diet, Bolo do Sol, Beijinho, Sensação, Sensação Mágica, Bolo da Vó, Isis,Tendência, Inovação, Novidade';
		$menu['contato'] = 'active-contato';
		$conteudo['pagina_view'] = 'contato_view';
		
		if($this->input->post('enviar_email') == "enviar"){			
			$nome = $this->input->post('nome');
			$email = $this->input->post('email');
			$mensagem = utf8_decode($this->input->post('mss'));
			$assunto = utf8_decode('Contato enviado pelo site Poção do Amor - Carinho, Sabor e Magia');
			
			$this->load->library('email');
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			
			$this->email->from("$email","$nome");
			$this->email->to('pocaodoamor@pocaodoamor.com.br');			
			//$this->email->cc('paulo@spicyweb.com.br');

			$this->email->subject($assunto);
			$this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
			<head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
				Nome:		{$nome}<br/>
				E-mail:		{$email}<br/>
				Mensagem:	{$mensagem}<br/>
			</body></html>");
			
			if($this->email->send()){
				redirect('contato/obrigado');
			}else{
				redirect('contato/fail');
			}
			
		}
		
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}

	public function obrigado(){	
		$data['title'] = 'Contato | Poção do Amor S2 Carinho, Sabor e Magia';
		$data['description'] = 'A MAIOR TENDÊNCIA GOURMET DE SÃO PAULO. Poção do Amor, e seus deliciosos Bolos e Conservas em Pote são a pedida certa para inovar e trazer mais encanto para o nosso dia a dia, festas e eventos. Pitadas de Carinho, Sabor e Magia para você curtir com as pessoas que mais ama. Entre no site e experimente!';
		$data['keywords'] = 'Delicioso, Bolo em pote, Poção do Amor, Poção, Magia, Amor, Sabor, Carinho, Bolos Caseiros, Conservas, Pote, Saboroso, Gostoso, Eventos, Presentes, Gourmet, Cotidiano, Sobremesa, Quitute, Chocolate, Kit Black Kat, Ganache, M&Magia, Doce de Leite, Bolo de Churros, Sedução, Delícia de Maracujá, Bolo dos Sonhos, Bolo da Lua, Diet, Bolo do Sol, Beijinho, Sensação, Sensação Mágica, Bolo da Vó, Isis,Tendência, Inovação, Novidade';
		$menu['contato'] = 'active-contato';
		$conteudo['pagina_view'] = 'contato_sucesso';
		
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	
	public function fail(){	
		$data['title'] = 'Contato | Poção do Amor S2 Carinho, Sabor e Magia';
		$data['description'] = 'A MAIOR TENDÊNCIA GOURMET DE SÃO PAULO. Poção do Amor, e seus deliciosos Bolos e Conservas em Pote são a pedida certa para inovar e trazer mais encanto para o nosso dia a dia, festas e eventos. Pitadas de Carinho, Sabor e Magia para você curtir com as pessoas que mais ama. Entre no site e experimente!';
		$data['keywords'] = 'Delicioso, Bolo em pote, Poção do Amor, Poção, Magia, Amor, Sabor, Carinho, Bolos Caseiros, Conservas, Pote, Saboroso, Gostoso, Eventos, Presentes, Gourmet, Cotidiano, Sobremesa, Quitute, Chocolate, Kit Black Kat, Ganache, M&Magia, Doce de Leite, Bolo de Churros, Sedução, Delícia de Maracujá, Bolo dos Sonhos, Bolo da Lua, Diet, Bolo do Sol, Beijinho, Sensação, Sensação Mágica, Bolo da Vó, Isis,Tendência, Inovação, Novidade';
		$menu['contato'] = 'active-contato';
		$conteudo['pagina_view'] = 'contato_insucesso';
		
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	
}

/* Location: ./application/controllers/contato.php */