<template>
    <div>
        <header-component></header-component>
        <div class="fachada">
            <div class="container">
                <div class="row h-100">
                    <div class="fachada-texto col-10 my-auto">
                        <span class="texto-principal"><a href="#">A CASA</a></span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="barra">/</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="texto-secundario">FALE CONOSCO</span>
                    </div>
                    <div class="col-2">

                    </div>
                </div>
            </div>
        </div>

        <div class="container bg-white">
            <form action="">
                <div class="row">
                    <div class="col-7">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="nome" class="required">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <div class="form-group">
                                    <label for="email" class="required">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="telefone" class="required">Telefone</label>
                                    <input type="text" class="form-control" id="telefone" name="telefone">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="uf" class="required">UF</label>
                                    <input type="text" class="form-control" id="uf" maxlength="2" name="uf">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <div class="form-group">
                                    <label for="cidade" class="required">Cidade</label>
                                    <input type="text" class="form-control" id="cidade" name="cidade">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="setor" class="required">Setor</label>
                                    <input type="text" class="form-control" id="setor" name="setor">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-group">
                            <label for="texto">Mensagem</label>
                            <textarea class="form-control" id="texto" name="texto" rows="7.8"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 botao-confirma">

                    </div>
                </div>
            </form>
            <hr>
        </div>

        <footer-component></footer-component>
    </div>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>

.fachada {
    background-color:#eeeeee;
    height: 165px;
}

.fachada-texto {
    // display: inline;
    margin-top: auto;
    margin-bottom: auto;
}

.texto-principal {
    font-size: 36px;

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
