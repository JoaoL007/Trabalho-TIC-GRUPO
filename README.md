# 🤖 RoboNews - Portal de Notícias de Robótica

## 📖 Descrição do Projeto

**RoboNews** é um portal de notícias especializado em robótica, inteligência artificial e tecnologias emergentes. Desenvolvido como trabalho acadêmico de TIC, o projeto combina design moderno, funcionalidade responsiva e conteúdo relevante sobre o futuro da tecnologia.

### ✨ Funcionalidades Principais

- 🏠 **Página inicial** com destaque para notícias principais
- 📰 **Sistema de notícias** com listagem e páginas individuais
- 🧭 **Navegação responsiva** para desktop e mobile
- 📱 **Design adaptativo** para diferentes dispositivos
- 🎨 **Interface moderna** com foco na experiência do usuário

## 👥 Equipe de Desenvolvimento

| Membro       | Função         | Branch                      | Responsabilidades                             |
| ------------ | -------------- | --------------------------- | --------------------------------------------- |
| **João**     | 🎯 Coordenador | `feature/joao-coordenacao`  | Página inicial, integração, coordenação geral |
| **Eduardo**  | 🧭 Navegação   | `feature/eduardo-navegacao` | Header, footer, sistema de navegação          |
| **Carlos**   | 📝 Conteúdo    | `feature/carlos-noticias`   | Páginas de notícias, artigos, conteúdo        |
| **Santiago** | 🎨 Design      | `feature/santiago-design`   | CSS, JavaScript, responsividade, UX/UI        |

## 💻 Tecnologias Utilizadas

### Frontend

- **HTML5** - Estrutura semântica das páginas
- **CSS3** - Estilização moderna e responsiva
- **JavaScript** - Interatividade e funcionalidades dinâmicas
- **Font Awesome** - Ícones e elementos gráficos

### Backend

- **PHP** - Lógica do servidor e processamento
- **MySQL** (opcional) - Banco de dados para armazenamento

### Ferramentas de Desenvolvimento

- **Git/GitHub** - Controle de versão e colaboração
- **XAMPP** - Ambiente de desenvolvimento local
- **VS Code** - Editor de código recomendado

## 📚 Documentação para a Equipe

### 🚀 Para Começar:

- 🛠️ **[Setup e Instalação](docs/SETUP-INSTALACAO.md)** - Guia completo de configuração do ambiente
- 📖 **[Guia Completo de GitHub](docs/GUIA-GITHUB.md)** - Tutorial detalhado para quem nunca usou Git/GitHub
- ⚡ **[GitHub Cheat Sheet](docs/GITHUB-CHEATSHEET.md)** - Referência rápida dos comandos mais usados

### 🤝 Para a Equipe:

- 👥 **[Divisão de Tarefas](docs/DIVISAO-TAREFAS.md)** - Responsabilidades de cada membro
- 🤝 **[Colaboração](docs/COLABORACAO.md)** - Regras de trabalho em equipe
- 📋 **[Changelog](docs/CHANGELOG.md)** - Histórico de versões e mudanças

## 📁 Estrutura do Projeto

````
RoboNews/
├── 📄 index.php              # Página principal do portal
├── 📂 pages/                 # Páginas do site
│   ├── 📰 noticias.php      # Listagem de notícias
│   ├── 📄 artigo.php        # Página individual do artigo
│   └── ℹ️  sobre.php         # Página institucional
├── 📂 assets/               # Recursos estáticos
│   ├── 🎨 css/              # Arquivos de estilo
│   │   └── style.css        # CSS principal
│   ├── ⚡ js/               # Scripts JavaScript
│   │   └── main.js          # JavaScript principal
│   └── 🖼️  images/          # Imagens e mídia
├── 📂 includes/             # Componentes PHP reutilizáveis
│   ├── header.php           # Cabeçalho do site
│   ├── footer.php           # Rodapé do site
│   └── nav.php              # Sistema de navegação
├── 📂 docs/                 # Documentação completa do projeto
│   ├── 🛠️ SETUP-INSTALACAO.md  # Guia de configuração do ambiente
│   ├── 📖 GUIA-GITHUB.md       # Tutorial completo de Git/GitHub
│   ├── ⚡ GITHUB-CHEATSHEET.md # Referência rápida de comandos
│   ├── 👥 DIVISAO-TAREFAS.md   # Responsabilidades da equipe
│   ├── 🤝 COLABORACAO.md       # Workflow e regras de trabalho
│   └── 📋 CHANGELOG.md         # Histórico de versões
└── 📄 README.md             # Este arquivo

## 🚀 Como Executar o Projeto

### Pré-requisitos
- **XAMPP** instalado e configurado
- **Git** instalado no sistema
- **Navegador web** atualizado

### Configuração Local

1. **Clone o repositório:**
```bash
git clone https://github.com/JoaoL007/Trabalho-TIC-GRUPO.git
````

2. **Mova para a pasta do XAMPP:**

```bash
# Windows
mv Trabalho-TIC-GRUPO C:\xampp\htdocs\

# Linux/Mac
mv Trabalho-TIC-GRUPO /opt/lampp/htdocs/
```

3. **Inicie o XAMPP:**

   - Abra o painel de controle do XAMPP
   - Inicie os serviços **Apache** (e **MySQL** se necessário)

4. **Acesse o projeto:**
   - Abra o navegador
   - Digite: `http://localhost/Trabalho-TIC-GRUPO`

## 🤝 Como Contribuir

### Para Membros da Equipe

1. **📥 Clone o repositório (primeira vez):**

```bash
git clone https://github.com/JoaoL007/Trabalho-TIC-GRUPO.git
cd Trabalho-TIC-GRUPO
```

