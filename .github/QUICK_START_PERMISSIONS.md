# Guia Rápido: Adicionar Colaboradores com Permissão de Escritor

## Para o Owner do Repositório (@JoaoL007)

Este é um guia rápido de como adicionar todos os colaboradores com permissão de **escritor (write)**.

### Passo a Passo:

1. **Acesse o Repositório**
   - Vá para: https://github.com/JoaoL007/Trabalho-TIC-GRUPO

2. **Abra as Configurações**
   - Clique na aba **Settings** (ícone de engrenagem)

3. **Acesse Colaboradores**
   - No menu lateral esquerdo, clique em **Collaborators and teams**
   - Você precisará confirmar sua senha do GitHub

4. **Adicione Cada Membro**
   - Clique no botão verde **Add people**
   - Digite o username do GitHub do colaborador
   - Quando aparecer na lista, clique no nome
   - Selecione **Write** no dropdown de permissões
   - Clique em **Add [username] to this repository**

5. **Repita para Todos**
   - Membro 2: [adicionar username aqui]
   - Membro 3: [adicionar username aqui]
   - Membro 4: [adicionar username aqui]

### Depois de Adicionar os Colaboradores:

Os membros da equipe receberão um email de convite e poderão:
- ✅ Fazer push de branches diretamente
- ✅ Criar e gerenciar pull requests
- ✅ Revisar código dos colegas
- ✅ Gerenciar issues
- ✅ Colaborar sem precisar de forks

### Configuração de Segurança (Recomendado):

Depois de adicionar os colaboradores, proteja a branch `main`:

1. Em **Settings** > **Branches**
2. Clique em **Add branch protection rule**
3. Branch name pattern: `main`
4. Marque:
   - ✅ Require a pull request before merging
   - ✅ Require approvals (pelo menos 1)
   - ✅ Require conversation resolution before merging
5. Clique em **Create**

Isso garante que mesmo com permissão de escritor, todos precisarão fazer pull requests e obter aprovação antes de fazer merge na main.

### Precisa de Ajuda?

- Documentação completa: [PERMISSIONS.md](PERMISSIONS.md)
- Guia de colaboração: [COLABORACAO.md](COLABORACAO.md)
- Documentação GitHub: https://docs.github.com/en/account-and-profile/setting-up-and-managing-your-personal-account-on-github/managing-access-to-your-personal-repositories/inviting-collaborators-to-a-personal-repository
