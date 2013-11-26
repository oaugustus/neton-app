Diretório app:
==============

Todos os arquivos de configuração/inicialização do Silex e da aplicação devem ser colocados neste diretório em seus
respectivos diretórios:

 * cache/: Arquivos de cache de todos os módulos e providers registrados na aplicação;
 * config/: Arquivos de configuração da aplicação no formato .json;
 * filters/: Filtros registrados como midlewares do Silex (after, before, finish, error, etc);
 * logs/: Arquivos de log devem ser armazenados neste diretório. Módulos devem ser configurados para registra log aqui;
 * packs/: Arquivos que registram os provedores de serviço dos Pacotes (módulos) de backend;
 * providers/: Arquivos que registram os provedores de serviço Silex utilizados na aplicação;