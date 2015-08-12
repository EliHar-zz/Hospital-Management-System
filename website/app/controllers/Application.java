package controllers;

import play.mvc.*;
import play.data.*;
import static play.data.Form.*;
import views.html.*;
import models.*;
import play.data.validation.*;

public class Application extends Controller {

    /**
     * Handle default path requests
     */
    public Result index() {
        return ok(
                index.render()
        );
    }

    public Result admin() {
        return ok(
                admin.render()
        );
    }

    public Result login() {
        return ok(
                login.render(form(User.class))
        );
    }

    public Result authenticate() {
        Form<User> loginForm = form(User.class).bindFromRequest();

        String username = loginForm.get().username;
        String password = loginForm.get().password;

        if (User.authenticate(username, password) == null) {
            return badRequest(login.render(loginForm));
        } else {
            session().clear();
            session("username", loginForm.get().username);
            return ok();
        }
    }
}


