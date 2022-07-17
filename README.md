# Download-Fotos-Bravus-Race
Executa download em massa das fotos postadas no evento da Bravus Race, para agilizar a procura de fotos no ambiente local, evitado ter que carregar JS das páginas para ver uma a uma.

Nessa primeira versão, preciso acessar o site da Bravus e identificar as pasta que utilizara para postar as fotos, supeito que essas pastas são as iniciais dos nomes dos fotografos, mas isso de nada ajuda, ainda preciso olhar o código fonte e identificar em uma das urls o nome da pasta para complementar o link no código que é rodado.

**Sugestão de melhorias:**
- Abrir todas as páginas de forma automática e listar essas pastas;
- Criar as pastas por linha de código;
- Criar um Web Crawler (como scraping em Python), que navegue pelas páginas, identifique o link da imagem, baixe para a pasta correta e passar para a próxima paginação;
