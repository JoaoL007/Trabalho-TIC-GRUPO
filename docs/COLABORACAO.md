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
- `feature/joao-coordenacao` - Coordenação e página inicial (João)
- `feature/eduardo-navegacao` - Sistema de navegação e layout (Eduardo)
- `feature/carlos-noticias` - Sistema de notícias e artigos (Carlos)
- `feature/santiago-design` - Design, CSS e responsividade (Santiago)

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

### João (Project Owner)
- **Pasta principal**: `/` (arquivos raiz)
- **Branch**: `feature/joao-coordenacao`
- **Responsabilidades**: 
  - index.php (página principal)
  - Configuração inicial
  - Merge de pull requests
  - Coordenação geral

### Eduardo (Navigator)
- **Pasta principal**: `/includes/`
- **Branch**: `feature/eduardo-navegacao`
- **Responsabilidades**:
  - header.php, footer.php, nav.php
  - CSS de navegação
  - Menu responsivo

### Carlos (Content Manager)
- **Pasta principal**: `/pages/`
- **Branch**: `feature/carlos-noticias`
- **Responsabilidades**:
  - noticias.php (listagem)
  - artigo.php (página individual)
  - Sistema de comentários

### Santiago (Designer)
- **Pasta principal**: `/assets/`
- **Branch**: `feature/santiago-design`
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