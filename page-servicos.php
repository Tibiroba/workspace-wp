<?php 
// Template Name: page-servicos
get_header();
?>

<div class="container-fluid">
 <div class="row">
    <div class="col-12 cta-header-st" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/img/cta1.jpg'); height:100vh;">
            <div class="cta-title">
            <h1 class="title-cta"><?php wp_title();?></h1>
        </div>
        </div>
        <div class="col-12 divider">
      <hr>
    </div>
    </div>
    </div>

<div class="container">
    <div class="row"> 

		<div class="col-12 divider">
			<h1 style="text-align:center;">Só na Kalina você tem</h1>
			<hr>
		</div>

    <div class="col-12 col-md-6 col-lg-4 servicos-quicklink-g" style="background-color: #44691C;">
        <a href=""><i class="fa fa-plane fa-custom-big"></i></a>
        <ul class="lista-topo-servicos ltsw">  
        <li>Análise correta do perfil de viagem</li>
        <li>Auxílio na Marcação de Assento</li>
        <li>Check List Completo de Documentos</li>
        </ul>
    </div>

    <div class="col-12 col-md-6 col-lg-4 servicos-quicklink-w">
      <a href=""><i class="fa fa-fort-awesome fa-custom-big" style="color:#44691C;"></i></a>
      <ul class="lista-topo-servicos ltsg"> 
      <li>Sugestões completas de roteiros</li>
      <li>Dicas de Retaurantes de Passeios</li>
      <li>Suporte Durante e Pós-Viagem</li>
       </ul>
    </div>


    <div class="col-12 col-md-6 col-lg-4 servicos-quicklink-g" style="background-color: #44691C;">
      <a href=""><i class="fa fa-money fa-custom-big"></i></a>
      <ul class="lista-topo-servicos ltsw"> 
      <li>Check list de melhor valor em mais de 30 fornecedores</li>
      <li>Facilidade de Pagamento</li>
      <li>IOF Grátis – Desconto de 1,1% na compra de moedas estrangeiras</li>
      </ul>
    </div>

<div class="col-12 divider">
      <hr>
    </div>

<div class="col-12" >
<h2>Comprou na Kalina?</h2>
<h3>Ao comprar sua viagem conosco, você já recebe de forma totalmente gratuita o Pacote de serviços Essencial</h3>
	</div>


</div>
</div>

<div class="container">



    <!-- Content Row -->

    <div class="row">

      <div class=" col-12 col-md-6">
      <div class="servicos-img-left">
       
        <img src="<?php echo get_stylesheet_directory_uri();?>/img/kalina-green.png" alt="kalina-small.jpg">
         <h2>Pacote Essencial</h2>
      </div>
</div>

    <div class=" col-12 col-md-6">
     <ul class="essecial-ul">
       <li class="essencial-ul-itn">Auxílio na Marcação de Assento</li>
       <li class="essencial-ul-itn">Auxílio na Compra de Bagagem Extra</li>
       <li class="essencial-ul-itn">Orientação Pré-Embarque</li>
       <li class="essencial-ul-itn">Check In Online</li>
       <li class="essencial-ul-itn">Aplicativo Kalina com Vouchers (confirmação de reservas)</li>
       <li class="essencial-ul-itn">Roteiro da Viagem e Dicas Online</li>
       <li class="essencial-ul-itn">Suporte Durante e Pós-Viagem dos serviços e produtos adquiridos na Kalina</li>
       <li class="essencial-ul-itn">IOF Grátis – Desconto de 1,1% na compra de moedas estrangeiras</li>
     </ul>
</div>

<div class="col-12 divider"><hr></div>

<div class="col-12" style="text-align:center;">

<h2>Quer mais suporte e atenção em sua viagem?</h2>
  <h3>Fique tranquilo, pois a Kalina preparou outros 2 pacotes de serviços exclusivos para você, que valoriza seu tempo e a segurança em sua viagem.</h3>
  </div>

      <div class="col-12 divider divider-collor">
        <h2 style="color:white;">Pacotes Especiais Kalina Viagens</h2>
      </div>

      
 
     
        <button class="col-6" onclick="toggleVisibility('Menu1')" href="#" style="width:100%;">
      <h2 style="font-family: 'Edo'; color:#F9B339;">PACOTE CONFORTO</h2>
      <img src="<?php echo get_stylesheet_directory_uri();?>/img/kalina-red.png" alt="kalina-small"  style="width:200px; display:block; margin: 0 auto;">
   </button>
      



 

