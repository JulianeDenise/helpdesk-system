# helpdesk-system
Sistema de gestão e abertura de chamados desenvolvido em PHP, MySQL e HTML/CSS.

<br/>
<br/>

<img width="700" alt="Captura de tela 2026-10-01 112130" src="https://github.com/user-attachments/assets/60c38f47-e8a6-4870-8189-e99070bc56e9" />

<br/>
<br/>

## 🚀 Funcionalidades

-  **Abertura e Consulta de Chamados:** Interface intuitiva para registros de incidentes.
-  **Exclusão Lógica (Soft Delete):** Preservação do histórico de dados no banco através da flag `deleted_at`.
-  **Conexão Segura:** Integração backend utilizando `PHP PDO` com prepared statements contra SQL Injection.
-  **Modelagem Relacional:** Estrutura de banco de dados documentada via script SQL.
<br/>
<br/>

<img width="700" alt="Captura de tela 2026-10-01 112217" src="https://github.com/user-attachments/assets/c2d65539-dff1-4bf0-a84e-84d5992834e3" />

<br/>
<br/>

## 🛠️ Tecnologias Utilizadas

- **Backend:** PHP (PDO)
- **Banco de Dados:** MySQL
- **Frontend:** HTML5, CSS3
- **Design & Prototipagem:** Figma
- **Ambiente de Desenvolvimento:** XAMPP / Apache

---

## 🗄️ Estrutura do Banco de Dados

O script para criação da estrutura do banco de dados encontra-se no ficheiro [`schema.sql`](./schema.sql).

### Como executar o banco localmente:
1. Importe o ficheiro `schema.sql` no **MySQL Workbench** ou no **phpMyAdmin**.
2. Certifique-se de configurar as credenciais de acesso no ficheiro de conexão `config.php` (ou equivalente).

---
