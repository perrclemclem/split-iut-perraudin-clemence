<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Exercices : 

## Section 1 — Panorama du marché, benchmark et sélection d'outillage

### 1.1. Protocole d'évaluation expérimentale
- **Langage et framework de test utilisés :** [PHP 3.12 + phpUnit]
- **Outil A évalué :** [Copilot, Copilot Fusion Standard, modalité d'accès gratuite]
- **Outil B évalué :** [Claude, Sonnet 5.5, modalité d'accès gratuite]

### 1.2. Tableau comparatif multicritères sur l'exercice étalon (Validation IBAN)

| Critère d'évaluation | Outil A ([ Git Copilot + Copilot Fusion Standard]) | Outil B ([Claude + Sonnet 5.5]) |
| :--- | :--- | :--- |
| **1. Famille d'outil & intégration IDE** | [Assistant intégré à l'IDE] | [Interface web] |
| **2. Injection du contexte projet** | [indexation auto] | [Copier coller] |
| **3. Niveau d'action & contrôle du diff** | [exécution terminal] | [Lecture seule] |
| **4. Résultat au 1er essai (IBAN mod 97)** | [Tests passants, Utilise un string pour l'IBAN] | [Tests passants, Utilise un string pour l'IBAN, et un modulo] |
| **5. Coût, limites de quotas & latence** | [Plafond constaté : ? et vitesse : ?] | [Plafond constaté : ? et vitesse : ?] |
| **6. Confidentialité (Opt-out entraînement)** | [Réglage trouvé dans les paramètres] | [No idea] |
| **7. Confort de contrôle humain & limites** | [Point faible observé: pas de documentation] | [Pont fort : documentation, sépare en plusieurs fonctions, meilleure lisibilité] |

### 1.3. Sélection motivée pour le projet fil rouge et solution de repli
- **Outil principal retenu et arguments techniques :** [Je choisirais Claude s'il y a beasoin d'un code lisible et bien documenté, sans devoir copier-coller trop de fichiers.]
- **Outil de secours prévu en cas d'atteinte du quota :** [Je choisirais Copilot s'il y a besoin de consulter beaucoup de fichiers du projet.]