<button class="col-6" onclick="toggleVisibility('Menu2')" href="#" style="background-color: #3D405B; width:100%; height:250px; ">
  <h2 style="color:white; font-family: 'Edo';">PACOTE VIAGEM PERFEITA</h2>
          <!--<h3 style="color:white;">se você sonha com uma viagem perfeita, preparamos alguns serviços e benefícios que irão garantir sua tranquilidade e satisfação.</h3> -->
          <img src="<?php echo get_stylesheet_directory_uri();?>/img/kalina-smal.png" style="width:200px; display:block; margin: 0 auto;" alt="kalina-small">
</button>

<div class="col-12" id="Menu1" style="display:block;">
    <ul class="essecial-ul" style="background-color:#F9B339;color:white; border-radius:10px; text-align: center;">
       <li class="essencial-ul-itn">Auxílio com Sites e Aplicativos de Viagem</li>
       <li class="essencial-ul-itn">Descontos nos Estacionamentos Urban Park e Airport Park em Guarulhos</li>
       <li class="essencial-ul-itn">Desconto em Chips de Internet</li>
       <li class="essencial-ul-itn">Auxílio com Carteira Internacional de Vacina</li>
       <li class="essencial-ul-itn">Suporte Durante e Pós-Viagem dos serviços e produtos adquiridos na Kalina</li>
       <li class="essencial-ul-itn">Auxílio na Emissão de Passaporte</li>
         <li class="essencial-ul-itn">Além de uma <strong>GRANDE</strong> economia em relação as comprar unitárias</li>
     </ul>
</div>
<div class="col-12" style="display:none;" id="Menu2">
  <ul class="viagemp-ul" style="text-align: center;">
       <li class="viagemp-ul-itn">Dicas de Restaurantes e Passeios</li>
       <li class="viagemp-ul-itn">Auxílio com Vistos Online (EUA e Canadá)</li>
       <li class="viagemp-ul-itn">Auxílio com Milhagens</li>
       <li class="viagemp-ul-itn">Wi-Fi em mais de 1 milhão de locais</li>
       <li class="viagemp-ul-itn">Auxílio com Compras e Reservas Online (inclui Fast Pass Disney)</li>
       <li class="viagemp-ul-itn">Desconto em mais de 500 Salas Vips de aeroportos</li>
         <li class="viagemp-ul-itn">Além de uma <strong>ENORME</strong> economia em relação as comprar unitárias</li>
     </ul>
</div>

</div>
</div>
<div class="container">
<div class="row">

 
    <!-- Content Row -->

    
       
       <div class="col-12 kalina-n-servicos">
       	<hr>
       	<h2>NÃO COMPROU NA KALINA ?</h2>
       		<h3>Calma, não precisa se preocupar caso você tenha encontrado alguma proposta melhor em outro local, mesmo com nossos mais de 30 fornecedores.</h3>
       		<h3>Pensando em você, que gostaria de ter todo suporte padrão Kalina durante a sua viagem, nós criamos o <strong> Koncierge Online</strong></h3></div>


  
  </div>
  </div>

  
  <section style="background-color:#44691C; width:100%;">
    <p style="color:white; text-align:center; font-weight: 700;">São 10 serviços e benefícios que podem ser adquiridos através de um pacote, que irá dar toda tranquilidade que você precisa para viajar</p>
    <div class="container">
      <div class="row">
       <div class="col-12 col-md-8">
       		<ul class="lista-servicos">
       			<li class="lista-servicos-itn">Check List Completo de Documentos</li>
       			<li class="lista-servicos-itn">Auxílio na Marcação de Assento</li>
       			<li class="lista-servicos-itn">Auxílio na Compra de Bagagem Extra</li>
       			<li class="lista-servicos-itn">Orientação Pré-Embarque</li>
       			<li class="lista-servicos-itn">Check In Online</li>
       			<li class="lista-servicos-itn">Aplicativo Kalina com Vouchers (confirmação de reservas), Roteiro da Viagem e Dicas Online</li>
       			<li class="lista-servicos-itn">IOF Grátis – Desconto de 1,1% na compra de moedas estrangeiras</li>
       			<li class="lista-servicos-itn">Descontos nos Estacionamentos Urban Park e Airport Park em Guarulhos</li>
       			<li class="lista-servicos-itn">Desconto em Chips de Internet</li>
       			<li class="lista-servicos-itn">Suporte Durante e Pós-Viagem</li>
       		</ul>
       	
       </div>
