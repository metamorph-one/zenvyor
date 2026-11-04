# Deploy ZENVYOR — cPanel Git (sem SSH)

## Setup inicial (uma vez)

1. **Repo remoto:** cria um repositório PRIVADO (GitHub/GitLab) e faz push deste projeto.
2. **cPanel → Git Version Control → Create:** clona para `~/repositories/zenvyor` e ativa "Pull or Push"/deploy automático. O `.cpanel.yml` copia `public/` → `public_html/` em cada deploy.
3. **Apaga o WordPress antigo** de `public_html/` (backup offline primeiro — foi hackeado).
4. **Cria `~/repositories/zenvyor/.env`** via File Manager (cola o conteúdo de `.env.production` — NÃO vai no git por segurança).
5. **Permissões:** `storage/` e `bootstrap/cache/` → 755 recursivo (File Manager → Permissões).
6. **MultiPHP Manager:** domínio → PHP 8.3+.

## Pré-requisitos já incluídos no repo
- `vendor/` commitado (sem composer no servidor)
- `database/database.sqlite` commitado (tabela `contact_submissions` já existe)
- `deploy/index.php` → index.php de produção com caminhos para `~/repositories/zenvyor`
- `.cpanel.yml` → deploy automático de `public/` para `public_html/`
- `.env.production` ignorado no git (contém password SMTP — criar .env manualmente)

## Após o primeiro deploy
- https://zenvyor.com → home
- /contacto → formulário envia para geral@zenvyor.com + auto-resposta
- /wp-content/uploads/media/* → 301 para /media/*

## Deploys futuros
`git push` → cPanel faz pull + copia `public/` para `public_html/` automaticamente.

## Erro 500?
`storage/logs/laravel.log` via File Manager. Causa comum: permissões (passo 5) ou .env em falta.
