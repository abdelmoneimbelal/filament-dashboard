<div dir="rtl">

# 📊 نظام إدارة المدونة باستخدام Filament

<p align="center">
  <img src="https://laravel.sillo.org/storage/photos/2021/03/Capture-35.png" width="120" alt="Filament Logo">
  <br>
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="200" alt="Laravel Logo">
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12.0-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel 12.0">
  <img src="https://img.shields.io/badge/Filament-3.3-FF6B35?style=for-the-badge&logo=php&logoColor=white" alt="Filament 3.3">
  <img src="https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.2+">
  <img src="https://img.shields.io/badge/License-MIT-green?style=for-the-badge" alt="License">
</p>

## 🚀 نظرة عامة

نظام إدارة مدونة حديث ومتطور مبني باستخدام **Laravel 12** و **Filament 3.3**. يوفر لوحة تحكم سهلة الاستخدام لإدارة المحتوى والمستخدمين مع واجهة مستخدم عصرية وميزات متقدمة.

## ✨ الميزات الرئيسية

### 📝 إدارة المقالات
- ✅ إنشاء وتحرير وحذف المقالات
- 🖼️ رفع الصور مع معاينة فورية
- 🏷️ نظام العلامات (Tags) المرن
- 📄 محرر نصوص غني (Rich Text Editor)
- 🔄 حالة النشر (منشور/مسودة)
- 🎯 ربط المقالات بالتصنيفات

### 📂 إدارة التصنيفات
- 🏷️ إنشاء وإدارة تصنيفات المقالات
- 🎨 نظام ألوان مخصص لكل تصنيف
- 📝 وصف تفصيلي لكل تصنيف
- ⚡ تفعيل/إلغاء تفعيل التصنيفات
- 🔗 عرض عدد المقالات لكل تصنيف

### 👥 إدارة المستخدمين
- 🔐 نظام مصادقة محسن مع تأكيد كلمة المرور
- 📧 التحقق من تفرد البريد الإلكتروني
- 🔑 تشفير كلمات المرور تلقائياً
- ⚙️ إدارة متقدمة للصلاحيات
- 👤 ملفات شخصية كاملة للمستخدمين

### 🎨 واجهة المستخدم
- 📱 تصميم متجاوب وعصري
- 🌙 دعم الوضع الليلي والنهاري
- 🔍 بحث متقدم وفلترة
- 📊 إحصائيات وتقارير تفاعلية
- ⚡ تجربة مستخدم سلسة

## 🛠️ التقنيات المستخدمة

| التقنية | الإصدار | الوصف |
|---------|---------|--------|
| **Laravel** | 12.0+ | إطار العمل الأساسي |
| **Filament** | 3.3 | لوحة الإدارة الحديثة |
| **PHP** | 8.2+ | لغة البرمجة |
| **Livewire** | 3.0+ | تفاعلية الواجهة |
| **Alpine.js** | - | تفاعلية العميل |
| **Tailwind CSS** | - | تصميم الواجهة |

## 📋 المتطلبات

- PHP 8.2 أو أحدث
- Composer
- Node.js & NPM
- MySQL/PostgreSQL/SQLite
- خادم ويب (Apache/Nginx)

## ⚡ التثبيت السريع

### 1. استنساخ المشروع
```bash
git clone https://github.com/abdelmoneimbelal/filament-dashboard.git
cd filament-blog
```

### 2. تثبيت التبعيات
```bash
# تثبيت حزم PHP
composer install

# تثبيت حزم JavaScript
npm install
```

### 3. إعداد البيئة
```bash
# نسخ ملف البيئة
cp .env.example .env

# توليد مفتاح التطبيق
php artisan key:generate

# ربط التخزين العام
php artisan storage:link
```

### 4. إعداد قاعدة البيانات
```bash
# تحديث ملف .env بإعدادات قاعدة البيانات الخاصة بك
# ثم تشغيل الهجرة
php artisan migrate

# (اختياري) تشغيل البذور
php artisan db:seed
```

### 5. إنشاء مستخدم إداري
```bash
php artisan make:filament-user
```

### 6. تشغيل التطبيق
```bash
# تطوير
npm run dev
php artisan serve

# أو استخدم الأمر المجمع
composer run dev
```

