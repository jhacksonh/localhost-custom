# Localhost Personalizado

## Descrição
* Se trata de uma página personalizada criada para mostrar os projetos densenvolvidos dentro da pasta htdocs, www, etc do servidor local.
  1. Uma simples página contendo header,main e footer!
  2. No Header e footer ficam passando alguns personagens animados correndo(giffs).
     Quando um  some do header aparece no footer e assim infinitamente enquanto a página se manter aberta!
  3. No main, contém um link que redireciona para a página de informações sobre o apache e php; título com uma imagem animada que se move de um lado para o outro e UL(lista) contendo links dos projetos, ao clicar é redirecionado para o mesmo!
## Para que fim?
Projeto desenvolvido para uma personalização de sua pasta raiz do servidor local, para quando abrir o navegador não aparecer somente uma tela branca com links para seus projetos!
## Como usar?
* o repositório precisa ser adiconada a pasta raiz do servidor local que estiver a usar, geralmente estás pastas são por padrão htdocs ou www, a depender do servidor em uso. Ou se desejar, pode ser usado também para outros fins.
    1. Pode excluir todos os arquivos e pasta contidos nela, se preferir crie outra pasta dentro da mesma, e configure no arquivo de configuração do seu servidor
     __"httpd.conf"__ mudando a configurção de diretório para a pasta criada dentro da pasta raiz.
     2. Clone esse diretório pegue a pasta zroot e o arquivo index.html e cole na raiz ou pasta anteriormente criada!
     3. Agora crie  os seus projetos normalmente na pasta raiz ou criada('se criou alguma!'),
    ### Exemplo:
        Pasta raiz .../xampp/htdocs/
         lista ls da pasta
             zroot (pasta)
             index.html (arquivo)
             projeto1 (seu projeto)
             projeto2 (seu projeto)

        Pasta criada .../xampp/htdocs/projetos
        lista ls da pasta
             zroot (pasta)
             index.html (arquivo)
             projeto1 (seu projeto)
             projeto2 (seu projeto)
4. Acesse o arquivo index.html, e liste seus projetos no __array $projetos__ 
    ### Exemplo:
        $projetos = ['projeto1','projeto2'];
    ### OBS:
    Os nomes no array precisa ser iguais aos nomes da pasta relacionada ao seu projeto.

Agora basta iniciar o seu servidor e abrir o localhost em seu navegador!
    