2. **🌿 Trabalhe na sua branch:**

```bash
# Ir para sua branch específica
git checkout feature/seu-nome-funcionalidade

# Ou criar nova branch para uma tarefa
git checkout -b feature/nova-funcionalidade
```

3. **💾 Faça commits regulares:**

```bash
git add .
git commit -m "feat: adicionar nova funcionalidade"
git push origin feature/sua-branch
```

4. **🔄 Crie Pull Request:**
   - Acesse o repositório no GitHub
   - Clique em "Compare & pull request"
   - Adicione descrição detalhada
   - Solicite revisão dos colegas

### Para Externos

Se você não é membro da equipe mas quer contribuir:

1. Faça um **fork** do repositório
2. Clone seu fork
3. Crie uma branch para sua contribuição
4. Faça as alterações e commit
5. Abra um Pull Request explicando sua contribuição

## 📋 Status do Desenvolvimento

### ✅ Funcionalidades Implementadas

- [x] Estrutura básica do projeto
- [x] Sistema de navegação responsivo
- [x] Design moderno e atrativo
- [x] Página inicial com hero section
- [x] Layout responsivo para mobile

### 🔧 Em Desenvolvimento

- [ ] Sistema completo de notícias
- [ ] Páginas individuais de artigos
- [ ] Conteúdo sobre robótica
- [ ] Sistema de busca (opcional)
- [ ] Newsletter (opcional)

### 🎯 Próximos Passos

- [ ] Testes de compatibilidade
- [ ] Otimização de performance
- [ ] Deploy para produção
- [ ] Documentação final

## 📜 Regras de Colaboração

### 🔒 Regras Obrigatórias

1. **🚫 NUNCA** faça push direto na branch `main`
2. **🌿 SEMPRE** trabalhe em branches separadas
3. **✅ SEMPRE** teste seu código antes de criar PR
4. **👀 SEMPRE** solicite revisão dos colegas
5. **📝 SEMPRE** use mensagens de commit descritivas

### 🎯 Boas Práticas

- 💬 Comunique-se antes de mexer em arquivos compartilhados
- 🔄 Sincronize regularmente com a branch principal
- 🐛 Reporte bugs através de GitHub Issues
- 📚 Mantenha a documentação atualizada
- 🧪 Teste em diferentes dispositivos e navegadores

## 📝 Convenções de Código

### Mensagens de Commit

Use o padrão **Conventional Commits**:

```bash
# Tipos principais:
feat: nova funcionalidade
fix: correção de bug
style: mudanças de CSS/design
docs: atualização de documentação
refactor: refatoração de código
test: adição/correção de testes

# Exemplos práticos:
git commit -m "feat: adicionar sistema de busca de notícias"
git commit -m "style: implementar design responsivo do header"
git commit -m "fix: corrigir bug na navegação mobile"
git commit -m "docs: atualizar guia de instalação"
```

### Nomes de Branches

```bash
# Padrão: tipo/responsavel-descricao
feature/joao-coordenacao      # Nova funcionalidade
fix/maria-navbar-mobile       # Correção de bug
style/pedro-responsive-design # Melhorias visuais
docs/ana-readme-update        # Atualização de documentação
```

## 🔗 Links e Recursos Úteis

### 🏠 Projeto

- **[🌐 Site ao Vivo](http://localhost/Trabalho-TIC-GRUPO)** - Versão local do projeto
- **[📱 Repositório GitHub](https://github.com/JoaoL007/Trabalho-TIC-GRUPO)** - Código fonte
- **[📊 GitHub Issues](https://github.com/JoaoL007/Trabalho-TIC-GRUPO/issues)** - Bugs e sugestões
- **[🔄 Pull Requests](https://github.com/JoaoL007/Trabalho-TIC-GRUPO/pulls)** - Revisões de código

### 📚 Documentação de Apoio

- **[📖 Git Documentation](https://git-scm.com/doc)** - Documentação oficial do Git
- **[🐙 GitHub Guides](https://guides.github.com/)** - Guias oficiais do GitHub
- **[📝 Markdown Guide](https://www.markdownguide.org/)** - Sintaxe Markdown
- **[🎨 CSS Grid](https://css-tricks.com/snippets/css/complete-guide-grid/)** - Guia completo de CSS Grid
- **[📱 Responsive Design](https://web.dev/responsive-web-design-basics/)** - Princípios de design responsivo

### 🛠️ Ferramentas Recomendadas

- **[💻 VS Code](https://code.visualstudio.com/)** - Editor de código
- **[🔧 XAMPP](https://www.apachefriends.org/)** - Ambiente de desenvolvimento
- **[🎨 Font Awesome](https://fontawesome.com/)** - Ícones para web
- **[🖼️ Unsplash](https://unsplash.com/)** - Imagens gratuitas de alta qualidade

---

## 📞 Contato e Suporte

### 🚨 Para Problemas Urgentes

- **João (Coordenador):** Responsável pela integração geral
- **Grupo WhatsApp/Discord:** Para comunicação rápida da equipe

### 🐛 Para Reportar Bugs

1. Acesse [GitHub Issues](https://github.com/JoaoL007/Trabalho-TIC-GRUPO/issues)
2. Clique em "New Issue"
3. Descreva o problema detalhadamente
4. Adicione prints se necessário

### 💡 Para Sugestões

- Use GitHub Issues com a label "enhancement"
- Discuta primeiro no grupo da equipe
- Crie um Pull Request se já tiver a solução

---

## 📄 Licença

Este projeto foi desenvolvido para fins acadêmicos como parte do trabalho de TIC.

**© 2025 Equipe RoboNews - Todos os direitos reservados.**

---

⭐ **Se este projeto te ajudou, considere dar uma estrela no GitHub!**
