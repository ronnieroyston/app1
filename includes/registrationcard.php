<div class="mdl-card mdl-card-wide mdl-shadow--4dp">
    <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">Register</h2>
    </div>  
    <div class="mdl-card__supporting-text mdl-grid">
        <form method="post" action="includes/reg">
            <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">    
                <input class="mdl-textfield__input" type="text" minlength="3" name="username" id="username" value="">
                <span class="mdl-textfield__error">Minimum Length 3 Characters</span>
                <label class="mdl-textfield__label" for="sample1">Username...</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
                <input class="mdl-textfield__input" type="password" minlength="5" name="password" id="password" value="">
                <span class="mdl-textfield__error">Minumum Length 5 Characters</span>
                <label class="mdl-textfield__label" for="sample1">Password...</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
                <input class="mdl-textfield__input" type="password" minlength="5" name="confirmPassword" id="confirmPassword" value="">
                <span class="mdl-textfield__error">Minumum Length 5 Characters</span>
                <label class="mdl-textfield__label" for="sample1">Confirm Password...</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
                <input class="mdl-textfield__input" type="text" name="firstname" id="firstname" maxlength="20" value="">
                <span class="mdl-textfield__error"></span>
                <label class="mdl-textfield__label" for="sample1">First Name...</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
                <input class="mdl-textfield__input" type="text" name="lastname" id="lastname" maxlength="40" value="">
                <span class="mdl-textfield__error"></span>
                <label class="mdl-textfield__label" for="sample1">Last Name...</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--12-col">
                <input class="mdl-textfield__input" type="text" name="street" id="street" maxlength="40" value="">
                <span class="mdl-textfield__error"></span>
                <label class="mdl-textfield__label" for="sample1">Street...</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--4-col">
                <input class="mdl-textfield__input" type="text" name="city" id="city" maxlength="40" value="">
                <span class="mdl-textfield__error"></span>
                <label class="mdl-textfield__label" for="sample1">City...</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--4-col">
                <input class="mdl-textfield__input" type="text" name="state" id="state" maxlength="2" value="">
                <span class="mdl-textfield__error"></span>
                <label class="mdl-textfield__label" for="sample1">State...</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--4-col">
                <input class="mdl-textfield__input" type="text" name="zip" id="zip" maxlength="5" value="">
                <span class="mdl-textfield__error"></span>
                <label class="mdl-textfield__label" for="sample1">Zip...</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--4-col">
                <input class="mdl-textfield__input" type="text" name="birthday" id="birthday" pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d">
                <span class="mdl-textfield__error">Format xx/xx/xxxx</span>
                <label class="mdl-textfield__label" for="sample1">Birthday...</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--2-col">

            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--4-col">
                <input class="mdl-textfield__input" type="text" maxlength="13" name="phone" id="phone">
                <span class="mdl-textfield__error"></span>
            </div>
            <br>
            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
                Register
            </button>
        </form>
    </div>
</div>
