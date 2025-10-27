# 📋 DIVISÃO DE TAREFAS E BRANCHES - SITE ROBÓTICA

## 🌳 BRANCHES ORGANIZADAS

### 🔵 **João** (Coordenador do Projeto)

- **Branch:** `feature/joao-coordenacao`
- **Responsabilidades:**
  - Página principal (`index.php`)
  - Integração de todas as partes
  - Revisão e merge dos Pull Requests
  - Coordenação geral do projeto
  - Documentação final

### 🟢 **Eduardo** (Navegação e Layout)

- **Branch:** `feature/eduardo-navegacao`
- **Responsabilidades:**
  - Sistema de navegação (`includes/nav.php`)
  - Header do site (`includes/header.php`)
  - Footer do site (`includes/footer.php`)
  - Menu responsivo
  - Estrutura base das páginas

### 🟡 **Carlos** (Conteúdo e Notícias)

- **Branch:** `feature/carlos-noticias`
- **Responsabilidades:**
  - Página de listagem de notícias (`pages/noticias.php`)
  - Página individual de artigos (`pages/artigo.php`)
  - Sistema de comentários (opcional)
  - Criação de conteúdo sobre robótica
  - Banco de dados de notícias (JSON ou array)

### 🔴 **Santiago** (Design e Frontend)

- **Branch:** `feature/santiago-design`
- **Responsabilidades:**
  - Estilos CSS principais (`assets/css/style.css`)
  - JavaScript interativo (`assets/js/main.js`)
  - Responsividade do site
  - Página "Sobre" (`pages/sobre.php`)
  - Otimização visual e UX

---

## 🔄 WORKFLOW DE TRABALHO

### Para cada membro:

1. **Clonar o repositório (se ainda não fez):**

   ```bash
   git clone https://github.com/JoaoL007/Trabalho-TIC-GRUPO.git
   cd Trabalho-TIC-GRUPO
   ```

2. **Mudar para sua branch:**

   ```bash
   # Eduardo:
   git checkout feature/eduardo-navegacao

   # Carlos:
   git checkout feature/carlos-noticias

   # Santiago:
   git checkout feature/santiago-design

   # João:
   git checkout feature/joao-coordenacao
   ```

3. **Trabalhar na sua parte:**

   - Fazer as modificações nos arquivos
   - Testar localmente

4. **Fazer commits frequentes:**

   ```bash
   git add .
   git commit -m "feat: descrição da mudança"
   git push origin sua-branch
   ```

5. **Criar Pull Request quando terminar uma funcionalidade**

---

## 📅 CRONOGRAMA SUGERIDO

### Semana 1:

- **Eduardo:** Criar navegação básica e header/footer
- **Carlos:** Estruturar páginas de notícias
- **Santiago:** CSS básico e layout responsivo
- **João:** Finalizar página principal e coordenar

### Semana 2:

- **Eduardo:** Aperfeiçoar navegação e menus
- **Carlos:** Adicionar conteúdo real de robótica
- **Santiago:** JavaScript interativo e animações
- **João:** Integração e testes finais

---

## 🚫 REGRAS IMPORTANTES

1. **NUNCA fazer push direto na `main`**
2. **Sempre trabalhar na sua branch**
3. **Testar antes de criar Pull Request**
4. **Comunicar no grupo antes de mexer em arquivos compartilhados**
5. **Fazer commits com mensagens descritivas**

---

## 📞 COMUNICAÇÃO

- **WhatsApp/Discord:** Para dúvidas rápidas
- **GitHub Issues:** Para bugs e sugestões
- **Pull Requests:** Para revisão de código
- **Reuniões semanais:** Para alinhamento

---

## 🆘 COMANDOS ÚTEIS

### Sincronizar com a branch principal:

```bash
git checkout main
git pull origin main
git checkout sua-branch
git merge main
```

### Resolver conflitos:

```bash
# Após editar os arquivos com conflito
git add .
git commit -m "resolve: conflitos de merge"
git push origin sua-branch
```

### Ver status:

```bash
git status
git log --oneline
git branch -a
```

---

**📌 Lembrete:** Sempre comuniquem uns com os outros antes de fazer mudanças grandes!
