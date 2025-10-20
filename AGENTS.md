# Repository Guidelines

## Project Structure & Module Organization
Core Laravel code lives in `app/`, with controllers, jobs, and models grouped by responsibility. Register HTTP endpoints in `routes/web.php` and `routes/api.php`; keep controllers thin and push complex logic into actions or jobs. Blade templates stay under `resources/views`, while `resources/js` and `resources/css` feed the Vite build that outputs to `public/build`. Database migrations, factories, and seeders sit in `database/`, and runtime artifacts under `storage/` stay untracked.

## Build, Test, and Development Commands
After cloning, run `composer install` and `npm install` to hydrate dependencies. `composer setup` prepares a fresh workstation by copying `.env`, generating the app key, running migrations, and producing an initial Vite build. Use `php artisan serve` for the API and `npm run dev` for hot-reload assets during feature work, or launch the full stack with `composer dev` to run the server, queue listener, log tail, and Vite together. Apply schema changes through `php artisan migrate --force` and compile production assets via `npm run build` before deploying.

## Coding Style & Naming Conventions
Adhere to PSR-12 with four-space indentation and strict typing when practical. Controllers, models, jobs, and events use StudlyCase, configuration keys and helper functions stay snake_case, and Blade or Vite modules follow kebab-case filenames. Run `./vendor/bin/pint` prior to opening a pull request, and lean on `php artisan make:*` generators to keep namespaces and boilerplate consistent.

## Testing Guidelines
Execute `php artisan test` or `composer test` for the PHPUnit suite; add `--parallel` on multi-core machines. Feature tests capture HTTP behaviour using the `RefreshDatabase` trait, while Unit tests isolate pure business logic. Name tests after behaviour (`it_returns_validation_errors`) and stage fixtures under `tests/Fixtures` when scenarios need reusable data.

## Commit & Pull Request Guidelines
Write imperative, present-tense commits such as `Add enrollment flow`, group related changes, and leave `.env`, `storage/`, and compiled `public/build` assets out of version control. Pull requests should explain the user-facing impact, reference tracking issues, enumerate new artisan commands or environment keys, and include screenshots or curl snippets for API surfaces. Update `docs.md` or service provider registrations whenever behaviour changes affect downstream consumers.

## Security & Configuration Tips
Copy `.env.example` to `.env`, store secrets outside the repository, and rotate keys before sharing environments. Register third-party integrations within dedicated service providers under `app/Providers` and document required credentials inside the PR description. Clear caches with `php artisan optimize:clear` when configuration or environment values change to avoid serving stale state.
