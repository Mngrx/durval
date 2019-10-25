# Projeto Durval Paiva

Este projeto foi realizado durante a avaliação operacional da vaga de Desenvolvedor #fullstack para empresa Mix Internet.

Foi utilizado Laravel + VueJS com auxílio da plataforma Laravel Mix.

## Como reproduzir o projeto



Supondo que a máquina tenha git, docker e docker-compose instalados, comece clonando o projeto para uma pasta, e depois clone o laradock para a pasta em que o projeto está contido.

''' bash

    $ git clone https://github.com/laradock/laradock

'''

Que ficará da seguinte forma:

'''
    /<pastadoprojeto>
        |- durval
        |- laradock
'''

Após, acesse a pasta 'laradock' pelo terminal e execute:

''' bash
    
    $ cp env-exemple .env
    $ docker-compose up -d apache2 mysql

'''

Utilizando seu SGBD de preferência, crie uma schema chamada 'durvalpaiva' no MySQL que está rodando no container recém criado.

Ainda na pasta do laradock, execute:

''' bash
    
    $ docker-compose exec --user=laradock workspace bash
    $ cd durval
    $ cp .env-exemple .env
    $ php artisan key:generate
    $ php artisan migrate

'''

Pronto, acesse no seu navegador o de preferência o seguinte site: http://localhost/public/durval. Se tudo ocorreu bem, você verá na tela a página 'Fale Conosco'


## Dúvidas ocorridas durante o projeto

Devido à minha pouco experiência com desenvolvimento frontend, eu não estava sabendo como utilizar os frameworks da melhor forma. Por conta disso, tive que ir atrás de entender melhor o funcionamento do Webpack, SCSS/SASS e melhores formas de usar o Boostrap 4 dentro desse contexto.
Trabalhar com os componentes do front mais desacoplados seria uma solução boa opção, pois infelizmente alguns alinhamentos não ficaram da forma desejada, comparado ao layout passado.

## Melhorias possíveis

* Organizar o 'Component' do cabeçalho para ficar responsivo
* A utilização mais proveitosa do SCSS/SASS
* Testes automatizados para garantir o funcionamento do software

## Agradecimentos

* Gabriel, pelas dicas, solução de dúvidas e condução durante a avaliação
* Eriko, pela entrevista e oportunidade dada
* E todos da equipe Mix Internet, pela boa receptividade em tão pouco tempo
* Aos criadores das ferramentas utilizadas e diversos fóruns da internet

## Depedencias utilizadas

https://github.com/LaravelLegends/pt-br-validator
https://github.com/lucascudo/laravel-pt-BR-localization
https://github.com/vuejs-tips/vue-the-mask