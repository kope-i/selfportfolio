
## 手帳のようなポートフォリオサイト

自分が作った作品や人に見せられないスケッチ、鑑賞した映画や本などを日常的に記録します。これらの記録をカテゴリーやジャンルに分けてシンプルに管理したいと思い制作しました。

## Requirement
- PHP(>=7.3.11)
- MySQL

## Setup
- git clone https://github.com/kope-i/selfportfolio
- composer install
- php artisan migrate --seed
- php artisan serve


## Usage
- Access to http://localhost:8000/register
- Register as a demo user
    - Name: John
    - E-mail Address: John@example.com
    - Password: 'password'
    - Confirm Password: 'password

## DEMO
- Add Post
  ![selfportfoliodemo1](https://user-images.githubusercontent.com/68506859/96557751-a76a9680-12f5-11eb-9cfc-f7c54f9fd6ed.gif)

- Check Post
  ![selfportfoliodemo2](https://user-images.githubusercontent.com/68506859/96558742-15fc2400-12f7-11eb-8811-5e5189f96218.gif)


## Features
  ![Features](https://user-images.githubusercontent.com/68506859/96332297-0a61f080-109e-11eb-96b9-c128d893a8f1.png)
  
## Note
- You'd save image file in base64 format.



