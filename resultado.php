<?php
  SESSION_START();
  include("db.php");
  include "conexao.php";


  $conector = conexao(); //conexao com a base de dados

  $carreira = encontrar_carreira(
$_SESSION['nome']
, $_SESSION['Q01']
, $_SESSION['Q02']
, $_SESSION['Q03']
, $_SESSION['Q04']
, $_SESSION['Q05']
, $_SESSION['Q06']
, $_SESSION['Q07']
, $_SESSION['Q08']
, $_SESSION['Q09']
, $_SESSION['Q10']
, $_SESSION['Q11']
, $_SESSION['Q12']
, $_SESSION['Q13']
, $_SESSION['Q14']
, $_SESSION['Q15']
, $_SESSION['Q16']
, $_SESSION['Q17']
, $_SESSION['Q18']
, $_SESSION['Q19']
, $_SESSION['Q20']
, $_SESSION['Q21']
, $_SESSION['Q22']
, $_SESSION['Q23']
, $_SESSION['Q24']
, $_SESSION['Q25']
, $_SESSION['Q26']
, $_SESSION['Q27']
, $_SESSION['Q28']
, $_SESSION['Q29']
, $_SESSION['Q30']
, $_SESSION['Q31']
, $_SESSION['Q32']
, $_SESSION['Q33']
, $_SESSION['Q34']
, $_SESSION['Q35']
, $_SESSION['Q36']
, $_SESSION['Q37']
, $_SESSION['Q38']
, $_SESSION['Q39']
, $_SESSION['Q40']
, $_SESSION['Q41']
, $_SESSION['Q42']
, $_SESSION['Q43']
, $_SESSION['Q44']
, $_SESSION['Q45']
, $_SESSION['Q46']
, $_SESSION['Q47']
, $_SESSION['Q48']
, $_SESSION['Q49']
, $_SESSION['Q50']
, $_SESSION['Q51']
, $_SESSION['Q52']
, $_SESSION['Q53']
, $_SESSION['Q54']
, $_SESSION['Q55']
, $_SESSION['Q56']
, $_SESSION['Q57']
, $_SESSION['Q58']
, $_SESSION['Q59']
, $_SESSION['Q60']
, $_SESSION['Q61']
, $_SESSION['Q62']
, $_SESSION['Q63']
, $_SESSION['Q64']
, $_SESSION['Q65']
, $_SESSION['Q66']
, $_SESSION['Q67']
, $_SESSION['Q68']
, $_SESSION['Q69']
, $_SESSION['Q70']
, $_SESSION['Q71']
, $_SESSION['Q72']
, $_SESSION['Q73']
, $_SESSION['Q74']
, $_SESSION['Q75']
, $_SESSION['Q76']
, $_SESSION['Q77']
, $_SESSION['Q78']
, $_SESSION['Q79']
, $_SESSION['Q80']
);

  $somatorio = 0;

  if(is_numeric(substr($carreira, -2)))
  {
    $somatorio = (int)substr($carreira, -2);
    $carreira = substr($carreira, 0, -2);
    
  }
  else{
    $somatorio = (int)substr($carreira, -1);
    $carreira = substr($carreira, 0, -1);
  }

  $percentagem = ($somatorio / 16) * 100;

  echo "<script>console.log('$carreira')</script>";

  $nome = $_SESSION['nome'];
  $idade = $_SESSION['idade'];
  $cidade = $_SESSION['cidade'];
  $sexo = $_SESSION['sexo'];
  $email = $_SESSION['email'];

  try
  {
    if($percentagem == 0)
      $carreira = "indefinido";
    echo "<script>console.log('$carreira')</script>";
    $sql = "UPDATE tb_usuario set resultado=:carreira WHERE email=:email ";
    $stmt = $conector->prepare($sql);
    $stmt->bindParam(':carreira',$carreira);
    $stmt->bindParam(':email',$email);
    $stmt->execute();
  }
  catch(PDOException $e)
  {
    $e->getMessage();
  }

  $nome = strtoLower($nome);
  $sexo_p ="masculino($nome).";

  if ($sexo == "Feminino") 
  {
    $sexo_p = "feminino($nome).";
  }

  $myfile = fopen("orientador.pl", "a+") or die("Unable to open file!");
  fprintf($myfile , "$sexo_p\n" );

  if($percentagem == 0)
  {
    $carreira = "indefinido";
    $p1 = $_SESSION['Q01']; $p2 = $_SESSION['Q02']; $p3 = $_SESSION['Q03']; $p4 = $_SESSION['Q04']; $p5 = $_SESSION['Q05']; $p6 = $_SESSION['Q06'];$p7 = $_SESSION['Q07'];$p8 = $_SESSION['Q08']; $p9 = $_SESSION['Q09']; $p10 = $_SESSION['Q10'];

    $p11 = $_SESSION['Q11']; $p12 = $_SESSION['Q12']; $p13 = $_SESSION['Q13']; $p14 = $_SESSION['Q14']; $p15 = $_SESSION['Q15']; $p16 = $_SESSION['Q16']; $p17 = $_SESSION['Q17']; $p18 = $_SESSION['Q18']; $p19 = $_SESSION['Q19']; $p20 = $_SESSION['Q20'];

    $p21 = $_SESSION['Q21']; $p22 = $_SESSION['Q22']; $p23 = $_SESSION['Q23']; $p24 = $_SESSION['Q24']; $p25 = $_SESSION['Q25']; $p26 = $_SESSION['Q26']; $p27 = $_SESSION['Q27']; $p28 = $_SESSION['Q28']; $p29= $_SESSION['Q29']; $p30 = $_SESSION['Q30'];

    $p31 = $_SESSION['Q31']; $p32 = $_SESSION['Q32']; $p33 = $_SESSION['Q33']; $p34 = $_SESSION['Q34']; $p35 = $_SESSION['Q35']; $p36 = $_SESSION['Q36']; $p37 = $_SESSION['Q37']; $p38 = $_SESSION['Q38']; $p39 = $_SESSION['Q39']; $p40 = $_SESSION['Q40']; 

    $p41 = $_SESSION['Q41']; $p42 = $_SESSION['Q42']; $p43 = $_SESSION['Q43']; $p44 = $_SESSION['Q44']; $p45 = $_SESSION['Q45']; $p46 = $_SESSION['Q46']; $p47 = $_SESSION['Q47']; $p48 = $_SESSION['Q48']; $p49 = $_SESSION['Q49']; $p50 = $_SESSION['Q50']; 

    $p51 = $_SESSION['Q51']; $p52 = $_SESSION['Q52']; $p53 = $_SESSION['Q53']; $p54 = $_SESSION['Q54']; $p55 = $_SESSION['Q55']; $p56 = $_SESSION['Q56']; $p57 = $_SESSION['Q57']; $p58 = $_SESSION['Q58']; $p59 = $_SESSION['Q59']; $p60 = $_SESSION['Q60']; 

    $p61 = $_SESSION['Q61']; $p62 = $_SESSION['Q62']; $p63 = $_SESSION['Q63']; $p64 = $_SESSION['Q64']; $p65 = $_SESSION['Q65']; $p66 = $_SESSION['Q66']; $p67 = $_SESSION['Q67']; $p68 = $_SESSION['Q68']; $p69 = $_SESSION['Q69']; $p70 = $_SESSION['Q70']; 

    $p71 = $_SESSION['Q71']; $p72 = $_SESSION['Q72']; $p73 = $_SESSION['Q73']; $p74 = $_SESSION['Q74']; $p75 = $_SESSION['Q75']; $p76 = $_SESSION['Q76']; $p77 = $_SESSION['Q77']; $p78 = $_SESSION['Q78']; $p79 = $_SESSION['Q79']; $p80 = $_SESSION['Q80']; 

    fprintf($myfile , "indefinido($nome, $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11, $p12, $p13, $p14, $p15, $p16, $p17, $p18, $p19, $p20, $p21, $p22, $p23, $p24, $p25, $p26, $p27, $p28, $p29, $p30, $p31, $p32, $p33, $p34, $p35, $p36, $p37, $p38, $p39, $p40, $p41, $p42, $p43, $p44, $p45, $p46, $p47, $p48, $p49, $p50, $p51, $p52, $p53, $p54, $p55, $p56, $p57, $p58, $p59, $p60, $p61, $p62, $p63, $p64, $p65, $p66, $p67, $p68, $p69, $p70, $p71, $p72, $p73, $p74, $p75, $p76, $p77, $p78, $p79, $p80).\n" );
  }
  else
  {
    fprintf($myfile , "vocacao($nome,$carreira).\n" );   
  }
  fclose($myfile);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Sistema Especialista - Orientador Inteligente</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" carreira="text/css" href="css/style.css">
  <link rel="stylesheet" carreira="text/css" href="css/bootstrap.min.css">