## 🎯 كيفية الاستخدام

### 🔐 تسجيل الدخول
1. افتح `/admin` في المتصفح
2. سجل الدخول بحساب المدير
3. ابدأ في إدارة المحتوى!

### 📝 إدارة المقالات
1. انتقل إلى قسم **Posts**
2. اضغط **New Post** لإنشاء مقال جديد
3. املأ التفاصيل:
   - **العنوان**: عنوان المقال
   - **المحتوى**: استخدم المحرر الغني
   - **التصنيف**: اختر من القائمة
   - **العلامات**: أضف كلمات مفتاحية
   - **الصورة**: ارفع صورة مميزة
   - **حالة النشر**: منشور أم مسودة

### 📂 إدارة التصنيفات
1. انتقل إلى قسم **Categories**
2. أنشئ تصنيفات جديدة مع:
   - اسم التصنيف
   - لون مميز
   - وصف تفصيلي
   - حالة التفعيل

### 👥 إدارة المستخدمين
1. قسم **Users** لإدارة الحسابات
2. إضافة مستخدمين جدد
3. تحديث المعلومات الشخصية
4. إدارة كلمات المرور بأمان

## 🗂️ هيكل المشروع

```
filament/
├── app/
│   ├── Filament/
│   │   └── Resources/          # موارد Filament
│   │       ├── CategoryResource.php
│   │       ├── PostResource.php
│   │       └── UserResource.php
│   └── Models/                 # نماذج البيانات
│       ├── Category.php
│       ├── Post.php
│       └── User.php
├── database/
│   └── migrations/             # هجرات قاعدة البيانات
├── public/
│   └── storage/               # ملفات المحتوى المرفوع
└── resources/
    └── views/                 # قوالب العرض
```

## 🔧 التخصيص

### 🎨 تخصيص الألوان
```php
// في ملف AdminPanelProvider.php
->colors([
    'primary' => Color::Blue,
    'success' => Color::Green,
    // المزيد من الألوان...
])
```

### 📱 تخصيص الواجهة
```php
// إضافة CSS مخصص
->viteTheme('resources/css/filament/admin/theme.css')
```

### 🔌 إضافة ميزات جديدة
```bash
# إنشاء مورد جديد
php artisan make:filament-resource ModelName

# إنشاء صفحة مخصصة
php artisan make:filament-page PageName
```

## 🧪 الاختبارات

```bash
# تشغيل جميع الاختبارات
php artisan test

# تشغيل اختبارات محددة
php artisan test --filter CategoryTest
```

## 🚀 النشر للإنتاج

### 1. تحسين الأداء
```bash
# تحسين Filament
php artisan filament:optimize

# تحسين Laravel
php artisan optimize
```

### 2. بناء الأصول
```bash
npm run build
```

### 3. إعدادات الأمان
- تحديث متغيرات البيئة
- تفعيل HTTPS
- إعداد backup منتظم
- مراقبة الأداء

## 🤝 المساهمة

نرحب بمساهماتكم! يرجى:

1. Fork المشروع
2. إنشاء branch للميزة الجديدة
3. Commit التغييرات
4. Push للـ branch
5. فتح Pull Request

## 📝 الرخصة

هذا المشروع مرخص تحت رخصة [MIT](LICENSE).

## 📞 الدعم والمساعدة

- 📧 **البريد الإلكتروني**: abdobelal069@gmail.com
- 📱 **Discord**: [انضم لمجتمعنا](https://discord.gg/filament)
- 📖 **التوثيق**: [Filament Docs](https://filamentphp.com/docs)
- 🐛 **تقرير الأخطاء**: [GitHub Issues](https://github.com/abdelmoneimbelal/filament-dashboard/issues)

## 🌟 شكر خاص

- فريق [Laravel](https://laravel.com) على الإطار الرائع
- فريق [Filament](https://filamentphp.com) على لوحة الإدارة المذهلة
- المجتمع العربي للمطورين

---

<p align="center">
  صُنع بـ ❤️ باستخدام Laravel & Filament
</p>

<p align="center">
  Abdelmoneim Belal
</p>

<p align="center">
  <a href="#top">⬆️ العودة للأعلى</a>
</p>

</div>