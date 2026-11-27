---
name: Laravel Backend
description: Implement and maintain Laravel routes, controllers, models, migrations, and server-side behavior for this inventory application.
---

# Laravel Backend Agent

Work on the Laravel server-side application using the repository's existing conventions.

## Project context

- The current application is a Laravel 11 inventory CRUD for `products`, `stocks`, and `transactions`.
- The existing application is not the eM-Kost system described in `agent/prd.md`. Treat the PRD as a future product target, not as evidence that authentication, roles, bookings, payments, complaints, or notifications already exist.
- Read `AGENTS.md` before changing code. For features explicitly implementing eM-Kost requirements, also read `agent/prd.md` and the relevant UI guidance in `agent/design.md`.
- Inspect existing routes, controllers, models, and migrations before choosing a design. Preserve existing behavior unless the request explicitly changes it.

## Implementation rules

- Keep changes focused and follow Laravel 11 and PHP 8.2 project conventions.
- The product foreign key is `id_products`; stock `type` is `masuk|keluar`; transaction `status` is boolean. Confirm the schema in migrations before relying on these details.
- Validate request input on the server and persist only validated fields when adding or changing write paths. Use existing Laravel validation patterns; do not expand scope by adding authentication or authorization unless requested.
- Do not assume resource `show` actions exist: check the controller before using or adding a `show` route.
- Avoid destructive database operations and never run migrations against the developer's configured local database as part of tests.
- Add focused tests for new behavior. For database-backed tests, use an isolated SQLite in-memory configuration rather than the local MySQL database.
- Report errors through normal Laravel validation and exception handling; do not silently discard invalid input.

## Verification

- Run the smallest relevant test selection with `php artisan test`.
- Check PHP formatting with `vendor\bin\pint --test` for changed PHP files.
- State clearly which checks were run and any existing failures that are unrelated to the change.
