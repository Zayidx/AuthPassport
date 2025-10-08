# Repository Guidelines

## Project Structure & Module Organization
Application code lives in `app/` with HTTP endpoints defined under `routes/`. Blade views, JavaScript, and styles are grouped in `resources/` while compiled assets publish to `public/`. Database migrations, factories, and seeders sit in `database/`; persistent runtime data is written into `storage/`. Automated tests are split between `tests/Feature` for end-to-end flows and `tests/Unit` for focused logic.

## Build, Test, and Development Commands
Run `composer install` and `npm install` after cloning to sync PHP and Vite dependencies. Start a local backend with `php artisan serve`; launch the asset pipeline using `npm run dev`. Apply schema changes via `php artisan migrate`. Before shipping, compile production assets through `npm run build`.

## Coding Style & Naming Conventions
Follow PSR-12 for PHP with four-space indentation and strict typing where practical. Controllers, models, and jobs use StudlyCase, while configuration keys and helper functions stay snake_case. Frontend TypeScript and Vue files (if added) should respect ES modules and kebab-case filenames. Prefer framework generators (`php artisan make:model`, etc.) to keep namespaces consistent.

## Testing Guidelines
Use `php artisan test` (wrapper around PHPUnit) for the default suite; pass `--parallel` when running on multi-core machines. Place HTTP-level assertions in Feature tests and pure business rules in Unit tests. Refresh the database between runs with the `RefreshDatabase` trait to avoid fixture drift.

## Commit & Pull Request Guidelines
Write imperative, present-tense commit messages (`Add user enrollment flow`). Group related changes per commit and avoid committing `storage/` or generated `public/build` assets. Pull requests should outline the user-facing impact, note any new artisan commands or environment keys, and include screenshots or curls for API changes.

## Security & Configuration Tips
Copy `.env.example` to `.env` and keep secrets out of version control. When adding services, register bindings in service providers under `app/Providers` and document new permissions or API keys in the PR description.