<div class="col-12 col-md-4">
  <img src="<?php echo get_stylesheet_directory_uri();?>/img/logo-000.png" alt="kalina-small">
</div>
</div>
</div>
 
</section>

<div class="container">
<div class="row">
<div class="col-12 divider"><hr></div>
       <div class="col-12">
       	<h3>Agora, caso queira adquirir serviços específicos ou aumentar o suporte da Kalina, você conta com uma lista de produtos unitários, que atende até 4 viajantes.</h3>
       	</div>
        <div class="col-12 divider"><hr></div>
       	<div class="col-12 col-md-6 box-servicos">
       		<ul class="lista-servicos-left">
       			<li class="servicos-left-itn">Check List Completo de Documentos</li>
       			<li class="servicos-left-itn">Auxílio na Marcação de Assento</li>
       			<li class="servicos-left-itn">Auxílio na Compra de Bagagem Extra</li>
       			<li class="servicos-left-itn">Auxílio na Compra de Bagagem Extra</li>
       			<li class="servicos-left-itn">Orientação Pré-Embarque</li>
       			<li class="servicos-left-itn">Aplicativo Kalina com Vouchers (confirmação de reservas), Roteiro da Viagem e Dicas Online</li>
       			<li class="servicos-left-itn">Auxílio com Sites e Aplicativos de Viagem</li>
       			<li class="servicos-left-itn">Auxílio com Carteira Internacional de Vacina</li>
       			<li class="servicos-left-itn">Auxílio com Vistos Online (EUA e Canadá)</li>
       			<li class="servicos-left-itn">Auxílio com Milhagens</li>
 				<li class="servico-left-itn" style="list-style:none;"><a href="#" class="btn btn-primary btn-servicos">Por apenas R$ 100,00</a></li>

       		</ul>
       	</div>

       
       	<div class="col-12 col-md-6 box-servicos">
       		<ul class="lista-servicos-right">
       			<li class="servicos-right-itn">Dicas de Restaurantes e Passeios</li>
  				<li class="servico-left-itn" style="list-style: none;"><a href="#" class="btn btn-primary btn-servicos">Por apenas R$ 200,00</a></li>
            <li class="servicos-right-itn">Auxílio com Compras e Reservas Online (inclui Fast Pass Disney)</li>
            <li class="servicos-right-itn">Suporte Durante e Pós-Viagem</li>
          <li class="servico-left-itn" style="list-style: none;"><a href="#" class="btn btn-primary btn-servicos">Por apenas R$ 200,00</a></li>
       		</ul>
       	</div>
       	 
       
<div class="col-12 divider">
	<hr>

  <h2>Mais sobre nossos serviços</h2>
</div>	



<div class="container">
  <div class="row">
    

<div class="col-12" style="display:flex; justify-content: center;">
	<div class="tab">
  <button class="tablinks" style="background-color: #44691C; color:white; font-weight: 700;" onclick="openOpcao(event, 'atendimento')">Atendimento</button>
  <button class="tablinks" style="background-color: #44691C; color:white; font-weight: 700;" onclick="openOpcao(event, 'pagamento')">Pagamentos e Condições</button>
  <button class="tablinks" style="background-color: #44691C; color:white; font-weight: 700;" onclick="openOpcao(event, 'auxilio')">Auxílios e Serviços</button>
  <button class="tablinks" style="background-color: #44691C; color:white; font-weight: 700;" onclick="openOpcao(event, 'exclusividades')">Exclusividades</button>
  
</div>
</div>
<div class="col-12 divider"><hr></div>

<div id="atendimento" class="col-12 tabcontent">
  <h3>Análise correta do perfil de viagem</h3>
  <p>
A Kalina desenvolveu um processo exclusivo de planejamento da sua viagem. São cinco etapas que irão manter você focado nos produtos e serviços que realmente irão garantir o sucesso da sua viagem. E o primeiro deles, é a definição do perfil correto do roteiro.
<h3>	Sugestões completas de roteiros</h3>
Após a analise do perfil correto, nós iremos para a etapa das “opções”, quando selecionaremos apenas produtos e serviços dentro do perfil definido, facilitando assim sua escolha, sem perder o foco do real motivo do passeio.
<h3>	Check list de melhor valor</h3>
Com o perfil, produtos e serviços definidos, aí é só buscar em nossos mais de 30 fornecedores, entre eles os principais sites de vendas de viagem, qual tem o melhor valor. Depois disso, é só comprar e viajar tranquilo, sabendo que escolheu o melhor produto e ainda garantiu o menor preço por ele.</p>
 <h3>Suporte Durante e Pós-Viagem</h3>
  <p>Por mais que você programe sua viagem, sabemos que as vezes alguns imprevistos podem acontecer. No entanto, se você conta com profissionais para lhe orientar em como proceder durante esses momentos, isso acaba passando quase que desapercebido, e não gera nenhuma preocupação antecipada, o que pode fazer você desfocar de todo o prazer que a viagem irá lhe proporcionar.

