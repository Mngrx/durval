<template>
    <div>
        <header-component></header-component>

        <div class="container fachada">
            <div class="row h-100">
                <div class="fachada-texto col-10 my-auto">
                    <span class="texto-principal"><a href="#">A CASA</a></span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="barra">/</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="texto-secundario">FALE CONOSCO</span>
                </div>
                <div class="col-2">
                    <img :src="'img/mascote.png'" alt="Mascote Durval Paiva">
                </div>
            </div>
        </div>
        <br>
        <div class="container bg-white">
            <h3>Entre em contato conosco através do formulário abaixo.</h3>
            <h6>Escolha o setor e mande sua mensagem.</h6>
            <br>
            <form @submit="enviarMensagem">
                <div class="row">
                    <div class="col-7">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="nome" class="required">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome" v-model="data.nome">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <div class="form-group">
                                    <label for="email" class="required">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" v-model="data.email">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="telefone" class="required">Telefone</label>
                                    <input type="text" class="form-control" id="telefone" name="telefone" v-model="data.telefone">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="uf" class="required">UF</label>
                                    <input type="text" class="form-control" id="uf" maxlength="2" name="uf" v-model="data.uf">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <div class="form-group">
                                    <label for="cidade" class="required">Cidade</label>
                                    <input type="text" class="form-control" id="cidade" name="cidade" v-model="data.cidade">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="setor" class="required">Setor</label>
                                    <input type="text" class="form-control" id="setor" name="setor" v-model="data.setor">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="h-75">
                            <label for="mensagem">Mensagem</label>
                            <textarea class="form-control h-50" id="mensagem" name="mensagem" v-model="data.mensagem"></textarea>
                        </div>
                    </div>
                </div>
                <div>
                    {{output}}
                </div>
                <div class="d-flex justify-content-end">
                    <input type="submit" value="ENVIAR MENSAGEM" id="btn-enviar" name="enviar" class="button btn text-white">
                </div>
            </form>
            <hr>
            <div class="container contatos">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="d-flex justify-content-center">
                            <strong><em>Presidente</em></strong><br>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="mailto:diretoria@casadurvalpaiva.org.br">diretoria@casadurvalpaiva.org.br</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="d-flex justify-content-center">
                            <strong><em>Gerente Executivo</em></strong><br>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="mailto:social@casadurvalpaiva.org.br">social@casadurvalpaiva.org.br</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="d-flex justify-content-center">
                            <strong><em>Marketing</em></strong><br>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="mailto:marketing@casadurvalpaiva.org.br">marketing@casadurvalpaiva.org.br</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="d-flex justify-content-center">
                            <strong><em>Supervisor Administrativo</em></strong><br>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="mailto:administracao@casadurvalpaiva.org.br">administracao@casadurvalpaiva.org.br</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer-component></footer-component>
    </div>
</template>

<script>
export default {
    data() {
        return {
            data: {
                nome: null,
                email: null,
                telefone: null,
                uf: null,
                cidade: null,
                setor: null,
                mensagem: null,
            },
            output: '',
        };
    },
    methods: {
        enviarMensagem(e) {
            e.preventDefault();
            let currentObj = this;
            axios.post('create',
               this.data
            )
            .then(function (response) {
                currentObj.output = response.data.message;
            })
            .catch(function (error) {
                currentObj.output = error.response.data.message;
            });
        }
    }

}
</script>

<style lang="scss" scoped>

textarea {
  min-height: 100%;
}

#btn-enviar {
    background-color:#e9551a;
    border-radius: 20px;
    width: 20%;
    align-self: flex-end;
    font-weight: bold;
}
#mensagem {
    // size: 100%;
    height: 80%;
}

.botao-confirma {
    display: inline;
    align-items: right;
}


.fachada {
    background-color:#eeeeee;
    height: 165px;

    // padding-right-width: 100px;
    // border-right-color: rgba(180, 180, 180, 0.9);
    // border-right-style: solid;

}

.fachada-texto {
    display: inline;
}

.contatos {
    margin-bottom: 10%;
}

.texto-principal > a {
    font-size: 36px;
    color:  rgb(60, 60, 60);
}

.barra {
    font-size: 30px;
    color: #bbb;
}

.texto-secundario {
    font-size: 20px;
    color: #aaa;
}

</style>
