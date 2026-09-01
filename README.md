# Preorder System — Base Laravel Layout + Auth

This is Step 1 for your vegetable/fresh-produce preorder system: the shared
Blade layout (header + sidebar) converted from your "Dreams POS" template,
plus a working login/register/logout — no Breeze, plain Laravel `Auth`.

## What's in here

```
app/Http/Controllers/Auth/AuthenticatedSessionController.php   -> login/logout
app/Http/Controllers/Auth/RegisteredUserController.php         -> register
app/Http/Controllers/DashboardController.php                   -> dashboard w/ placeholder stats
resources/views/layouts/app.blade.php                          -> header + sidebar + @yield('content')
resources/views/layouts/guest.blade.php                        -> auth pages chrome (converted from signin.html)
resources/views/auth/login.blade.php
resources/views/auth/register.blade.php
resources/views/dashboard.blade.php                            -> converted from index.html's content area
routes/auth.php
routes/web.php                                                 -> merge into your existing web.php, don't overwrite it
public/assets/                                                 -> your template's css/js/img/plugins, unchanged
```

## How to merge this into your existing Laravel project

1. **Copy the assets.**
   Drop the whole `public/assets` folder from this kit into your project's
   `public/` folder (so you end up with `your-project/public/assets/...`).
   Nothing inside it was changed — it's the same Bootstrap/jQuery/plugins
   your template shipped with, served as plain static files (no Vite needed
   for this stack — fighting Vite over 15 jQuery plugins isn't worth it).

2. **Copy the app files.**
   Copy `app/Http/Controllers/Auth/*.php` and `app/Http/Controllers/DashboardController.php`
   into the matching folders in your project.

3. **Copy the views.**
   Copy `resources/views/layouts/*.blade.php`, `resources/views/auth/*.blade.php`,
   and `resources/views/dashboard.blade.php` into your project's `resources/views/`.

4. **Wire up routes.**
   Copy the contents of `routes/auth.php` into your project's `routes/auth.php`
   (create it if it doesn't exist). Then **merge** (don't overwrite) the
   `/dashboard` route and the `require __DIR__.'/auth.php';` line from this
   kit's `routes/web.php` into your existing `routes/web.php`.

5. **Make sure `App\Models\User` and the `users` table exist** — they do by
   default in any fresh Laravel install, so if you haven't touched them
   nothing else is needed here.

6. **Run migrations and boot it up:**
   ```bash
   php artisan migrate
   php artisan serve
   ```
   Visit `/register` to create your first staff account, or `/login` if you
   already have one.

## What's intentionally NOT done yet

The sidebar has placeholder `#` links for **Products, Categories, Preorders,
Customers, Suppliers** — those modules don't exist yet. Each comment in
`layouts/app.blade.php` and `routes/web.php` marks exactly where to plug them
in once we build them (migrations, models, controllers, resource routes).

## Suggested next step

Build the **Products** module first (migration + model + controller +
`productlist.html`/`addproduct.html` converted to Blade), since Preorders
will depend on it. Say the word and we'll do that next.
