<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pet Name Generator</title>
  </head>
  <body>
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                    <img src="https://img.freepik.com/free-vector/pet-logo-design-paw-vector-animal-shop-business_53876-136741.jpg?w=740&t=st=1676465645~exp=1676466245~hmac=f3f1d85a451fa28b883aba604bd39c508f9c3b8645625e31550ccc3b5effe1e4" alt="" width="40" height="34" class="d-inline-block align-text-top">
                    Pet Name Generator
                  </a>
                </div>
              </nav>
        </div>
    </div>

    <div class="row mt-5 d-flex flex-row justify-content-center">
            <div class="mb-3 col-4">
                <label for="" class="form-label">Select Pet Type</label>
                <select class="form-select form-select-md" name="" id="petType">
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                    <option value="horse">Horse</option>
                    <option value="fish">Fish</option>
                    <option value="turtle">Turtle</option>
                </select>
        </div>
        <div class="mb-3 col-2">
            <label for="" class="form-label">Number of names</label>
            <select class="form-select form-select-md" name="" id="numberOfNames">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
    </div>
    <div class="mb-3 col-3">
        <label for="" class="form-label">Sex of the pet</label>
        <select class="form-select form-select-md" name="" id="sex">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
</div>
    </div>

    <div class="row">
        <div class="col-12 d-flex flex-row justify-content-center" id="responseDiv">
            <ul class="list-group w-50" id="responseList">

            </ul>
        </div>
    </div>

    <div class="row mt-4 d-flex flex-row justify-content-center">

            <button class="btn btn-primary btn-md btn-block col-sm-4" id="generateBtn"> Generate</button>


    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> --}}
    <script src="{{asset('index.js')}}"></script>
  </body>
</html>
