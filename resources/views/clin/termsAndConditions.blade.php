@extends('clin.head')

@section('content')

    <body class="u-body">
        <header class="u-clearfix u-header u-sticky u-white u-header" id="sec-b474">
            <div class="u-clearfix u-sheet u-sheet-1">
                <a href="https://www.clin.app.br/" class="u-image u-logo u-image-1" data-image-width="150"
                    data-image-height="87" title="inicio">
                    <img src="{{ asset('imagens/clin/logo.svg') }}" class="u-logo-image u-logo-image-1"
                        data-image-width="146.3292">
                </a>
                <nav
                    class="u-align-right-lg u-align-right-md u-align-right-sm u-align-right-xs u-menu u-menu-dropdown u-offcanvas u-menu-1">
                    <div class="menu-collapse" style="font-size: 1.25rem; letter-spacing: 0px; font-weight: 700;">
                        <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                            href="#">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                            </svg>
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                                        <rect y="1" width="16" height="2"></rect>
                                        <rect y="7" width="16" height="2"></rect>
                                        <rect y="13" width="16" height="2"></rect>
                                    </symbol>
                                </defs>
                            </svg>
                        </a>
                    </div>
                    <div class="u-custom-menu u-nav-container">
                        <ul class="u-nav u-unstyled u-nav-1">
                            <li class="u-nav-item"><a
                                    class="u-button-style u-nav-link u-text-active-palette-1-base u-text-custom-color-5 u-text-hover-custom-color-4"
                                    href="https://www.clin.app.br/#sec-84b0" data-page-id="169241702"
                                    style="padding: 10px 20px;">Início</a>
                            </li>
                            <li class="u-nav-item"><a
                                    class="u-button-style u-nav-link u-text-active-palette-1-base u-text-custom-color-5 u-text-hover-custom-color-4"
                                    href="https://www.clin.app.br/#carousel_6a17" data-page-id="169241702"
                                    style="padding: 10px 20px;">Quem somos</a>
                            </li>
                            <li class="u-nav-item"><a
                                    class="u-button-style u-nav-link u-text-active-palette-1-base u-text-custom-color-5 u-text-hover-custom-color-4"
                                    href="https://www.clin.app.br/#sec-a0d5" data-page-id="169241702"
                                    style="padding: 10px 20px;">Educlin</a>
                            </li>
                            <li class="u-nav-item"><a
                                    class="u-button-style u-nav-link u-text-active-palette-1-base u-text-custom-color-5 u-text-hover-custom-color-4"
                                    href="https://www.clin.app.br/#carousel_2313" data-page-id="169241702"
                                    style="padding: 10px 20px;">Contato</a>
                            </li>
                            <li class="u-nav-item"><a
                                    class="u-button-style u-nav-link u-text-active-palette-1-base u-text-custom-color-5 u-text-hover-custom-color-4"
                                    href="{{ route('terms') }}" style="padding: 10px 20px;">Termos de uso</a>
                            <li class="u-nav-item"><a
                                    class="u-button-style u-nav-link u-text-active-palette-1-base u-text-custom-color-1"
                                    href="{{ route('auth.login') }}" style="padding: 10px 12px;">Minha conta</a>
                            </li>
                        </ul>
                    </div>
                    <div class="u-custom-menu u-nav-container-collapse">
                        <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                            <div class="u-sidenav-overflow">
                                <div class="u-menu-close"></div>
                                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                    <ul class="u-nav u-unstyled u-nav-1">
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="https://www.clin.app.br/#sec-84b0" data-page-id="169241702"
                                                style="padding: 10px 20px;">Início</a>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="https://www.clin.app.br/#carousel_6a17" data-page-id="169241702"
                                                style="padding: 10px 20px;">Quem somos</a>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="https://www.clin.app.br/#sec-a0d5" data-page-id="169241702"
                                                style="padding: 10px 20px;">Educlin</a>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="https://www.clin.app.br/#carousel_2313" data-page-id="169241702"
                                                style="padding: 10px 20px;">Contato</a>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="{{ route('terms') }}" style="padding: 10px 20px;">Termos de uso</a>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="{{ route('auth.login') }}" style="padding: 10px 12px;">Minha
                                                conta</a>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                        <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                    </div>
                </nav>
            </div>
        </header>
        <section class="u-align-center u-clearfix u-section-1" id="sec-304f">
            <div class="u-clearfix u-sheet u-sheet-1">
                <div class="u-align-center u-container-style u-expanded-width u-group u-shape-rectangle u-group-1">
                    <div class="u-container-layout u-container-layout-1">
                        <h2 class="u-text u-text-custom-color-1 u-text-default u-text-1">Termos e Condições</h2>
                        <p class="u-align-left u-text u-text-2">
                            <span style="font-size: 1.25rem;" class="u-text-custom-color-1"><b>1. A PLATAFORMA. </b>
                                <br>
                                <br>A Clean House Express Tecnologia LTDA. é uma empresa que fornece uma plataforma digital
                                (“Sistema”) que visa conectar clientes que precisam do serviço de limpeza residencial e
                                comercial e passadoria de roupas (“Serviços”) com profissionais autônomas prestadoras do
                                serviço (“Profissionais Parceiras”), com objetivo único e exclusivo de intermediação dos
                                serviços contratados através da plataforma digital.O acesso ao (“Sistema”) e a contratação
                                dos (“Serviços”) das (“Profissionais Parceiras”), implicam na aceitação deste Termo e
                                condições de uso que regem o seu acesso e uso dos serviços de intermediação (“Serviços”)
                                disponibilizados pela (“Clean House Express”).<br>
                                <br><b>2 . CONDIÇÕES GERAIS.</b>
                                <br>
                                <br>2.1 Ao acessar, usar os Serviços e aceitar os presentes Termos e condições, que
                                estabelecem o relacionamento contratual entre você (“Usuário Cliente”) e a (“Clean House
                                Express”) você reconhece e concorda que Clean House Express se limita a fornecer
                                o&nbsp;Sistema&nbsp;mediante o uso de tecnologia, e não fornece quaisquer&nbsp;Serviços
                                Autônomos, a exemplo dos serviços de limpeza e/ou faxina ou Passadoria de roupa, não atua
                                como uma empresa de limpeza e/ou faxina e nem opera como um agente para a contratação de
                                profissionais de limpeza e/ou faxina, fazendo apenas a intermediação do serviço entre
                                Cliente e Prestadores de serviços, afim de facilitar a contratação e comunicação através da
                                disponibilização do Sistema e ainda a prestação de serviços de Marketing.A Clean House
                                Express se reserva ao direito de encerrar estes Termos ou quaisquer Serviços em relação a
                                qualquer Usuário Cliente, de modo geral, deixar de oferecer ou negar acesso aos Serviços ou
                                a qualquer parte deles, a qualquer momento, quando constatadas condutas reprováveis e
                                incompatíveis com uma relação cordial, urbana e de acordo com as regras de uso do site e
                                serviços. Termos de Uso ou da legislação aplicável. Nestes casos, não será devida qualquer
                                indenização ao Usuário, podendo a Clean House Express Tecnologia promover a competente ação
                                de regresso, se necessário, bem como quaisquer outras medidas necessárias para perseguir e
                                resguardar seus interesses.<br>
                                <br>2.2. As Profissionais Parceiras não são prepostos, agentes, representantes, funcionários
                                ou empregados da Clean House Express nos termos do Decreto-Lei nº 5.452/1943, mas são
                                simplesmente profissionais autônomos contratantes da plataforma online, que possibilita
                                ofertar seus respectivos Serviços Autônomos. Assim, quando Você usa o Sistema para contratar
                                um Serviço Autônomo, tenha em mente que Você está estabelecendo uma relação contratual de
                                prestação de serviços autônomos, regido pelo art. 593 e seguintes do Código Civil, com as
                                Profissionais Parceiras, que também é somente um usuário do nosso Sistema.&nbsp;2.3. Desta
                                forma, toda e qualquer intercorrência, advinda da contratação dos Serviços Autônomos deve
                                ser tratada diretamente entre o Usuário e as Profissionais Parceiras.<br>
                                <br><b>3. OS SERVIÇOS.</b>
                                <br>
                                <br>O tempo recomendado pelo Sistema para realização do serviço é uma SUGESTÃO com base
                                histórica e média nos serviços solicitados pelo Usuário Cliente, a Clean House Express não
                                tem nenhuma responsabilidade pela insuficiência ou incompletude dos dados disponibilizados.
                                Caso a insuficiência ou incompletude dos dados fornecidos pelo Usuário Cliente impossibilite
                                a prestação do serviço, o Usuário Cliente assume a culpa exclusiva pela não prestação do
                                serviço, isentando nestes casos a Clean House Express e o Usuário Prestador por qualquer
                                problema na prestação.<br>
                                <br><b>3. O USO DOS SERVIÇOS.</b>
                                <br>
                                <br>3.1. Contas de usuários.<br>
                                <br>Para utilizar os Serviços você deve registrar-se e manter uma conta pessoal de usuário
                                (“Conta”). O registro de Conta exige que você apresente à Clean House Express Tecnologia
                                certas informações, tais como seu nome, CNPJ ou CPF, endereço, CEP, número de telefone
                                celular, documento de identificação e data de nascimento. Você concorda em manter
                                informações corretas, completas e atualizadas em sua Conta. Se você não mantiver informações
                                corretas, completas e atualizadas em sua Conta você poderá ficar impossibilitado(a) de
                                acessar e usar os Serviços. Você é responsável por todas as atividades realizadas na sua
                                Conta e concorda em manter sempre a segurança e o sigilo do nome de usuário e senha da sua
                                Conta.<br>
                                <br>3.1.1 Os Serviços Autônomos limitam-se à prestação de serviços de faxina e limpeza, a
                                serem executados em residências e/ou locais comerciais localizados no Brasil e que estejam
                                abrangidos pelo Sistema.<br>
                                <br>3.1.2. Para contratar os Serviços Autônomos e para acessar certas áreas do Sistema,
                                precisamos que Você efetue um prévio cadastro, fornecendo voluntariamente informações
                                pessoais, como, por exemplo: nome, endereço, e-mail e telefone. Ao nos prover com suas
                                informações pessoais, Você nos autoriza a divulgar e/ou utilizar estas informações de acordo
                                com este Termo e nas condições previstas na nossa Política de Privacidade, que está
                                disponível no Website.<br>
                                <br>3.1.3. Complementarmente, para a efetiva contratação dos Serviços Autônomos por meio do
                                Sistema, será necessário que Você forneça informações adicionais, tais como: (i) a hora e o
                                dia em que Você precisa do Serviço Autônomo; (ii) o local onde serão executados os Serviços
                                Autônomos; e (iii) observações para a prestação dos Serviços Autônomos.<br>
                                <br>3.1.3.1. O tempo despendido pelas Profissionais Parceiras nos Serviços Autônomos
                                contratados por Você corresponderá à quantidade de tempo adquirida por Você no Sistema.<br>
                                <br>3.1.3.2. O Sistema oferecerá a Você uma sugestão de tempo a adquirir com base nas
                                tarefas que Você solicitou (e.g limpar janelas, interior de armários, lavar roupas, etc.).
                                Essa sugestão é baseada na nossa experiência e não representa uma garantia ou
                                comprometimento da Clean House Express ou das Profissionais Parceiras de que todas as
                                tarefas poderão ser realizadas no período adquirido.<br>
                                <br>3.1.3.3. Você é inteiramente responsável pela veracidade e completude dos dados
                                fornecidos através do Sistema.<br>
                                <br>3.1.3.4. A Clean House Express expressamente informa que não tem nenhuma
                                responsabilidade pela insuficiência ou incompletude dos dados disponibilizados por Você no
                                Sistema. Caso a insuficiência ou incompletude dos dados fornecidos por você impossibilite a
                                prestação do serviço (ex. chave indisponível, cão bravo impossibilitando a entrada, etc.),
                                Você assume culpa exclusiva pela não prestação dos Serviços Autônomos. Nestes casos, nem a
                                Clean House Express e nem as Profissionais Parceiras serão responsáveis, mantendo-se a
                                obrigatoriedade do pagamento ajustado no Sistema, bem como estará expressamente revogada a
                                Garantia Clean House Express de que trata o item 10.4 abaixo.<br>
                                <br>3.1.3.5. A Clean House Express e/ou aos Profissionais Parceiras não são responsáveis nos
                                casos de suspensão temporária dos Serviços Autônomos, por motivos de caso fortuito ou força
                                maior como, por exemplo, mas não se limitando a, quedas de energia e chuva, ficando
                                expressamente revogada a Garantia Clean House Express.<br>
                                <br><b>3.2. CÓDIGOS PROMOCIONAIS</b>.<br>
                                <br>A Clean House Express poderá, a seu exclusivo critério, criar Cupons de desconto que
                                poderão ser resgatados para crédito na Conta ou outras características ou benefícios
                                relacionados aos Serviços e/ou a Serviços do Usuário Prestador, sujeitos a quaisquer
                                condições adicionais que sejam estabelecidas para cada um dos códigos promocionais (“Cupons
                                de desconto”). Você concorda que Códigos Promocionais: (i) devem ser usados de forma legal
                                para a finalidade e o público a que se destinam; (ii) poderão ser desabilitados pela Clean
                                House Express a qualquer momento por motivos legalmente legítimos, sem que disto resulte
                                qualquer responsabilidade; (iii) somente poderão ser usados de acordo com as condições
                                específicas que a Clean House Express estabelecer para esses Código Promocional; (iv) não
                                são válidos como dinheiro; e (v) poderão expirar antes de serem usados. A Clean House
                                Express se reserva no direito de reter ou deduzir créditos ou outras funcionalidades ou
                                vantagens obtidas por meio do uso dos Códigos Promocionais por você ou por outro Usuário
                                Cliente, caso a Clean House Express apure ou acredite que o uso ou resgate do Código
                                Promocional foi feito com erro, fraude, ilegalidade ou violação às condições do respectivo
                                Código Promocional. Eventuais Promoções podem afetar o preço final de uma Proposta de
                                serviço. Caso realizadas, essas promoções têm caráter temporário, transitório e não
                                vinculante.<br>
                                <br><b>3.3. ACESSO À REDE E EQUIPAMENTOS.</b>
                                <br>
                                <br>Você é responsável por obter o acesso à rede de dados necessário para usar os Serviços.
                                As taxas e encargos de sua rede de dados e mensagens poderão se aplicar se você acessar ou
                                usar os Serviços de um dispositivo sem fio e você será responsável por essas taxas e
                                encargos. Você é responsável por adquirir e atualizar os equipamentos e dispositivos
                                necessários para acessar e usar os Serviços e Aplicativos e quaisquer de suas atualizações.
                                A Clean House Express <span style="font-weight: 700;">NÃO GARANTE QUE OS SERVIÇOS, OU
                                    QUALQUER PARTE DELES, FUNCIONARÃO EM QUALQUER EQUIPAMENTO OU DISPOSITIVO EM
                                    PARTICULAR.</span> Além disso, os Serviços poderão estar sujeitos a mau funcionamento e
                                atrasos inerentes ao uso da Internet e de comunicações eletrônicas.<br>
                                <br><b>4. PAGAMENTO.</b>
                                <br>
                                <br>Você entende e aceita que os serviços que você contratar e receber de um Usuário
                                Prestador, contratado por meio por intermédio da Clean House Express, tem um valor variável
                                e são cobrados (“Preço”) no ato da contratação. Para a realização do serviço você através da
                                Clean House Express realizará a reserva e o pré-pagamento do serviço pelo sistema de
                                pagamentos da Wirecard Brasil S.A. sociedade anônima, estabelecida no Brasil, com sede na
                                Av. Brigadeiro Faria Lima, 3064, São Paulo/SP, inscrita no Cadastro Nacional de Pessoas
                                Jurídicas do Ministério da Fazenda (CNPJ/MF), sob n. 08.718.431/0001-08.<br>
                                <br>A Clean House Express facilitará o pagamento do respectivo Preço em nome do Usuário
                                Prestador através de sua Aplicação. Assim, o pagamento é feito diretamente por você Usuário
                                Cliente na plataforma bancária (Wirecard) e esta, por sua vez, repassa ao Usuário Prestador
                                e à Clean House. O preço pago por você é final e não reembolsável, a menos que diversamente
                                determinado pela Clean House Express. Você tem o direito de solicitar uma redução no Preço
                                ao Usuário Prestador por serviços em caso de problemas ou qualidade do serviço. Assim, cada
                                um dos envolvidos enviará a respectiva nota fiscal, ou seja, uma da Clean House e uma de
                                cada prestador de serviços, fechando o valor total a ser pago no boleto.Na relação entre
                                você e a Clean House Express, a Clean House Express reserva-se o direito de estabelecer,
                                remover e/ou revisar o Preço relativo a todos os serviços ou bens obtidos por meio do uso
                                dos Serviços a qualquer momento, a critério exclusivo da Clean House Express.Ademais, você
                                reconhece e concorda que o Preço aplicável em certas áreas geográficas poderão aumentar
                                substancialmente quando a oferta de serviços por parte dos Usuários Prestadores for menor do
                                que a demanda por referidos serviços. A Clean House Express poderá, a qualquer momento,
                                fornecer a certos(as) Usuários(as) Clientes ofertas e descontos promocionais que poderão
                                resultar em valores diferentes cobrados por Serviços iguais ou similares a outros obtidos
                                por meio do uso dos Serviços, e você concorda que essas ofertas e descontos promocionais, a
                                menos que também oferecidos a você, não terão influência sobre os Preços aplicados.<br>
                                <br>4.1 Cancelamento<br>
                                <br>Você poderá optar por cancelar sua solicitação de serviços ou bens de um Usuário
                                Prestador com&nbsp;<b>24 horas de antecedência</b>, caso em que incidirá uma taxa de
                                cancelamento, correspondente&nbsp;<b>a 20% do valor da fatura</b>.<br>
                                <br>O Usuário Prestador, através de Contrato de Intermediação entende que ao prestar um
                                serviço de limpeza, passadoria ou manutenção em geral será cobrada uma taxa de utilização do
                                Serviço da Clean House Express. Essa taxa não depende do pagamento do Serviço pelo Usuário
                                Cliente. Esta estrutura de pagamento se destina a remunerar integralmente os Usuários
                                Prestadores pelos serviços disponibilizados. A Clean House Express não indica nenhuma
                                parcela do pagamento como gorjeta ou gratificação aos Usuários Prestadores. Você compreende
                                e concorda que embora você seja livre para fazer pagamentos adicionais como gorjeta a
                                quaisquer Usuários Prestadores que forneça serviços ou bens por meio dos Serviços, você não
                                tem obrigação de fazê-lo.<br>
                                <br>Caso o Usuário Cliente não atenda o Usuário Prestador na data agendada ele se compromete
                                a pagar uma multa de cancelamento 50% do valor da fatura, a fim de cobrir os custos de
                                deslocamento do Usuário Prestador e da remuneração da CLEAN HOUSE Express Tecnologia. O
                                Usuário Cliente não poderá realizar uma nova solicitação de Serviço sem o pagamento dessa
                                taxa.<br>
                                <br><b>5. RECUSA DE GARANTIA, LIMITAÇÃO DE RESPONSABILIDADE E INDENIZAÇÃO.</b>
                                <br>
                                <br>5.1. Recusa de garantia.<br>
                                <br>Os serviços são prestados “no estado” e “como disponíveis”. A Clean House Express recusa
                                todas as declarações e garantias, expressas, implícitas ou legais, não expressamente
                                contidas nestes termos, inclusive as garantias implícitas de comercialização, adequação a
                                uma finalidade específica e não infringência. Ademais, a Clean House Express não faz nenhuma
                                declaração nem dá garantia sobre a confiabilidade, pontualidade, qualidade, adequação ou
                                disponibilidade dos serviços ou de quaisquer serviços ou bens solicitados por meio do uso da
                                plataforma, nem que os serviços serão ininterruptos ou livres de erros. A Clean House
                                Express não garante a qualidade, adequação, segurança ou habilidade de prestadores. Você
                                concorda que todo o risco decorrente do uso dos serviços e de qualquer serviço solicitado
                                por meio da tecnologia será sempre seu na máxima medida permitida pela lei aplicável.<br>
                                <br><b>&nbsp;<span style="font-weight: 400;">5.2. Limitação de responsabilidade.</span></b>
                                <br>
                                <br>A Clean House Express não será responsável por danos indiretos, incidentais, especiais,
                                punitivos ou emergentes, inclusive lucros cessantes, perda de dados, danos morais ou
                                patrimoniais relacionados, associados ou decorrentes de qualquer uso dos serviços ainda que
                                a Clean House Express tenha sido alertada para a possibilidade desses danos. A Clean House
                                Express não será responsável por nenhum dano, obrigação ou prejuízo decorrente do: (i) seu
                                uso dos serviços ou sua incapacidade de acessar ou usar os serviços; ou (ii) qualquer
                                operação ou relacionamento entre você e qualquer usuário prestador, ainda que a Clean House
                                Express tenha sido alertada para a possibilidade desses danos. A Clean House Express não
                                será responsável por atrasos ou falhas decorrentes de causas fora do controle da Clean House
                                Express.<br>
                                <br>As limitações e recusa de garantias contidas nesta cláusula 5 não possuem o objetivo de
                                limitar responsabilidades ou alterar direitos de consumidor que de acordo com a lei
                                aplicável não podem ser limitados ou alterados.<br>
                                <br>Caso o usuário cliente utilize os serviços de um usuário prestador e não fique
                                satisfeito com a qualidade dos mesmos, o usuário prestador poderá, a seu exclusivo critério
                                e por mera liberalidade, reembolsar o usuário cliente desde que esse comprove que a
                                realização não segue os padrões razoáveis exigidos pela Clean House Express. O usuário
                                prestador reconhece que em caso de reembolso o valor será descontado de sua conta e não
                                inclui as taxas de utilização do serviço da Clean House Express.<br>
                                <br>5.3. Indenização.<br>
                                <br>Você concorda em indenizar e manter a Clean House Express, seus diretores(as),
                                conselheiros(as), empregados(as) e agentes isentos(as) de responsabilidade por todas e
                                quaisquer reclamações, cobranças, prejuízos, responsabilidades e despesas (inclusive
                                honorários advocatícios) decorrentes ou relacionados: (i) ao uso dos Serviços, de serviços
                                ou bens obtidos por meio do uso dos Serviços; (ii) descumprimento ou violação de qualquer
                                disposição destes Termos; (iii) o uso, pela Clean House Express, do Conteúdo de Usuário(a);
                                ou (iv) violação dos direitos de terceiros, inclusive Prestadores Terceiros.<br>
                                <br>Reservamo-nos o direito de assumir a defesa exclusiva e o controle de qualquer assunto
                                sujeito à indenização.Na hipótese da Clean House Express ser condenada por ato praticado
                                pelo Usuário Cliente ou Usuário Prestador, caberá a Clean House Express o direito de
                                regresso contra quem causou referido prejuízo por ela indenizado.<br>
                                <br><b>6. LEGISLAÇÃO APLICÁVEL, JURISDIÇÃO.</b>
                                <br>
                                <br>Estes Termos serão regidos e interpretados exclusivamente de acordo com as leis do
                                Brasil. Qualquer reclamação, conflito ou controvérsia que surgir deste contrato ou a ele
                                relacionada, inclusive que diga respeito a sua validade, interpretação ou exequibilidade,
                                será solucionada exclusivamente pelos tribunais do foro de Curitiba/PR.<br>
                                <br><b>7. OUTRAS DISPOSIÇÕES</b>
                                <br>
                                <br>7.1. Avisos.<br>
                                <br>A Clean House Express poderá enviar avisos por meio de notificações gerais nos Serviços,
                                correio eletrônico para seu endereço de e-mail em sua Conta, ou por comunicação escrita
                                enviada ao endereço indicado em sua Conta. Você poderá notificar a Clean House Express por
                                meio da Conta de usuário, comunicação pelo endereço eletrônico
                                contato@cleanhouseexpress.com.br.<br>
                                <br>7.2. Titularidade.<br>
                                <br>O uso comercial do nome, dos desenhos e da expressão “Clean House Express” como nome
                                empresarial, marca, ou nome de domínio, conteúdos dos sítios da Internet e aplicativos,
                                assim como os programas, bancos de dados, documentos e demais utilidades e aplicações
                                relativas são de propriedade da Clean House Express e estão protegidos por todas as leis e
                                tratados aplicáveis. O uso indevido e a reprodução total ou parcial dos conteúdos referidos
                                são proibidos. Usar qualquer conteúdo aqui mencionado sem a prévia e expressa autorização da
                                Clean House Express poderá acarretar em responsabilizações penais e civis.<br>
                                <br>7.3. Materiais para o serviço.<br>
                                <br>Você pode optar em fornecer ou não os produtos necessários. Caso contrate, estes serão
                                fornecidos pela profissional contratada. Caso o Usuário Cliente forneça os produtos, este se
                                responsabiliza integralmente pela garantia dos equipamentos mínimos para segurança e
                                realização do serviço solicitado pelo Usuário Prestador. O usuário cliente assume que caso
                                não haja condições para prestação do serviço o mesmo será dado como realizado.<br>
                                <br>7.4. Disposições gerais.<br>
                                <br>Você concede sua aprovação para que a Clean House Express ceda e transfira estes Termos
                                total ou parcialmente, inclusive: (i) para uma subsidiária ou afiliada; (ii) um adquirente
                                das participações acionárias, negócios ou bens da Clean House Express; ou (iii) para um
                                sucessor em razão de qualquer operação societária. Não existe joint-venture, sociedade,
                                emprego ou relação de representação entre você, a Clean House Express ou quaisquer
                                Prestadores Terceiros como resultado do contrato entre você e a Clean House Express ou pelo
                                uso dos Serviços. Caso qualquer disposição destes Termos seja tida como ilegal, inválida ou
                                inexequível total ou parcialmente, por qualquer legislação, essa disposição ou parte dela
                                será, naquela medida, considerada como não existente para os efeitos destes Termos, mas a
                                legalidade, validade e exequibilidade das demais disposições contidas nestes Termos não
                                serão afetadas. Nesse caso, as partes substituirão a disposição ilegal, inválida ou
                                inexequível, ou parte dela, por outra que seja legal, válida e exequível e que, na máxima
                                medida possível, tenha efeito similar à disposição tida como ilegal, inválida ou inexequível
                                para fins de conteúdo e finalidade dos presentes Termos. Estes Termos constituem a
                                totalidade do acordo e entendimento das partes sobre este assunto e substituem e prevalecem
                                sobre todos os entendimentos e compromissos anteriores sobre este assunto. Nestes Termos, as
                                palavras “inclusive” e “inclui” significam “incluindo, sem limitação”.<br>
                                <br>PENALIDADES<br>
                                <br>O usuário não poderá contratar a prestadora do serviço sem o uso da plataforma ou sob a
                                forma de empregado ou outra forma qualquer, no período de até 06 (seis) meses após a
                                prestação do serviço, sob pena de incorrer e uma multa de R$ 1.000,00 (mil reais),
                                além de ser automaticamente excluído da plataforma.<br>
                                <br><b>8. PÓLITICA DE PRIVACIDADE.</b>
                                <br>
                                <br>8.1. Disposições gerais.<br>
                                <br>Você Usuário autoriza a Clean House Express a informar e/ou divulgar seus dados em caso
                                de exigência legal ou se razoavelmente necessárias para: (i) cumprir com o devido processo
                                legal; (ii) fazer cumprir os Termos e condições; (iii) responder a alegações de suposta
                                violação de direitos de terceiros e (iv) para proteger os direitos, a propriedade ou a
                                segurança de terceiros ou da própria Clean House Express e de seus Usuários. A Clean House
                                Express poderá utilizar cookies para administrar as sessões, navegações, acessos e cadastros
                                dos Usuários e armazenar preferências, rastrear informações, entre outros. Cookies poderão
                                ser utilizados independentemente de cadastro do Usuário.&nbsp;<br>
                                <br>A Clean House Express se reserva o direito de reter informações pelo período que
                                entender necessário para o bom cumprimento de seus negócios, mesmo após o encerramento da
                                conta do Usuário.<br>
                                <br>8.2. Políticas de terceiros.<br>
                                <br>Considerando que a Clean House Express poderá realizar parcerias com terceiros,
                                eventualmente estes poderão coletar informações de usuários como endereço IP, especificação
                                do navegador e sistema operacional. Os Termos e condições não se aplicam às informações
                                pessoais fornecidas a terceiros e por eles armazenadas e utilizadas. A Clean House Express
                                poderá, eventualmente, conter links para sites de terceiros. Da qual não se responsabiliza
                                pelo conteúdo ou pela segurança das informações do Usuário quando acessar sites de
                                terceiros. Tais sites podem possuir suas próprias políticas de privacidade quanto ao
                                armazenamento e conservação de informações pessoais, completamente alheias à Clean House
                                Express.<br>
                                <br>8.3. Falhas no sistema.<br>
                                <br>A Clean House Express não se responsabiliza por qualquer dano, prejuízo ou perda no
                                equipamento do Usuário causado por falhas no sistema, no servidor ou na internet decorrentes
                                de condutas de terceiros. A Clean House Express também não se responsabiliza por vírus que
                                possam atacar o equipamento do Usuário quando da utilização do site. Não poderão ser
                                atribuídos à empresa prejuízos advindos de dificuldades técnicas ou falhas de sistema ou na
                                internet. Eventualmente, o sistema poderá ficar indisponível por motivos técnicos ou falhas
                                da internet, ou por qualquer outro evento fortuito ou de força maior alheio ao controle da
                                Clean House Express, que não se responsabiliza por danos ou prejuízos resultantes destes
                                eventos.<br>
                                <br>8.4. Direitos de propriedade intelectual.<br>
                                <br>Os elementos e/ou ferramentas encontrados no Site, com exceção dos Conteúdos e/ou
                                Anúncios submetidos por Usuários, são de titularidade ou licenciados para a Clean House
                                Express, sujeitos aos direitos intelectuais de acordo com as leis brasileiras e tratados e
                                convenções internacionais dos quais o Brasil seja signatário. Apenas a título
                                exemplificativo, entendem-se como tais: textos, softwares, scripts, imagens gráficas, fotos,
                                sons, músicas, vídeos, recursos interativos e similares, marcas, marcas de serviços,
                                logotipos e look and feel. A Clean House Express reserva a si todos os direitos que não
                                foram expressamente previstos em relação ao sítio da Internet, aos seus elementos e/ou
                                ferramentas. O usuário compromete-se a não usar, reproduzir ou distribuir quaisquer
                                elementos e/ou ferramentas que não sejam expressamente permitidos pela Clean House Express –
                                inclusive o uso, reprodução ou distribuição para fins comerciais dos Anúncios e/ou Conteúdos
                                extraídos do sítio da Internet. Caso o Usuário faça qualquer cópia, seja ela via download ou
                                impressão, dos elementos e/ou ferramentas da Clean House Express para uso exclusivamente
                                pessoal, deverá preservar todos os direitos de propriedade intelectual inerentes. O Usuário
                                concorda em não burlar, desativar ou, de alguma forma, interferir em recursos e/ou
                                ferramentas relacionados à segurança do Site, sob pena de incorrer nas medidas judiciais
                                cabíveis.<br>
                                <br>
                                <span style="font-weight: 700;">9. POLITICA DE DESATIVAÇÃO.</span>
                                <br>
                                <br>A Clean House Express é uma plataforma que conecta pessoas por meio de tecnologia,
                                ajudando prestadores de serviços a encontrar clientes e vice-versa. Isso só é possível
                                quando criamos uma rede confiável de Usuários Clientes e Usuários Prestadores. Para que isso
                                seja justo e real criamos algumas políticas que podem levar a desativação temporária ou
                                permanente de Usuários Clientes e Usuários Prestados na plataforma da Clean House
                                Express.<br>
                                <br>Quando uma conta Clean House Express é desabilitada, mesmo que apenas temporariamente,
                                os Usuários Prestadores não podem aceitar novos serviços e os Usuários Clientes ficam
                                impossibilitados de realizar novas compras. Para todas as circunstâncias o Usuário pode
                                solicitar uma análise interna diretamente à Clean House Express.<br>
                                <br>A conta dos Usuários Clientes ou Usuários Prestadores poderá ser desativada quando
                                faltar segurança ou no caso de discriminação ou outra conduta reprovável, conforme
                                exemplificado abaixo:<br>
                                <br><b>
                                    <span style="font-weight: 400;">9.1. Segurança e fraudes.</span></b>
                                <br>
                                <br>&nbsp;A segurança de Usuários Clientes e Usuários Prestadores é um item fundamental para
                                Clean House Express. Levamos em conta as leis vigentes nos pais e damos igual atenção para
                                que todos possam compartilhar seu papel na história.Todos os Usuários da plataforma –
                                Clientes e Prestadores – concordam em cumprir as políticas e leis vigentes, assim tornando a
                                experiência de cada usuário algo cada vez melhor.&nbsp;<br>
                                <br>Um Usuário pode ser banido do sistema por:– Comportamento violento ou inadequado;–
                                Linguagem inadequada ou abusiva;– Contratar prestadores fora da plataforma;– Solicitação ou
                                envolvimento sexual ou apenas gestos sexuais;– Atividade criminosa;– Uso de substâncias
                                ilegais;&nbsp;– Serviços de risco;&nbsp;– Realizar compras e cancelar o pagamento de serviço
                                realizados (chargeback);– Prestadores que aceitam sem a intenção de realizar o serviço;–
                                Contas falsas; e/ou– Cobranças extras ou por fora da plataforma.– Contratação direta da
                                prestadora de serviço, sem prejuízos das demais penalidades aplicáveis.<br>
                                <br><b>
                                    <span style="font-weight: 400;">9.2 Discriminação.</span></b>
                                <br>
                                <br>A Clean House Express é uma plataforma para todos sem distinção e não toleramos
                                discriminação por parte de Usuários Clientes ou Usuários Prestadores.<br>
                                <br>É inaceitável discriminar qualquer usuário com base em suas características como raça,
                                religião, nacionalidade, deficiência, orientação sexual, sexo, estado civil, identidade de
                                gênero, idade ou qualquer outra característica protegida pela legislação aplicável. Ações de
                                discriminação levaram sua conta a ser definitivamente banida.&nbsp;
                            </span>
                            <br>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="u-backlink u-clearfix u-grey-80">
            <p class="u-text">
                <span>powered By Clean House Express - Tecnologia LTDA 2021</span>
            </p>
        </section>
    @endsection
