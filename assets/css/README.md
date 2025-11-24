# Organização dos Arquivos CSS

## Estrutura de Arquivos

```
assets/css/
├── style.css          # Estilos globais e utilitários
├── index.css          # Estilos específicos da página inicial (landing page)
├── pages.css          # Estilos para páginas (sobre, categorias, artigos)
├── noticias.css       # Estilos para a página de notícias
├── footer.css         # Estilos do footer
├── landing.css        # [ANTIGO - Pode ser removido]
└── utilities.css      # [ANTIGO - Pode ser removido]
```

## Descrição dos Arquivos

### 📄 style.css

**Arquivo principal com estilos globais**

- Variáveis CSS (cores, espaçamentos, fontes)
- Reset global
- Estilos base (tipografia, layout)
- Classes utilitárias (spacing, text, display)
- Animações
- Estados de carregamento
- Media queries responsivas
- Acessibilidade

### 📄 index.css

**Estilos da página inicial (index.php)**
Inclui:

- Top bar
- Navegação
- Trending bar
- Hero section
- News cards e badges
- Categories section
- Testimonials section
- Stats section
- Responsividade específica

### 📄 pages.css

**Estilos para páginas internas**
Inclui:

- Page header
- About section (página sobre)
- Team section
- Technologies section
- Features section
- Article page styles
- Responsividade

### 📄 noticias.css

**Estilos da página de notícias (noticias.php)**
Inclui:

- News listing
- Filtros de notícias
- Grid layout de notícias
- Cards de notícias (large e small)
- Botão "Load more"
- Search box
- Paginação
- Responsividade

### 📄 footer.css

**Estilos do footer global**
Inclui:

- Layout do footer
- Logo e descrição
- Links sociais
- Seções do footer
- Informações de contato
- Newsletter form
- Footer bottom
- Responsividade

## Como Usar

### Página Index (index.php)

```html
<link rel="stylesheet" href="assets/css/style.css" />
<link rel="stylesheet" href="assets/css/index.css" />
<link rel="stylesheet" href="assets/css/footer.css" />
```

### Página de Notícias (pages/noticias.php)

```html
<link rel="stylesheet" href="../assets/css/style.css" />
<link rel="stylesheet" href="../assets/css/noticias.css" />
<link rel="stylesheet" href="../assets/css/footer.css" />
```

### Página Sobre (pages/sobre.php)

```html
<link rel="stylesheet" href="../assets/css/style.css" />
<link rel="stylesheet" href="../assets/css/pages.css" />
<link rel="stylesheet" href="../assets/css/footer.css" />
```

### Página de Artigo (pages/artigo.php)

```html
<link rel="stylesheet" href="../assets/css/style.css" />
<link rel="stylesheet" href="../assets/css/pages.css" />
<link rel="stylesheet" href="../assets/css/footer.css" />
```

### Página de Categorias (pages/categorias.php)

```html
<link rel="stylesheet" href="../assets/css/style.css" />
<link rel="stylesheet" href="../assets/css/pages.css" />
<link rel="stylesheet" href="../assets/css/footer.css" />
```

## Variáveis CSS Disponíveis

```css
/* Cores */
--primary-color: #2563eb;
--secondary-color: #1e40af;
--accent-color: #f59e0b;
--dark: #1e293b;
--light: #f8fafc;
--gray: #64748b;
--border: #e2e8f0;

/* Espaçamentos */
--spacing-xs: 0.5rem;
--spacing-sm: 1rem;
--spacing-md: 1.5rem;
--spacing-lg: 2rem;
--spacing-xl: 3rem;

/* Fontes */
--font-primary: "Inter", sans-serif;
--font-heading: "Poppins", sans-serif;

/* Transições */
--transition-fast: 0.2s ease;
--transition-normal: 0.3s ease;
--transition-slow: 0.5s ease;

/* Sombras */
--shadow-sm: 0 2px 10px rgba(0, 0, 0, 0.05);
--shadow-md: 0 4px 15px rgba(0, 0, 0, 0.1);
--shadow-lg: 0 12px 35px rgba(37, 99, 235, 0.2);
```

## Classes Utilitárias

### Espaçamento

```css
.mt-1 a .mt-5   /* margin-top */
.mb-1 a .mb-5   /* margin-bottom */
.pt-1 a .pt-5   /* padding-top */
.pb-1 a .pb-5; /* padding-bottom */
```

### Texto

```css
.text-center,
.text-left,
.text-right .text-primary,
.text-secondary,
.text-dark,
.text-gray .font-bold,
.font-semibold,
.font-normal;
```

### Display

```css
.d-none,
.d-block,
.d-flex,
.d-grid .flex-row,
.flex-column,
.flex-wrap .justify-start,
.justify-center,
.justify-end,
.justify-between .align-start,
.align-center,
.align-end .gap-1 a .gap-4;
```

## Migração Concluída

✅ Todos os estilos inline foram extraídos dos arquivos PHP
✅ Estilos organizados por funcionalidade
✅ Variáveis CSS centralizadas
✅ Classes utilitárias criadas
✅ Responsividade implementada
✅ Código limpo e manutenível

## Próximos Passos Recomendados

1. Remover arquivos CSS antigos não utilizados (`landing.css`, `utilities.css`)
2. Testar todas as páginas para garantir que os estilos foram aplicados corretamente
3. Atualizar os links dos arquivos PHP para usar os novos CSS
4. Fazer commit das alterações no Git
