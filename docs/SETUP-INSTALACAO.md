# 🚀 Guia de Instalação e Configuração - RoboNews

## 🎯 Objetivo

Este guia te ajudará a configurar completamente o ambiente de desenvolvimento para trabalhar no projeto **RoboNews**.

---

## 📋 Pré-requisitos

Antes de começar, certifique-se de ter:

- 💻 **Computador** com Windows, macOS ou Linux
- 🌐 **Conexão com a internet** para downloads
- 📧 **Email válido** para conta GitHub
- ⏰ **30-45 minutos** para configuração completa

---

## 🛠️ Passo 1: Instalar XAMPP

### Windows

1. Acesse: https://www.apachefriends.org/download.html
2. Baixe a versão para Windows (recomendado: PHP 8.0+)
3. Execute o instalador como administrador
4. Instale em `C:\xampp\` (padrão recomendado)
5. Marque: **Apache**, **MySQL**, **PHP**, **phpMyAdmin**

### macOS

1. Baixe o instalador para macOS
2. Abra o arquivo `.dmg` baixado
3. Arraste XAMPP para a pasta Applications
4. Abra o Terminal e execute: `sudo /Applications/XAMPP/xamppfiles/xampp start`

### Linux (Ubuntu/Debian)

```bash
# Baixar XAMPP
wget https://www.apachefriends.org/xampp-files/8.0.30/xampp-linux-x64-8.0.30-0-installer.run

# Dar permissão de execução
chmod +x xampp-linux-x64-8.0.30-0-installer.run

# Executar instalador
sudo ./xampp-linux-x64-8.0.30-0-installer.run
```

### ✅ Verificar Instalação

1. Abra o **XAMPP Control Panel**
2. Clique em **Start** ao lado do **Apache**
3. Abra o navegador e acesse: http://localhost
4. Se aparecer a página de boas-vindas do XAMPP, está funcionando! 🎉

---

## 🔧 Passo 2: Instalar Git

### Windows

**Opção 1: Download direto**

1. Acesse: https://git-scm.com/download/win
2. Baixe a versão 64-bit para Windows
3. Execute o instalador
4. Use as configurações padrão (recomendado)
5. Marque: "Git Bash Here" e "Git GUI Here"

**Opção 2: Via Chocolatey**

```powershell
# Instalar Chocolatey primeiro (se não tiver)
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://chocolatey.org/install.ps1'))

# Instalar Git
choco install git
```

### macOS

**Opção 1: Via Homebrew**

```bash
# Instalar Homebrew (se não tiver)
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"

# Instalar Git
brew install git
```

**Opção 2: Download direto**

1. Acesse: https://git-scm.com/download/mac
2. Baixe e instale o pacote

### Linux (Ubuntu/Debian)

```bash
# Atualizar repositórios
sudo apt update

# Instalar Git
sudo apt install git

# Verificar versão
git --version
```

### ✅ Verificar Instalação

Abra o terminal/prompt e digite:

```bash
git --version
```

Se mostrar a versão (ex: `git version 2.39.0`), está instalado! ✅

---

## 🐙 Passo 3: Criar Conta no GitHub

1. **Acesse:** https://github.com
2. **Clique em:** "Sign up"
3. **Preencha:**
   - Username (ex: `joao_silva_dev`)
   - Email (use o mesmo que usará no Git)
   - Senha forte
4. **Verifique** seu email
5. **Escolha** o plano gratuito (suficiente para nosso projeto)

### 💡 Dicas para Username

- Use algo profissional (evite números aleatórios)
- Pode incluir seu nome real
- Será visível publicamente
- Exemplos bons: `maria-santos`, `pedro_dev`, `ana.silva`

---

## ⚙️ Passo 4: Configurar Git Localmente

Abra o terminal/Git Bash e execute:

```bash
# Configurar nome (use seu nome real)
git config --global user.name "João Silva"

# Configurar email (mesmo do GitHub)
git config --global user.email "joao.silva@email.com"

# Configurar editor padrão (opcional)
git config --global core.editor "code --wait"  # Para VS Code
# ou
git config --global core.editor "notepad"      # Para Windows Notepad

# Verificar configurações
git config --list --global
```

### 🔐 Configurar Autenticação (Importante!)

**Opção 1: Token de Acesso (Recomendado)**

1. No GitHub, vá em: **Settings > Developer settings > Personal access tokens**
2. Clique em "Generate new token"
3. Nome: "Trabalho-TIC-GRUPO"
4. Marque: `repo`, `workflow`, `write:packages`
5. **Copie o token** e guarde em local seguro
6. Use o token como senha ao fazer push

**Opção 2: SSH (Mais Avançado)**

```bash
# Gerar chave SSH
ssh-keygen -t ed25519 -C "seu.email@exemplo.com"

# Adicionar ao SSH agent
eval "$(ssh-agent -s)"
ssh-add ~/.ssh/id_ed25519

# Copiar chave pública
cat ~/.ssh/id_ed25519.pub
# Cole o resultado no GitHub: Settings > SSH and GPG keys
```

---

## 📁 Passo 5: Clonar o Projeto

### 1. Navegar para a pasta do XAMPP

```bash
# Windows
cd C:\xampp\htdocs

# macOS
cd /Applications/XAMPP/htdocs

# Linux
cd /opt/lampp/htdocs
```

### 2. Clonar o repositório

```bash
git clone https://github.com/JoaoL007/Trabalho-TIC-GRUPO.git
```

### 3. Entrar na pasta do projeto

```bash
cd Trabalho-TIC-GRUPO
```

### 4. Verificar se está funcionando

```bash
# Ver status do repositório
git status

