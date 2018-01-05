<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app = new \Slim\App();

$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});

$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
});

// Get clientes
$app->get('/api/cliente', function(Request $request, Response $response){
   $sql = "SELECT * FROM cliente";
   
   try{
     //GET database Object
     $db = new db();     
    
     //Connect
     $db = $db -> connect();
     
     $stmt = $db -> query($sql);
     $clientes = $stmt -> fetchAll(PDO::FETCH_OBJ);
     $db = null;
     echo json_encode($clientes);
     
     
   }catch(PDOExceotion $e){
       echo '{ "error" : { "text": '.$e -> getMessage(). ' }';
   }
});

// Adicionar cliente

 $app->post('/api/cliente/add', function(Request $request, Response $response){


    $cpf =         $request->getParam('cpf');
    $senha =       $request->getParam('senha');
    $nome =        $request->getParam('nome');
    $telefone =    $request->getParam('telefone');
    $email =       $request->getParam('email');
    $nascimento =  $request->getParam('nascimento');
    
    $cep =         $request->getParam('cep');
    $logradouro =  $request->getParam('logradouro');
    $num =         $request->getParam('num');
    $complemento = $request->getParam('complemento');
    $bairro =      $request->getParam('bairro');
    $cidade =      $request->getParam('cidade');
    $estado =      $request->getParam('estado');
    
    $rg =               $request->getParam('rg');
    $expedicao =        $request->getParam('expedicao');
    $orgao_expeditor =  $request->getParam('orgao_expeditor');
    $estado_civil =     $request->getParam('estado_civil');
    $categoria =        $request->getParam('categoria');
    $empresa =          $request->getParam('empresa');
    $profissao =        $request->getParam('profissao');
    $renda_bruta =      $request->getParam('renda_bruta');
    
    
    $sql = " INSERT INTO cliente(cpf,senha,nome,telefone,email,nascimento,cep,logradouro,num,complemento,bairro,cidade,estado,rg,expedicao,orgao_expeditor,estado_civil,categoria,empresa,profissao,renda_bruta) VALUES
    (:cpf,:senha,:nome,:telefone,:email,:nascimento,:cep,:logradouro,:num,:complemento,:bairro,:cidade,:estado,:rg,:expedicao,:orgao_expeditor,:estado_civil,:categoria,:empresa,:profissao,:renda_bruta)";
    try{
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();
        $stmt = $db->prepare($sql);
        
        $stmt->bindParam(':cpf',        $cpf);
        $stmt->bindParam(':senha',      $senha);
        $stmt->bindParam(':nome',       $nome);
        $stmt->bindParam(':telefone',   $telefone);
        $stmt->bindParam(':email',      $email);
        $stmt->bindParam(':nascimento', $nascimento);
        
        $stmt->bindParam(':cep',         $cep);
        $stmt->bindParam(':logradouro',  $logradouro);
        $stmt->bindParam(':num',        $num);
        $stmt->bindParam(':complemento', $complemento);
        $stmt->bindParam(':bairro',      $bairro);
        $stmt->bindParam(':cidade',      $cidade);
        $stmt->bindParam(':estado',      $estado);
        
        $stmt->bindParam(':rg',              $rg);
        $stmt->bindParam(':expedicao',       $expedicao);
        $stmt->bindParam(':orgao_expeditor', $orgao_expeditor);
        $stmt->bindParam(':estado_civil',    $estado_civil);
        $stmt->bindParam(':categoria',       $categoria);
        $stmt->bindParam(':empresa',         $empresa);
        $stmt->bindParam(':profissao',       $profissao);
        $stmt->bindParam(':renda_bruta',     $renda_bruta);
        $stmt->execute();
        
            
        echo '{"notice": {"text": "Cliente Adicionado"}';
        
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});


 
