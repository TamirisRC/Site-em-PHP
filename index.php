<!DOCTYPE html>
<html>
    <head>
        <title>Aula PW</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
      <body style="background-color: lightgray;">
        <div class="container">
            <div class="row">
              <div class="col-sm">
                <!-- Image and text -->
                <nav class="navbar navbar-dark bg-dark">
                    <a class="navbar-brand" href="#">
                    <img src="img/Tudo Sobre.png" width="50" height="50" class="d-inline-block align-top" alt="">
                         Tudo sobre heróis 
                    </a>
                </nav>
              </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <a class="navbar-brand" href="Index.php">HOME</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                          <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Páginas
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="index.php?opcao=1">Histórias HQS</a>
                                <a class="dropdown-item" href="index.php?opcao=2">História Marvel</a>
                                <a class="dropdown-item" href="index.php?opcao=3">História DC</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                    </nav>
                </div>
            </div>




            
        <?php if(isset($_GET['opcao']) == FALSE){ ?>
            <div class="row">
                <div class="col-sm">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="img/marvel.jpg" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="img/Dc.jpg"  alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="img/img3.jpg" alt="Third slide"  class="d-black w-100">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Voltar</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Continuar</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                  &nbsp;
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <figure class="figure">
                        <img src="img/Stan_Lee.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                        <figcaption class="figure-caption text-right">Stan lee Presidente e escritor da Marvel Studios.</figcaption>
                    </figure>
                </div>
                <div class="col-sm" style="text-align: center;">
                    <figure class="figure">
                        <img src="img/malcolm.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                        <figcaption class="figure-caption text-right">Malcolm Wheeler Criador da DC comics.</figcaption>
                    </figure>
                </div>
                <div class="col-sm" style="text-align: right;">
                    <figure class="figure">
                        <img src="img/Martin.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                        <figcaption class="figure-caption text-right">Martin goodman Criador Marvel Studios.</figcaption>
                    </figure>
                </div>
            </div>
         </div>

        <?php }elseif($_GET['opcao'] == 1){ ?>
            <div>
                    <div class="row">
                      <div class="col-sm">
                          &nbsp;
                        </div>
                    </div>
                     
                <div class="row">
                    <div class="col-sm">
                        <img src="img/HQs.jpeg" class="d-black w-100">
                        <br>
                        <h3>História das HQ</h3>
                        <h5>Os quadrinhos como os conhecemos hoje nasceram com o uso e expansão da imprensa, pois, pelos jornais, as primeiras tirinhas foram publicadas e consumidas pelos leitores. Esse fato garantiu ao gênero uma inserção no consumo cultural, mas, por outro lado, limitava suas publicações, pois os autores dependiam do jornal.</h5>
                        <br>
                        <p style="text-align: justify;">Alguns estudiosos atribuem o surgimento das histórias em quadrinhos às práticas de pinturas rupestres, nas quais o uso da imagem era primordial não só para representar pensamentos mas também para contar histórias. Entretanto, existem enormes diferenças entre as pinturas rupestres e as HQs, tanto em seu contexto cultural e material quanto na estrutura e organização da história. 
                          <br>
                          Por volta da década de 1930, as tirinhas já publicadas em jornais passaram a ser republicadas em revistas independentes. Como o jornal geralmente era descartado após a leitura, essas revistas cumpriam a função de manter as tirinhas à disposição do público.
                          Foi em 1939 que a primeira revista de história em quadrinhos foi publicada, nos Estados Unidos, apresentando o herói Superman. Esse personagem ainda não possuía a forma e as características de hoje, entretanto já era visto como um símbolo do bem, além de símbolo dos valores norte-americanos, pois representava um homem “super” em duas faces: tanto o personagem Clark Kent quanto o Superman eram bem-vistos socialmente.
                        </p>
                    </div>
                    <div class="col-sm">
                        <h3>Primeiras HQs da Marvel e DC!</h3>
                        <br>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <strong> Primeira HQ da Marvel</strong> 
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  Martin Goodman criou a primeira HQ mas a primeira publicação só aconteceria em 1939 através de uma revista chamada Marvel Comics que mostrou pela primeira vez ao público os personagens Tocha Humana e Namor. A publicação foi um sucesso de vendas e estimulou a equipe responsável a lançar a segunda edição no ano seguinte, mas com o nome de Marvel Mystery Comics.
                                  Na década de 1940, Jack Kirby e Joe Simon formaram a dupla da ainda Timely Comics que daria origem ao primeiro herói patriota, o Capitão América. Sua primeira aparição foi em março de 1941 e fez circular quase um milhão de exemplares. O patriotismo sempre foi um elemento muito forte na cultura estadunidense e o momento de guerra vivido no mundo favoreceu à editora que soube atingir o ponto fundamental para tornar as histórias em quadrinho uma febre nos Estados Unidos.
                               </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  <strong>Primeira HQ da DC</strong>
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  A moderna DC é uma junção de várias sociedades. A primeira revista criada foi a More Fun Comics/Fun: The Big Comic Magazine, em 1935, depois transformada em New Fun e More Fun. Destacava-se então um personagem conhecido como Dr. Oculto. A segunda publicação veio em 1935, quando Wheeler-Nicholson lançou a New Comics, que deu início à Era de Ouro das histórias em quadrinhos norte-americanas.
                                  A terceira criação foi a Detective Comics, que nasceu em 1937. Neste mesmo ano a empresa adotou o nome desta revista, batizando-se assim como Detective Comics, Inc. Em 1944 ela se uniu à National Allied Publications, responsável pela edição da Action Comics, na qual o Superman apareceu pela primeira vez. Com esta fusão o conglomerado empresarial passou a ser conhecido como National Comics, embora fosse informalmente denominado DC Comics, até este título ser oficialmente assumido.
                              </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  <strong> Mais famosas da Marvel </strong>
                                </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  A HQ mais famosa da marvel é guerras secretas pois está é uma das sagas mais arrebatadoras que a Casa das Ideias já produziu em toda sua história, e que foi finalizada há pouco mais de dois anos. As Guerras Secretas foram um evento colossal, produzido ao longo de anos pela maestria astuta de Jonathan Hickman - além da arte de Esad Ribic, que é de tirar o fôlego. O roteirista conduziu a trama por vários anos através do título dos Vingadores e dos Novos Vingadores, e compôs um épico moderno onde o Doutor Destino criava seu próprio mundo com os destroços de vários universos destruídos, forçando os heróis a retornar para tentar restaurar o antigo status quo.
                                 
                                </div>
                              </div>
                            </div>  

                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                 <strong>HQ mais famosa da DC</strong> 
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   A HQ mais famosa da DC é Batman o cavaleiro das trevas pois é uma história que mostra um Cavaleiro  envelhecido e amargurado voltando à ativa após anos de aposentadoria, ultrapassou as fronteiras do que se convencionava considerar histórias em quadrinhos, estabelecendo novos parâmetros, tanto em narrativa como em temática, e influenciando tudo o que veio depois.
                              </div>
                              </div>
                            </div>
                          </div>
                    </div>
        </div>
        <?php }elseif($_GET['opcao'] == 2){ ?>
            <div class="row">
                      <div class="col-sm">
                          &nbsp;
                        </div>
                    </div>
                     
                <div class="row">
                    <div class="col-sm">
                        <img src="img/Marvel_Logo.png" class="d-black w-100">
                        <br>
                        <h3>História da Marvel</h3>
                        <h5>Primeiramente, a Marvel Comics foi fundada por Martin Goodman, com o nome Timely Comics, ainda na década de 30. Na época, Goodman era editor de revistas de faroestes e decidiu investir num novo mercado.</h5>
                        <br>
                        <p style="text-align: justify;">Atualmente, a Marvel é um verdadeiro fenômeno dos cinemas. Mas, antes disso, a empresa construiu uma longa história de décadas. A primeira revista da Marvel, por exemplo, foi publicada em 31 de agosto de 1939, com Namor e Tocha Humana.
                           Desde então, a empresa passou por altos e baixos. Foi só a partir da década de 90 que conseguiu um crescimento exponencial nos EUA. Na mesma época, as primeiras adaptações dos personagens ganhavam versões no cinema. Dessa maneira, a popularização ficou ainda mais fora dos quadrinhos.
                            A grande diferença da Marvel no mercado editorial da época foi no tom de suas histórias. Isso porque trazia tramas mais próximas da realidade, com personagens humanos e bem desenvolvidos.
                            Atualmente, são mais de cinco mil personagens nas histórias da empresa.
                        </p>
                    </div>
                    <div class="col-sm">
                        <h3>Marvel!</h3>
                        <br>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 <strong> Ordem cronologica para assistir os filmes</strong>
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                      1943-1945 - Capitão América: O Primeiro Vingador

                                      1995 - Capitã Marvel
                                    
                                      2010 - Homem de Ferro
                                    
                                     2011 - O Incrível Hulk
                                    
                                     2011 - Homem de Ferro 2
                                    
                                     2011 - Thor
                                    
                                     2012 - Os Vingadores
                                    
                                     2012 - Homem de Ferro 3
                                    
                                     2013 - Thor: O Mundo Sombrio
                                    
                                     2014 - Capitão América 2 - O Soldado Invernal
                                    
                                     2014 - Guardiões da Galáxia
                                    
                                     2014 - Guardiões da Galáxia Vol. 2
                                    
                                     2015 - Vingadores: Era de Ultron
                                    
                                     2015 - Homem-Formiga
                                    
                                     2016 - Capitão América: Guerra Civil
                                    
                                     2016 - Viúva Negra (excluindo cena pós-créditos)
                                    
                                     2016 - Homem-Aranha: De Volta ao Lar
                                    
                                     2016/2017 - Doutor Estranho
                                    
                                     2017 - Pantera Negra
                                    
                                     2017 - Thor: Ragnarok
                                    
                                     2017 - Homem-Formiga e a Vespa
                                    
                                     2017 - Vingadores: Guerra Infinita
                                    
                                     2018-2023 - Vingadores: Ultimato
                                    
                                     2023 - WandaVision
                                    
                                     2023 - Falcão e o Soldado Invernal
                                    
                                     2024 - Homem-Aranha: Longe de Casa
                                    
                                     2024 - Homem-Aranha: Sem Volta para Casa
                                    
                                     2024 - Eternos
                                    
                                     2024 - Shang-Chi e a Lenda dos Dez Anéis
                                    
                                     2024 - Gavião Arqueiro 
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  <strong>Lançamentos da Marvel</strong>
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Doutor Estranho no Multiverso da Loucura (Cinemas – 6 de maio)
                                    Thor: Amor e Trovão (Cinemas – 8 de julho)
                                    Ms. Marvel (Disney+ – Verão do Hemisfério Norte)
                                    Pantera Negra: Wakanda Para Sempre (Cinemas – 11 de novembro)
                                    Cavaleiro da Lua (Disney+ – Sem data de estreia divulgada)
                                    She-Hulk (Disney+ – Sem data de estreia divulgada)
                                    Especial de Natal dos Guardiões da Galáxia (Disney+ – Final do Ano)
                                </div>
                              </div>
                            </div>
                         </div>
                    </div>
                </div>
        <?php }else{ ?>
            <div class="row">
                      <div class="col-sm">
                          &nbsp;
                        </div>
                    </div>
                     
                <div class="row">
                    <div class="col-sm">
                        <img src="img/dc_logo.jpg" class="d-black w-100">
                        <br>
                        <h3>História da DC</h3>
                        <h5>Em 1935, a editora de quadrinhos foi fundada por Major Malcolm Wheeler-Nicholson, com o nome National Allied Publication. Algum tempo depois, Major lançou outras duas editoras diferentes, com os nomes New Comics e Detective Comics. Esta última, inclusive, foi responsável por apresentar ao mundo as histórias do Batman, em 1939.</h5>
                        <br>
                        <p style="text-align: justify;">Além das histórias de super-heróis, a DC também passou a publicar histórias de ficção científica, faroeste, humor e romance, principalmente no início da década de 50, quando o interesse por heróis diminuiu.
                        Em 1952, entretanto, o seriado “As Aventuras do Super-Homem” estreou na televisão. Assim, os super-heróis da DC voltaram a ganhar atenção. Nesta época, o Flash passou por uma reformulação e ganhou uma nova cara, diferente da apresentada na Era de Ouro. A DC, então, percebeu que podia fazer o mesmo com vários outros personagens.
                          
                        </p>
                    </div>
                    <div class="col-sm">
                        <h3>DC Comics</h3>
                        <br>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <strong> Ordem cronologica dos filmes DC </strong>
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   O Homem de Aço (2013) Batman vs. Superman (2016) Esquadrão Suicida (2016) Mulher-Maravilha (2017) Liga da Justiça (2017) Aquaman (2018) Shazam! (2019) Aves de Rapina (2020) Mulher-Maravilha 1984 (2020) Liga da Justiça de Zack Snyder (2017) O Esquadrão Suicida (2021)
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 <strong>lançamentos DC</strong>
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  “Batman” – 03 de Março de 2022.
                                    “DC liga dos SuperPets” – 19 de Maio de 2022.
                                    “Adão Negro” – 28 de Julho de 2022. 
                                    “The Flash” – 03 de Novembro de 2022.
                                    “Aquaman e o Reino Perdido” – 15 de Dezembro de 2022.
                              </div>
                              </div>
                            </div>
                            
                            </div>
                          </div>
                    </div>
                </div>
        <?php } ?>







           
          
         
          </div>
    </body>
</html>

 