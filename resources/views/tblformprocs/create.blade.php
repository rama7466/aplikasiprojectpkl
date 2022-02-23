<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>IHATEC</title>
    </head>
    <body>
        <div class="container my-5">
            <h1 class="fs-4 fw-bold mb-3 text-center">SEND EMAIL TO APPROVAL</h1>
            <div class="row">
                <form class="row g-3" action="/" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <strong>NO UPP</strong>
                          <select class="form-control" name="no_upp">
                            <option>{{$no_upp->no_upp}}</option>
                          </select>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong> attachment file:</strong>
                            <input type="file" class="form-control" name="photo" placeholder="Content" id="photo">
                        </div>
                    </div>
                    <div class="col-12">
                       <button type="submit" class="btn btn-primary">SEND EMAIL</button>

                    </div>
                    <a href={{ route('tblapproval.index') }}><button type="button" class="btn btn-success btn-rounded btn-fw">TO UPP APPROVAL</button></a>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
