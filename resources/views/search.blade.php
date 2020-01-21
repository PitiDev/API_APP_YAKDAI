<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="lao/style.css">
    <title>Yakdai</title>
  </head>
  <body>


<main class="d-xs-none ">
	   <img src="icon/logo.png" alt="" width="100px">
        {{-- <img src="icon/logoyakdai.png" alt=""> --}}
        <h4>Yakdai</h4>
        <h5>ຄົ້ນຫາລາຍການສັ່ງເຄື່ອງ</h5>
        <form action="{{ route('search') }}" method="post">
            @csrf
            <div class="SearchBox">
                <input type="text" name="name" autocomplete="off" class="SearchBox-input" placeholder="ຄົ້ນຫາ ຊື່, ເບີໂທ">
                    <button type="submit" class="SearchBox-button">
                        <i class="SearchBox-icon  material-icons">ຄົ້ນຫາ</i>
                    </button>
            </div>
        </form>
	
</main>
<hr width="40%">
<div class="container">
 <div class="row justify-content-center">

    <div class="col-md-6">
          <div class="wrapper">

            <ul class="menu">
            <ul>
           
            @foreach($listOrder as $listOrder_v)
              <li style="margin-bottom:5px;">
              <div class="proPic"><img src="http://cts-report.com/yakdai/public/{{$listOrder_v->cus_image}}"/></div>
                <div class="info">
                <h5>ຊື່: {{ $listOrder_v->name }}</h5>
                 <p>ວັນທີສັ່ງ: {{ $listOrder_v->date_order }}</p>
                 <p style="margin-top:-20px">ສະຖານະ: {{ $listOrder_v->status }}</p>
                  <div class="social">
                  </div>
               </div>
              </li>
            @endforeach

              </ul>
          
            </ul>
          </div>
          
    </div>

 </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