# Ver branches disponíveis
git branch -a

# Ver histórico de commits
git log --oneline -5
```

---

## 🎨 Passo 6: Instalar Editor de Código (Recomendado)

### VS Code (Mais Recomendado)

1. **Download:** https://code.visualstudio.com/
2. **Instalar** com configurações padrão
3. **Extensões úteis:**
   ```
   - PHP Intelephense
   - HTML CSS Support
   - Auto Rename Tag
   - Prettier - Code formatter
   - GitLens — Git supercharged
   - Live Server
   ```

### Alternativas

- **Sublime Text:** https://www.sublimetext.com/
- **Notepad++** (Windows): https://notepad-plus-plus.org/
- **Vim/Nano** (Linux/macOS): Já instalados

---

## 🚀 Passo 7: Testar Tudo

### 1. Iniciar XAMPP

- Abra o **XAMPP Control Panel**
- Clique em **Start** para **Apache**
- Status deve ficar verde ✅

### 2. Testar o site

1. Abra o navegador
2. Digite: `http://localhost/Trabalho-TIC-GRUPO`
3. O site RoboNews deve carregar! 🎉

### 3. Testar Git

```bash
# Ir para sua branch
git checkout feature/seu-nome-teste

# Criar um arquivo de teste
echo "Teste do $(whoami)" > teste.txt

# Adicionar e fazer commit
git add teste.txt
git commit -m "test: verificar configuração do git"

# Enviar para GitHub
git push origin feature/seu-nome-teste
```

Se chegou até aqui sem erros, **parabéns!** 🎉 Seu ambiente está 100% configurado!

---

## 🆘 Resolução de Problemas Comuns

### ❌ "Apache não inicia no XAMPP"

**Solução:**

1. Verifique se não há outro servidor rodando (Skype, IIS)
2. Mude a porta do Apache para 8080:
   - XAMPP > Apache > Config > httpd.conf
   - Mude `Listen 80` para `Listen 8080`
   - Acesse: http://localhost:8080/Trabalho-TIC-GRUPO

### ❌ "Git não é reconhecido como comando"

**Solução Windows:**

1. Adicione Git ao PATH:
   - Painel de Controle > Sistema > Configurações Avançadas
   - Variáveis de Ambiente > PATH > Editar
   - Adicionar: `C:\Program Files\Git\bin`
2. Reinicie o terminal

### ❌ "Permission denied (publickey)" no GitHub

**Solução:**

1. Use HTTPS em vez de SSH para clone:
   ```bash
   git clone https://github.com/JoaoL007/Trabalho-TIC-GRUPO.git
   ```
2. Configure token de acesso pessoal

### ❌ "fatal: unable to access" no git push

**Solução:**

1. Verifique sua conexão com internet
2. Use token de acesso em vez da senha
3. Configure credenciais:
   ```bash
   git config --global credential.helper store
   ```

---

## 📋 Checklist de Configuração

Marque cada item quando completar:

### Instalações

- [ ] ✅ XAMPP instalado e Apache funcionando
- [ ] ✅ Git instalado (comando `git --version` funciona)
- [ ] ✅ Conta GitHub criada e verificada
- [ ] ✅ Editor de código instalado (VS Code recomendado)

### Configurações Git

- [ ] ✅ Nome configurado (`git config --global user.name`)
- [ ] ✅ Email configurado (`git config --global user.email`)
- [ ] ✅ Autenticação configurada (token ou SSH)

### Projeto

- [ ] ✅ Repositório clonado na pasta correta do XAMPP
- [ ] ✅ Site carrega em http://localhost/Trabalho-TIC-GRUPO
- [ ] ✅ Consegue fazer push para sua branch
- [ ] ✅ Consegue ver branches da equipe (`git branch -a`)

### Extras

- [ ] ✅ Extensões do VS Code instaladas
- [ ] ✅ Documentação lida (GUIA-GITHUB.md)
- [ ] ✅ Grupo do WhatsApp/Discord configurado
- [ ] ✅ Primeira contribuição testada

---

## 🎓 Próximos Passos

Agora que você tem tudo configurado:

1. 📖 **Leia:** [Guia Completo de GitHub](GUIA-GITHUB.md)
2. ⚡ **Consulte:** [GitHub Cheat Sheet](GITHUB-CHEATSHEET.md)
3. 👥 **Veja:** [Divisão de Tarefas](DIVISAO-TAREFAS.md)
4. 🤝 **Siga:** [Regras de Colaboração](COLABORACAO.md)
5. 🚀 **Comece** a trabalhar na sua parte do projeto!

---

## 📞 Precisa de Ajuda?

### 🚨 Problemas Urgentes

- **João (Coordenador):** Para questões de integração
- **Grupo WhatsApp/Discord:** Para dúvidas rápidas

### 🐛 Problemas Técnicos

1. Consulte este guia primeiro
2. Procure no Google o erro específico
3. Pergunte no grupo da equipe
4. Crie uma Issue no GitHub se for bug do projeto

### 📚 Recursos de Aprendizado

- **Git Handbook:** https://guides.github.com/introduction/git-handbook/
- **Interactive Git Tutorial:** https://learngitbranching.js.org/
- **XAMPP Documentation:** https://www.apachefriends.org/faq_windows.html

---

**🎯 Lembre-se:** A configuração inicial é sempre a parte mais chatinha, mas depois fica muito mais fácil!

**🚀 Boa sorte e bem-vindo à equipe RoboNews!**
