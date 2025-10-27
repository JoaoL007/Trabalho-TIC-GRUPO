# 🚀 GitHub Cheat Sheet - Referência Rápida

## ⚡ Comandos Mais Usados

### 🔧 Configuração (só uma vez)

```bash
git config --global user.name "Seu Nome"
git config --global user.email "seu.email@exemplo.com"
```

### 📥 Começar a trabalhar

```bash
git checkout main                    # Ir para branch principal
git pull origin main                 # Baixar últimas mudanças
git checkout -b feature/minha-tarefa # Criar nova branch
```

### 💾 Salvar trabalho

```bash
git status                          # Ver o que mudou
git add .                           # Adicionar todos os arquivos
git commit -m "Descrição do que fiz" # Salvar mudanças
git push origin nome-da-branch      # Enviar para GitHub
```

### 🔄 Atualizar projeto

```bash
git pull origin main               # Baixar mudanças da equipe
```

## 🆘 Comandos de Emergência

### ❌ Desfazer mudanças não salvas

```bash
git checkout -- nome-arquivo.php   # Desfazer mudanças em 1 arquivo
git reset --hard HEAD              # Desfazer TODAS as mudanças
```

### 📦 Guardar trabalho temporariamente

```bash
git stash                          # Guardar mudanças
git stash pop                      # Recuperar mudanças guardadas
```

## 📋 Fluxo do Nosso Projeto

1. **Pegar tarefa** → Criar branch `feature/seu-nome-tarefa`
2. **Trabalhar** → Fazer commits pequenos e frequentes
3. **Terminar** → Push + Pull Request no GitHub
4. **Aprovação** → Equipe revisa e aprova
5. **Merge** → Código vai para o projeto principal

## 💬 Boas Mensagens de Commit

### ✅ Bom

- `"Adiciona formulário de contato"`
- `"Corrige bug no menu mobile"`
- `"Implementa responsividade da página inicial"`

### ❌ Ruim

- `"mudanças"`
- `"fix"`
- `"atualizações"`

## 🌿 Nomes de Branches

- `feature/nome-funcionalidade` - Nova funcionalidade
- `fix/nome-correcao` - Correção de bug
- `update/nome-atualizacao` - Atualização de conteúdo

**Exemplos:**

- `feature/joao-navigation`
- `fix/maria-mobile-menu`
- `update/pedro-about-page`

## 🔥 Situações Comuns

### "Esqueci de criar branch!"

```bash
git stash                    # Guardar mudanças
git checkout -b nova-branch  # Criar branch
git stash pop               # Recuperar mudanças
```

### "Fiz commit na branch errada!"

```bash
git reset --soft HEAD~1     # Desfazer último commit
git checkout branch-correta # Ir para branch certa
git add .                   # Adicionar mudanças
git commit -m "mensagem"    # Commit novamente
```

### "Conflito de merge!"

1. Abrir arquivo com conflito
2. Procurar `<<<<<<<` e `>>>>>>>`
3. Escolher qual código manter
4. Remover marcações de conflito
5. `git add arquivo.php`
6. `git commit -m "Resolve conflito"`

## 📱 Contatos

- **Dúvidas:** Grupo WhatsApp da equipe
- **Problemas:** João (Coordenador)
- **Emergências:** GitHub Issues

## 🎯 Checklist Diário

**Antes de trabalhar:**

- [ ] `git checkout main`
- [ ] `git pull origin main`
- [ ] `git checkout -b minha-branch`

**Durante o trabalho:**

- [ ] Commits pequenos e frequentes
- [ ] Mensagens claras nos commits
- [ ] Testar código antes do commit

**Ao terminar:**

- [ ] `git push origin minha-branch`
- [ ] Criar Pull Request
- [ ] Avisar equipe

---

**💡 Dica:** Em caso de dúvida, sempre pergunte no grupo antes de forçar comandos!
