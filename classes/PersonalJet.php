<?php
class Personaliza {
    private $pdo;
    public $msgERRO = "";

    public function conectar($nome, $host, $usuario, $senha) {
        global $msgERRO;

        try {
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host, $usuario, $senha);
            $pdo = new PDO("mysql:dbname=jetpersonalizacao;host=localhost", "root", "sua_senha");

        } catch (PDOException $e) {
            $msgERRO = $e->getMessage();
        }
    }

    public function cadastrar(                    
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
                    $outras) 
            {     $conn = new PDO("mysql:host=localhost;dbname=jetpersonalizacao","root", "1234");
                    $sql = $conn->prepare("SELECT ID_Caca FROM criecaca WHERE pais = ".$pais."");
                    $sql->execute();


        if ($sql->rowCount() > 0) {
                return false;
        } else {
            $sql1 = $conn->prepare(
                "INSERT INTO CrieCaca (
                    Nome_Caca, 
                    Tipo_Missao, 
                    Geracao,
                    Pais,
                    Fabricante,
                    Periodo_Producao,
                    Custo_Unitaio,
                    Custo_Desevolvimento,
                    Tempo_Develo,
                    Primeiro_Voo,
                    Introduzido,
                    Tripulacao,
                    Comprimento,
                    Envergadura,
                    Altura,
                    Área_Asa,
                    Peso_Va,
                    Peso_Bru,
                    Peso_Cheio,
                    Capacidade_Combustivel,
                    Numero_Motor,
                    Tipo_Mo,
                    Fabricante_Modelo,
                    Empuxo_Seco,
                    Empuxo_Pós_Com,
                    Velocidade_Max,
                    VelocidadeMach,
                    Alcance,
                    Alcance_Belico,
                    Razao_Sub,
                    Teto_Servi,
                    Metra_Canhao,
                    Capacidade_carga,
                    hardpoints,
                    Misseis_Ar,
                    Misseis_Terra,
                    Misseis_Navio,
                    Misseis_Radicao,
                    Bombas,
                    Foguetes,
                    Radar, 
                    Outros) 
                VALUES (
                :nome, :tipo_missao, :geracao, :pais, :fabricante, :periodo_producao, :custo_unitario, :custo_de_desevolvimento, :tempo_de_desevolvimento, :primeiro_voo, :introduzido, :tripulacao, :comprimento, :envergadura, :altura, :area_da_asa, :peso_va, :peso_bru, :peso_che, :capacidade_combustivel, :numero_motor, :tipo_motor, :fabricante_motor, :empuxo_seco, :empuxo_pos_combus,:velocidade_maxi,:velocida_mach,:alcance,:alcance_beleico,:razao_subida,:teto_maximo,:metrala_canhao,:capacidade_carga,:hardpoints,:misseis_ar,:misseis_terra,:misseis_navio,:misseis_radiacao,:bombas,:foguetes,:radar,:outras
                )"
            );
            $sql1->bindValue(":nome", $nome);
            $sql1->bindValue(":tipo_missao", $tipo_missao);
            $sql1->bindValue(":geracao", $geracao);
            $sql1->bindValue(":pais", $pais);
            $sql1->bindValue(":fabricante", $fabricante);
            $sql1->bindValue(":periodo_producao", $periodo_producao);
            $sql1->bindValue(":custo_unitario", $custo_unitario);
            $sql1->bindValue(":custo_de_desevolvimento", $custo_de_desevolvimento);
            $sql1->bindValue(":tempo_de_desevolvimento", $tempo_de_desevolvimento);
            $sql1->bindValue(":primeiro_voo", $primeiro_voo);
            $sql1->bindValue(":introduzido", $introduzido);
            $sql1->bindValue(":tripulacao", $tripulacao);
            $sql1->bindValue(":comprimento", $comprimento);
            $sql1->bindValue(":envergadura", $envergadura);
            $sql1->bindValue(":altura", $altura);
            $sql1->bindValue(":area_da_asa", $area_da_asa);
            $sql1->bindValue(":peso_va", $peso_va);
            $sql1->bindValue(":peso_bru", $peso_bru);
            $sql1->bindValue(":peso_che", $peso_che);
            $sql1->bindValue(":capacidade_combustivel", $capacidade_combustivel);
            $sql1->bindValue(":numero_motor", $numero_motor);
            $sql1->bindValue(":tipo_motor", $tipo_motor);
            $sql1->bindValue(":fabricante_motor", $fabricante_motor);
            $sql1->bindValue(":empuxo_seco", $empuxo_seco);
            $sql1->bindValue(":empuxo_pos_combus", $empuxo_pos_combus);
            $sql1->bindValue(":velocidade_maxi", $velocidade_maxi);
            $sql1->bindValue(":velocida_mach", $velocida_mach);
            $sql1->bindValue(":alcance", $alcance);
            $sql1->bindValue(":alcance_beleico", $alcance_beleico);
            $sql1->bindValue(":razao_subida", $razao_subida);
            $sql1->bindValue(":teto_maximo", $teto_maximo);
            $sql1->bindValue(":metrala_canhao", $metrala_canhao);
            $sql1->bindValue(":capacidade_carga", $capacidade_carga);
            $sql1->bindValue(":hardpoints", $hardpoints);
            $sql1->bindValue(":misseis_ar", $misseis_ar);
            $sql1->bindValue(":misseis_terra", $misseis_terra);
            $sql1->bindValue(":misseis_navio", $misseis_navio);
            $sql1->bindValue(":misseis_radiacao", $misseis_radiacao);
            $sql1->bindValue(":bombas", $bombas);
            $sql1->bindValue(":foguetes", $foguetes);
            $sql1->bindValue(":radar",$radar );
            $sql1->bindValue(":outras",$outras );
            
            if ($sql1->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
}
?>