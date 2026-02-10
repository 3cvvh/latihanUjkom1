<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- composer require torgodly/html2media
- composer require pxlrbt/filament-excel 
- composer require bezhansalleh/filament-shield.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      /* background: #f9f9f9; */
      color: #333;
    }
    .invoice-container {
      width: 790px;
      margin: 30px auto;
      padding: 30px;
      background: #fff;
      border: 1px solid #ddd;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    h1 {
      text-align: center;
      font-size: 24px;
      margin-bottom: 20px;
      text-transform: uppercase;
      letter-spacing: 2px;
    }
    .invoice-details {
      margin-bottom: 20px;
    }
    .invoice-details p {
      margin: 5px 0;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 15px;
    }
    table th, table td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: left;
    }
    table th {
      background: #f0f0f0;
    }
    .total {
      text-align: right;
      font-weight: bold;
    }
    .status {
      margin-top: 20px;
      font-size: 16px;
      font-weight: bold;
      text-align: right;
    }
    .status.paid {
      color: green;
    }
    .status.notPaid {
      color: red;
    }
  </style>
</head>
<body>
  <div class="invoice-container">
    <h1>Invoice</h1>
    <div class="invoice-details">
      <p><strong>ID:</strong> {{ $record->id }}</p>
      <p><strong>Name:</strong> {{ $record->name }}</p>
      <p><strong>Alamat:</strong> {{ $record->alamat }}</p>
      <p><strong>Transaksi ID:</strong> {{ $record->trxId }}</p>
      <p><strong>Shoe:</strong> {{ $record->shoe->name }}</p>
    </div>

    <table>
      <tr>
        <th>Jumlah</th>
        <th>Size</th>
        <th>Subtotal</th>
        <th>Grand Total</th>
      </tr>
      <tr>
        <td>{{ $record->jumlah }}</td>
        <td>{{ $record->size }}</td>
        <td>{{ $record->subTotal_amount }}</td>
        <td>{{ $record->grandTotal_amount }}</td>
      </tr>
    </table>

    <div class="status {{ $record->isPaid ? 'paid' : 'notPaid' }}">
      {{ $record->isPaid ? 'Paid' : 'Not Paid' }}
    </div>
  </div>
</body>
</html>


## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
