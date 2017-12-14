<template>
  <div class="cadastroclientes contaneir">
   <h1 class="page-header">Cadasto de Cliente</h1>
   <form v-on:submit="cadastroclientes">
   
   <div class="well">
            <h4>Dados cliente</h4>
            <div class="form-group">
                <label>CPF</label>
                <input type="num" class="form-control" placeholder="identificador do cliente no sistema" v-model="cliente.cpf" required ="">
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" size=8 class="form-control" placeholder="senha" v-model="cliente.senha" required="">
            </div>
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" placeholder="nome" v-model="cliente.nome" required="">
            </div>
            <div class="form-group">
                <label>Telefone</label>
                <input pattern="^\d{2}-\d{5}-\d{4}$" type="tel" class="form-control" placeholder="telefone" v-model="cliente.telefone" required="">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email" v-model="cliente.email">
            </div>
            <div class="form-group">
                <label>Data de Nascimento</label>
                <input type="date" class="form-control" placeholder="data de nascimento" v-model="cliente.nascimento" required="">
            </div>
        </div>
        <div class="well">
            <h4>Endereço Cliente</h4>
            
            
            <div class="form-group">
                <label>CEP</label>
                <input type="num" size=8 class="form-control" placeholder="CEP" v-model="cliente.cep" v-on:keyup="buscar" required="" >
            </div>
            <div class="form-group">
                <label (for="inputLogradouro")>Logradouro</label>
                <input type="text" class="form-control" placeholder="Logradouro" v-model="cliente.logradouro" required="">
            </div>
            <div class="form-group">
                <label (for="inputNumero") >Numero</label>
                <input type="num" size=4 class="form-control" placeholder="Numero" v-model="cliente.num" required="">
            </div>
            <div class="form-group">
                <label>Complemento</label>
                <input type="text" class="form-control" placeholder="Complemento" v-model="cliente.complemento">
            </div>
            <div class="form-group">
                <label>Bairro</label>
                <input type="text" class="form-control" placeholder="Bairro" v-model="cliente.bairro" required="">
            </div>
            <div class="form-group">
                <label>Cidade</label>
                <input type="text" class="form-control" placeholder="Cidade" v-model="cliente.cidade" required="">
            </div>
            <div class="form-group">
                <label>Estado</label>
                <input type="text" class="form-control" placeholder="Estado" v-model="cliente.estado" required="">
            </div>
        </div>

        <div class="well">
            <h4>Detalhes Cliente</h4>
            <div class="form-group">
                <label>RG</label>
                <input type="num" class="form-control" placeholder="RG" v-model="cliente.rg" required="">
            </div>
            <div class="form-group">
                <label>Expedição</label>
                <input type="text" class="form-control" placeholder="Expedição" v-model="cliente.expedicao" required="">
            </div>
            <div class="form-group">
                <label>Orgão Expeditor</label>
                <input type="text" class="form-control" placeholder="Orgão Expeditor" v-model="cliente.orgao_expeditor" required="">
            </div>
            <div class="form-group">
                <label class="mr-sm-2" for="estadoCivilSelect">Estado Civil</label>
                <select class="custom-select mb-2 mr-sm-2 mb-sm-0"  v-model="cliente.estado_civil" required="" id="estadoCivilSelect">
                  <option selected>Selecione...</option>
                  <option value="1">Casado</option>
                  <option value="2">Solteiro</option>
                  <option value="3">Divorciado</option>
                  <option value="4">Viúvo</option>
                </select>
            </div>
            <div class="form-group">
                <label class="mr-sm-2" for="categoriaSelect">Preference</label>
                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" v-model="cliente.categoria" required="" id="categoriaSelect">
                  <option selected>Selecione Uma categoria</option>
                  <option value="1">Empregado</option>
                  <option value="2">Empregador</option>
                  <option value="3">Autônomo</option>
                  <option value="4">Autônomo</option>
                </select>
            </div>
            <div class="form-group">
                <label>Empresa</label>
                <input type="text" class="form-control" placeholder="Empresa em que trabalha" v-model="cliente.empresa">
            </div>
            <div class="form-group">
                <label>Profissão</label>
                <input type="text" class="form-control" placeholder="Profissão" v-model="cliente.profissao" required="">
            </div>
            <div class="form-group">
                <label>Renda Bruta</label>
                <input type="num" class="form-control" placeholder="Renda bruta" v-model="cliente.renda_bruta">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
   
   
   
   </form>
  </div>
</template>

<script>
    export default {
    name: 'cadastroclientes',
    data () {
        return {
        cliente: {}
        }
    },
    methods: {
        cadastroclientes(e){
          
                let newCliente = {
                  cpf: this.cliente.cpf,
                  senha: this.cliente.senha,
                  nome: this.cliente.nome,
                  telefone: this.cliente.telefone,
                  email: this.cliente.email,
                  nascimento: this.cliente.nascimento,
                  
                  cep: this.cliente.cep,
                  logradouro: this.cliente.logradouro,
                  num: this.cliente.num,
                  complemento: this.cliente.complemento,
                  bairro: this.cliente.bairro,
                  cidade: this.cliente.cidade,
                  estado: this.cliente.estado,
                  
                  rg: this.cliente.rg,
                  expedicao: this.cliente.expedicao,
                  orgao_expeditor: this.cliente.orgao_expeditor,
                  estado_civil: this.cliente.estado_civil,
                  categoria: this.cliente.categoria,
                  empresa: this.cliente.empresa,
                  profissao: this.cliente.profissao,
                  renda_bruta: this.cliente.renda_bruta,
                }
                //domínio de instalação da API backend arquivo de comunicação com o banco
                this.$http.post('http:/php-api-izabelabastos2.c9users.io/api/cliente/add', newCliente)
                    .then(function(response){
                      //redirecionamento
                        this.$router.push({path: '/', query: {alert: 'Cliente Cadastrado'}});
                    });
                e.preventDefault();
            }
    },

    }
</script>


<style scoped>
</style>