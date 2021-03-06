<div class="login__form col-9 col-md-5 col-sm-7 col-lg-3 my-4 mx-auto bg-white py-3 px-4 shadow__box">
    <h6 class="underline font-italic">Login</h6>
    <p class="mt-3 font-weight-light">Login for LEMON</p>
    <form method="POST">
        <div class="form-group">
            <input name="login" type="text" class="form-control form__input btn-outline-light" id="exampleInputEmail2"
                aria-describedby="emailHelp" placeholder="email or login">
        </div>
        <div class="form-group">
            <input name="password" type="password" class="form-control form__input btn-outline-light"
                id="exampleInputPassword" placeholder="password">
        </div>

        <div class="button__contein mt-2 d-flex justify-content-center">
            <button type="submit" class="btn btn-sm btn-outline-dark text-uppercase px-4 pt-2 pb-1 my-1"
                style="border-radius: 0; border-color: lightgray; font-size: .9rem;">Login</button>
        </div>
        <div class="social__reg d-flex justify-content-center my-3">
            <a href="#"><i class="reg__fb fa fa-facebook mr-3" aria-hidden="true"></i></a>
            <a href="#"><i class="reg__gp fa fa-google-plus" aria-hidden="true"></i></a>
        </div>
        <div class="dont__have-acc d-flex justify-content-center mt-2">
            <a href="/main/reg" class="m-0" style="font-size: 1rem; color: gray;">Don`t have an accont? Sing In</a>
        </div>
    </form>
</div>