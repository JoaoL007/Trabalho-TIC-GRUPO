# Trabalho-TIC-GRUPO
Uma vez que já tiveram conhecimento dos grupos de trabalho, devem organizar-se, para começarem a pensar no projeto. Para o efeito, deverão escolher o tema e preencher a Ficha de Planeamento em anexo. Na próxima semana analisa-se e verifica-se se está em conformidade.


Boa! 🙌 Então vou te passar um **guia passo-a-passo simples** para que o teu grupo consiga usar o **Git + GitHub** num projeto de programação.

---

# 🚀 Guia rápido para trabalhar em grupo com GitHub

## 🔹 Passo 1 – Criar um repositório

1. Um colega do grupo cria uma conta no **GitHub**.
2. Vai a ➝ [github.com/new](https://github.com/new)
3. Dá um nome ao projeto (ex: `Trabalho-POO`).
4. Marca como **public** ou **private** (se quiserem só entre vocês).
5. Ativa a opção **Add README file** (fica mais organizado).

---

## 🔹 Passo 2 – Clonar o repositório no computador

Cada pessoa do grupo abre o terminal (ou Git Bash) e digita:

```bash
git clone https://github.com/NOME-DO-USUARIO/Trabalho-POO.git
```

👉 Isto cria uma cópia do projeto no vosso computador.

---

## 🔹 Passo 3 – Criar uma branch para cada pessoa

Para não misturar código, cada um trabalha numa **branch**:

```bash
git checkout -b nome-do-colega
```

Exemplo:

```bash
git checkout -b joao
git checkout -b maria
```

---

## 🔹 Passo 4 – Fazer alterações e salvar no Git

Sempre que mudares o código:

```bash
git add .
git commit -m "Descrição do que foi feito"
```

---

## 🔹 Passo 5 – Enviar as alterações para o GitHub

```bash
git push origin nome-da-branch
```

---

## 🔹 Passo 6 – Criar um **Pull Request (PR)**

1. Vai ao GitHub.
2. Clica em **Compare & Pull Request**.
3. Escreve o que mudou e pede a um colega para revisar.
4. Depois de aprovado, o código entra na **branch principal (main)**.

---

## 🔹 Passo 7 – Atualizar o teu projeto local

Sempre antes de começar a programar, atualiza com o código mais recente:

```bash
git checkout main
git pull origin main
```

---

# 💡 Dicas importantes

* Cada um **faz a sua parte numa branch**.
* Não alterem todos o mesmo ficheiro ao mesmo tempo (para evitar conflitos).
* Se der conflito, o Git vai avisar, e vocês terão de corrigir manualmente.
* Usem o **README.md** para explicar como rodar o projeto.

---

👉 Queres que eu prepare também um **exemplo prático** (um mini projeto em GitHub) só para vocês treinarem estes passos antes de mexer no trabalho oficial?
