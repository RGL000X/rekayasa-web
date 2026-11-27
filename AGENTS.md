# AGENTS.md

## Project reality
- Current app: Laravel 11 inventory CRUD (`products`, `stocks`, `transactions`), not eM-Kost. No auth, roles, bookings, payments, or complaints are implemented.
- `README.md` is stock Laravel boilerplate; the eM-Kost requirements are `agent/prd.md` and `agent/desain.md` (Indonesian).
- `agent/task-instruction.md` requires reading the PRD/design and updating `.agents/tasklist.md` after each task, but it points to `design.md`/`.agents/`; the actual design file is `agent/desain.md` and `.agents/` does not exist yet.

## Commands
- Tests: `php artisan test`; single file: `php artisan test tests/Feature/ExampleTest.php`; filter: `php artisan test --filter=ExampleTest`. There is no `composer test` or `npm test` script.
- Format: `vendor\bin\pint` (PowerShell) or `vendor/bin/pint`; add `--test` to check without rewriting.
- Frontend: `npm run dev` while editing; `npm run build` for production or a fresh clone. `public/build` is gitignored, so pages fail without a build.
- No CI, JS tests, TypeScript, or static analysis; Pint is the only formatter/linter installed.

## Environment
- Windows + XAMPP; project is `C:\xampp\htdocs\rekayasa-web`. Local `.env` (gitignored) uses MySQL DB `rekayasa-web` (already migrated); `.env.example` defaults to SQLite—do not overwrite `.env` with it.
- `phpunit.xml` has `DB_CONNECTION` commented out, so DB-backed tests would use the local MySQL `rekayasa-web` DB. Configure SQLite `:memory:` before adding `RefreshDatabase` tests.

## Architecture and gotchas
- `routes/web.php` registers resource routes for `products`, `stocks`, `transactions`. Controllers implement only `index/create/store/edit/update/destroy`; the registered `show` routes have no methods and will error.
- No `/` route; `tests/Feature/ExampleTest` expects 200 and fails with 404. It is stale, not a regression.
- Controllers use `$request->all()` + model `$fillable`; there are no FormRequests, validation, auth middleware, or policies. `User` is default Laravel only.
- Schema quirks: FK column is `id_products` (not `product_id`); `stocks.type` enum is `masuk|keluar`; `transactions.status` is boolean. Create forms use free-text inputs that are not validated against these constraints.
- Views extend `resources/views/layout.blade.php`; styling is hand-written CSS in `resources/css/app.css`. There is no Bootstrap/Tailwind dependency, despite `agent/desain.md` specifying Bootstrap 5.
