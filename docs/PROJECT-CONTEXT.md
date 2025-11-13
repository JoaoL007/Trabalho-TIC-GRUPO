# 📋 Contexto do Projeto - RoboNews

## 🎯 Visão Geral do Projeto

**Nome:** RoboNews - Portal de Notícias de Robótica e Tecnologia  
**Tipo:** Website institucional/portal de notícias  
**Tecnologias:** HTML5, CSS3, JavaScript, PHP  
**Servidor:** XAMPP (Apache + PHP)  
**Data de Criação:** Outubro/Novembro 2025  
**Branch Atual:** feature/joao-coordenacao  
**Repositório:** github.com/JoaoL007/Trabalho-TIC-GRUPO

---

## 👥 Equipe e Responsabilidades

### Estrutura da Equipe

- **João** - Coordenação do projeto
- **Eduardo** - Menu móvel responsivo
- **Carlos** - Sistema de busca de notícias
- **Santiago** - Animações, interações e carrossel de notícias

### Divisão de Tarefas

Conforme documentado em `DIVISAO-TAREFAS.md`:

- Front-end (HTML/CSS/JS)
- Back-end (PHP)
- Design e UX
- Conteúdo e documentação

---

## 🏗️ Arquitetura do Projeto

### Estrutura de Diretórios

```
Trabalho-TIC-GRUPO/
├── index.php                    # Landing page principal
├── README.md                    # Documentação geral
├── DIVISAO-TAREFAS.md          # Organização da equipe
├── PROJECT-CONTEXT.md          # Este arquivo
├── IMPROVEMENTS.md             # Changelog das melhorias
├── DESIGN-GUIDE.md             # Guia visual do design
├── QUICK-START.md              # Guia rápido de início
│
├── assets/
│   ├── css/
│   │   ├── style.css           # Estilos base (header, nav, footer)
│   │   ├── landing.css         # Estilos específicos da landing page
│   │   ├── noticias.css        # Estilos da página de notícias
│   │   └── utilities.css       # Classes utilitárias (helpers)
│   │
│   ├── js/
│   │   └── main.js             # JavaScript principal (interações)
│   │
│   └── images/                 # Imagens e assets visuais
│
├── includes/
│   ├── header.php              # Cabeçalho do site
│   ├── nav.php                 # Menu de navegação
│   ├── footer.php              # Rodapé do site
│   └── newsletter.php          # Processamento de newsletter
│
├── pages/
│   ├── noticias.php            # Lista de notícias
│   ├── artigo.php              # Página individual de artigo
│   ├── sobre.php               # Página sobre o projeto
│   └── categoria.php           # Notícias por categoria
│
└── docs/
    ├── CHANGELOG.md            # Histórico de mudanças
    ├── COLABORACAO.md          # Guia de colaboração
    ├── GITHUB-CHEATSHEET.md    # Comandos Git úteis
    ├── GUIA-GITHUB.md          # Tutorial de GitHub
    └── SETUP-INSTALACAO.md     # Instalação e configuração
```

---

## 🎨 Design System

### Paleta de Cores

```css
/* Cores Principais */
--primary-color: #6366f1       /* Indigo Blue - Cor principal */
--secondary-color: #8b5cf6     /* Purple - Cor secundária */
--accent-color: #ec4899        /* Pink - Destaque */

/* Backgrounds */
--dark-bg: #0f172a             /* Deep Navy - Fundo escuro */
--darker-bg: #020617           /* Almost Black - Fundo mais escuro */

/* Textos */
--light-text: #f8fafc          /* Almost White - Texto claro */
--gray-text: #94a3b8           /* Slate Gray - Texto secundário */

/* Utilitários */
--success-color: #10b981       /* Green - Sucesso */
--warning-color: #f59e0b       /* Amber - Aviso */
```

### Tipografia

- **Font Family:** Inter, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto
- **Tamanhos:**
  - Hero Title: 56px (Bold 800)
  - Section Title: 42px (Bold 700)
  - Article Title: 28px (Bold 700)
  - Body Text: 16px (Regular 400)
  - Small Text: 14px (Regular 400)

### Breakpoints Responsivos

```css
/* Mobile First */
Mobile:   < 768px   (1 coluna)
Tablet:   768-1024px (2 colunas adaptativo)
Desktop:  > 1024px   (2-4 colunas)
```

---

## 📄 Páginas do Site

### 1. Landing Page (index.php)

**Seções:**

- ✅ Hero Section - Banner principal com call-to-action
- ✅ Breaking News Ticker - Notícias em destaque scrolling
- ✅ Stats Section - Estatísticas em números
- ✅ Featured News - Artigos em destaque (hero + grid)
- ✅ Categories - Explorar por tópicos (IA, Robótica, IoT, Indústria 4.0)
- ✅ Expert Insights - Análises de especialistas
- ✅ Newsletter - Formulário de inscrição
- ✅ CTA Final - Call-to-action de engajamento

