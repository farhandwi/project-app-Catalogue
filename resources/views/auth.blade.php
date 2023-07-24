@include('layouts.header')
  <body>
    <div class="d-flex">
      <div class="framelogo d-flex justify-content-center align-items-center">
        <img src="../img/logo.png" alt="" class="logo" />
      </div>
      <div class="frameForm d-flex justify-content-center align-items-center">
          <div class="formTitle text-center fw-bolder">
            <p class="text-center">LOGIN</p>
            <div class="formContent">
              <form action="" method="post">
                @csrf
                <input type="text" class="rounded-3 formStyle" placeholder="Username" name="username" autofocus required />
                <input type="password" placeholder="Password" name="password" class="rounded-3 formStyle" autofocus required/>
                <button type="submit" class="rounded-pill buttonStyle">Submit</button>
              </form>
            </div>
          </div>
      </div>
    </div>
  @include('layouts.footer')
