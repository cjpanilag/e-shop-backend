<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Shipment status email</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
   <style>
      body {
         font-family: 'Poppins';
      }

      .small-text {
         font-size: 13px;
      }
   </style>
</head>
<body>
   <div class="container-fluid text-center">
      <img class="img-fluid" style="width: 10%" src="{{url('/images/tracking.png')}}" alt="">
      <h6>Order on shipping</h6>
      <div class="container text-start w-25 pt-5">
         <p class="small-text">Hi! {{$data['name']}},</p>
         <p class="small-text">Your item is on shipping. Please prepare your payment uppon delivery.</p>
         <br> <br>
         <div class="small-text"> E-Shop </div>
      </div>
   </div>
   
   

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>