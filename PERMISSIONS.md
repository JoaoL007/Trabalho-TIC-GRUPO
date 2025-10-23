# Permissões de Colaboradores - Colaborator Permissions

## Estado Atual / Current Status

Este documento descreve a estrutura de permissões recomendada para o projeto.
This document describes the recommended permission structure for the project.

## Permissões Recomendadas / Recommended Permissions

### Todos os Colaboradores / All Collaborators

**Nível de Acesso Recomendado: WRITE (Escritor)**

Todos os membros da equipe devem ter permissão de **escritor** (write access) para:
- Fazer push de branches diretamente no repositório
- Criar e gerenciar pull requests
- Revisar e comentar em código
- Gerenciar issues
- Colaborar de forma eficiente no projeto

All team members should have **write** permission to:
- Push branches directly to the repository
- Create and manage pull requests
- Review and comment on code
- Manage issues
- Collaborate efficiently on the project

### Lista de Colaboradores / Collaborators List

1. **João** (@JoaoL007) - Owner do repositório / Repository Owner
2. **Membro 2** - Write access / Acesso de escritor
3. **Membro 3** - Write access / Acesso de escritor
4. **Membro 4** - Write access / Acesso de escritor

## Como Configurar as Permissões / How to Configure Permissions

### Passo a Passo para o Owner do Repositório:

1. **Acesse as Configurações do Repositório**
   - Vá para https://github.com/JoaoL007/Trabalho-TIC-GRUPO
   - Clique em **Settings** (Configurações)

2. **Adicione Colaboradores**
   - No menu lateral, clique em **Collaborators and teams**
   - Clique em **Add people** (Adicionar pessoas)

3. **Convide os Membros**
   - Digite o username do GitHub de cada membro
   - Selecione o nível de permissão: **Write** (Escritor)
   - Clique em **Add [username] to this repository**

4. **Repita para Todos os Membros**
   - Repita o processo para os Membros 2, 3 e 4

### Níveis de Permissão Disponíveis / Available Permission Levels

- **Read**: Pode visualizar e clonar o repositório
- **Triage**: Pode gerenciar issues e pull requests sem acesso ao código
- **Write**: ✅ **RECOMENDADO** - Pode fazer push, criar branches e gerenciar PRs
- **Maintain**: Pode gerenciar o repositório sem acesso a configurações sensíveis
- **Admin**: Controle total do repositório

## Regras de Proteção da Branch Main / Main Branch Protection Rules

Mesmo com permissão de escritor, é recomendado configurar regras de proteção:

### Configurações Recomendadas:
- ✅ Require pull request reviews before merging
- ✅ Require status checks to pass before merging
- ✅ Require conversation resolution before merging
- ✅ Do not allow bypassing the above settings

### Como Configurar:
1. Settings > Branches
2. Add branch protection rule
3. Branch name pattern: `main`
4. Ative as opções recomendadas acima

## Workflow de Trabalho / Work Workflow

Com permissões de escritor, o workflow recomendado é:

1. **Criar Branch** - `git checkout -b feature/nome`
2. **Fazer Alterações** - Desenvolver a funcionalidade
3. **Commit e Push** - `git push origin feature/nome`
4. **Criar Pull Request** - No GitHub
5. **Revisão** - Pelo menos 1 aprovação
6. **Merge** - Após aprovação

## Benefícios da Permissão de Escritor / Benefits of Write Permission

✅ **Colaboração Eficiente**: Todos podem contribuir diretamente
✅ **Menos Fricção**: Não precisa de forks pessoais
✅ **Revisão de Código**: Todos podem revisar PRs dos colegas
✅ **Gerenciamento de Issues**: Todos podem criar e gerenciar issues
✅ **Workflow Simplificado**: Processo de contribuição mais direto

## Segurança / Security

Mesmo com acesso de escritor:
- A branch `main` deve estar protegida
- Pull requests devem ser revisados antes do merge
- Commits diretos na `main` devem ser bloqueados
- Todos devem seguir as convenções do projeto

## Contato / Contact

Para questões sobre permissões, entre em contato com:
- **João** (@JoaoL007) - Owner do repositório
