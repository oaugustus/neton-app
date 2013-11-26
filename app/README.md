Diretório app:
==============

Todos os arquivos de configuração/inicialização do Silex e da aplicação devem ser colocados neste diretório em seus
respectivos diretórios:

 * __cache__: Arquivos de cache de todos os módulos e providers registrados na aplicação;
 * __config__: Arquivos de configuração da aplicação no formato .json;
 * __filters__: Filtros registrados como midlewares do Silex (after, before, finish, error, etc);
 * __logs__: Arquivos de log devem ser armazenados neste diretório. Módulos devem ser configurados para registra log aqui;
 * __packs__: Arquivos que registram os provedores de serviço dos Pacotes (módulos) de backend;
 * __providers__: Arquivos que registram os provedores de serviço Silex utilizados na aplicação;