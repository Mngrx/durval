<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                        <h3>NOSSOS<strong> PARCEIROS</strong></h3>
                </div>
                <div class="col-12" id="parceiro">
                        <img :src="'img/liga-contra-cancer.png'" alt="">
                        <img :src="'img/opel.png'" alt="">
                        <img :src="'img/crianca-esperanca.png'" alt="">
                        <img :src="'img/98.png'" alt="">
                        <img :src="'img/radio-bem.png'" alt="">
                        <img :src="'img/ouro-branco.png'" alt="">
                        <img :src="'img/95.png'" alt="">
                        <img :src="'img/103.png'" alt="">
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6><a href="#">A CASA</a></h6>
                            <a href="#">História</a><br>
                            <a href="#">A casa hoje</a><br>
                            <a href="#">Missão</a><br>
                            <a href="#">Diretoria</a><br>
                            <a href="#">Setores</a><br>
                            <a href="#">Equipe</a><br>
                            <a href="#">Depoimentos</a><br>
                            <a href="#">Resultados</a><br>
                            <a href="#">Prêmios</a>
                        </div>
                        <div class="col-4">
                            <h6><a href="#">COLABORE</a></h6>
                            <a href="#">Doação Legal</a><br>
                            <a href="#">Alugue o auditório</a><br>
                            <a href="#">Seja um voluntário</a><br>
                            <a href="#">Doação de cupom fiscal</a><br>
                            <a href="#">Compre nossos produtos</a><br>
                            <a href="#">Faça sua doação</a><br>
                            <a href="#">Outras formas de doação</a>
                        </div>
                        <div class="col-4">
                            <h6><a href="#">MÍDIA</a></h6>
                            <a href="#">Notícias</a><br>
                            <a href="#">Fotos</a><br>
                            <h6><a href="#">DIAGNÓSTICO PRECOCE</a></h6>
                            <h6><a href="#">PROJETOS</a></h6>
                            <h6><a href="#">PARCEIROS</a></h6>
                            <h6><a href="#">FALE CONOSCO</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="caixa-newsletter container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <br>
                                <h5>ASSINE NOSSO <strong>INFORMATIVO</strong></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <br>
                                <form>
                                    <div class="form-row align-items-center">
                                        <div class="col-auto">
                                            <label class="sr-only" for="nome">Nome</label>
                                            <input type="text" name="nome" class="form-control" id="email-input" placeholder="Nome">
                                        </div>
                                        <div class="col-auto">
                                            <label class="sr-only" for="email">Email</label>
                                            <input type="email" name="email" class="form-control" id="email-input" placeholder="Email">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-outline-light form-control text-center">Enviar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <br>
                            <h6><strong>ENDEREÇO</strong></h6>
                            <address>
                                Rua Clementino Câmara, 234 - Barro Vermelho - Natal/RN - CEP 59030-330 <br>
                                <a href="mailto:marketing@casadurvalpaiva.org.br">marketing@casadurvalpaiva.org.br</a>
                            </address>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <a href="https://www.instagram.com/"><img :src="'img/instagram.png'" width="24" height="24" alt="" class="rede-social"></a>
                            <a href="https://www.facebook.com/"><img :src="'img/facebook.png'" width="24" height="24" alt="" class="rede-social"></a>
                            <a href="https://twitter.com/"><img :src="'img/twitter.png'" width="24" height="24" alt="" class="rede-social"></a>
                            <a href="https://www.youtube.com/"><img :src="'img/youtube.png'" width="24" height="24" alt="" class="rede-social"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <a href="tel:+558440061600" class="botao-ligar">(84) 4006-1600 | LIGAR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <GmapMap
            :center="{lat:-5.7956898, lng:-35.2083706}"
            :zoom="17.25"
            style="width: 100%; height: 372px"
            >
            <GmapMarker
                :position="{lat:-5.7956898, lng:-35.2083706}"
                :clickable="true"
                :draggable="true"
                @click="center={lat:-5.7956898, lng:-35.2083706}"
            />
        </GmapMap>
        <div class="row">
            <div id="assinatura" class="col-sm-12 text-center">
                <a href="https://www.mixinternet.com.br/"><img :src="'img/logo-mix.png'" alt="Logo da MixInternet" /></a>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>

$gradient-laranja: linear-gradient(-10deg, #f7931d 0%, #f5c501 100%);

#parceiro {
    text-align: center;
}

#parceiro > img {
    width: 10%;
    display: inline-block;
}

#assinatura {
    margin-top: 2%;
    margin-bottom: 2%;
}

.rede-social {
    border-radius: 50px;
    margin: auto;
    margin-right: 5px;
    margin-bottom: 15px;
    // padding: 50px;
    border: #f5c501;
    border-width: 2px;
    border-color: rgba(180, 180, 180, 0.9);
    border-style: solid;


}
.botao-ligar {
    padding: 8px 20px 8px 20px;
    height: 37px;
    border-radius: 7px;
    background-image: $gradient-laranja;
}

.margin {
    margin: auto;
}

.caixa-newsletter {
    background-image: $gradient-laranja;
}

</style>
