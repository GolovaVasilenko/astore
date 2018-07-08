<div class="breadcrumb-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="<?=PATH;?>">Home</a></li>
                        <li class="active">Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="login-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="login-title">
                    <h2>Вход в личный кабинет покупателя</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mb-30">
                <div class="login-left subtitle">
                    <h3>Зарегистрированный пользователь</h3>
                    <p>Если у вас есть учетная запись, войдите используя ваши регистрационные данные. <span>Поля email и password рбязательны к заполнению</span></p>
                    <div class="email">
                        <label for="email" class="label"><span>email</span></label>
                        <input id="email" name="email" type="email" required>
                    </div>
                    <div class="passwod">
                        <label for="password" class="password"><span>password</span></label>
                        <input id="password" name="password" type="password" required>
                    </div>
                    <div class="sign-in">
                        <a href="/user/register" class="sign-in">sign in</a>
                        <p class="forget">forget your password?</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mb-30">
                <div class="login-right subtitle sign-in">
                    <h3>new customers</h3>
                    <p>Creating an account has many benefits: check out faster, keep more than one address, track orders and more.</p>
                    <a href="/user/register" class="creat">creat an account</a>
                </div>
            </div>
        </div>
    </div>
</div>