# 📚 Guia Completo de GitHub para Iniciantes

## 🎯 Objetivo

Este guia vai te ensinar tudo que você precisa saber sobre GitHub para colaborar no nosso projeto **RoboNews**.

---

## 📋 Índice

1. [O que é GitHub?](#o-que-é-github)
2. [Conceitos Fundamentais](#conceitos-fundamentais)
3. [Configuração Inicial](#configuração-inicial)
4. [Comandos Básicos do Git](#comandos-básicos-do-git)
5. [Fluxo de Trabalho da Equipe](#fluxo-de-trabalho-da-equipe)
6. [Como Fazer Commits](#como-fazer-commits)
7. [Trabalhando com Branches](#trabalhando-com-branches)
8. [Pull Requests](#pull-requests)
9. [Resolvendo Conflitos](#resolvendo-conflitos)
10. [Comandos Úteis](#comandos-úteis)
11. [Troubleshooting](#troubleshooting)

---

## 🤔 O que é GitHub?

**GitHub** é uma plataforma que permite:

- 📁 Armazenar código na nuvem
- 👥 Colaborar com outros desenvolvedores
- 📝 Acompanhar mudanças no código
- 🔄 Sincronizar trabalho entre membros da equipe

**Git** é a ferramenta que controla as versões do código.
**GitHub** é onde hospedamos nosso repositório online.

---

## 🧩 Conceitos Fundamentais

### 📦 **Repositório (Repo)**

É a "pasta" do nosso projeto que contém todos os arquivos e o histórico de mudanças.

### 🌿 **Branch (Ramo)**

Uma "versão paralela" do código onde você pode trabalhar sem afetar o código principal.

```
main branch (código principal)
    ├── feature/joao-coordenacao (branch do João)
    ├── feature/maria-design (branch da Maria)
    └── feature/pedro-backend (branch do Pedro)
```

### 💾 **Commit**

Um "snapshot" (foto) do seu código em um momento específico, com uma mensagem explicando o que foi feito.

### 🔄 **Pull Request (PR)**

Uma solicitação para incluir suas mudanças no código principal.

### 🔗 **Clone**

Fazer uma cópia local do repositório no seu computador.

### 📤 **Push**

Enviar suas mudanças locais para o GitHub.

### 📥 **Pull**

Baixar as mudanças mais recentes do GitHub para seu computador.

---

## ⚙️ Configuração Inicial

### 1. **Instalar Git**

- Windows: Baixe em https://git-scm.com/
- Verifique se instalou: abra o terminal e digite `git --version`

### 2. **Configurar Git com seus dados**

```bash
git config --global user.name "Seu Nome Completo"
git config --global user.email "seu.email@exemplo.com"
```

### 3. **Criar conta no GitHub**

- Acesse https://github.com/
- Crie sua conta gratuita
- Confirme seu email

### 4. **Clonar nosso repositório**

```bash
# Navegue até a pasta onde quer o projeto
cd C:\xampp\htdocs\

# Clone o repositório
git clone https://github.com/JoaoL007/Trabalho-TIC-GRUPO.git

# Entre na pasta do projeto
cd Trabalho-TIC-GRUPO
```

---

## 🔧 Comandos Básicos do Git

### 📊 **Ver status atual**

```bash
git status
```

Mostra quais arquivos foram modificados, adicionados ou removidos.

### 📝 **Adicionar arquivos ao stage**

```bash
# Adicionar um arquivo específico
git add nome-do-arquivo.php

# Adicionar todos os arquivos modificados
git add .

# Adicionar arquivos de uma pasta específica
git add assets/css/
```

### 💾 **Fazer commit**

```bash
git commit -m "Descrição clara do que foi feito"
```

### 📤 **Enviar para o GitHub**

```bash
git push origin nome-da-sua-branch
```

### 📥 **Baixar mudanças do GitHub**

```bash
git pull origin main
```

---

## 🔄 Fluxo de Trabalho da Equipe

### **Passo a Passo para Cada Tarefa:**

#### 1. **Antes de começar a trabalhar**

```bash
# 1. Vá para a branch principal
git checkout main

# 2. Baixe as últimas mudanças
git pull origin main

# 3. Crie uma nova branch para sua tarefa
git checkout -b feature/seu-nome-tarefa
# Exemplo: git checkout -b feature/maria-design-header
```

#### 2. **Durante o trabalho**

```bash
# Trabalhe nos seus arquivos...

# Veja o que mudou
git status

# Adicione os arquivos modificados
git add .

# Faça commit das mudanças
git commit -m "Adiciona estilo do header principal"

# Envie para o GitHub (primeira vez)
git push -u origin feature/seu-nome-tarefa

# Envios subsequentes
git push
```

#### 3. **Ao finalizar a tarefa**

- Crie um Pull Request no GitHub
- Aguarde revisão da equipe
- Após aprovação, sua branch será mesclada

---

## 💾 Como Fazer Commits

### **Boas Práticas para Mensagens de Commit:**

#### ✅ **Bons exemplos:**

```bash
git commit -m "Adiciona estrutura HTML do header"
git commit -m "Implementa estilo CSS responsivo para navegação"
git commit -m "Corrige bug no carregamento de imagens"
git commit -m "Atualiza conteúdo da página sobre"
```

#### ❌ **Evite:**

```bash
git commit -m "mudanças"
git commit -m "fix"
git commit -m "atualizações várias"
```

### **Estrutura de uma boa mensagem:**

```bash
git commit -m "Verbo + o que foi feito + onde"

# Exemplos:
git commit -m "Adiciona formulário de contato na página sobre"
git commit -m "Remove código CSS não utilizado"
git commit -m "Implementa responsividade no menu mobile"
```

---

## 🌿 Trabalhando com Branches

### **Ver todas as branches**

```bash
git branch -a
```

### **Criar nova branch**

```bash
git checkout -b nome-da-nova-branch
```

### **Mudar de branch**

```bash
git checkout nome-da-branch
```

### **Deletar branch (após merge)**

```bash
git branch -d nome-da-branch
```

### **Convenção de nomes das nossas branches:**

- `feature/nome-funcionalidade` - Para novas funcionalidades
- `fix/nome-correcao` - Para correções de bugs
- `update/nome-atualizacao` - Para atualizações de conteúdo

**Exemplos:**

- `feature/joao-coordenacao`
- `feature/maria-design-css`
- `fix/pedro-correção-navbar`
- `update/ana-conteudo-sobre`

---

## 🔄 Pull Requests

### **O que é um Pull Request?**

É como você pede para incluir suas mudanças no código principal da equipe.

### **Como criar um Pull Request:**

#### 1. **No GitHub (navegador):**

- Vá para https://github.com/JoaoL007/Trabalho-TIC-GRUPO
- Clique em "Compare & pull request"
- Preencha:
  - **Título:** Descrição clara da funcionalidade
  - **Descrição:** Explique o que foi implementado
  - **Reviewers:** Adicione membros da equipe para revisão

#### 2. **Exemplo de Pull Request:**

```
Título: Implementa design responsivo do header

Descrição:
- Adiciona CSS responsivo para o header
- Implementa menu mobile com hamburger
- Corrige alinhamento do logo
- Testa compatibilidade com diferentes dispositivos

Arquivos modificados:
- includes/header.php
- assets/css/style.css
- assets/js/mobile-menu.js
```

### **Processo de aprovação:**

1. Você cria o PR
2. Equipe revisa o código
3. Se aprovado, é feito o merge
4. Sua branch pode ser deletada

---

## ⚔️ Resolvendo Conflitos

### **O que são conflitos?**

Acontecem quando duas pessoas modificam a mesma parte do código.

### **Como resolver:**

#### 1. **Atualizar sua branch com main:**

```bash
git checkout main
git pull origin main
git checkout sua-branch
git merge main
```

#### 2. **Se houver conflitos, o Git mostrará:**

```php
<<<<<<< HEAD
// Seu código
<div class="header-old">
=======
// Código de outra pessoa
<div class="header-new">
>>>>>>> main
```

#### 3. **Resolva manualmente:**

- Escolha qual código manter
- Remove as marcações `<<<<<<<`, `=======`, `>>>>>>>`
- Salve o arquivo

#### 4. **Finalize a resolução:**

```bash
git add arquivo-corrigido.php
git commit -m "Resolve conflito no header"
git push
```

---

## 🛠️ Comandos Úteis

### **Ver histórico de commits**

```bash
git log --oneline
```

### **Desfazer mudanças não commitadas**

```bash
# Desfazer mudanças em um arquivo específico
git checkout -- nome-arquivo.php

# Desfazer todas as mudanças não commitadas
git reset --hard HEAD
```

### **Ver diferenças**

```bash
# Ver o que mudou nos arquivos
git diff

# Ver diferenças de um arquivo específico
git diff nome-arquivo.php
```

### **Stash (guardar mudanças temporariamente)**

```bash
# Guardar mudanças
git stash

# Recuperar mudanças guardadas
git stash pop
```

---

## 🆘 Troubleshooting

### **Problema: "Permission denied"**

**Solução:** Configure autenticação SSH ou use token pessoal.

### **Problema: "Branch diverged"**

```bash
git pull origin main --rebase
```

### **Problema: "Merge conflict"**

1. Abra o arquivo com conflito
2. Procure por `<<<<<<<` e `>>>>>>>`
3. Escolha qual código manter
4. Remove as marcações de conflito
5. `git add arquivo.php`
6. `git commit -m "Resolve conflito"`

### **Problema: Esqueci de criar branch**

```bash
# Se ainda não fez commit:
git stash
git checkout -b nova-branch
git stash pop

# Se já fez commit:
git checkout -b nova-branch
# Seus commits vão junto
```

### **Problema: Commit na branch errada**

```bash
# Desfazer último commit (mantém mudanças)
git reset --soft HEAD~1

# Mudar para branch correta
git checkout branch-correta

# Fazer commit novamente
git add .
git commit -m "Sua mensagem"
```

---

## 📞 Contatos de Emergência

### **Se tiver problemas:**

1. **João (Coordenador):** Responsável geral do projeto
2. **Grupo WhatsApp:** Para dúvidas rápidas
3. **GitHub Issues:** Para problemas técnicos do projeto

### **Recursos úteis:**

- [Documentação oficial do Git](https://git-scm.com/doc)
- [GitHub Guides](https://guides.github.com/)
- [Visualizador de comandos Git](https://learngitbranching.js.org/)

---

## ✅ Checklist Diário

### **Antes de começar a trabalhar:**

- [ ] `git checkout main`
- [ ] `git pull origin main`
- [ ] `git checkout -b feature/minha-tarefa`

### **Durante o trabalho:**

- [ ] Faça commits pequenos e frequentes
- [ ] Use mensagens de commit claras
- [ ] Teste seu código antes de fazer commit

### **Ao finalizar:**

- [ ] `git push origin minha-branch`
- [ ] Criar Pull Request no GitHub
- [ ] Notificar a equipe para revisão

---

## 🎯 Resumo dos Comandos Essenciais

```bash
# Configuração inicial
git config --global user.name "Seu Nome"
git config --global user.email "seu.email@exemplo.com"

# Clonar projeto
git clone https://github.com/JoaoL007/Trabalho-TIC-GRUPO.git

# Workflow básico
git checkout main           # Ir para main
git pull origin main        # Baixar mudanças
git checkout -b nova-branch # Criar nova branch
git add .                   # Adicionar mudanças
git commit -m "mensagem"    # Fazer commit
git push origin nova-branch # Enviar para GitHub

# Comandos úteis
git status                  # Ver status
git log --oneline          # Ver histórico
git diff                   # Ver diferenças
```

---

**💡 Dica final:** Pratique com arquivos de teste primeiro. O Git pode parecer complicado no início, mas com a prática fica natural!

**🚀 Lembre-se:** É melhor fazer muitos commits pequenos do que poucos commits grandes. Assim, se algo der errado, é mais fácil de corrigir!