**Estado:** ✅ Completo e funcional (sem loading screen)

### 2. Página de Notícias (pages/noticias.php)

**Estado:** 🚧 Em desenvolvimento
**Objetivo:** Listagem completa de artigos com filtros e busca

### 3. Página de Artigo (pages/artigo.php)

**Estado:** 🚧 Em desenvolvimento
**Objetivo:** Visualização individual de notícia completa

### 4. Página Sobre (pages/sobre.php)

**Estado:** 🚧 Em desenvolvimento
**Objetivo:** Informações sobre o portal e equipe

### 5. Categorias (pages/categoria.php)

**Estado:** 🚧 Em desenvolvimento
**Objetivo:** Filtrar notícias por categoria

---

## 🔧 Funcionalidades Implementadas

### JavaScript (main.js)

✅ **Back to Top Button** - Botão de voltar ao topo com scroll suave
✅ **Smooth Scrolling** - Rolagem suave para links âncora
✅ **Mobile Menu** - Menu hamburguer responsivo
✅ **Newsletter Form** - Validação e submissão de formulário
✅ **Notification System** - Sistema de notificações toast
✅ **Counter Animation** - Animação de contagem nas estatísticas
✅ **Lazy Loading** - Carregamento preguiçoso de imagens
✅ **News Filters** - Sistema de filtros para notícias
✅ **Ticker Animation** - Animação infinita do breaking news

### CSS Features

✅ **Dark Theme** - Tema escuro moderno
✅ **Gradient Effects** - Gradientes coloridos em elementos-chave
✅ **Hover Animations** - Efeitos de hover em cards e botões
✅ **Responsive Grid** - Layout responsivo com CSS Grid
✅ **Flexbox Layouts** - Alinhamento flexível de elementos
✅ **CSS Variables** - Sistema de design baseado em variáveis
✅ **Animations** - Transições e animações suaves
✅ **Backdrop Blur** - Efeitos de desfoque em overlays

### Bibliotecas Externas

- **Font Awesome 6.0** - Ícones (CDN)
- **AOS (Animate On Scroll)** - Animações de scroll (CDN)
- **Unsplash Images** - Imagens de placeholder via API

---

## 🎯 Objetivos do Projeto

### Objetivo Principal

Criar um portal moderno e responsivo de notícias focado em:

- Robótica
- Inteligência Artificial
- Tecnologias Emergentes
- Indústria 4.0
- IoT e Conectividade

### Público-Alvo

- Profissionais de tecnologia
- Estudantes de engenharia/TI
- Entusiastas de tecnologia
- Pesquisadores e acadêmicos
- Empresas do setor tech

### Diferenciais

- Design moderno e profissional
- Conteúdo especializado
- Interface responsiva
- Experiência de usuário otimizada
- Foco em tecnologias de ponta

---

## 📊 Status Atual do Projeto

### Concluído ✅

- [x] Landing page completa e responsiva
- [x] Sistema de design consistente
- [x] Navegação principal
- [x] Hero section com elementos animados
- [x] Seção de estatísticas com contadores
- [x] Grid de notícias em destaque
- [x] Categorias de tópicos
- [x] Formulário de newsletter
- [x] Rodapé completo
- [x] Back to top button
- [x] Menu mobile responsivo
- [x] Documentação técnica (IMPROVEMENTS.md, DESIGN-GUIDE.md, QUICK-START.md)

### Em Desenvolvimento 🚧

- [ ] Páginas internas (notícias, artigo, sobre)
- [ ] Sistema de busca funcional
- [ ] Backend para newsletter
- [ ] Sistema de categorias dinâmico
- [ ] Integração com banco de dados
- [ ] CMS para gestão de conteúdo

### Planejado 📋

- [ ] Sistema de comentários
- [ ] Compartilhamento social
- [ ] Dark/Light mode toggle
- [ ] PWA (Progressive Web App)
- [ ] Sistema de usuários
- [ ] Dashboard administrativo
- [ ] API REST para conteúdo
- [ ] Otimização SEO avançada

---

## 🛠️ Tecnologias e Ferramentas

### Front-end

- **HTML5** - Estrutura semântica
- **CSS3** - Estilização moderna (Grid, Flexbox, Variables, Animations)
- **JavaScript ES6+** - Interatividade (Vanilla JS)
- **AOS Library** - Scroll animations
- **Font Awesome** - Ícones vetoriais

### Back-end

- **PHP 7.4+** - Lógica server-side
- **Apache** - Servidor web (via XAMPP)

### Ferramentas de Desenvolvimento

- **VS Code** - Editor de código
- **XAMPP** - Ambiente de desenvolvimento local
- **Git** - Controle de versão
- **GitHub** - Repositório remoto e colaboração

