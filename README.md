Para rodar a aplicação apiphp:

-instalar o xampp
-instalar o composer
-instalar o slimphp

colar a pasta do projeto em c:\xampp\htdocs\
no xampp-control, inicializar o apache e o mySQL

--instalar o aplicativo restEasy no google chrome, para teste da api simples backend


-- no campo URL digitar: http://localhost/apiphp/public/index.php/api/cliente/add
-- Em "Headers" name: Content-Type Value: application/json
-- Em "Body" inserir os dados dos clientes a serem salvos no Banco de Dados, no padrão json {"campo" : "key" , "campo2": "key2"}

exemplo: {"cpf":"1003085990","senha":"123000","nome":"Maria","telefone":"22998897559","email":"maria@testel.com","nascimento":"1990-05-06","cep":"28625630","logradouro":"rua teste","num":"1","complemento":"casa fundos","bairro":"centro","cidade":"nova friburgo","estado":"RJ","rg":"1002000","expedicao":"2012-01-10","orgao_expeditor":"sptc","estado_civil":"solteira","categoria":"empregado","empresa":null,"profissao":"engenheira","renda_bruta":"5000"}

arquivo com tabela do BD na pasta _sql
Fotos do programa rodando na pasta img

