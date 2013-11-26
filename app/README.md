Diretório app:
==============

Todos os arquivos de configuração/inicialização do Silex e da aplicação devem ser colocados neste diretório em seus
respectivos diretórios:

 * _cache/_: Arquivos de cache de todos os módulos e providers registrados na aplicação;
 * _config/_: Arquivos de configuração da aplicação no formato .json;
 * _filters/_: Filtros registrados como midlewares do Silex (after, before, finish, error, etc);
 * _logs/_: Arquivos de log devem ser armazenados neste diretório. Módulos devem ser configurados para registra log aqui;
 * _packs/_: Arquivos que registram os provedores de serviço dos Pacotes (módulos) de backend;
 * _providers/_: Arquivos que registram os provedores de serviço Silex utilizados na aplicação;