A equipe da Kalina estará a sua disposição durante e após a viagem, para lhe ajudar a resolver qualquer fato que possa lhe gerar stress, e perca de tempo.</p>
<h3>Orientação Pré-Embarque</h3>
  <p>Tudo que você precisa saber antes de embarcar para sua tão desejada viagem, será esclarecido em nossa reunião pré-embarque, que pode ser presencial, ou através de meio de comunicação online, como Skype e WhatsApp, podendo até incluir um vídeo com detalhes importantes</p>

  <h3>Check In Online</h3>
  <p>Quer chegar tranquilo no aeroporto, sem se preocupar em realizar todo o procedimento de check in? Nossa equipe lhe auxiliará com o check in online, para você ganhar mais tempo livre no embarque.</p>
</div>



<div id="pagamento" class="col-12 tabcontent">
  <h3>Pagamento</h3>
  <p>Na internet quando você acha uma tarifa legal, não tem jeito, precisa pagar o produto 100% no cartão, mas as vezes o valor ultrapassa seu limite disponível no momento.

Na Kalina você consegue dar uma entrada em dinheiro, negociando em alguns casos, a data de pagamento dela, e ainda parcelar o restante em até 9X no cartão ou boleto.

Você também conta com um parcelamento exclusivo da Kalina em até 12X, o que amplia sua possibilidade em casos de passagens aéreas, por exemplo, que em alguns casos podem ser feitas apenas em 4 vezes, e com todas as taxas na primeira parcela.

Com nosso financiamento você faz em 12 vezes iguais..</p>
<h3>Parcelamento na compra de câmbio</h3>
  <p>Esse benefício de 12 parcelas pode ser usado até mesmo na compra de moedas estrangeiras. Já pensou em comprar seu telefone, computador, roupas e bolsas com o valor do exterior e ainda parcelado? É isso que a Kalina consegue lhe proporcionar, sem falar no melhor câmbio do mercado, através da Confidence Câmbio, e o desconto de 1,1% na tarifa com nosso código promocional..</p>
  <h3>Pré-reservas sem custos</h3>
  <p>
É muito comum você estar pesquisando uma viagem, achar um valor interessante, mas as vezes não conseguir comprar, pois naquele dia não é a melhor data para usar seu cartão, ou você gostaria de esperar para ver se consegue um câmbio melhor.

Na Kalina isso não é um problema, pois através de alguns fornecedores exclusivos, nós conseguimos realizar uma pré-reserva (sem compromisso) e travar o valor do produto para uma compra futura, podendo realizar o pagamento, em alguns casos, quase um mês antes do embarque e até parcelar em 10 vezes no cartão..</p>
<h3>Auxílio na Marcação de Assento</h3>
  <p>Nós iremos acessar sua reserva aérea e realizar a marcação dos assentos antes do check in, quando disponibilizado pela companhia.
Auxílio na Compra de Bagagem Extra
Caso tenha adquirido um bilhete sem despacho de bagagem, ou queira aumentar uma ou mais peças em sua franquia, nosso departamento pós-venda irá lhe auxiliar com esse serviço.</p>
</div>


<div id="auxilio" class="col-12 tabcontent">
  <h3>Auxílio com Sites e Aplicativos de Viagem</h3>
  <p>Hoje o mundo vive online, e muitas coisas na viagem podem ser facilitadas através de sites ou aplicativos. Caso você não tenha tanta intimidade com essas tecnologias, a Kalina irá lhe auxiliar, ensinando-o como usufruir de todas essas facilidades.</p>
  <h3>Auxílio com Carteira Internacional de Vacina</h3>
  <p>A Febre Amarela já estragou a viagem de muitas pessoas. Não pelos viajantes a terem contraído, mas pela falta de documentação que prove sua imunidade contra esse problema. Atualmente essa confirmação pode ser feita online, e nossa equipe lhe ajudará a emitir o certificado para viagens internacionais.
</p>
<h3>Auxílio na Emissão de Passaporte</h3>
  <p>