### Futura Stack Planejada

- **MySQL** - Banco de dados
- **PHPMailer** - Envio de e-mails
- **Composer** - Gerenciador de dependências PHP
- **Webpack/Vite** - Build tools

---

## 🔐 Convenções e Padrões

### Nomenclatura de Arquivos

- PHP: `nome-arquivo.php` (kebab-case)
- CSS: `nome-arquivo.css` (kebab-case)
- JavaScript: `nome-arquivo.js` (kebab-case)
- Markdown: `NOME-ARQUIVO.md` (UPPERCASE-KEBAB)

### Nomenclatura de Classes CSS

- BEM-like: `.block__element--modifier`
- Utilitários: `.utility-name` (kebab-case)
- Estado: `.is-active`, `.has-error`

### Estrutura de Commits

```
tipo: descrição breve

Descrição detalhada (opcional)

Tipos: feat, fix, docs, style, refactor, test, chore
```

### Indentação

- **HTML/PHP:** 4 espaços
- **CSS:** 4 espaços
- **JavaScript:** 4 espaços

---

## 📝 Notas Importantes

### Alterações Recentes

1. **13/11/2025** - Removido loading screen da landing page
2. **12/11/2025** - Implementada landing page completa com design moderno
3. **12/11/2025** - Criados arquivos de documentação (IMPROVEMENTS, DESIGN-GUIDE, QUICK-START)
4. **12/11/2025** - Refatorado JavaScript com funcionalidades avançadas
5. **12/11/2025** - Criado sistema de CSS utilities

### Issues Conhecidos

- Newsletter form ainda não conectado ao backend
- Imagens usando placeholders do Unsplash
- Sistema de busca não implementado
- Páginas internas precisam de desenvolvimento

### Próximas Prioridades

1. **Conteúdo Real** - Substituir placeholders por conteúdo real
2. **Backend Newsletter** - Implementar integração com serviço de e-mail
3. **Páginas Internas** - Desenvolver pages/noticias.php e pages/artigo.php
4. **Sistema de Busca** - Criar funcionalidade de busca
5. **Banco de Dados** - Estruturar e conectar MySQL

---

## 🚀 Como Usar Este Contexto

### Para Desenvolvimento

1. Leia este arquivo antes de começar qualquer tarefa
2. Consulte DESIGN-GUIDE.md para padrões visuais
3. Use QUICK-START.md para setup rápido
4. Verifique IMPROVEMENTS.md para histórico de mudanças

### Para Colaboração

1. Siga as convenções de nomenclatura
2. Mantenha a consistência do design system
3. Documente mudanças significativas
4. Use branches feature/ para novas funcionalidades

### Para AI/Assistentes

- Este arquivo contém o contexto completo do projeto
- Use como referência para manter consistência
- Considere as tecnologias e padrões estabelecidos
- Respeite a arquitetura e estrutura existente

---

## 📞 Recursos e Links

### Documentação Interna

- [README.md](./README.md) - Visão geral do projeto
- [IMPROVEMENTS.md](./IMPROVEMENTS.md) - O que foi melhorado
- [DESIGN-GUIDE.md](./DESIGN-GUIDE.md) - Guia visual completo
- [QUICK-START.md](./QUICK-START.md) - Como começar rapidamente
- [DIVISAO-TAREFAS.md](./DIVISAO-TAREFAS.md) - Organização da equipe

### Documentação Externa

- [Font Awesome Icons](https://fontawesome.com/icons)
- [AOS Library](https://michalsnik.github.io/aos/)
- [MDN Web Docs](https://developer.mozilla.org/)
- [PHP Documentation](https://www.php.net/docs.php)

### Design & Assets

- [Unsplash](https://unsplash.com/) - Imagens gratuitas
- [Coolors](https://coolors.co/) - Paletas de cores
- [Google Fonts](https://fonts.google.com/) - Tipografia

---

## 🎓 Glossário do Projeto

**Landing Page** - Página inicial/principal do site  
**Hero Section** - Seção principal de destaque no topo  
**CTA** - Call-to-Action (chamada para ação)  
**Ticker** - Barra de notícias em movimento  
**Card** - Componente de conteúdo em formato de cartão  
**Responsive** - Que se adapta a diferentes tamanhos de tela  
**Mobile First** - Design começando pela versão mobile  
**Gradient** - Gradiente de cores  
**Hover** - Estado quando o mouse passa sobre elemento  
**Lazy Loading** - Carregamento preguiçoso de recursos  
**Backdrop Blur** - Efeito de desfoque de fundo  
**PWA** - Progressive Web App  
**SEO** - Search Engine Optimization

---

**Última Atualização:** 13 de Novembro de 2025  
**Versão:** 1.0  
**Mantido por:** Equipe RoboNews (João, Eduardo, Carlos, Santiago)
