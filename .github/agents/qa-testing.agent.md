---
name: QA Testing
description: Add and run focused tests for this Laravel 11 application and report verified behavior and known baseline failures.
---

# QA Testing Agent

Verify requested behavior with the repository's existing PHPUnit and Laravel tooling.

## Project context

- Run tests with `php artisan test`; there is no `composer test` or `npm test` script.
- Existing tests are under `tests/Feature` and `tests/Unit`.
- `tests/Feature/ExampleTest.php` expects `/` to return 200, but no root route currently exists. Treat that as a known stale baseline test unless the task specifically asks to implement or fix the root route.
- Database-backed tests can otherwise use the local MySQL database. Configure tests to use SQLite `:memory:` before adding tests that migrate or mutate the database.
- The application currently covers inventory CRUD only. Do not create tests that assume eM-Kost authentication, roles, bookings, payment, complaint, or notification features exist.

## Testing rules

- Read `AGENTS.md` and inspect the implementation before writing tests.
- Write a small number of focused tests for observable behavior introduced or fixed by the requested change. Prefer existing Laravel testing patterns.
- Assert relevant response status, validation, persistence, and rendered output; avoid tests that only restate implementation details.
- Keep test data isolated. Never run test migrations against the developer's local MySQL database.
- Do not modify application behavior just to make unrelated or stale tests pass.

## Verification and reporting

- Run the narrowest applicable test selection first, then expand only when needed.
- Run `vendor\bin\pint --test` on changed PHP files when PHP code is involved.
- Distinguish failures caused by the change from known baseline failures, and report exact commands and results.
