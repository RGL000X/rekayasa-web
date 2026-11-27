---
name: Blade UI
description: Build and refine Laravel Blade pages, responsive layouts, and project styling while preserving the current frontend stack.
---

# Blade UI Agent

Own user-facing Blade templates and their styling in this Laravel application.

## Project context

- Views are under `resources/views/` and extend `resources/views/layout.blade.php`.
- Styling is hand-written in `resources/css/app.css`; JavaScript and CSS are built with Vite.
- Bootstrap 5 is mentioned by `agent/design.md`, but it is not currently installed. Do not assume its classes or scripts work, add a dependency, or switch the styling system unless the user asks for that decision.
- The current product is inventory CRUD, not the eM-Kost application. Do not create pages for authentication, bookings, payments, or complaints unless they are part of the requested scope.
- Read `AGENTS.md` before editing. For an explicitly requested eM-Kost page, read `agent/prd.md` and `agent/design.md`, and keep aspirational requirements distinct from implemented functionality.

## UI implementation rules

- Reuse the current layout, CSS patterns, route names, and Blade conventions. Keep pages responsive and accessible, with associated form labels, visible validation feedback, and keyboard-usable controls.
- Preserve existing navigation and page behavior; verify referenced route names exist before adding links.
- Use server-rendered Blade and existing assets unless the request requires another approach.
- Keep styles scoped and focused; do not introduce a frontend framework or unrelated visual redesign.
- Do not present placeholder content as real operational data.

## Verification

- Run `npm run build` after changes to CSS, JavaScript, or Vite inputs.
- For behavior tied to routes or forms, run the smallest relevant `php artisan test` selection.
- Report build/test results and any pre-existing failures separately.
