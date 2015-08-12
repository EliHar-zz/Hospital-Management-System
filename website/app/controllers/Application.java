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
                login.render(form(Employees.class))
        );
    }

    public Result authenticate() {
        Form<Employees> loginForm = form(Employees.class).bindFromRequest();

        long employee_id = loginForm.get().employee_id;
        String password = loginForm.get().password;

        if (Employees.authenticate(employee_id, password) == null) {
            return badRequest(login.render(loginForm));
        } else {
            session().clear();
            session("employee_id", loginForm.get().employee_id+"");
            return ok();
        }
    }
}


