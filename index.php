<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Caio Mariano CV</title>
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div id="photo-header" class="text-center">
            <!-- PHOTO (AVATAR) -->
            <div id="photo">
              <img src="img/avatar2.jpg" alt="avatar">
            </div>
            <div id="text-header">
              <h1>Olá,<br> meu nome é <span>Caio Mariano</span> e este é o meu Curriculum Vitae</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-7">
          <!-- ABOUT ME -->
          <div class="box">
            <h2>Sobre</h2>
            <p>Nascido e residente em Maringá - PR. Com <?php echo (date('Y')-1987);?> anos, cristão e sempre em busca de novos conhecimentos.</p>
          </div>
          <!-- EDUCATION -->
          <div class="box">
            <h2>Formação Acadêmica</h2>
            <ul id="education" class="clearfix">
              <li>
                <div class="year pull-left">2011</div>
                <div class="description pull-right">
                  <h3>Tecnologia em Sistemas para Internet</h3>
                  <p>Unicesumar - Centro Universitário de Maringá</p>
                </div>
              </li>
              <li>
                <div class="year pull-left">2014</div>
                <div class="description pull-right">
                  <h3>Pós Graduação em Engenharia de Produção</h3>
                  <p>Unicesumar - Centro Universitário de Maringá</p>
                </div>
              </li>
              <li>
                <div class="year pull-left">2016</div>
                <div class="description pull-right">
                  <h3>Pós Graduação em Desenvolvimento para Internet (Cursando)</h3>
                  <p>Unicesumar - Centro Universitário de Maringá</p>
                </div>
              </li>
            </ul>
          </div>
          <!-- EXPERIENCES -->
          <div class="box">
            <h2>Experiência Profissional</h2>
            <div class="job clearfix">
              <div class="col-xs-4">
                <div class="where">Unicesumar</div>
                <div class="year">2012 - Atual</div>
              </div>
              <div class="col-xs-8">
                <div class="profession">Programador Sênior</div>
                <div class="description">Desenvolvimento e manutenção dos sistemas internos da Instituição.</div>
              </div>
            </div>
            <div class="job clearfix">
              <div class="col-xs-4">
                <div class="where">Governança Brasil</div>
                <div class="year">2010 - 2011</div>
              </div>
              <div class="col-xs-8">
                <div class="profession">Assistente Técnico Jr.</div>
                <div class="description">Implantação do sistema desenvolvido pela empresa. Desde a instalação do Banco de dados até o treinamento e palestras sobre o sistema.</div>
              </div>
            </div>
            <div class="job clearfix">
              <div class="col-xs-4">
                <div class="where">Tribunal de Justiça do Paraná - Estágio</div>
                <div class="year">2008 - 2010</div>
              </div>
              <div class="col-xs-8">
                <div class="profession">Técnico de Informática</div>
                <div class="description">Montagem e Manutenção de Computadores</div>
              </div>
            </div>
            <div class="job clearfix">
              <div class="col-xs-4">
                <div class="where">Master Store Informática - Estágio</div>
                <div class="year">2006</div>
              </div>
              <div class="col-xs-8">
                <div class="profession">Técnico de Informática</div>
                <div class="description">Montagem e Manutenção de Computadores</div>
              </div>
            </div>
            <div class="job clearfix">
              <div class="col-xs-4">
                <div class="where">Unicesmar - Estágio</div>
                <div class="year">2006</div>
              </div>
              <div class="col-xs-8">
                <div class="profession">Auxiliar Administrativo - RH</div>
                <div class="description">.</div>
              </div>
            </div>
          </div>
          <!-- CURSOS E PALESTRAS -->
          <div class="box">
            <h2>Cursos e Palestras</h2>
            <h5 class="text-center">Cursos</h5>
            <hr>
            <div class="job clearfix">
              <div class="col-xs-6">
                <div class="where">Webschool</div>
                <div class="year">2014</div>
              </div>
              <div class="col-xs-6">
                <div class="profession">Be MEAN</div>
                <div class="description">Workshop sobre MongoDB, ExpressJS, AngularJS e NodeJS.</div>
              </div>
            </div>
            <div class="job clearfix">
              <div class="col-xs-6">
                <div class="where">Universidade Estadual de Maringá</div>
                <div class="year">2010</div>
              </div>
              <div class="col-xs-6">
                <div class="profession">Fale a Linguagem da Internet: PHP</div>
                <div class="description">Curso básico sobre PHP.</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-5">
          <!-- CONTACT -->
          <div class="box clearfix">
            <h2>Contato</h2>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-phone fa-fw"></span></div>
              <div class="title only pull-right">(44) 9832-1198</div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-envelope fa-fw"></span></div>
              <div class="title only pull-right">caiomariano@caiomariano.com</div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-twitter fa-fw"></span></div>
              <div class="title pull-right">Twitter</div>
              <div class="description pull-right">https://twitter.com/caionitro</div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-facebook fa-fw"></span></div>
              <div class="title pull-right">Facebook</div>
              <div class="description pull-right">https://www.facebook.com/caionitromariano</div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-skype fa-fw"></span></div>
              <div class="title pull-right">Skype</div>
              <div class="description pull-right">caionitro</div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-github fa-fw"></span></div>
              <div class="title pull-right">GitHub</div>
              <div class="description pull-right">https://www.github.com/caionitro</div>
            </div>
          </div>
          <!-- SKILLS -->
          <div class="box">
            <h2>Habilidades em programação</h2>
            <div class="skills">
              <div class="item-skills" data-percent="1.00">HTML5</div>
              <div class="item-skills" data-percent="0.85">jQuery</div>
              <div class="item-skills" data-percent="0.75">CSS3</div>
              <div class="item-skills" data-percent="0.75">PHP</div>
              <div class="item-skills" data-percent="0.75">MSSQL</div>
              <div class="item-skills" data-percent="0.75">MySQL</div>
              <div class="item-skills" data-percent="0.55">Bootstrap</div>
              <div class="item-skills" data-percent="0.20">Silex</div>
              <div class="item-skills" data-percent="0.20">Angular</div>
              <div class="item-skills" data-percent="0.20">NodeJS</div>
              <div class="item-skills" data-percent="0.20">MongoDB</div>
              <div class="skills-legend clearfix">
                <div class="legend-left legend">Iniciante</div>
                <div class="legend-left legend"><span>Competente</span></div>
                <div class="legend-right legend"><span>Expert</span></div>
                <div class="legend-right legend">Master</div>
              </div>
            </div>
          </div>
          <!-- LANGUAGES -->
          <div class="box">
            <h2>Linguas</h2>
            <div id="language-skills">
              <div class="skill">Português <div class="icons pull-right"><div style="width: 80%;" class="icons-red"></div></div></div>
              <div class="skill">Inglês <div class="icons pull-right"><div style="width: 30%;" class="icons-red"></div></div></div>
            </div>
          </div>
          <!-- HOBBIES -->
          <div class="box">
            <h2>Hobbies</h2>
            <div class="hobby">Bike</div>
            <div class="hobby">Violino</div>
            <div class="hobby">Games</div>
          </div>
        </div>
      </div>
    </div>
    <!-- JQUERY -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- BOOTSTRAP -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SCRIPTS -->
    <script src="js/scripts.js"></script>
  </body>
</html>
