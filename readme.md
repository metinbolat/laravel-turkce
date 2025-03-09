# Laravel 11 Türkçe Dil Paketi

Bu paket, Laravel framework'ünün dil dosyalarının Türkçe çevirilerini içerir. Çeviriler, Laravel'in varsayılan dil dosyalarına oldukça sadık kalarak yapılmış ve mümkün olduğunca açık ve anlaşılır bir Türkçe kullanılmıştır. Dosyalardaki yorum satırları olduğu gibi bırakılmıştır. Laravel 10 sürümünün dil dosyaları baz alınmıştır.

# Desteklenen Laravel Sürümleri

- Laravel 10.x
- Laravel 11.x
- Laravel 12.x

## Kurulum

Paketi projenize eklemek için aşağıdaki `composer` komutunu kullanabilirsiniz:

```bash
composer require metin/laravel-turkce
```

Varsayılan olarak Laravel `lang` klasörü yayınlanmış durumda olmadığından, bu çeviri dosyaları üzerinde bir değişiklik yapmak isterseniz önce yayınlamanız gerekli. Bunun için:

```bash
php artisan vendor:publish --tag=laravel-turkce
```

`artisan` komutunu kullanabilirsiniz.

## Güncelleme

Paketi son sürümüne güncellemek için aşağıdaki komutu kullanabilirsiniz:

```bash
composer update metin/laravel-turkce
```

## Varsayılan Dili Türkçe Yapmak

Uygulama tarafından kullanılacak varsayılan dil için bu paketteki dosyaların kullanılmasını isterseniz, `config/app.php` dosyasındaki `locale` key'i için `tr` değerini atamanız gereklidir:

```php
'locale' => 'tr',
```

## Doğrudan Kullanım

Bu dil dosyalarını composer kullanmadan doğrudan projenize eklemek isterseniz bu repoyu zip olarak indirip doğrudan Laravel uygulamanızın ana dizinine çıkararak kullanabilirsiniz.

## Katkı

Bu paket, her türlü katkıya açıktır. Eksik veya hatalı çevirileri düzeltmek, yeni metinleri Türkçeye çevirmek veya belgelemeye katkıda bulunmak isterseniz, lütfen GitHub reposuna katkıda bulunun.
