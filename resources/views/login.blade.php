<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
  <form action="/login" method="post">
      @csrf
      <div class="posistion-relative">
        <div class="position-absolute top-50 start-50 translate-middle">
          <div class="container-fluid">
            <div class="card shadow" style="width: 18rem; border-radius: 10px;">
              <div class="card-body text-center">
                <h5 class="card-title text-center display-6">Login</h5>
                  <div class="input-group mb-3 mt-5">
                    <input type="text" class="form-control text-center shadow" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Nama" name="name" required>
                  </div>
                  <div class="input-group mb-3">
                    <input type="password" placeholder="Password" name="password" class="form-control text-center shadow" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                  </div>
                @if($errors->any())
                <i style="color: red;">{{$errors->first()}}</i>
                @endif

                  <div class="row mb-2" style="padding: 15px;">
                    <div class="col">
                      <button type="submit" class="btn btn-success shadow" style="border-radius: 7px; padding-left: 15px; padding-right: 15px;"><h5>Masuk</h4></button>
                    </div>
                  </div>           
                <a href="/" class=""><i>belum punya akun?klik disini</i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>