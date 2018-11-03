# gera-reverso-ptr
Gera Reverso PTR

Gere arquivos ptr para seu dns unbound/bind com facilidade e rapidez =)

OBS: Pode ser compartilhado ou reproduzido contanto que os creditos do desenvolvedor permaneçam.

OBS 2: Caso já possua um servidor apache instalado e em produção, basta pular para o passo 2 da instalação. 



# Passo 1 - Instalação do Apache
# Debian e derivados

$  apt-get update

$  apt-get install apache2 -y && apt-get update && apt-get install mysql-server -y && apt-get update && apt-get install -y php libapache2-mod-php php-mysql php-cli

# Centos

$  yum update

$  yum install apache2 -y && yum update && yum install mysql-server -y && yum update && yum install -y php libapache2-mod-php php-mysql php-cli

# Passo 2 - Baixando o Pacote

$  cd /var/www/html

$  wget https://github.com/theuscarvalho/gera-reverso-ptr/archive/master.zip

$  unzip master.zip

$  mv master gera-ptr

$  chmod +x gera-ptr


Após é só acessar o sistema através do navegador http://IPDOSERVIDOR/gera-ptr

