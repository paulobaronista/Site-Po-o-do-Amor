<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['title'] = 'Início | Poção do Amor S2 Carinho, Sabor e Magia';
		$data['description'] = 'A MAIOR TENDÊNCIA GOURMET DE SÃO PAULO. Poção do Amor, e seus deliciosos Bolos e Conservas em Pote são a pedida certa para inovar e trazer mais encanto para o nosso dia a dia, festas e eventos. Pitadas de Carinho, Sabor e Magia para você curtir com as pessoas que mais ama. Entre no site e experimente!';
		$data['keywords'] = 'Delicioso, Bolo em pote, Poção do Amor, Poção, Magia, Amor, Sabor, Carinho, Bolos Caseiros, Conservas, Pote, Saboroso, Gostoso, Eventos, Presentes, Gourmet, Cotidiano, Sobremesa, Quitute, Chocolate, Kit Black Kat, Ganache, M&Magia, Doce de Leite, Bolo de Churros, Sedução, Delícia de Maracujá, Bolo dos Sonhos, Bolo da Lua, Diet, Bolo do Sol, Beijinho, Sensação, Sensação Mágica, Bolo da Vó, Isis,Tendência, Inovação, Novidade';
		$menu['home'] = 'active-home';
		$conteudo['pagina_view'] = 'home_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	public function pocaodoamor(){
		$data['title'] = 'Poção do Amor | Poção do Amor S2 Carinho, Sabor e Magia';
		$data['description'] = 'A MAIOR TENDÊNCIA GOURMET DE SÃO PAULO. Poção do Amor, e seus deliciosos Bolos e Conservas em Pote são a pedida certa para inovar e trazer mais encanto para o nosso dia a dia, festas e eventos. Pitadas de Carinho, Sabor e Magia para você curtir com as pessoas que mais ama. Entre no site e experimente!';
		$data['keywords'] = 'Delicioso, Bolo em pote, Poção do Amor, Poção, Magia, Amor, Sabor, Carinho, Bolos Caseiros, Conservas, Pote, Saboroso, Gostoso, Eventos, Presentes, Gourmet, Cotidiano, Sobremesa, Quitute, Chocolate, Kit Black Kat, Ganache, M&Magia, Doce de Leite, Bolo de Churros, Sedução, Delícia de Maracujá, Bolo dos Sonhos, Bolo da Lua, Diet, Bolo do Sol, Beijinho, Sensação, Sensação Mágica, Bolo da Vó, Isis,Tendência, Inovação, Novidade';
		$menu['pocaodoamor'] = 'active-pocaodoamor';
		$conteudo['pagina_view'] = 'pocaodoamor_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	public function delicias(){
		$data['title'] = 'Delícias | Poção do Amor S2 Carinho, Sabor e Magia';
		$data['description'] = 'A MAIOR TENDÊNCIA GOURMET DE SÃO PAULO. Poção do Amor, e seus deliciosos Bolos e Conservas em Pote são a pedida certa para inovar e trazer mais encanto para o nosso dia a dia, festas e eventos. Pitadas de Carinho, Sabor e Magia para você curtir com as pessoas que mais ama. Entre no site e experimente!';
		$data['keywords'] = 'Delicioso, Bolo em pote, Poção do Amor, Poção, Magia, Amor, Sabor, Carinho, Bolos Caseiros, Conservas, Pote, Saboroso, Gostoso, Eventos, Presentes, Gourmet, Cotidiano, Sobremesa, Quitute, Chocolate, Kit Black Kat, Ganache, M&Magia, Doce de Leite, Bolo de Churros, Sedução, Delícia de Maracujá, Bolo dos Sonhos, Bolo da Lua, Diet, Bolo do Sol, Beijinho, Sensação, Sensação Mágica, Bolo da Vó, Isis,Tendência, Inovação, Novidade';
		$menu['delicias'] = 'active-delicias';
		$conteudo['pagina_view'] = 'delicias_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	public function encomendas(){
		$data['title'] = 'Encomendas | Poção do Amor S2 Carinho, Sabor e Magia';
		$data['description'] = 'A MAIOR TENDÊNCIA GOURMET DE SÃO PAULO. Poção do Amor, e seus deliciosos Bolos e Conservas em Pote são a pedida certa para inovar e trazer mais encanto para o nosso dia a dia, festas e eventos. Pitadas de Carinho, Sabor e Magia para você curtir com as pessoas que mais ama. Entre no site e experimente!';
		$data['keywords'] = 'Delicioso, Bolo em pote, Poção do Amor, Poção, Magia, Amor, Sabor, Carinho, Bolos Caseiros, Conservas, Pote, Saboroso, Gostoso, Eventos, Presentes, Gourmet, Cotidiano, Sobremesa, Quitute, Chocolate, Kit Black Kat, Ganache, M&Magia, Doce de Leite, Bolo de Churros, Sedução, Delícia de Maracujá, Bolo dos Sonhos, Bolo da Lua, Diet, Bolo do Sol, Beijinho, Sensação, Sensação Mágica, Bolo da Vó, Isis,Tendência, Inovação, Novidade';
		$menu['encomendas'] = 'active-encomendas';
		$conteudo['pagina_view'] = 'encomendas_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
}

/* Location: ./application/controllers/home.php */