# Tavaan Engine — View

> **قالب‌ساز** — موتور View در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.view` |
| نام | `View` |
| عنوان فارسی | قالب‌ساز |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\View` |
| نوع | `engine` |
| Facade | `View` (accessor: `view`) |

## خطاها (Exceptions)

- `Tavaan\Engine\View\Exceptions\ViewException`

## Facadeها

- `Tavaan\Engine\View\Facades\View`

## کلاس‌های اصلی

- `src/ComponentAttributeBag.php`
- `src/Console/ViewCacheCommand.php`
- `src/Console/ViewClearCommand.php`
- `src/DirectiveRegistry.php`
- `src/Escaper.php`
- `src/SafeString.php`
- `src/TemplateCompiler.php`
- `src/View.php`
- `src/ViewFactory.php`
- `src/ViewFinder.php`
- `src/ViewServiceProvider.php`

## Service Providerها

- `Tavaan\Engine\View\ViewServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `event`
- `i18n`
- `config`

## پیکربندی

- فایل پیکربندی: `config/view.php`
- کلید: `view`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-View.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-View`** (این مخزن) | موتور View |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
