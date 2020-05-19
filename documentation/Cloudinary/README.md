# Cloudinary

## Introduction

## Development framework integration

###  Account credentials

|Cloud name|API key|API secret|Environment variable|
|--|--|--|--|
|adopt-a-pet|543241449445516|*****|cloudinary://543241449445516:eAZl2cDlkNsEvQmnmjLrcUIXqwY@adopt-a-pet/|

### Sample upload code

```php
\Cloudinary\Uploader::upload("sample.jpg", array("crop"=>"limit", "tags"=>"samples", "width"=>3000, "height"=>2000));
```

### Sample image manipulation tag

```php
cl_image_tag("sample", array("crop"=>"fill", "gravity"=>"faces", "width"=>300, "height"=>200, "format"=>"jpg"));
```

![Service architecture](https://res.cloudinary.com/demo/image/upload/service_architecture.jpg)

## Links

[PHP integration](https://cloudinary.com//documentation/php_integration)

[Solution overview](https://cloudinary.com/documentation/solution_overview)

[Image upload](https://cloudinary.com/documentation/upload_images)

[Image transformation](https://cloudinary.com/documentation/image_transformations)

[Admin API](https://cloudinary.com/documentation/admin_api)