Nossa equipe irá realizar todo o processo de solicitação de passaporte para você, ficando ao seu cargo, apenas pagar a taxa da Polícia Federal e escolher o melhor dia para ir até alguma unidade da instituição.</p>

<h3>Auxílio com Vistos Online (EUA e Canadá)</h3>
  <p>
  Atualmente os brasileiros que já contam com visto dos Estados Unidos podem entrar no Canadá com um visto eletrônico (eTA), e para os brasileiros que possuem passaporte europeu, isso é possível nos Estados Unidos (ESTA). E todo o processo de solicitação é feito pela Kalina, ficando para vocês apenas o pagamento das taxas, em torno de 7 Dólares Canadenses e 14 Dólares Americanos por pessoa</p>

<h3>Auxílio com Milhagens</h3>
  <p>
Quantas vezes você já ouviu alguém dizer que viajou com milhas, mas você nunca conseguiu acumular e nem usar elas? Para você desfrutar desse benefício ofertado por alguns cartões de crédito, a Kalina irá lhe dar uma consultoria.</p>
<h3>Auxílio com Compras e Reservas Online<br>(inclui Fast Pass Disney)</h3>
  <p>
Pegar filas não é agradável para ninguém, não é mesmo? Mas fique tranquilo que a Kalina lhe auxilia com os agendamentos dos Fast Pass dos parques Disney. Outro suporte é com compras de produtos em sites e reservas de restaurantes onlines.</p>


</div>  

<div id="exclusividades" class="col-12 tabcontent" style="display:block;">
  <img src="<?php echo get_stylesheet_directory_uri();?>/img/kalina-colorido.png" alt="kalina-small" style="display:block; margin: 0 auto; width: 250px;">
  <div class="exclusividades-color">
  <h2 style="color:#42493A; font-family: 'Edo';">Exclusividades</h2>
  
</div>
 <h3>Check list de melhor valor</h3>
<p>
Na Kalina você tem acesso a mais de 30 fornecedores, e isso lhe garante a possibilidade de garantir o melhor valor para a sua viagem. Entre as opções estão os principais sites de vendas de viagens, como Expedia e Decolar, além da CVC.</p>

<h3>Check List Completo de Documentos</h3>

Pensando na tranquilidade dos nossos clientes, a Kalina desenvolveu um processo exclusivo de check list de documentos. São 10 etapas de análise, desde a compra do produto até o seu retorno, que irão evitar problemas de reservas e falta de documentação.

<h3>Aplicativo Kalina com Vouchers (confirmação de reservas), Roteiro da Viagem e Dicas Online</h3>

Todos os clientes da Kalina, assim que fecham sua viagem, recebem um acesso ao nosso aplicativo, onde poderão acessar suas reservas em pdf, além de pesquisarem sobre dicas do local escolhido e ainda criar um roteiro de viagem personalizado.

<h3>IOF Grátis – Desconto de 1,1% na compra de moedas estrangeiras</h3>

Só clientes Kalina podem comprar o melhor câmbio do mercado e ainda receber um desconto de 1,1% com nosso código promocional.

<h3>Descontos nos Estacionamentos Urban Park e Airport Park em Guarulhos</h3>

Pensando na comodidade e vantagens para nossos clientes, a Kalina realizou parcerias com estacionamentos em Guarulhos para darem descontos aos nossos clientes.

<h3>Desconto em Chips de Internet</h3>

Impossível viajar e ficar sem acesso a internet, correto? E para tornar a sua viagem mais completa, a Kalina disponibiliza um desconto nas compras dos chips.

<h3>Wi-Fi em mais de 1 milhão de locais</h3>

Quer conectar em mais de 1 milhão de hotspots pelo mundo sem precisar fazer cadastros? Clientes Kalina contam com essa exclusividade, e se conectam automaticamente nesses diversos pontos de internet.

<h3>Desconto em mais de 500 Salas Vips de aeroportos</h3>

Aeroportos cheios e falta de lugar para sentar é o pesadelo de qualquer viajante. Agora imagine-se esperando seu voo em uma confortável sala vip. Pensando nisso, a Kalina conseguiu um desconto especial para nossos clientes em mais de 500 locais.

<h3>Lista de Guias Brasileiros pelo mundo</h3>

Fazer seus passeios pelos pontos turísticos de forma privativa e ainda receber todos as informações em português é o sonho de todos. Por isso a Kalina selecionou vários guias brasileiros espalhados pelo mundo para dar esse suporte exclusivos aos nossos clientes.</p>

</div>



    </div>
     </div>
</div> 

    <!-- container -->
  </div>





<?php get_footer();?>