</head>
<body>
  <nav> 
    <div class="row corDivCima">
      <div class="col-md-12">
        <h4 class="p-3">Orientador Inteligente</h4>
      </div>
    </div>
    <div class="row corDivBaixo">
      <div class="col-sm-10">
        <label class="p-2 ml-2">Teste realizado com sucesso! Confira o resultado.</label>
      </div>
      <div class="col-sm-2 corDivBaixoDireito">
        <!--<label class="p-2 ml-2"><a href="login.php">Login</a></label>-->
        <label class="p-2 ml-2"><a href="destruir.php">Sair</a></label>
      </div>
    </div>
  </nav>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="apresentacao">
            <h2>Olá <?php echo strtoUpper($nome)?>, confira aqui o resultado do seu teste.</h2>
            <h3><?php echo $percentagem?>% das suas respostas apontam para: </h3>
            <div class="row">
              <div class="col-sm-3">
                <?php
                  if ( $carreira == "arte"  ) 
                  {
                    ?>
                      <h4 style="color: #F7AA06;">Arte e Criatividade</h4>
                      <img src="img/arte.jpg" style="">
                    </div>
                    <div class="col-sm-9">
                      <p style="font-size: 16px !important">Design Gráfico, Design de Interiores e Decoração, Design de Jardins, Design de Moda, Design
                        de Joias, Artes Plásticas (Pintura, Escultura, Dança, Teatro, Artesanato, Cerâmica), Desenho
                        Publicitário, Restauração e Museologia, Modelagem, Fotografia, Fotografia Digital, Gráfico e
                        Publicidade Gestão, Locução e Publicidade, Atuação, Camarografia, Arte Industrial,
                        Produção Audiovisual e Multimídia, Comunicação e Produção em Rádio e Televisão,
                        Paisagismo, Cinema e Vídeo, Comunicação Cênica para televisão.
                      </p>
                    </div>
                    <?php
                  }
                  else if ( $carreira == "sociais" ) 
                  {
                    ?>
                      <h4 style="color: #F7AA06;">Ciências Sociais</h4>
                      <img src="img/sociais.jpg" style="">
                    </div>
                    <div class="col-sm-9">
                      <p style="font-size: 16px !important">Psicologia geral, serviço social, línguas, educação internacional, história e geografia,
                          jornalismo, jornalismo digital, direito, ciência política, sociologia, antropologia,
                          arqueologia, gestão e desenvolvimento social, aconselhamento familiar, comunicação e
                          publicidade, administração educacional, educação especial, psicopedagogia , Estimulação
                          Inicial, Tradução Simultânea, Lingüística, Educação Infantil, Biblioteconomia, Museologia,
                          Relações Internacionais e Diplomacia, Comunicação Social com menção em Marketing e
                          Gestão Empresarial, Redação Criativa e Publicitária, Relações Públicas e Comunicação
                          Organizacional; Hotelaria e Turismo; Teologia, instituição sacerdotal.
                      </p>
                    </div>
                    <?php
                  }        
                  else if ( $carreira == "economia"  )
                  {
                    ?>
                      <h4 style="color: #F7AA06;">Económica, Admin. e Finanças</h4>
                      <img src="img/economia.jpg" style="">
                    </div>
                    <div class="col-sm-9">
                      <p style="font-size: 16px !important">Administração de empresas, contabilidade, auditoria, vendas, marketing estratégico, gestão
                        e negócios internacionais, gestão empresarial, gestão financeira, engenharia comercial,
                        comércio exterior, banco e finanças, gestão de recursos humanos, comunicação integrada de
                        marketing, ecoturismo, administração de empresas e hotéis, economia e finanças Ciências,
                        Administração e Ciências Políticas, Ciências Empresariais, Comércio Eletrônico, Empresários,
                        Gestão de Organismos Públicos (Municípios, Ministérios, etc.), Gestão de Centros
                        Educacionais.
                      </p>
                    </div>
                    <?php
                  }
                  else if ( $carreira == "tecnologia" )
                  {
                    ?>
                      <h4 style="color: #F7AA06;">Ciências e Tecnología</h4>
                      <img src="img/tecnologia.jpg" style="">
                    </div>
                    <div class="col-sm-9">
                      <p style="font-size: 16px !important">Engenharia de sistemas computacionais, geologia, engenharia civil, arquitetura, eletrônica,
                          telemática, telecomunicações, engenharia mecatrônica (robótica), imagem e som, minas,
                          petróleo e metalurgia, engenharia mecânica, engenharia industrial, física, matemática
                          aplicada, engenharia estatística, engenharia automotiva, Biotecnologia Ambiental,
                          Engenharia Geográfica, Carreiras Militares (Marinha, Aviação, Exército), Engenharia Costeira
                          e Obras Portuárias, Estatística Informática, Programação e Desenvolvimento de Sistemas,
                          Informática Educacional, Astronomia, Engenharia em Ciências Geográficas e
                          Desenvolvimento Sustentável.
                      </p>
                    </div>
                    <?php
                  }
                  else if ( $carreira == "biologia" )
                  {
                  ?>
                    <h4 style="color: #F7AA06;">Ciências Biológicas, Ecológicas e de Saúde</h4>
                    <img src="img/biologia.png" style="">
                  </div>
                  <div class="col-sm-9">
                    <p style="font-size: 16px !important">Biologia, Bioquímica, Farmácia, Biologia Marinha, Bioanálise, Biotecnologia, Ciências
                      Ambientais, Zootécnica, Veterinária, Nutrição e Estética, Cosmetologia, Dietética e
                      Estética, Medicina, Obstetrícia, Emergências Médicas, Odontologia, Enfermagem,
                      Tecnologia, Oceanografia e Ciências Ambientais, Medicina, Agronomia, Horticultura e
                      Fruticultura, Engenharia Alimentar, Gastronomia, Chef, Cultura Física, Desporto e
                      Reabilitação, Gestão Ambiental, Engenharia Ambiental, Optometria, Homeopatia,
                      Reflexologia.
                    </p>
                  </div>
                  <?php
                  }
                  else 
                  {
                  ?>
                    <h4 style="color: #F7AA06;">Vocação Indefinida</h4>
                  </div>
                  <div class="col-sm-12">
                    <p style="font-size: 16px !important">Lamentamos, mas não foi possivel determinar a sua vocação.</p>
                  </div>
                  <?php
                  }
                ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer class="rodape">
    <p class="p-4">Orientador Inteligente &copy; 2021 - Sistemas Inteligentes 2</p>
  </footer>
  <script carreira="text/javascript" src="js/index.js"></script>
</body>
</html>
