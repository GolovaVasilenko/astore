
<div class="breadcrumb-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="<?=PATH;?>">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="my-account-area pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <form action="/user/register" method="post">
                    <div class="subtitle">
                        <h3>Регистрация</h3>
                        <p>
                            <label for="reg-name" class="important">Имя</label>
                            <input type="text" name="name" value="<?=$old_data['name'] ? : '';?>" id="reg-name" required>
                        </p>
                        <p>
                            <label for="reg-email" class="important">Email</label>
                            <input type="email" name="email" value="<?=$old_data['email'] ? : '';?>" id="reg-email" required>
                        </p>
                        <p>
                            <label for="reg-pass" class="important">Password</label>
                            <input type="password" name="password" id="reg-pass" required>
                        </p>
                        <button type="submit">Зарегистрироваться</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>