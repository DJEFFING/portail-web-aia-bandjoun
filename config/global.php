<?php
return [
  "S3_url"=> config('app.env') === 'local' ? env('APP_URL').'storage/' : env('AWS_URL')
];
