<template>
    <div>
        <div class="container">            
            <div class="row">
                <div class="col-sm-12 text-center">
                        <h2>NOSSOS<strong> PARCEIROS</strong></h2>
                </div>
            </div>
        </div>   
        <hr>
        <div class="container"> 
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-4">                                               
                            <h6>A CASA</h6>
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
                        <div class="col-sm-4">
                            <h6>COLABORE</h6>
                            <a href="#">Doação Legal</a><br>
                            <a href="#">Alugue o auditório</a><br>
                            <a href="#">Seja um voluntário</a><br>
                            <a href="#">Doação de cupom fiscal</a><br>
                            <a href="#">Compre nossos produtos</a><br>
                            <a href="#">Faça sua doação</a><br>
                            <a href="#">Outras formas de doação</a>                    
                        </div>
                        <div class="col-sm-4">
                            <h6>MÍDIA</h6>
                            <a href="#">Notícias</a><br>
                            <a href="#">Fotos</a><br>
                            <h6>DIAGNÓSTICO PRECOCE</h6>
                            <h6>PROJETOS</h6>
                            <h6>PARCEIROS</h6>
                            <h6>FALE CONOSCO</h6>             
                        </div>                
                    </div>                  
                </div>
                <div class="col-sm-6">
                    <div class="caixa-newsletter container align-middle">
                        <div class="row">
                            <div class="col-12 text-center">
                                ASSINE NOSSO <strong>INFORMATIVO</strong>
                            </div>
                        </div>
                        <div class="row text-center">
                            <br>
                            <form>
                                <div class="form-row align-items-center">
                                    <div class="col-auto">
                                        <label class="sr-only" for="nome">Nome</label>
                                        <input type="text" name="nome" class="form-control mb-2" id="email-input" placeholder="Nome">
                                    </div>
                                    <div class="col-auto">
                                        <label class="sr-only" for="email">Email</label>
                                        <input type="email" name="email" class="form-control mb-3" id="email-input" placeholder="Email">
                                    </div> 
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-outline-light mb-3 text-center">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h4>ENDEREÇO</h4>
                            <address>
                                Rua Clementino Câmara, 234 - Barro Vermelho - Natal/RN - CEP 59030-330 <br>
                                marketing@casadurvalpaiva.org.br
                            </address>
                        </div>
                    </div>
                    <div class="row">

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <a href="#" class="botao-ligar">(84) 4006-1600 | LIGAR</a>
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
                <img src="mix-internet.png" alt="Logo da MixInternet" />
            </div>
        </div>       
    </div>
</template>

<script>
export default {

}
</script>

<style scoped>

#assinatura {
    height: 82px;
}

.botao-ligar {
    /* width: 235px; */
    padding: 8px 20px 8px 20px;
    height: 37px;
    border-radius: 7px;
    background-image: linear-gradient(-10deg, #f7931d 0%, #f5c501 100%);
}

.margin {
    margin: auto;
}

.caixa-newsletter {       
    height: 125px;
    background-image: linear-gradient(-10deg, #f7931d 0%, #f5c501 100%);
}

</style>