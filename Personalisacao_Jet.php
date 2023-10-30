<?php
require_once 'classes/PersonalJet.php'; //! Estamos direcionando o programa a requirir a pasta Classe e o Usuarios.php
$u = new Personaliza(); //! Estamos criando uma Usuario
?>

<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <title>Types Login</title>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="CSS/wikiJetCss.css?v=<?php echo time(); ?>">
            <link rel="icon" href="assets/Logo/icone.png" type="image/x-icon">
        </head>

        <body>
        <div class="menu-nav">
                <nav class="nav">
                    <img src="assets/Logo/logo.png">
                    <ul>
                        <li><a href="index.html">Pagina Principal</a></li>
                        <li><a href="Navegacao.html">Navegar pelo Site</a></li>
                        <li><a href="Personalisacao_Jet.php">Crie seu Caça</a></li>
                        <li><a href="Quiz/index.html">Quiz</a></li>
                    </ul>
                </nav>
            </div>
            <div id="Corpo_Form">
                <h1 class=h1 >Crie seu Caça</h1>
                <p class=paragrafo>Abaixo prencha as infomrações para que seu caça possa ser criado</P>
                <table class="tabela_crie_se_caca">
                    <form method="post" class="Formulario">
                        <tr>
                            <th>Dados do Seu Caça</th>
                        </tr>
                        <tr>
                            <td><input class="postion1" type="text" placeholder="Nome do Caça" name="nome" maxlength="110"></td>
                        </tr>
                        <tr>
                            <th>Descrição do Historico</th>
                        </tr>
                        <tr>
                            <td><input class="postion2" type="text" placeholder="Tipo/Missão" name="tipo" maxlength="60"></td>
                        </tr>
                        <tr>
                            <td><input class="postion3" type="text" placeholder="Geração" name="geracao" maxlength="30"></td>
                        </tr>
                        <tr>
                            <td><input class="postion4" type="text" placeholder="País" name="pais" maxlength="50"></td>
                        </tr>
                        <tr>
                            <td><input class="postion5" type="text" placeholder="Fabricante" name="fabricante" maxlength="200"></td>
                        </tr>
                        <tr>
                            <td><input class="postion6" type="text" placeholder="Periodo Produção" name="periodo_producao" maxlength="100"></td>
                        </tr>
                        <tr>
                            <td><input class="postion7" type="text" placeholder="Custo Unitáio" name="custo_unitario" maxlength="20"></td>
                        </tr>
                        <tr>
                            <td><input class="postion8" type="text" placeholder="Custo de Desevolvimento" name="custo_de_desevolvimento" maxlength="20"></td>
                        </tr>
                        <tr>
                            <td><input class="postion9" type="text" placeholder="Tempo de Desevolvimento (Anos)" name="tempo_de_desevolvimento" maxlength="5"></td>
                        </tr>
                        <tr>
                            <td><input class="postion10" type="text" placeholder="Primeiro Voo" name="primeiro_voo" maxlength="20"></td>
                        </tr>
                        <tr>
                            <td><input class="postion11" type="text" placeholder="Introduzido" name="introduzido" maxlength="20"></td>
                        </tr>
                        <tr>
                            <th>Descrição Geral</th>
                        </tr>
                        <tr>
                            <td><input class="postion12" type="text" placeholder="Tripulação" name="tripulacao" maxlength="2"></td>
                        </tr>
                        <tr>
                            <td><input class="postion13" type="text" placeholder="Comprimento (m)" name="comprimento" maxlength="4"></td>
                        </tr>
                        <tr>
                            <td><input class="postion14" type="text" placeholder="Envergadura (m)" name="envergadura" maxlength="4"></td>
                        </tr>
                        <tr>
                            <td><input class="postion15" type="text" placeholder="Altura (m)" name="altura" maxlength="4"></td>
                        </tr>
                        <tr>
                            <td><input class="postion16" type="text" placeholder="Área da Asa" name="area_da_asa" maxlength="4"></td>
                        </tr>
                        <tr>
                            <td><input class="postion17" type="text" placeholder="Peso Vazio" name="peso_va" maxlength="8"></td>
                        </tr>
                        <tr>
                            <td><input class="postion18" type="text" placeholder="Peso Bruto" name="peso_bru" maxlength="8"></td>
                        </tr>
                        <tr>
                            <td><input class="postion19" type="text" placeholder="Peso Cheio" name="peso_che" maxlength="8"></td>
                        </tr>
                        <tr>
                            <td><input class="postion20" type="text" placeholder="Capacidae de Combustivel" name="capacidade_combustivel" maxlength="8"></td>
                        </tr>
                        <tr>
                            <td><input class="postion21" type="text" placeholder="Capacidade de Carga" name="capacidade_carga" maxlength="8"></td>
                        </tr>
                        <tr>
                            <th>Descrição do Motor</th>
                        </tr>
                        <tr>
                            <td><input class="postion21" type="text" placeholder="Numero de Motor(es)" name="numero_motor" maxlength="2"></td>
                        </tr>
                        <tr>
                            <td><input class="postion21" type="text" placeholder="Tipo do Motor" name="tipo_motor" maxlength="50"></td>
                        </tr>
                        <tr>
                            <td><input class="postion22" type="text" placeholder="Fabricante" name="fabricante_motor" maxlength="100"></td>
                        </tr>
                        <tr>
                            <td><input class="postion23" type="text" placeholder="Empuxo Seco" name="empuxo_seco" maxlength="8"></td>
                        </tr>
                        <tr>
                            <td><input class="postion24" type="text" placeholder="Empuxo Pós-Combustão" name="empuxo_pos_combus" maxlength="8"></td>
                        </tr>
                        <tr>
                            <th>Descrição da Performace</th>
                        </tr>
                        <tr>
                            <td><input class="postion25" type="text" placeholder="Velocidade Máxima" name="velocidade_maxi" maxlength="8"></td>
                        </tr>
                        <tr>
                            <td><input class="postion26" type="text" placeholder="Velocidade em Mach" name="velocida_mach" maxlength="8"></td>
                        </tr>
                        <tr>
                            <td><input class="postion27" type="text" placeholder="Alcance" name="alcance" maxlength="8"></td>
                        </tr>
                        <tr>
                            <td><input class="postion28" type="text" placeholder="Alcance Bélico" name="alcance_beleico" maxlength="8"></td>
                        </tr>
                        <tr>
                            <td><input class="postion29" type="text" placeholder="Razão de Subida" name="razao_subida" maxlength="8"></td>
                        </tr>
                        <tr>
                            <td><input class="postion30" type="text" placeholder="Teto Máximo" name="teto_maximo" maxlength="8"></td>
                        </tr>
                        <tr>
                            <th>Descrição do Armamento</th>
                        </tr>
                        <tr>
                            <td><input class="postion31" type="text" placeholder="Metralhadora/Canhão" name="metrala_canhao" maxlength="60"></td>
                        </tr>
                        <tr>
                            <td><input class="postion39" type="text" placeholder="Hardpoints" name="hardpoints" maxlength="100"></td>
                        </tr>
                        <tr>
                            <td><input class="postion33" type="text" placeholder="Misseis Ar-Ar" name="misseis_ar" maxlength="200"></td>
                        </tr>
                        <tr>
                            <td><input class="postion34" type="text" placeholder="Misseis Ar-Terra" name="misseis_terra" maxlength="200"></td>
                        </tr>
                        <tr>
                            <td><input class="postion35" type="text" placeholder="Misseis Anti-Navio" name="misseis_navio" maxlength="200"></td>
                        </tr>
                        <tr>
                            <td><input class="postion36" type="text" placeholder="Misseis de Radiação" name="misseis_radiacao" maxlength="200"></td>
                        </tr>
                        <tr>
                            <td><input class="postion37" type="text" placeholder="Bombas" name="bombas" maxlength="200"></td>
                        </tr>
                        <tr>
                            <td><input class="postion38" type="text" placeholder="Foguetes" name="foguetes" maxlength="200"></td>
                        </tr>
                        <tr>
                            <td><input class="postion39" type="text" placeholder="Radar" name="radar" maxlength="200"></td>
                        </tr>
                        <tr>
                            <td><input class="postion40" type="text" placeholder="Outras" name="outras" maxlength="200"></td>
                        </tr>
                        <tr>
                            <td><input class="postion41" type="submit" value="Cadastrar" name="" maxlength="15"></td>
                        </tr>
                    </form>
                </table>
            </div>
        </body>

        <?php 
    if (isset($_POST['nome'])) {
                    $nome = addslashes($_POST['nome']);
                    $tipo_missao = addslashes($_POST['tipo']);
                    $geracao = addslashes($_POST['geracao']);
                    $pais = addslashes($_POST['pais']);
                    $fabricante = addslashes($_POST['fabricante']);
                    $periodo_producao = addslashes($_POST['periodo_producao']);
                    $custo_unitario = addslashes($_POST['custo_unitario']);
                    $custo_de_desevolvimento = addslashes($_POST['custo_de_desevolvimento']);
                    $tempo_de_desevolvimento = addslashes($_POST['tempo_de_desevolvimento']);
                    $primeiro_voo = addslashes($_POST['primeiro_voo']);
                    $introduzido = addslashes($_POST['introduzido']);
    
    if (isset($_POST['tripulacao'])) {
                    $tripulacao = addslashes($_POST["tripulacao"]);
                    $comprimento = addslashes($_POST['comprimento']);
                    $envergadura = addslashes($_POST['envergadura']);
                    $altura = addslashes($_POST['altura']);
                    $area_da_asa = addslashes($_POST['area_da_asa']);
                    $peso_va = addslashes($_POST['peso_va']);
                    $peso_bru = addslashes($_POST['peso_bru']);
                    $peso_che = addslashes($_POST['peso_che']);
                    $capacidade_combustivel = addslashes($_POST['capacidade_combustivel']);
                    $capacidade_carga = addslashes($_POST['capacidade_carga']);
                    $numero_motor = addslashes($_POST['numero_motor']);

    if (isset($_POST['tipo_motor'])) {
                    $tipo_motor = addslashes($_POST['tipo_motor']);
                    $fabricante_motor = addslashes($_POST['fabricante_motor']);
                    $empuxo_seco = addslashes($_POST['empuxo_seco']);
                    $empuxo_pos_combus = addslashes($_POST['empuxo_pos_combus']);
                    $velocidade_maxi = addslashes($_POST['velocidade_maxi']);
                    $velocida_mach = addslashes($_POST['velocida_mach']);
                    $alcance = addslashes($_POST['alcance']);
                    $alcance_beleico = addslashes($_POST['alcance_beleico']);
                    $razao_subida = addslashes($_POST['razao_subida']);
                    $teto_maximo = addslashes($_POST['teto_maximo']);

    if (isset($_POST['metrala_canhao'])) {
                    $metrala_canhao = addslashes($_POST['metrala_canhao']);
                    $hardpoints = addslashes($_POST['hardpoints']); 
                    $misseis_ar = addslashes($_POST['misseis_ar']);
                    $misseis_terra = addslashes($_POST['misseis_terra']);
                    $misseis_navio = addslashes($_POST['misseis_navio']);
                    $misseis_radiacao = addslashes($_POST['misseis_radiacao']);
                    $bombas = addslashes($_POST['bombas']);
                    $foguetes = addslashes($_POST['foguetes']);
                    $radar = addslashes($_POST['radar']);
                    $outras = addslashes($_POST['outras']);
    if(
                     !empty($nome) &&  
                     !empty($tipo_missao)  &&
                     !empty($geracao) &&
                    !empty($pais) && 
                    !empty($fabricante) &&
                    !empty($periodo_producao) &&
                    !empty($custo_unitario) &&
                    !empty($custo_de_desevolvimento) &&
                    !empty($tempo_de_desevolvimento) &&
                    !empty($primeiro_voo) &&
                    !empty($introduzido)  &&
                    !empty($tripulacao)  &&
                    !empty($comprimento) &&
                    !empty($envergadura) &&
                    !empty($altura) &&
                    !empty($area_da_asa)  &&
                    !empty($peso_va) &&
                    !empty($peso_bru) &&
                    !empty($peso_che) &&
                    !empty($capacidade_combustivel)  &&
                    // !empty($capacidade_carga) &&
                    !empty($numero_motor) &&
                    !empty($tipo_motor)  &&
                    !empty($fabricante_motor)  &&
                    !empty($empuxo_seco)  &&
                    !empty($empuxo_pos_combus)  &&
                    !empty($velocidade_maxi)  && 
                    !empty($velocida_mach) &&
                    !empty($alcance)  &&
                    !empty($alcance_beleico)  &&
                    !empty($razao_subida) && 
                    !empty($teto_maximo)  &&
                    !empty($metrala_canhao)  && 
                    !empty($hardpoints) &&
                    !empty($misseis_ar)  && 
                    !empty($misseis_terra)  &&
                    !empty($misseis_navio)  &&
                    !empty($misseis_radiacao)  &&
                    !empty($bombas)  &&
                    !empty($foguetes)  &&
                    !empty($radar)  &&
                    !empty($outras)
        ) {
            $u->conectar("jetpersonalizacao", "localhost", "root", "1234");
            
            if ($u->msgERRO == "") {
                if ($u->cadastrar(
                    $nome, 
                    $tipo_missao,
                    $geracao, 
                    $pais, 
                    $fabricante,
                    $periodo_producao,
                    $custo_unitario,
                    $custo_de_desevolvimento,
                    $tempo_de_desevolvimento,
                    $primeiro_voo,
                    $introduzido,
                    $tripulacao,
                    $comprimento,
                    $envergadura,
                    $altura,
                    $area_da_asa,
                    $peso_va,
                    $peso_bru,
                    $peso_che,
                    $capacidade_combustivel,
                    $capacidade_carga,
                    $numero_motor,
                    $tipo_motor,
                    $fabricante_motor,
                    $empuxo_seco,
                    $empuxo_pos_combus,
                    $velocidade_maxi,
                    $velocida_mach,
                    $alcance,
                    $alcance_beleico,
                    $razao_subida,
                    $teto_maximo ,
                    $metrala_canhao,
                    $hardpoints,
                    $misseis_ar,
                    $misseis_terra,
                    $misseis_navio,
                    $misseis_radiacao,
                    $bombas,
                    $foguetes,
                    $radar,
                    $outras
                    ))  {
            ?>
            <div id="msg-sucesso">
                Criação do Caça feita com Sucesso
            </div>
            <?php
                } else {
            ?>
            <div class="msg-erro">
                Caça já Cadastrado
            </div>
            <?php
                }
            } else {
            ?>
            <div class="msg-erro">
                <?php echo "Erro: " . $u->msgERRO; ?>
            </div>
            <?php
            }
        } else {
            ?>
            <div class="msg-erro">
                Preencha Todos os Campos
            </div>
            <?php
                }
            }
        }
    }
}
?>
</html>

