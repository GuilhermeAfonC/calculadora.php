# Calculadora PHP

Uma calculadora simples desenvolvida em PHP puro, com validações de segurança e interface moderna.

## Funcionalidades

- ✅ Operações matemáticas básicas (adição, subtração, multiplicação, divisão)
- ✅ Validação de entrada de dados
- ✅ Proteção contra divisão por zero
- ✅ Interface responsiva e moderna
- ✅ Segurança contra injeção de código

## Tecnologias Utilizadas

- **PHP 7+**: Lógica de backend e validações
- **HTML5**: Estrutura da página
- **CSS3**: Estilização e layout responsivo

## Como Usar

### Pré-requisitos

- PHP 7.0 ou superior
- Servidor web (Apache, Nginx) ou PHP Built-in Server

### Instalação

1. Clone o repositório:
```bash
git clone https://github.com/GuilhermeAfonC/calculadora-php.git
```

2. Navegue até o diretório:
```bash
cd calculadora-php
```

3. Inicie o servidor PHP:
```bash
php -S localhost:8000
```

4. Abra no navegador:
```
http://localhost:8000
```

## Implementação de boas práticas de Segurança

- **Validação de entrada**: Uso de `filter_input()` para validar dados
- **Proteção contra XSS**: Sanitização de dados de entrada
- **Validação de operações**: Apenas operações predefinidas são permitidas
- **Tratamento de erros**: Validação de divisão por zero

## Código de Exemplo

```php
// Validação segura de entrada
$a = filter_input(INPUT_GET, 'num1', FILTER_VALIDATE_FLOAT);
$b = filter_input(INPUT_GET, 'num2', FILTER_VALIDATE_FLOAT);

if ($a === false || $b === false) {
    echo "Erro: Digite apenas números válidos!";
    exit;
}
```

## O que aprendi

Este projeto foi desenvolvido para praticar:

- Fundamentos de PHP
- Validação de dados do usuário
- Boas práticas de segurança web
- Design responsivo com CSS

## Contribuições

*Sugestões e melhorias são bem-vindas! Sinta-se à vontade para abrir uma issue ou pull request.*


## Autor

Desenvolvido por **[Guilherme Afonso Carvalho]** como parte do aprendizado em desenvolvimento web.

- LinkedIn: www.linkedin.com/in/guilhermeafonsocarvalho-tic
- e-mail: afonsocarvalhoguilherme@gmail.com

## Projeto em funcionamento:

<img width="1366" height="638" alt="Calculadora-tela_abertura" src="https://github.com/user-attachments/assets/3cfade68-30d8-477a-a8d5-265c8da323be" />

<img width="330" height="334" alt="Calculadora_calculando" src="https://github.com/user-attachments/assets/96f04f0f-60ed-4ef3-9905-9283e95e00d8" />

<img width="334" height="356" alt="Calculadora_calculando2" src="https://github.com/user-attachments/assets/d939564c-4773-4484-8764-eb2d9ebd61b8" />


