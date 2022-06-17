<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form New Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="{{ asset('js/myScripts/validate.js') }}"></script>
  </head>
  <body>

    <nav class="navbar bg-light">
        <div class="container ps-5 pe-5">
            <a href="/" class="btn btn-danger mt-2 mb-2 ps-4 pe-4">< Back</a>
        </div>
      </nav>

    <div class="container mt-5 ps-5 pe-5">
        <form class="row g-3 needs-validation" method="POST" action="{{ @$post ? route('post.update', ['post' => $post -> id]) : route('post.store') }}">
            @csrf
            @if (@$post)
             @method('PUT')
            @endif
            <div class="col-md-6">
              <label for="inputMenu" class="form-label">Name of menu</label>
              <input type="text" class="form-control" id="inputMenu" name="menuName" value="{{ @$post -> namaMenu }}" required>
            </div>
            <div class="col-md-6">
                <label for="selectedType" class="form-label">Type of menu</label>
                <select class="form-select" id="validationCustom04" name="typeMenu" required>
                  <option selected disabled value="">Choose...</option>
                  <option {{ @$post -> typeMenu == 'Makanan' ? 'selected' : '' }}>Makanan</option>
                    <option {{ @$post -> typeMenu == 'Minuman' ? 'selected' : '' }}>Minuman</option>
                </select>
                <div class="invalid-feedback">
                  Tolong pilih jenis makanannya!.
                </div>
            </div>
            <div class="col-4">
                <label for="price" class="form-label">Price per stock</label>
                <div class="input-group">
                  <div class="input-group-text">IDR</div>
                  <input type="number" name="price" class="form-control" id="specificSizeInputGroupUsername" value="{{ @$post -> price }}">
                </div>
              </div>
            <div class="col-8">
                <label for="stock" class="form-label">Lot of stock</label>
                <input type="number" class="form-control" id="stock" name="lotStock" value="{{ @$post -> stock }}">
            </div>
            <div class="col-12">
                <label for="RadioForCategory" class="form-label">Category of menu</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="categoryMenu" id="inlineRadio2" value="Promo" {{ @$post -> category == 'Promo' ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadio2">Promo</label>
                    </div>
                    <div class="form-check form-check-inline" id="RadioForCategory">
                        <input class="form-check-input" type="radio" name="categoryMenu" id="inlineRadio1" value="Rekomendasi" {{ @$post -> category == 'Rekomendasi' ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadio1">Rekomendasi</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="categoryMenu" id="inlineRadio2" value="Paket Hemat" {{ @$post -> category== 'Paket Hemat' ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadio2">Paket Hemat</label>
                    </div>
                </div>
            </div>


            <div class="col-12">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description of menu</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc">{{ @$post -> desc }}</textarea>
                  </div>
            </div>

            <div class="col-12">
              <button type="submit" class="btn btn-primary">{{ @$post ? 'Update this Menu' : 'Post New Menu' }}</button>
            </div>
          </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
