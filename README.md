# httpsms
 httpsms for laravel tested in laravel v10




this how you can [integrate] (`https://httpsms.com`)to your laravel app tested in laravel 10
receive and send sms like a pro
copy php files to thier folders based on folder structure  provided

.
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   ├── Middleware/
│   │   └── Requests/
│   └── Providers/
├── bootstrap/
├── config/
├── database/
│   ├── factories/
│   ├── migrations/
│   └── seeds/
├── public/
├── resources/
│   ├── assets/
│   │   ├── js/
│   │   └── sass/
│   ├── lang/
│   └── views/
├── routes/
├── storage/
│   ├── app/
│   ├── framework/
│   └── logs/
├── tests/
├── vendor/
├── .env
├── artisan
├── composer.json
├── composer.lock
├── package.json
└── README.md


    composer install

   then run 

    php artisan optimize

   run  

    php artisan migrate
    php artisan serve

you can replace code in WebhookController with the following
```php
  <?php

 namespace App\Http\Controllers;

  use App\Models\SmsData;
  use Illuminate\Http\Request;
  use App\Models\WebhookData;
  use Carbon\Carbon;

class WebhookController extends Controller
{
   public function store(Request $request)
{
    // Validate the incoming payload
    $validatedData = $request->validate([
        'data.content' => 'required',
        'data.owner' => 'required',
        'data.sim' => 'required',
        'data.timestamp' => 'required',
        'data.contact' => 'required',
    ]);

    // Extract timestamp from validated data
    $timestamp = $validatedData['data']['timestamp'];

    // Create a new WebhookData instance using the validated data
    WebhookData::create([
        'content' => $validatedData['data']['content'],
        'from' => $validatedData['data']['owner'],
        'sim' => $validatedData['data']['sim'],
        'timestamp' => $timestamp,
        'to' => $validatedData['data']['contact'],
    ]);

    return response()->json(['message' => 'Data stored successfully']);
}





 read instructions here
 
     https://github.com/molefigog/music-store
