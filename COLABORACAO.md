# Configuração do Projeto - Site de Notícias Robótica

## Configuração do Ambiente Local

### Pré-requisitos
- XAMPP (Apache + PHP + MySQL)
- Git instalado
- Editor de código (VS Code recomendado)

### Configuração Inicial
1. Clone o repositório na pasta htdocs do XAMPP
2. Inicie o Apache no XAMPP
3. Acesse: http://localhost/Trabalho-TIC-GRUPO

## Estrutura de Branches

### Branch Principal
- `main` - Código de produção (sempre funcional)

### Branches de Desenvolvimento
- `feature/pagina-inicial` - Desenvolvimento da página inicial
- `feature/listagem-noticias` - Sistema de listagem de notícias
- `feature/artigo-individual` - Página de artigo individual
- `feature/navegacao` - Sistema de navegação
- `feature/design` - Estilos CSS e design responsivo

## Workflow de Desenvolvimento

### Para cada nova funcionalidade:
1. `git checkout main` - Ir para a branch principal
2. `git pull origin main` - Baixar últimas atualizações
3. `git checkout -b feature/nome-funcionalidade` - Criar nova branch
4. Desenvolver a funcionalidade
5. `git add .` e `git commit -m "descrição"`
6. `git push origin feature/nome-funcionalidade`
7. Criar Pull Request no GitHub
8. Aguardar revisão e aprovação
9. Merge para main

## Divisão de Responsabilidades

> 📋 **Permissões Necessárias**: Todos os membros devem ter permissão de **escritor (write)** no repositório. Consulte [PERMISSIONS.md](PERMISSIONS.md) para instruções detalhadas de configuração.

### João (Project Owner)
- **Pasta principal**: `/` (arquivos raiz)
- **Responsabilidades**: 
  - index.php (página principal)
  - Configuração inicial
  - Merge de pull requests
  - Coordenação geral

### Membro 2 (Navigator)
- **Pasta principal**: `/includes/`
- **Responsabilidades**:
  - header.php, footer.php, nav.php
  - CSS de navegação
  - Menu responsivo

### Membro 3 (Content Manager)
- **Pasta principal**: `/pages/`
- **Responsabilidades**:
  - noticias.php (listagem)
  - artigo.php (página individual)
  - Sistema de comentários

### Membro 4 (Designer)
- **Pasta principal**: `/assets/`
- **Responsabilidades**:
  - CSS principal (style.css)
  - JavaScript interativo
  - Responsividade
  - Imagens e assets

## Arquivos que NÃO devem ter conflitos
- Cada pessoa trabalha principalmente em suas pastas designadas
- Para arquivos compartilhados, sempre comunicar no grupo antes de editar

## Comandos Úteis

### Sincronizar com repositório principal
```bash
git fetch origin
git checkout main
git pull origin main
```

### Criar nova funcionalidade
```bash
git checkout -b feature/minha-funcionalidade
# fazer alterações
git add .
git commit -m "feat: adicionar nova funcionalidade"
git push origin feature/minha-funcionalidade
```

### Atualizar branch com main
```bash
git checkout feature/minha-branch
git merge main
```

## Resolução de Conflitos
1. Sempre comunicar no grupo quando há conflitos
2. Revisar cuidadosamente antes de resolver
3. Testar após resolver conflitos
4. Pedir ajuda se necessário

## Comunicação
- **Grupo do WhatsApp/Discord**: Para comunicação rápida
- **Issues no GitHub**: Para bugs e sugestões
- **Pull Requests**: Para revisão de código
- **Commits**: Sempre com mensagens claras