# Localhost Personalizado

## Descrição
* Se trata de uma página personalizada criada para mostrar os projetos densenvolvidos dentro da pasta htdocs, www, etc do servidor local.
  1. Uma simples página contendo header,main e footer somente!
  2. No Header e footer ficam passando alguns personagens animado andando(giffs). Quando um  some do header aparece no footer e assim infinitamente enquanto a página se manter aberta!
  3. No main contém um link que redireciona para a página de informações sobre o apache e php; título com uma imagem animada que se move de um lado para o outro e UL(lista) contendo links dos projetos, ao clicar é redirecionado para o mesmo!
## Para que fim?
    Projeto desenvolvido para uma personalização de sua pasta raiz do servidor local, para quando abrir o navegador não aparecer somente uma tela branca com links para seus projetos!
## Como usar?
* A página precisa ser adiconada a pasta raiz do servidor local que estiver a usar, ou se desejar, pode ser usado também para outros fins!
* Geralmente estás pastas são por padrão htdocs ou www, a depender do servidor em uso.
    1. Pode excluir todos os arquivos e pasta contidos nela, ou se preferir crie outra pasta dentro da mesma, e configure no arquivo de configuração do seu servidor
     __"httpd.conf"__ mudando a configurção de diretório para a pasta criada dentro da pasta raiz.
     2. Clone esse diretório pegue a pasta zroot e o arquivo index.html e cole na raiz ou pasta anteriormente criada!
     3. Agora crie  os seus projetos normalmente na pasta raiz ou criada('se criou alguma!'),
     >### Exemplo:
    1. Pasta raiz .../xampp/htdocs/
        * lista ls da pasta
            * zroot (pasta)
            * index.html
            * projeto1
            * projeto2
    2. Pasta criada .../xampp/htdocs/projetos
        * lista ls da pasta
            * zroot (pasta)
            * index.html
            * projeto1
            * projeto2
    